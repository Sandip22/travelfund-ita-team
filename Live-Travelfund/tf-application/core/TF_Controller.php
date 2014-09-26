<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*This is main controller.All controller should extend it
 * */

class TF_Controller extends CI_Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //profiling enable only in developement enviornment.
        //$this->output->enable_profiler(true);
        $this->form_validation->set_error_delimiters('<small class="error">', '</small>');
    }

    /**
     * Default controller.
     */
    function index()
    {
        //return to home page of website incase nothing to redirect.
    }

    /**
     * This function load user input into related db fields.
     */

    function load_form_input($aDBFiels, $model = '', $relationship_key = array())
    {

        $aColVal = $aRModels = $aModel = array();

        //Map db field for right model.
        //batch of rights is submited.
        if ($model == 'right')
        {

            $aRModels = $this->config->item('tf_right_based_models');

            //Get models submited by user request.
            foreach ($aRModels as $model)
            {
                $temp = $this->input->post('model_' . strtolower($model), true);
                if (!empty($temp))
                {
                    $aModel[] = $temp;
                }
            }

            //Request submit multipal records.
            //Iterate through all fields model wise.
            $i = 0;
            foreach ($aModel as $model)
            {

                //field_name match to db column name.
                foreach ($aDBFiels as $field_name)
                {
                    //In case value of db field depeneds on other model's db field then
                    //that should be provided into relationship key array
                    //Eg. user_id in admin_right table is a value of user's id.
                    if (key_exists($field_name, $relationship_key) && isset($relationship_key[$field_name]))
                    {
                        //Set col value = relationship value.
                        $aColVal[$i][$field_name] = $relationship_key[$field_name];
                    }
                    else if ($field_name == 'created_datetime')
                    {
                        //DateTime when record is being created in mysql formate.
                        $aColVal[$i][$field_name] = date('Y-m-d H:i:s');
                    }
                    else if ($field_name == 'modified_datetime')
                    {
                        //DateTime when record is being created in mysql formate.
                        $aColVal[$i][$field_name] = date('Y-m-d H:i:s');
                    }
                    else
                    {
                        //name of the input field.
                        $right_value = $this->input->post('model_' . strtolower($model) . '_' . $field_name, TRUE);
                        //Unchecked checkbox dont get submitted.So set value zero.
                        if (empty($right_value))
                            $right_value = 'off';

                        $aColVal[$i][$field_name] = $right_value;
                    }

                }//foreach

                $aColVal[$i]['model'] = $model;
                $i++;
            }//foreach

        }
        else
        {
            //Iterate through all fields.
            //field_name match to db column name.
            foreach ($aDBFiels as $field_name)
            {

                //Get value from $_GET or $_POST
                $value = $this->input->get_post($field_name, TRUE);
                if ($value)
                {
                    //store user pass into md5 and do not escape any value of user input.
                    if (get_class($this->$model) == 'User_Model' && $field_name == 'password')
                    {
                        $aColVal[$field_name] = md5($this->input->post($field_name));
                    }
                    else if(get_class($this->$model) == 'Customer_model' && $field_name == 'password'){
                        $aColVal[$field_name] = md5($this->input->post($field_name));
                    }
                    else
                    {
                        $aColVal[$field_name] = $value;
                    }
                }
            }//forech

        }

        return $aColVal;

    }//func

    /**
     * This function set session data
     *
     */
    function set_session_data($session_data) {

        //Check if session is not set then do set it.
        //This can be due to bug #1314.

        if (!isset($this -> session -> userdata['session_id']) || empty($this -> session -> userdata['session_id']))
            $this -> session -> sess_create();

        $this -> session -> set_userdata($session_data);
    }

    /*This function return paginatino information.
     *This pagination only work with jqGrid list.
     *@parma $model instance name of model.
     *@return array array has information regarding pagination.
     * */
    function get_pagination_data($model) {

        $aPage = $aFilters = array();
        $wh = '';

        // get the requested page
        $page = $this -> input -> get('page');
        // get how many rows we want to have into the grid
        $limit = $this -> input -> get('rows');
        // get index row - i.e. user click to sort
        $sidx = $this -> input -> get('sidx');
        if (!$sidx)
            $sidx = 1;
        // get the direction
        $sord = $this -> input -> get('sord');

        //search request is through jqgrid search.
        $jq_search = $this -> input -> get('_search', true);
        //simple or advance search request.
        $search_type = $this -> input -> get('data', true);

        //Basic Search.
        if (!empty($jq_search) && $jq_search == 'true' && !empty($search_type) && $search_type == 'b_s') {
            //generate filters in specific format from user search inputs.
            $aFilters = $this -> genrate_filter_array($model);
        }//if

        //Advance Search.
        if (!empty($jq_search) && $jq_search == 'true' && !empty($search_type) && $search_type == 'a_s') {
            //search request is through advance jqgrid search.
            //get filters of jqgrid advance search.
            $filters = $this -> input -> get('filters', true);
            $aFilters = json_decode($filters, true);
        }

        //generate where condition.
        $wh = $this -> generate_where($aFilters, $model);

        if (!empty($wh)) {
            $aPage['where'] = $wh;
        }

        //Count Total Pages.
        $total_rows = $this -> $model -> count_all_rows($aPage);
        $total_rows > 0 ? $total_pages = ceil($total_rows / $limit) : $total_pages = 0;

        //Page should not be greate then total pages.
        if ($page > $total_pages)
            $page = $total_pages;
        $start = $limit * $page - $limit;

        if ($total_rows == 0) {
            $start = 0;
            $limit = 0;
        }

        $aPage['start'] = $start;
        $aPage['limit'] = $limit;
        $aPage['page'] = $page;
        $aPage['total_pages'] = $total_pages;
        $aPage['total_rows'] = $total_rows;
        $aPage['order_by'] = $sidx . ' ' . $sord;

        return $aPage;
    }

    /*generate filter array from basic search fields   into advance search formate
     *@param $model Name of model
     *@param $stype type of search.
     *@retrun array.
     * */
    function genrate_filter_array($model = '', $stype = 'basic') {

        $aFilter = array();

        $aDBFields = $this -> $model -> aDBFields;
        $aDBFormat = $this -> $model -> aDBFormat;

        if ($stype == 'basic') {
            $aFilter['groupOp'] = 'AND';
            $aFilter['rules'] = array();
            $i = 0;
            foreach ($aDBFields as $field_name) {
                $search_val = $this -> input -> get($field_name, true);
                //prepare normal array.
                if (!empty($search_val)) {

                    if (isset($aDBFormat[$field_name]) && $aDBFormat[$field_name]['type'] == 'date') {
                        //Date field should be search in Like datevale%
                        //because there are some field which are of datetime type.
                        $aWhere[$field_name] = $search_val;
                        $aFilter['rules'][$i]['field'] = $field_name;
                        $aFilter['rules'][$i]['op'] = 'bw';
                        $aFilter['rules'][$i]['data'] = $search_val;
                        $i++;
                    } else {
                        $aWhere[$field_name] = $search_val;
                        $aFilter['rules'][$i]['field'] = $field_name;
                        $aFilter['rules'][$i]['op'] = 'eq';
                        $aFilter['rules'][$i]['data'] = $search_val;
                        $i++;
                    }

                }
            }//foreach
        }
        return $aFilter;

    }//func

    /*This function create WHERE for db query
     *from jqgrid filter, a jason string.
     */
    function generate_where($aFilters, $model = '') {

        //Operator symbol used by jQGrid.
        //jQGridOperator => MySql operator
        $aOpSymb = array(
            'eq' => '=', //equal to
            'bw' => "LIKE '[]%'", //begin with
            'ew' => "LIKE '%[]'", //end with
            'cn' => "LIKE '%[]%'", //contains
            'gt' => ' > ', //greater than
            'lt' => ' < ', //less than
        );

        $aTemp = array();
        $where = $extra_wh = '';

        //This is where which has some specific search input by other means.
        //Basic search or advance search do not provide it.
        if (!empty($this -> extra_filter)) {
            $extra_wh = "( " . implode(' AND ', $this -> extra_filter) . " )";
        }

        if (empty($aFilters) && !empty($this -> extra_filter))
            return $extra_wh;
        else if (empty($aFilters) && empty($this -> extra_filter)) {
            return '';
        }

        //Either 'OR' or 'AND' Operator.
        $Op = $aFilters['groupOp'];
        //Transform user search input into db format.
        $this -> $model -> advance_to_db_format($aFilters['rules']);
        $table = $this -> $model -> _table_name;
        //Prepare conditions.
        foreach ($aFilters['rules'] as $aSearch) {
            
            $col = trim($aSearch['field']);
            //Query having joins require tablename.column name.
            if(FALSE === strpos($col, "application__")){
                $col = $table.".".trim($aSearch['field']);
            }
            
            $data = trim($aSearch['data']);
            $op = $aSearch['op'];
            
            //Get db operator equalvant to jqgrid operator.
            if (isset($aOpSymb[$op])) {
                $dbOp = $aOpSymb[$op];
            } else {
                continue;
            }

            //replace eq with =
            if ($op == 'eq') {
                
                //Exception in case of 'application__app_status'
                if($col == 'application__app_status'){
                    //Approved application
                    if($data == "approved"){
                        $aTemp[] = "( {$col} IN ('FULL') )";
                    }elseif($data == "declined"){
                        $aTemp[] = "( {$col} IN ('NVALID','DUPE','VCDEC','ACDEC','UWDEC') )";
                    }elseif($data == "duplicate"){
                        $aTemp[] = "( {$col} IN ('DUPE') )";
                    }elseif($data == "in_complete"){
                        $aTemp[] = "( {$col} IN ('NONE','VCREQ','ACREQ','ACAUTH','ACPROC') )";
                    }
                    
                    continue;
                }
                
                //Search empty field.
                if (empty($data)) {
                    $aTemp[] = "( {$col} {$dbOp} '' OR {$col} IS NULL )";
                } else {
                    if(FALSE === strpos($col, "id")){
                        $aTemp[] = "( {$col} {$dbOp} '{$data}' )";
                    }else{
                        $aTemp[] = "( {$col} {$dbOp} {$data} )";    
                    }
                }
            }
            //Replace [] with filter value.so value will have
            //% as suffix.
            else if ($op == 'bw' || $op == 'ew' || $op == 'cn') {
                //Do not search empty value
                if (!empty($data)) {
                    $condition = str_replace('[]', $data, $dbOp);
                    $aTemp[] = "( {$col} {$condition} )";
                }//if
            }
            //Greate then,Less then
            elseif ($op == 'gt' || $op == 'lt') {
                //Do not search empty value
                if (!empty($data)) {
                    
                    //$aTemp[] = "( {$col} {$dbOp} $data )";
                    
                    if(FALSE === strpos($col, "id")){
                        $aTemp[] = "( {$col} {$dbOp} '$data' )";
                    }else{
                        $aTemp[] = "( {$col} {$dbOp} $data )";    
                    }
                    
                }
            }
        }//forech

        $where = implode(' ' . $Op . ' ', $aTemp);

        if (!empty($where) && !empty($extra_wh))
            $where = $where . " AND $extra_wh";
        else if (empty($where) && !empty($extra_wh)) {
            $where = "($extra_wh)";
        }

        return $where;

    }//func
}
