<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*This is main model.All model should extend it.
 * */
class TF_Model extends CI_Model
{
    /**
     * Default constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.
        $this->load->database();
    }//fun

    /*Show error page and log error into log file
     * */

    function trigger_error($opt)
    {
        //Redirect to error page.
        switch($opt)
        {
            case 'No_Table_Selected' :
                log_message('error', 'No table specified');
                show_error('No table name spicified');
                exit ;
                break;
        }
    }

    /*This method save data into database
     * */
    protected function insert($aData)
    {
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aData['table']) || empty($aData['col_val']))
        {
            $this->trigger_error('No_Table_Selected');
        }
        $this->to_db_format($aData['col_val']);
        $this->db->insert($aData['table'], $aData['col_val']);
    }

    /*This method update date into database.
     * */
    protected function update($aData)
    {
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aData['table_name']) || empty($aData['col_val']) || empty($aData['where']))
        {
            $this->trigger_error('No_Table_Selected');
        }
        $this->to_db_format($aData['col_val']);
        $this->db->where($aData['where']);
        $this->db->update($aData['table_name'], $aData['col_val']);
    }

    /*This method save data into database
     * */
    protected function insert_batch($aData)
    {
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aData['table_name']) || empty($aData['col_val']))
        {
            $this->trigger_error('No_Table_Selected');
        }
        $this->db->insert_batch($aData['table_name'], $aData['col_val']);
    }

    /**
     * Get Single record.
     * @param array $aQParams
     */
    protected function get_row($aQParams)
    {
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aQParams['table']))
        {
            $this->trigger_error('No_Table_Selected');
        }
        return $this->get_rows($aQParams);
    }

    /**
     * This is generic function which fetch number of rows provided into query params
     * @param array $aQParams : query params
     * @return array of object.
     */
    protected function get_rows($aQParams)
    {

        //From Table Query Part.
        !empty($aQParams['table']) ? $this->db->from($aQParams['table']) : $this->trigger_error('No_Table_Selected');

        //Select Query Part
        isset($aQParams['select']) ? $this->db->select($aQParams['select'],FALSE) : '';

        //Join part.
        if (isset($aQParams['join']))
        {
            foreach ($aQParams['join'] as $joinTable => $joinCondition)
            {
                $join = '';
                if (strpos($joinTable, "|"))
                {
                    $aTemp = explode("|", $joinTable);

                    $joinTable = $aTemp['0'];
                    $join = $aTemp['1'];
                }
                $this->db->join($joinTable, $joinCondition, $join);
            }
        }

        //convert input field value according to database format.
        if (isset($aQParams['where']) && is_array($aQParams['where']))
        {
            $this->to_db_format($aQParams['where']);

        }
        //Where condition part.
        isset($aQParams['where']) ? $this->db->where($aQParams['where']) : '';

        //Order by part.
        isset($aQParams['order_by']) ? $this->db->order_by($aQParams['order_by']) : '';
        //Limit part
        isset($aQParams['limit']) && isset($aQParams['offset']) ? $this->db->limit($aQParams['offset'], $aQParams['limit']) : '';

        //Resource having results.
        $oResource = $this->db->get();

        $aData = array();
        foreach ($oResource->result() as $row)
        {
            $aData[] = $row;
        }

        //process data according to preferences.
        $this->to_display_format($aData);

        return $aData;

    }

    /* Returns total rows of table.
     * */
    protected function get_total_rows($aQParams)
    {

        //convert input field value according to database format.
        if (!empty($aQParams['where']) && is_array($aQParams['where']))
        {
            $this->to_db_format($aQParams['where']);
        }

        //Where condition part.
        !empty($aQParams['where']) ? $this->db->where($aQParams['where']) : '';

        $this->add_join($aQParams);

        return $this->db->count_all_results($aQParams['table']);
    }

    /* Add Join */

    function add_join($aQParams)
    {

        //Join part.
        if (!empty($aQParams['join']))
        {
            foreach ($aQParams['join'] as $joinTable => $joinCondition)
            {
                $join = '';
                if (strpos($joinTable, "|"))
                {
                    $aTemp = explode("|", $joinTable);

                    $joinTable = $aTemp['0'];
                    $join = $aTemp['1'];
                }
                $this->db->join($joinTable, $joinCondition, $join);
            }
        }
    }

    /*This function tranform database value according to user preferences.
     * */
    function to_display_format(&$aData)
    {

        //process data
        foreach ($aData as $key => $oStd)
        {
            foreach ($oStd as $column => $value)
            {

                //formate date field to 'dd-mm-yyyy'
                if (!empty($value) && isset($this->aDispFormat[$column]) && $this->aDispFormat[$column]['type'] == 'date')
                {
                    //Date has mysql default format. yyyy-mm-dd
                    $aData[$key]->$column = date($this->aDispFormat[$column]['format'], strtotime($value));

                }//if

            }//foreach
        }//foreach

    }//fun.

    /*This function process input value according to database formate.
     * */
    function to_db_format(&$aData)
    {
        //process data
        foreach ($aData as $column => $value)
        {

            //Transform into mysql db date formate.
            if (!empty($value) && isset($this->aDBFormat[$column]) && $this->aDBFormat[$column]['type'] == 'date')
            {

                //controller add % suffix incase of field being search is datatime type.
                //we need to remove it here.
                $op = false;
                $suffix = '';
                if (FALSE !== ($pos = strpos($value, "%")))
                {
                    $op = true;
                    $value = substr($value, 0, -1);
                }

                //Create date object form user input.
                $oDate = DateTime::createFromFormat($this->aDispFormat[$column]['format'], $value);
                //Get date according to db formate.
                $aData[$column] = $oDate->format($this->aDBFormat[$column]['format']) . $suffix;

            }//if

        }//foreach
    }//func.

    /*This function transform user input into db format.
     * */
    function advance_to_db_format(&$aData)
    {

        //Process user inputs.
        foreach ($aData as $key => $aField)
        {
            //User input field should be in database.
            if (in_array($aField['field'], $this->aDBFields))
            {

                $field = $aField['field'];
                $value = $aField['data'];

                //Transform into mysql db date formate.
                if (!empty($value) && isset($this->aDBFormat[$field]) && $this->aDBFormat[$field]['type'] == 'date')
                {
                    //Create date object form user input.
                    $oDate = DateTime::createFromFormat($this->aDispFormat[$field]['format'], $value);
                    //Get date according to db formate.
                    $aData[$key]['data'] = $oDate->format($this->aDBFormat[$field]['format']);

                }//if

            }//if
        }//foreach

    }//func

}
