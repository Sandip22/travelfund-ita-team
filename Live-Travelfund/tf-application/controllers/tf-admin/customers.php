<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Customers extends Admin
{
    /**
     * Constructore
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Default controller.It will render login page.
     */
    public function index()
    {
        if ($this->user_authenticated === TRUE)
        {
            redirect('/tf-admin/customers/get_list');
        }
        else
        {
            //Display login page.
            $this->redirect_login();
        }
    }

    /**
     * Display list of customer.
     */
    public function get_list($page = 1)
    {
        $oResponse = new stdClass();
        $aQParams = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //Pagination.
        //Ajax request.
        if ($this->input->is_ajax_request())
        {

            //Initiate model.
            $this->load->model('admin/customer_model', 'cust');

            //Get pagination information.
            $aParams = $this->get_pagination_data('cust');

            //Set query params to fetch data.
            $aQParams['limit'] = $aParams['start'];
            $aQParams['offset'] = $aParams['limit'];
            $aQParams['order_by'] = $aParams['order_by'];
            if (isset($aParams['where']) && !empty($aParams['where']))
                $aQParams['where'] = $aParams['where'];

            //Get list of customers.
            $aCustomer = $this->cust->get_list($aQParams);

            //Fill Response
            $oResponse->page = $aParams['page'];
            $oResponse->total = $aParams['total_pages'];
            $oResponse->records = $aParams['total_rows'];

            //jason response.
            foreach ($aCustomer as $key => $obj)
            {
                $oResponse->rows[$key]['id'] = $obj->cust_id;
                $oResponse->rows[$key]['cell'][] = $obj->cust_id;
                $oResponse->rows[$key]['cell'][] = $obj->app_id;
                $oResponse->rows[$key]['cell'][] = $obj->first_name;
                $oResponse->rows[$key]['cell'][] = $obj->last_name;
                $oResponse->rows[$key]['cell'][] = $obj->email;
                $oResponse->rows[$key]['cell'][] = $obj->app_len_app_id;
                $oResponse->rows[$key]['cell'][] = $obj->app_app_status;
                $oResponse->rows[$key]['cell'][] = $obj->app_tf_status;
                $oResponse->rows[$key]['cell'][] = $obj->app_created_datetime;
                $oResponse->rows[$key]['cell'][] = $obj->app_modified_datetime;
                $oResponse->rows[$key]['cell'][] = $obj->partner_name;
                $oResponse->rows[$key]['cell'][] = $obj->cust_id;
            }
            echo json_encode($oResponse);
            exit();
        }//if
        //Load View.
        $this->load->view("admin/list_customer");
    }

    /**
     * List application of particular customer.
     */

    public function application($cust_id = 0)
    {

        $oResponse = new stdClass();
        $aQParams = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //save person id into session.
        //Set Session

        if ($this->input->is_ajax_request() && !empty($cust_id))
        {

            //Initiate admin application model.
            $this->load->model('admin/application_model', 'app');

            //Here, we need to search only applicatoin associated with particular
            //user.So we need to add  extra where into query for pagination.
            $this->extra_filter = array("cust_id='$cust_id'");

            //Get pagination information.
            $aParams = $this->get_pagination_data('app');

            //Set query params to fetch data.
            $aQParams['limit'] = $aParams['start'];
            $aQParams['offset'] = $aParams['limit'];
            $aQParams['order_by'] = $aParams['order_by'];
            if (isset($aParams['where']) && !empty($aParams['where']))
                $aQParams['where'] = $aParams['where'];

            //Get list of customers.
            $aApp = $this->app->get_list($aQParams);

            //Fill Response
            $oResponse->page = $aParams['page'];
            $oResponse->total = $aParams['total_pages'];
            $oResponse->records = $aParams['total_rows'];

            //make compatible to jason.
            foreach ($aApp as $key => $obj)
            {
                $oResponse->rows[$key]['id'] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->app_status;
                $oResponse->rows[$key]['cell'][] = $obj->created_datetime;
                $oResponse->rows[$key]['cell'][] = $obj->mobile_phone;
                $oResponse->rows[$key]['cell'][] = $obj->departure_date;
                $oResponse->rows[$key]['cell'][] = $obj->accept_terms;
                $oResponse->rows[$key]['cell'][] = '';
            }
            echo json_encode($oResponse);
            exit();

        }
        else
        {
            //Load person model.
            $this->load->model('admin/customer_model', 'cust');
            $aQParams = array('where' => array('id' => $cust_id));
            //Get customer name.
            $customer_name = $this->cust->get_full_name($aQParams);

            //load view.Pass data to view.
            $this->load->view("admin/list_application", array(
                'cust_name' => $customer_name,
                'cust_id' => $cust_id,
            ));
        }

    }
    
    /**
     * Display address and employment details associated with it.
     */

    public function more($app_id = 0)
    {
        
        if (empty($app_id))
        {
            return false;
        }
        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }
        
        //Get address for particular application.
        $this->load->model('admin/address_model', 'add');
        $query_params = array('where' => array('app_id' => $app_id));
        $oAdd = $this->add->get_address($query_params);

        //Get employement details for particular application.
        $this->load->model('admin/employement_model', 'emp');
        $query_params = array('where' => array('app_id' => $app_id));
        $oEmp = $this->emp->get_employment($query_params);
        
        //Get customer name.
        $this->load->model('admin/customer_model', 'cust');
        $query_params = array('where' => array('app_id' => $app_id));
        $customer_name = $this->cust->get_full_name($query_params);

        //load view.Pass data to view.
        $this->load->view("admin/more_application.php", array(
            'data' => array('add'=>$oAdd,'emp'=>$oEmp),
            'customer_name' => $customer_name
        ));
        
    } 
        
    /**
     * List address associated with customer's application.
     */
    public function address($app_id = 0)
    {

        if (empty($app_id))
        {
            return false;
        }
        //User not authenticated.
        if ($this->user_authenticated !== TRUE)
        {
            //Display login page.
            $this->redirect_login();
        }

        //Initiate admin person model.
        $this->load->model('admin/address_model', 'add');

        //Get list of addresses by particular application.
        $query_params = array('where' => array('application_id' => $app_id));
        $aAdd = $this->address_model->get_list($query_params);

        //Load person model.
        $this->load->model('admin/person_model', 'customer');
        $query_params = array('where' => array('application_id' => $app_id));
        //Get customer name.
        $customer_name = $this->customer->get_full_name($query_params);

        //load view.Pass data to view.
        $this->load->view("admin/list_address.php", array(
            'data' => $aAdd,
            'customer_name' => $customer_name
        ));
    }

}
