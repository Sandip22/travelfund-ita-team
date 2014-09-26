<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/*Admin controller
 *@author asavaliya-itaction.
 * */
class Users extends Admin
{

    /*Default constructor.
     * */
    function __construct()
    {
        // Call the parent constructor
        parent::__construct();
    }

    /*Default call incase no method requeted.
     * */
    function index()
    {
        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }
    }

    /**
     * This function display add user form
     */
    function add_admin_user()
    {

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //display add user page.
        $this->load->view('admin/add_admin_user');

    }

    /**
     * This function display user info to edit
     */
    function edit_admin_user($user_name)
    {

        $aQParams = $aUser = $aRight = $aTemp = $aMhvR = $aDRight = $aMwoR = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //User name is specified ?
        if (empty($user_name))
        {
            //Redirect to login page.
            redirect(base_url() . "admin");
        }

        //Initiate admin person model.
        $this->load->model('admin/user_model', 'user');
        //Retrive user information.
        $aQParams['where']['user_name'] = $user_name;
        //Get user.
        $aUser = $this->user->get_user($aQParams);

        //No use with specified name.Show list of users.
        if (empty($aUser))
        {
            //display add user page.
            $this->load->view('admin/list_admin_user');
        }

        $oUser = array_shift($aUser);

        if (isset($oUser->id))
        {
            //Load Right.
            $this->load->model('admin/right_model', 'right');
            //Right of particular user.
            $aQParams['where'] = array('user_id' => $oUser->id);
            //Retrive user right information.
            $aRight = $this->right->get_list($aQParams);

            //Get model for which rights have been assigned.
            foreach ($aRight as $oRight)
            {
                //Model having rights.
                $aMhvR[] = ucfirst($oRight->model);
            }

            //Get difference of models having rights and models without right.
            $aRModels = $this->config->item('tf_right_based_models');

            //Models without rights.
            $aMwoR = array_diff($aRModels, $aMhvR);

            // If no right has been given then set 'off' for all.
            if (!empty($aMwoR))
            {
                //Default rights
                $aDRight = $this->right->get_default_rights($oUser->id, $aMwoR);
            }

            foreach ($aDRight as $oStd)
            {
                $aRight[] = $oStd;
            }

            //Re-format rights so view can understand it easily.
            foreach ($aRight as $oRight)
            {
                //Model having rights.
                $aMhvR[] = $oRight->model;
                foreach ($oRight as $key => $value)
                {
                    $chk_name = $oRight->model . '_' . $key;
                    $aTemp[$chk_name] = $value;
                }
            }
        }
        //There some bug.$user_name is displayed as first_name + last_name.
        $_POST['user_name'] = $user_name;
        $aData = array_merge((array)$oUser, $aTemp);

        //display add user page.
        $this->load->view('admin/edit_admin_user', $aData);
    }

    /**
     * This function save user to db.
     */
    function insert_admin_user()
    {
        $aData = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //Validate inputs.
        //rule at key users/insert_admin_user
        if ($this->form_validation->run() === TRUE)
        {
            //Load Model.
            $this->load->model('admin/user_model', 'user');

            //Get user inputs in 'col'=>'value' formate array.
            $aData = $this->load_form_input($this->user->aDBFields, 'user');

            //Unset id for new record.
            unset($aData['id']);
            //Save new user.
            $this->user->insert($aData);

            //Get saved user with id.
            $aUser = $this->user->get_user(array('where' => $aData));

            //Load Right.
            $this->load->model('admin/right_model', 'right');

            //Each Right is associated with user id.
            $relationship_key = array('user_id' => $aUser[0]->id);

            //Unset id for new record as it is auto-increment.
            unset($this->right->aDBFields['id']);

            //Get user inputs in 'col'=>'value' formate array.
            $aData = $this->load_form_input($this->right->aDBFields, 'right', $relationship_key);

            //Save new user's right.
            $this->right->insert_batch($aData);

            //Redirect to listing page.
            redirect('/tf-admin/users/get_list');
        }
        else
        {
            //Error.Render add user page again.
            $this->load->view('admin/add_admin_user');
        }
    }//func

    /**
     * Update admin user
     */
    function update_admin_user() {

        $aData = $aUData = $aDBFields = array();

        //User not authenticated.
        if ($this -> user_authenticated !== TRUE) {
            //Display login page.
            $this->redirect_login();
        }

        //Request must have id of user.Else redirect to listing page.
        //It is hidden field.So it must be in request.
        //In case some one erase it manually.
        if (!isset($_POST['id'])) {
            //Error.Render add user page again.
            $this -> load -> view('admin/edit_admin_user');
        }
        
        //Validate inputs.
        //validation rule key : users/update_admin_user
        if ($this -> form_validation -> run() === TRUE) {

            //Load Model.
            $this -> load -> model('admin/user_model', 'user');

            //Get user inputs in 'col'=>'value' formate array.
            $aDBFields = $this -> user -> aDBFields;

            //do not update following field.
            unset($aDBFields['id']);
            unset($aDBFields['created_datetime']);
            unset($aDBFields['user_pass']);
            unset($aDBFields['user_name']);

            $aData['col_val'] = $this -> load_form_input($aDBFields,'user');

            $aData['where'] = array('id' => $this -> input -> post('id', TRUE));

            //Update user.
            $this -> user -> update($aData);

            //Load Right.
            $this -> load -> model('admin/right_model', 'right');

            $aData = array();
            $aDBFields = $this -> right -> aDBFields;
            //do not update following field.
            unset($aDBFields['id']);
            unset($aDBFields['user_id']);
            unset($aDBFields['created_datetime']);
            unset($aDBFields['model']);

            //Each Right is associated with user id.
            //Get user inputs in 'col'=>'value' formate array.
            $aData = $this -> load_form_input($aDBFields, 'right');

            //Iterate through each record.
            foreach ($aData as $key => $aRight) {

                $aUData['col_val'] = $aRight;
                $aUData['where'] = array(
                    'user_id' => $this -> input -> post('id', TRUE),
                    'model' => $aRight['model']
                );
                //Save new user's right.
                $this -> right -> udpate($aUData);
            }

            //Redirect to listing page.
            redirect('/tf-admin/users/get_list');
        } else {
            //Error.Render add user page again.
            $aData['id'] = $_POST['id'];
            $this -> load -> view('admin/edit_admin_user',$aData);
        }
    }
    
    /**
     * Display list of admin users
     */
    function get_list()
    {

        $oResponse = new stdClass();
        $aQParams = array();

        $aData = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }
        //Pagination infromation
        //Ajax request.
        if ($this->input->is_ajax_request())
        {

            //Initiate admin person model.
            $this->load->model('admin/user_model', 'user');

            //Get pagination information.
            $aParams = $this->get_pagination_data('user');

            //Set query params to fetch data.
            $aQParams['limit'] = $aParams['start'];
            $aQParams['offset'] = $aParams['limit'];
            $aQParams['order_by'] = $aParams['order_by'];
            if (isset($aParams['where']) && !empty($aParams['where']))
                $aQParams['where'] = $aParams['where'];

            //Get list of users.
            $aUsers = $this->user->get_list($aQParams);

            //Fill Response
            $oResponse->page = $aParams['page'];
            $oResponse->total = $aParams['total_pages'];
            $oResponse->records = $aParams['total_rows'];

            //make compatible to jason.
            foreach ($aUsers as $key => $obj)
            {
                $oResponse->rows[$key]['id'] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->user_name;
                $oResponse->rows[$key]['cell'][] = $obj->first_name;
                $oResponse->rows[$key]['cell'][] = $obj->last_name;
                $oResponse->rows[$key]['cell'][] = $obj->email;
                $oResponse->rows[$key]['cell'][] = $obj->status;
            }
            echo json_encode($oResponse);
            exit();
        }//Load View.
        $this->load->view("admin/list_admin_user");
    }

    /**
     * Display list of right of particular user.
     */
    function list_user_rights()
    {

        $oResponse = new stdClass();
        $aQParams = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }
        
        //Initiate admin right model.
        $this->load->model('admin/right_model', 'right');

        //Get list of users.
        $aQParams['where']['user_id'] = $this->input->get('id', true);
        $aRights = $this->right->get_list($aQParams);

        //make compatible to jason.
        foreach ($aRights as $key => $obj)
        {

            //Display checkbox in subgrid.
            $checked = '';

            $oResponse->rows[$key]['id'] = $obj->id;
            $oResponse->rows[$key]['cell'][] = $obj->model;

            //Read permission
            $obj->read == 'on' ? $checked = 'checked' : $checked = '';
            $oResponse->rows[$key]['cell'][] = "<input type='checkbox' {$checked} disabled>";

            //add permission
            $obj->add == 'on' ? $checked = 'checked' : $checked = '';
            $oResponse->rows[$key]['cell'][] = "<input type='checkbox' {$checked} disabled>";

            //edit permission
            $obj->edit == 'on' ? $checked = 'checked' : $checked = '';
            $oResponse->rows[$key]['cell'][] = "<input type='checkbox' {$checked} disabled>";

            //delete permission
            $obj->delete == 'on' ? $checked = 'checked' : $checked = '';
            $oResponse->rows[$key]['cell'][] = "<input type='checkbox' {$checked} disabled>";
        }

        echo json_encode($oResponse);
        exit();
    }

}
