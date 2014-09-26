<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Lenders extends Admin
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
     * Get List of Lender
     */

    public function get_list($page = 1)
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

            //Initiate lender model.
            $this->load->model('admin/lender_model', 'lender');

            //Get pagination information.
            $aParams = $this->get_pagination_data('lender');

            //Set query params to fetch data.
            $aQParams['limit'] = $aParams['start'];
            $aQParams['offset'] = $aParams['limit'];
            $aQParams['order_by'] = $aParams['order_by'];
            if (isset($aParams['where']) && !empty($aParams['where']))
                $aQParams['where'] = $aParams['where'];

            //Get list of lenders.
            $aPartner = $this->lender->get_list($aQParams);

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
                $oResponse->rows[$key]['cell'][] = $obj->url_for_app;
            }//foreach

            echo json_encode($oResponse);
            exit();
        }
        else
        {
            $this->load->view("admin/list_lender");
        }
    }//func

    /**
     * Get more information about lender.
     */
    function more_info()
    {

        $oResponse = new stdClass();
        $aQParams = $aData = array();

        //User not authenticated.
        if ($this->user_authenticated !== TRUE && !empty($lender_id))
        {
           //Display login page.
            $this->redirect_login();
        }
        $lender_id = $this->input->get('id', true);

        if ($this->input->is_ajax_request())
        {
            //Initiate lender model.
            $this->load->model('admin/lender_model', 'lender');
            $aQParams['where'] = array('id' => $lender_id);

            //Get list of lenders.
            $aPartner = $this->lender->get_list($aQParams);
            //make compatible to jason.
            foreach ($aPartner as $key => $obj)
            {
                $oResponse->rows[$key]['id'] = $obj->id;
                $oResponse->rows[$key]['cell'][] = $obj->address;
            }//foreach

            echo json_encode($oResponse);
            exit();
        }
    }

}
