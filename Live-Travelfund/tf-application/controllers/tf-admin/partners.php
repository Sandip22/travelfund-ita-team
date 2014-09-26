<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/*Admin controller
 *@author asavaliya-itaction.
 * */
class Partners extends Admin
{

    /*Default constructor.
     * */
    function __construct()
    {
        // Call the parent constructor
        parent::__construct();
    }

    /**
     * Default call incase no method requeted.
     *
     */
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
     * This function list partners.
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

        if ($this->input->is_ajax_request())
        {

            //Initiate admin application model.
            $this->load->model('admin/partner_model', 'partner');

            //Get pagination information.
            $aParams = $this->get_pagination_data('partner');

            //Set query params to fetch data.
            $aQParams['limit'] = $aParams['start'];
            $aQParams['offset'] = $aParams['limit'];
            $aQParams['order_by'] = $aParams['order_by'];
            if (isset($aParams['where']) && !empty($aParams['where']))
                $aQParams['where'] = $aParams['where'];

            //Get list of customers.
            $aPartner = $this->partner->get_list($aQParams);

            //Fill Response
            $oResponse->page = $aParams['page'];
            $oResponse->total = $aParams['total_pages'];
            $oResponse->records = $aParams['total_rows'];

            //make compatible to jason.
            foreach ($aPartner as $key => $obj)
            {
                $oResponse->rows[$key]['id'] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->name;
                $oResponse->rows[$key]['cell'][] = $obj->status;
                $oResponse->rows[$key]['cell'][] = $obj->code;
                $oResponse->rows[$key]['cell'][] = $obj->phone;
                $oResponse->rows[$key]['cell'][] = $obj->email;
            }//foreach

            echo json_encode($oResponse);
            exit();
        }
        else
        {
            $this->load->view("admin/list_partner");
        }
    }
}//func
