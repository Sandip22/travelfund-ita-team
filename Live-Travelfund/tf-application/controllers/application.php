<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*This is main controller.All controller should extend it
 * */

class Application extends Front_Controller
{
    var $partner_eligibility = 'no';
    var $customer_authenticated = 'no';
    var $fund_availability = 'no';
    var $session_id;
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.

        //$this->get_select_address_details_capture_plus('GBR%7CPR%7C23976939%7C0%7C0%7C0');
        $this->load->database();
        //Partner should be eligible to have TF facility for customer.

        if ($this->session->userdata('partner_eligibility') == 'yes')
        {
            $this->partner_eligibility = 'yes';
        }
        //Customer is authenticated.
        if ($this->session->userdata('customer_authenticated') == 'yes')
        {
            $this->customer_authenticated = 'yes';
        }
        //Travelfund has credit to lend loan to customer.
        if ($this->session->userdata('fund_availability') == 'yes')
        {
            $this->fund_availability = 'yes';
        }
        
        $this->session_id = $this->session->userdata('session_id');
        
    }

    /**
     * Default controller.
     */
    function index($partner_code = '')
    {
        $this->introduction($partner_code);
    }//func

    /* Introduction to what is travel fund.
     *  @param string $partner_code - code of OTA.Called from this OTA website.
     */
    function introduction($partner_code = '')
    {
        //Start new session.
        $this->session->sess_create();
        
        $this->session_id = $this->session->userdata('session_id');
        
        $this->session->set_userdata('introduction_url',$_SERVER['REQUEST_URI']);
        
log_message("error", __FUNCTION__ . " :: " . $this->session_id . " introduction_url :: " . print_r($_SERVER['REQUEST_URI'], TRUE));        

        //Check for partner status and registration with TF.
        //Load Model.
        $this->load->model('frontend/partner_model', 'partner');

        //Find partner.
        $aParam['code'] = $partner_code;

        log_message("error", __FUNCTION__ . " :: " . $this->session_id . " :: " . print_r($aParam, TRUE));

        //Check if partner(OTA) is eligible to have TF facility.
        if (!empty($partner_code) && ($this->partner->check_eligibility($aParam) === TRUE))
        {
            //Partner is allowed to have TF application.
            //Store into session.
            $this->session->set_userdata(array('partner_eligibility' => 'yes'));
            $this->session->set_userdata(array('widget_action' => 'application'));
            $this->partner_eligibility = 'yes';

            //webpage url at which TF widget is placed.
            $this->session->set_userdata(array('parent_url' => $this->input->get('partner_url')));

            log_message("error", __FUNCTION__ . " :: " . $this->session_id . " :: Partner URL " . print_r($this->input->get('partner_url'), TRUE));

            //Display introduction page.
            $this->load->view("application/introduction", array('partner_name' => $this->partner->name));

        }
        else
        {
            $this->partner_not_eligible();
            return;
        }

    }//func

    /**
     * Display how travelfund will work
     */
    function how_it_works()
    {

log_message("error", __FUNCTION__ . " :: " . $this->session_id );
        
        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Fund available with Travelfund.
            $this->load->view("application/how_it_works");
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }
    }

    /**
     * Display Personal details form [ About you form].
     */
    function personal_details()
    {
        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Check if fund is avaliable with travelfund to lend customer.
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'fund_availability';
            $aReq['method']['arg'] = array();

            $aData = $this->_lender($aReq);

            log_message("error", __FUNCTION__ . " :: " . $this->session_id .  " :: fund_availability " . print_r($aData, TRUE));

            //Fund not available with TravelFund
            if ($aData === FALSE || (isset($aData['avail_fund']) && $aData['avail_fund'] == 0))
            {

                log_message("error", __FUNCTION__ . " :: " . $this->session_id .  " :: fund not availability redirect");

                $this->redirect_fund_not_available();
            }
            else
            {
                //Display about you form.
                $this->load->view("application/personal_detail");
            }

        }
        else
        {
            $this->partner_not_eligible();
            return;
        }

    }

    /**
     * This function insert data into customer table.
     */
    function insert_personal_details()
    {
        $aCustData = $aAppData = $aData = array();

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'no')
        {
            $this->partner_not_eligible();
            return;
        }
        //Travelfund should have enough balance to lend money customer.
        if ($this->fund_availability == 'no')
        {
            $this->redirect_fund_not_available();
            return;
        }

        //Case : User do refresh page.
        //Check if customer id is generated for same application.
        //if yes then display next page.
        $aSess = $this->session->userdata('application');
        if (!empty($aSess['cust_id']))
        {
            //Redirect to address details page.
            $this->load->view('application/address_detail');
            return;
        }
        unset($aSess);

        //Validate inputs.
        //Rule : 'application/insert_personal_details'
        if ($this->form_validation->run() === TRUE)
        {

            //prepare birth date from formate.
            $_POST['birth_date'] = $_POST['birth_date_dd'] . '-' . $_POST['birth_date_mm'] . '-' . $_POST['birth_date_yyyy'];

            //Load Model.
            $this->load->model('frontend/customer_model', 'cust');

            //Get user inputs in 'col'=>'value' formate array.
            $aCustData = $this->load_form_input($this->cust->aDBFields, 'cust');

            //unset id as it is AI in db.
            unset($aCustData['id']);

            $oLastApp = $this->cust->eligible_to_apply(array('email' => $aCustData['email'], ));

            log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: oLastApp " . print_r($oLastApp, TRUE));

            //In-complete application.Ask customer to login into existing

            if ($oLastApp->can_apply === TRUE && $oLastApp->app_incompelete === TRUE)
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: incomplete application redirect");

                $this->redirect_incomplete_app();
            }
            //Customer can not apply with same credentials within
            //7 days of loan approval or declined.
            else if ($oLastApp->can_apply === FALSE && $oLastApp->app_incompelete === FALSE)
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: 7 days of loan approval redirect_not_eligible_for_loan ");

                $this->redirect_not_eligible_for_loan('apply_within_72_hours');
            }

            //Customer is registered with us.So only update
            if (isset($oLastApp->cust_id) && !empty($oLastApp->cust_id))
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Customer is registered with us.So only update ");

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Customer Update data " . print_r($aCustData, TRUE));

                //Update only password and modified_datetime.
                $aCustData['modified_datetime'] = date('Y-m-d H:i:s');

                $aData['col_val'] = $aCustData;
                $aData['where']['id'] = $oLastApp->cust_id;
                $this->cust->update($aData);
            }
            else
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: New Customer " . print_r($aCustData, TRUE));

                //Save only new customer.

                $aCustData['created_datetime'] = date('Y-m-d H:i:s');
                $aCustData['modified_datetime'] = date('Y-m-d H:i:s');

                $this->cust->insert($aCustData);
            }

            //Get saved customer with id.
            $aData = $this->cust->get_customer(array('where' => $aCustData));
            $oCust = array_shift($aData);

            $aCustData['id'] = $oCust->id;

            //Load Model.
            $this->load->model('frontend/application_model', 'app');

            //Get user inputs in 'col'=>'value' formate array.
            $aAppData = $this->load_form_input($this->app->aDBFields, 'app');
            //Associated customer.
            $aAppData['cust_id'] = $oCust->id;
            $aAppData['partner_id'] = $this->session->userdata('partner_id');

            $aAppData['lender_id'] = '1';
            //unset id as it is AI in db.
            unset($aAppData['id']);

            $aAppData['created_datetime'] = date('Y-m-d H:i:s');
            $aAppData['modified_datetime'] = date('Y-m-d H:i:s');

            //Save new application.
            $this->app->insert($aAppData);

            log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: New Application " . print_r($aAppData, TRUE));

            //Get saved application with id.
            $aData = $this->app->get_application(array('where' => $aAppData));
            $oApp = array_shift($aData);
            //Associated customer.
            $aAppData['id'] = $oApp->id;

            //Store application details into session.
            $this->session->set_userdata(array('application' => array(
                    'cust_id' => $aCustData["id"],
                    'app_id' => $aAppData["id"],
                    'per_detail' => $aCustData,
                    'app_detail' => $aAppData,
                )));

            //Redirect to address details page.
            $this->load->view('application/address_detail');
        }
        else
        {
            //Error.Render personal detail page again.
            $this->load->view('application/personal_detail');
        }
    }

    /**
     * Redirect to incomplete application page.
     */

    function redirect_incomplete_app()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id  );

        redirect("application/incomplete_app");
    }

    /**
     * Display Incomplete application page.
     */

    function incomplete_app()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //Destroy session.
        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');
        $this->load->view('application/incomplete_app', array('data' => $aData));
    }

    /**
     * Customer not eligible for loan
     */
    function redirect_not_eligible_for_loan()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );
 
        redirect("application/not_eligible_for_loan");
    }

    /**
     * Customer not eligible for loan
     */
    function not_eligible_for_loan()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        $aData['partner_name'] = $this->session->userdata("partner_name");
        $aData['partner_url'] = $this->session->userdata("parent_url");
        $this->load->view('application/customer_not_eligible_for_loan', array('data' => $aData));
    }

    /**
     * Display Address Details form.
     */
    function address_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Travelfund should have enough balance to lend money customer.
            if ($this->fund_availability !== 'yes')
            {
                $this->redirect_fund_not_available();
            }
            else
            {
                $this->load->view("application/address_detail");
            }
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }

    }

    /**
     * Insert address information
     */
    function insert_address_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        $aAddData = $aData = $aSess = array();

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'no')
        {
            $this->partner_not_eligible();
            return;
        }
        //Travelfund should have enough balance to lend money customer.
        if ($this->fund_availability == 'no')
        {
            $this->redirect_fund_not_available();
            return;
        }

        //Case : User do refresh page.
        //Check if address id is generated for same application.
        //if yes then display next page.
        $aSess = $this->session->userdata('application');

        if (isset($aSess['add_id']) && $aSess['app_detail']['app_status'] == 'VCREQ' )
        {
            //Load to address details page.
            $this->load->view('application/employement_detail');
            return;
        }
        unset($aSess);

        //validation rule key application/insert_address_details
        if ($this->form_validation->run() === TRUE)
        {
            //Load Model.
            $this->load->model('frontend/address_model', 'add');

            //Get user inputs in 'col'=>'value' format array.
            $aAddData = $this->load_form_input($this->add->aDBFields, 'add');

            //Get application details from session.
            $aSess = $this->session->userdata('application');

            //unset id as it is AI in db.
            unset($aAddData['id']);
            
            $aAddData['app_id'] = $aSess["app_id"];

            $aAddData['created_datetime'] = date('Y-m-d H:i:s');
            $aAddData['modified_datetime'] = date('Y-m-d H:i:s');

            /**
             *  Version 1.2. Empty response from APS.
             * Update address if it exists in db
             */
             
            if(!empty($aSess['add_id'])){
            
                unset($aAddData['created_datetime']);    
                $aQP['col_val'] = $aAddData;
                $aQP['where']['id'] = $aSess['add_id'] ;

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Update Address " . print_r($aAddData, TRUE));
                            
                //Save new address.
                $this->add->update($aQP);
                
            }else{
                
                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Insert Address " . print_r($aAddData, TRUE));
                            
                //Save new address.
                $this->add->insert($aAddData);
            }

            //Get saved address with id.
            $aData = $this->add->get_address(array('where' => $aAddData));
            $oAdd = array_shift($aData);
            $aAddData['id'] = $oAdd->id;

            $aData = null;
            $oAdd = null;

            //Update applicatoin details into session.
            $aSess['add_id'] = $aAddData['id'];
            $aSess['address'] = $aAddData;
            $this->session->set_userdata(array('application' => $aSess));

            //Submit application to lender.
            //Set customer personal details for lender .
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'set';

            $aAppSess = $this->session->userdata('application');

            $aPerData = $aAppSess['per_detail'];
            $aAppData = $aAppSess['app_detail'];

            //Set key to identify mapping with lender fields.
            $aPerData['ita_key'] = 'per_detail';
            $aReq['method']['arg'] = $aPerData;
            $this->_lender($aReq);

            //Set customer applicatoin details for lender.
            $aReq['method']['arg'] = array();
            $aAppData['ita_key'] = 'app_detail';

            if ($aAppData['sp_terms'] == 'yes' || $aAppData['sp_terms'] == 'Yes')
            {
                $aAppData['sp_terms'] = 'true';
            }
            else
            {
                $aAppData['sp_terms'] = 'false';
            }

            $aReq['method']['arg'] = $aAppData;
            $this->_lender($aReq);

            //Set customr address details for lender.
            $aReq['method']['arg'] = array();
            $aAddData['ita_key'] = 'add_detail';
            $aAddData['country'] = 'UK';
            $aReq['method']['arg'] = $aAddData;
            $this->_lender($aReq);

            //Submit new application.
            $aReq['method']['name'] = 'apply';
            $aReq['method']['arg'] = array();

            $aRespo = $this->_lender($aReq);

            log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: APS Response ' . print_r($aRespo, TRUE));

            $aData = array();
            //update application data received from lender.
            if (!empty($aRespo['len_app_id']) && !empty($aRespo['app_status']))
            {
                //Not a db field.Do not store in db.
                if (isset($aRespo['product_offer']))
                {
                    unset($aRespo['product_offer']);
                }

                //Load Model.
                $this->load->model('frontend/application_model', 'app');
                //Save new application.
                $aData['col_val'] = $aRespo;
                $aData['where']['id'] = $aAppData["id"];

log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: Update Application ' . print_r($aData, TRUE));

                $this->app->update($aData);
            }else{

                //Not a db field.Do not store in db.
                if (isset($aRespo['product_offer']))
                {
                    unset($aRespo['product_offer']);
                }

                //Load Model.
                $this->load->model('frontend/application_model', 'app');
                
                //Update application
                
                $aData['col_val']['tf_status'] = "NO_RESPONSE";
                $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
                $aData['where']['id'] = $aAppData["id"];

log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: Update Application ' . print_r($aData, TRUE));

                $this->app->update($aData,FALSE);
                
                $this->redirect_no_response();
            }

            //VCREQ : Status means
            // - Applicant's about you and address information successfully validated by APS.
            // - Application id is generated.
            //- On applicant's mobile number APS has sent verification code sms.

            //Redirect application in case it is not accepted by APS.
            if ($aRespo['app_status'] != 'VCREQ')
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: redirect_application_decline');

                $this->redirect_application_decline();
            }

            //Load to address details page.
            $this->load->view('application/employement_detail');

        }
        else
        {
            //Redirect to address details page.
            $this->load->view('application/address_detail');
        }
    }

    /* No response from APS.
     * Redirect to no response.
     * */
    function redirect_no_response(){
        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );
        redirect('application/no_response');
    }
    
    /* Display message for no response*/
    function no_response(){
        
        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //Destroy session.
        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');
        
        $this->load->view('application/no_response', array('data' => $aData));
    }
    
    
    /**
     * Display Employement details form.
     */
    function employement_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Travelfund should have enough balance to lend money customer.
            if ($this->fund_availability !== 'yes')
            {
                $this->redirect_fund_not_available();
            }
            else
            {
                $this->load->view("application/employement_detail");
            }

        }
        else
        {
            $this->partner_not_eligible();
            return;
        }

    }

    /**
     * Save employement details.
     */
    function insert_employement_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        $aEmpData = $aSess = $aData = array();

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'no')
        {
            $this->partner_not_eligible();
            return;
        }

        //Travelfund should have enough balance to lend money customer.
        if ($this->fund_availability == 'no')
        {
            $this->redirect_fund_not_available();
            return;
        }

        //Case : User do refresh page.
        //Check if employment id is generated for same application.
        //if yes then display next page.
        $aSess = $this->session->userdata('application');

        if (isset($aSess['emp_id']) 
            && (
                $aSess['app_detail']['app_status'] == 'ACREQ' 
                || $aSess['app_detail']['app_status'] == 'ACPROC' 
                || $aSess['app_detail']['app_status'] == 'ACAUTH'
            ))        
        {
            //load card details page.
            $this->load->view('application/card_details');
            return;
        }
        unset($aSess);

        //validation rule key application/insert_employement_details
        if ($this->form_validation->run() === TRUE)
        {

            //Load Model.
            $this->load->model('frontend/employement_model', 'emp');

            //Get user inputs in 'col'=>'value' format array.
            $aEmpData = $this->load_form_input($this->emp->aDBFields, 'emp');

            //Get application details from session.
            $aSess = $this->session->userdata('application');

            //unset id as it is AI in db.
            unset($aEmpData['id']);
            $aEmpData['app_id'] = $aSess["app_id"];

            $aEmpData['created_datetime'] = date('Y-m-d H:i:s');
            $aEmpData['modified_datetime'] = date('Y-m-d H:i:s');

            

            /**
             *  Version 1.2. Empty response from APS.
             * Update employement if it exists in db
             */
             
            if(!empty($aSess['emp_id'])){
            
                unset($aEmpData['created_datetime']);    
                $aQP['col_val'] = $aEmpData;
                $aQP['where']['id'] = $aSess['emp_id'] ;

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Update Employement " . print_r($aEmpData, TRUE));
                            
                //Save new address.
                $this->emp->update($aQP);
                
            }else{
                
                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Insert Employement " . print_r($aEmpData, TRUE));
                            
                //Save new address.
                $this->emp->insert($aEmpData);
            }

            //Get saved employment details with id.
            $aData = $this->emp->get_employment(array('where' => $aEmpData));
            $oEmp = array_shift($aData);
            $aEmpData['id'] = $oEmp->id;

            $aData = null;
            $oEmp = null;

            //Add employement details into session's application.
            $aSess['emp_id'] = $aEmpData['id'];
            $aSess['employement'] = $aEmpData;
            $this->session->set_userdata(array('application' => $aSess));

            //APS API call

            $aApp = $this->session->userdata('application');

            //Unset as we have sent it before.
            unset($aApp['app_detail']['mobile_phone']);
            unset($aApp['app_detail']['sp_terms']);
            unset($aApp['app_detail']['departure_date']);

            //Application Details.
            $aReq['lender'] = 'APS';
            $aApp['app_detail']['ita_key'] = 'app_detail';
            $aApp['app_detail']['len_app_id'] = $this->session->userdata('len_app_id');
            $aReq['method']['name'] = 'set';
            $aReq['method']['arg'] = $aApp['app_detail'];
            $this->_lender($aReq);

            //Also submit mobile verification code .
            $aEmpData['mobile_verif_code'] = $this->input->post('mobile_verif_code');

            //Employement Details.
            $aReq['lender'] = 'APS';
            $aEmpData['ita_key'] = 'emp_detail';
            $aReq['method']['name'] = 'set';
            $aReq['method']['arg'] = $aEmpData;
            $this->_lender($aReq);

            //Submit new application to APS
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'apply';
            $aReq['method']['arg'] = array();

            $aRespo = $this->_lender($aReq);

            log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: APS Response " . print_r($aRespo, TRUE));

            $aVData['len_app_id'] = $aRespo['len_app_id'];

            //Update application data received from lender.
            if (!empty($aRespo['len_app_id']) && !empty($aRespo['app_status']))
            {
                //Load application
                $this->load->model('frontend/application_model', 'app');

                unset($aRespo['product_offer']);
                //Update application as per response from lender.
                $aData['col_val'] = $aRespo;
                
                //APS return decline status after 3 attempt.
                //So even if verification code is right it return VCREQ for 2 attempts.
                if($aRespo['app_status'] == "VCREQ"){
                    $aData['col_val']['tf_status'] = "VCDEC"; 
                    $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');   
                }
                
                $aData['where']['id'] = $aApp['app_id'];

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Application Update " . print_r($aData, TRUE));

                $this->app->update($aData);

            }else{

                //Not a db field.Do not store in db.
                if (isset($aRespo['product_offer']))
                {
                    unset($aRespo['product_offer']);
                }

                //Load Model.
                $this->load->model('frontend/application_model', 'app');
                //update application
                
                $aData['col_val']['tf_status'] = "NO_RESPONSE";
                $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
                
                $aData['where']['id'] = $aApp['app_id'];

log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: Update Application ' . print_r($aData, TRUE));

                $this->app->update($aData,FALSE);
                
                //Redirect...as there is no response from APS.
                $this->redirect_no_response();
            }

            if ($aRespo['app_status'] != 'ACREQ')
            {

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: redirect_application_decline ");

                $this->redirect_application_decline();
            }

            //load card details page.
            $this->load->view('application/card_details', array('data' => $aVData));

        }
        else
        {
            //Redirect to employement details page.
            $this->load->view('application/employement_detail');
        }
    }

    /* This function display card verification iframe.
     * */
    function card_details()
    {

        $aSess['len_app_id'] = $this->session->userdata('len_app_id');

        log_message('error', __FUNCTION__ . " :: " . $this->session_id .  print_r($aSess, TRUE));

        $this->load->view('application/card_details', array('data' => $aSess));

    }

    /**
     * This function will Send verification code on customer mobile.
     */

    function send_verification_code()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id  );

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'no')
        {
            echo "Can not send verification code as Partner is not eligible to have TravelFund facility.";
            exit();
        }
        //Travelfund should have enough balance to lend money customer.
        if ($this->fund_availability == 'no')
        {
            echo "Can not send verification code as TravelFund do not have enough balance.";
            exit();
        }

        //Get verification sms sent count.
        $sent_attempt = $this->session->userdata("vc_sent_attempt");

        if ((isset($sent_attempt)) && $sent_attempt >= 2)
        {
            echo json_encode(array(
                'error' => 'Opps, there must be a problem.<br><br><a href="http://help.travelfund.co.uk/hc/en-gb/articles/200944681" target="_blank"><u>Click here</u></a> for help',
                'attempt' => 2
            ));
            exit ;
        }
        //Get Pre-contract credit information details from lender.
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'send_varification_sms';
        $aReq['method']['arg'] = array();
        $aRespo = $this->_lender($aReq);

        log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: APS Response " . print_r($aRespo, TRUE));

        if ($aRespo == FALSE)
        {
            echo json_encode(array('error' => 'Can not send verification code.'));
        }
        else
        {
            if($sent_attempt=="")
            {
                $this->session->set_userdata(array('vc_sent_attempt' => $sent_attempt + 1));
                echo json_encode(array('right' => 'Verification code sent <br>(1 attempt remaining)'));
            }
            else if($sent_attempt==1)
            {
                $this->session->set_userdata(array('vc_sent_attempt' => $sent_attempt + 1));
                echo json_encode(array('right' => 'Verification code sent'));
            }    
            
        }
        exit ;
    }

    /**
     * Payment inprocess
     * this function only show progress bar
     */
    function payment_inprocess()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );
 
        $this->load->view("application/payment_inprocess");
    }

    /**
     * This function only return ajax check to sucess msg & redirect to insert card details function from View
     */
    function payment_varification()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        if ($this->fund_availability !== 'yes')
        {
            $this->redirect_fund_not_available();
        }
        else
        {
            echo "yes";
            exit ;
            //call in_process time being
        }

    }

    /**
     * This will display agreement details page.
     */
    function agreement_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Travelfund should have enough balance to lend money customer.
            if ($this->fund_availability !== 'yes')
            {
                $this->redirect_fund_not_available();
            }
            else
            {
                //Get application details from session.
                $aSess = $this->session->userdata('application');
                $aOffer = $this->session->userdata('product_offer');

                //Get Pre-contract credit information details from lender.
                $aReq['lender'] = 'APS';
                $aReq['method']['name'] = 'get_secci';
                $aReq['method']['arg'] = array();
                $aRespo['secci'] = $this->_lender($aReq);

                //Get Credit Agreement details from lender.
                $aReq['lender'] = 'APS';
                $aReq['method']['name'] = 'get_credit_agreement';
                $aReq['method']['arg'] = array();
                $aRespo['ci'] = $this->_lender($aReq);
                
                $aRespo['product_offer'] = $aOffer;

                log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: APS Response FROM Session " . print_r($aRespo['product_offer'], TRUE));

                $this->load->view("application/agreement_detail", array('data' => $aRespo));
            }
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }
    }

    function agreement_inprocess()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id  );

        //validation rule key application/agreement_details
        if ($this->form_validation->run() === TRUE)
        {
            //load application model
            $this->load->model('frontend/application_model', 'app');

            //Get application details from session.
            $aSess = $this->session->userdata('application');

            //Get user inputs in 'col'=>'value' format array.
            $aQParam['col_val'] = $this->load_form_input($this->app->aDBFields, 'app');
            $aQParam['where']['id'] = $aSess["app_id"];

            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Update Application " . print_r($aQParam, TRUE));

            //Update application terms.
            $this->app->update($aQParam);
            //Update session.
            $aSess['app_detail']['accept_terms'] = $aQParam['col_val']['accept_terms'];
            $this->session->set_userdata(array('application' => $aSess));

            $this->load->view("application/agreement_inprocess");
        }
        else
        {

            //Get application details from session.
            $aSess = $this->session->userdata('application');
            $aOffer = $this->session->userdata('product_offer');

            //Get Pre-contract credit information details from lender.
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'get_secci';
            $aReq['method']['arg'] = array();
            $aRespo['secci'] = $this->_lender($aReq);

            //Get Credit Agreement details from lender.
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'get_credit_agreement';
            $aReq['method']['arg'] = array();
            $aRespo['ci'] = $this->_lender($aReq);

            $aRespo['product_offer'] = $aOffer;

            $this->load->view("application/agreement_detail", array('data' => $aRespo));

        }
    }

    /**
     * This function will submit final application to APS.
     *
     */
    function final_submit_aps()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        $aSess = $this->session->userdata('application');

        //Set values.
        $aReq['lender'] = 'APS';
        $aApp['app_detail']['ita_key'] = 'app_detail';
        $aApp['app_detail']['len_app_id'] = $this->session->userdata('len_app_id');

        if ($aSess['app_detail']['accept_terms'] == 'yes')
        {
            $aApp['app_detail']['accept_terms'] = 'true';
        }
        else
        {
            $aApp['app_detail']['accept_terms'] = 'false';
        }

        $aReq['method']['name'] = 'set';
        $aReq['method']['arg'] = $aApp['app_detail'];
        $this->_lender($aReq);

        //Prevent double set
        //Remove in 2.0
        //$aRespo = $this->_lender($aReq);

        //Submit  to APS
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'apply';
        $aReq['method']['arg'] = array();
        $aRespo = $this->_lender($aReq);

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . ' :: APS Response ' . print_r($aRespo, TRUE));

        //Load application
        $this->load->model('frontend/application_model', 'app');

        if(!empty($aRespo['app_status'])){
            
            //Update application as per response from lender.
            $aData['col_val']['app_status'] = $aRespo['app_status'];
            $aData['where']['id'] = $aSess['app_id'];
            
            //Update application status.
            $this->app->update($aData);
                
        }else{
            //Update application as per response from lender.
            $aData['col_val']['tf_status']="NO_RESPONSE";
            $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
            $aData['where']['id'] = $aSess['app_id'];
            
            //Update application status.
            $this->app->update($aData,FALSE);
        }
        
        log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Application Update " . print_r($aData, TRUE));        
        
        $aParent['partner_url'] = $this->session->userdata('parent_url');
        $aParent['partner_name'] = $this->session->userdata('partner_name');

        echo "Yes";
        exit ;
    }

    /**
     * Application process is complete.
     * Display final message.
     */

    function application_complete()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            //Get application details from session.
            $aSess = $this->session->userdata('application');
            $aOffer = $this->session->userdata('product_offer');

            //load application model
            $this->load->model('frontend/application_model', 'app');

            //Get user inputs in 'col'=>'value' format array.
            $aQParam['col_val']['account_number'] = $aOffer['accountNumber'];
            
            if(empty($aOffer['accountNumber'])){
                $aQParam['col_val']['tf_status']="NO_RESPONSE";
                $aQParam['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
            }
            
            $aQParam['where']['id'] = $aSess["app_id"];

            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Update Application " . print_r($aQParam, TRUE));

            //Update application terms.
            $this->app->update($aQParam,FALSE);

            $aParent['partner_url'] = $this->session->userdata('parent_url');
            $aParent['partner_name'] = $this->session->userdata('partner_name');

            //Account numbre not generated. 
            //Redirect 
            if(empty($aOffer['accountNumber'])){
                $this->redirect_no_response();
            }

            //mail send
            $aData["email"] = $aSess["per_detail"]["email"];
            $aData["name"] = $aSess["per_detail"]["first_name"] . " " . $aSess["per_detail"]["last_name"];

            $aData["credit_limit"] = $aOffer['creditLimit'];
            $aData["interest_rate"] = $aOffer['PurchaseAPR'] . "%";
            $aData["min_monthly_payment"] = "8.3";

            if ($aOffer['depositRequired'] == '1')
            {
                $aData["deposit_require"] = '<tr><td></td><td>Deposit required:</td><td><span style="font-weight:bold;">10%</span> <span style="font-size:12px;">(only required if travelling within 45 days)</span></td></tr>';
            }
            else
            {
                $aData["deposit_require"] = '<tr><td></td><td>Deposit required:</td><td><span style="font-weight:bold;">N/A</span></td></tr>';
            }

            $aData["tags"] = "3-welcome-to-travelfund";
            $aData["email_type"] = "3-welcome-to-travelfund";

            $aData['apply_now'] = base_url() . "application/personal_details";
            $aData["merge_data"] = array(
                'name' => $aData['name'],
                "credit_limit" => $aData['credit_limit'],
                "interest_rate" => $aData['interest_rate'],
                "min_monthly_payment" => $aData["min_monthly_payment"],
                "deposit_require" => $aData["deposit_require"],
            );

            $aData["tags"] = array('tags' => $aData['tags']);

            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Email " . print_r($aData, TRUE));

            //Load Email library
            $this->load->library("Email");

            //send command mail function
            $this->email->configure_email($aData);

            //Load view.
            $this->load->view("application/application_complete", array(
                'data' => $aOffer,
                'partner' => $aParent
            ));
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }
    }

    /**
     * This function will get application status.
     */
    function get_app_status()
    {
        //Submit  to APS
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'get_status';
        $aReq['method']['arg'] = array();
        $aRespo = $this->_lender($aReq);

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: APS Response " . print_r($aRespo, TRUE));

        //load application model
        $this->load->model('frontend/application_model', 'app');

        //Get application details from session.
        $aSess = $this->session->userdata('application');

        //Get user inputs in 'col'=>'value' format array.

        if (!empty($aRespo['app_status']) && !empty($aRespo['len_app_id']))
        {
            $aQParam['col_val']['app_status'] = $aRespo['app_status'];
            $aQParam['where']['id'] = $aSess["app_id"];

            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Update Application " . print_r($aQParam, TRUE));

            //Update application terms.
            $this->app->update($aQParam);
        }else{

            //Not a db field.Do not store in db.
            if (isset($aRespo['product_offer']))
            {
                unset($aRespo['product_offer']);
            }

            //Load Model.
            $this->load->model('frontend/application_model', 'app');
            
            //Update application
            $aData['col_val']['tf_status'] = "NO_RESPONSE";
            $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
            
            $aData['where']['id'] = $aAppData["id"];

log_message('error', __FUNCTION__ . " :: " . $this->session_id .  ' :: Update Application ' . print_r($aData, TRUE));

            $this->app->update($aData,FALSE);
        }

        if ($this->input->is_ajax_request())
        {
            !empty($aRespo['app_status']) ? $status = $aRespo['app_status'] : $status = 'NO_RESPONSE';
			
log_message('error', __FUNCTION__ . " Ajax response to browser :: " . $this->session_id .  ' :: Update Application ' . print_r($status, TRUE));
			
			
            echo json_encode(array('status' => $status));
            exit ;
        }

    }

    /**
     * Partner do not have eligibilty to offer TF facility to it's customer.
     */
    function partner_not_eligible()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        $this->load->view("application/partner_not_eligibility");
    }

    function redirect_fund_not_available()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        redirect("/application/fund_not_available");
    }

    /**
     * Fund not available with TravelFund.
     */
    function fund_not_available()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');

        $this->load->view("application/fund_not_available", array('data' => $aData));
    }

    /**
     * Display customer eligibilty form
     */
    function customer_eligiblity_details()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id );

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            $this->load->view("application/customer_eligiblity_detail");
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }
    }

    /**
     * Display respose of customer's eligibilty for loan
     */
    function customer_eligibility_response()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        //Render calling function accordingly request
        $front_eligibility_page = $this->input->post('front_eligibility', true);

        //Validate inputs.
        //Rule : 'application/insert_personal_details'
        if ($this->form_validation->run() === TRUE)
        {

            $dob = $this->input->post('birth_date_yyyy', true) . "-" . $this->input->post('birth_date_mm', true) . "-" . $this->input->post('birth_date_dd', true);
            $terms_agreed = ($this->input->post('accept_terms', true) != '') ? TRUE : FALSE;
            $oDate = DateTime::createFromFormat('d-m-Y', $this->input->post('departure_date'));

            $dd = $oDate->format('Y-m-d');
            $add = $this->input->post('house_number', true) 
                    . " " 
                    . $this->input->post('post_code', true); 

            $aParams['eligibility'] = array(
                'Title' => $this->input->post('title', true),
                'FirstName' => $this->input->post('first_name', true),
                'LastName' => $this->input->post('last_name', true),
                'DOB' => $dob,
                //'DOB'                   => '1964-01-01',
                'House' => $this->input->post('house_number', true),
                'PostCode' => $this->input->post('post_code', true),
                'TimeAtAddress' => $this->input->post('time_at_add', true),
                'EmploymentStatus' => 'Full time',
                'ResidentialStatus' => 'Homeowner',
                'Income' => $this->input->post('anum_income', true),
                'ProductType' => 'Purchases',
                'BTAmount' => $this->input->post('anum_hs_income_b_tax', true),
                'CurrentBank' => 9999,
                'ClientReference' => 'Travelfund',
                'TermsAgreed' => $terms_agreed,
                'DepartureDate' => "'{$dd}'",
                'EmailAddress' => $this->input->post('email'),
                'Address1'=>$add,
                'Address2'=>$add,
                'Address3'=>$add,
                
            );

            $req = array(
                'credentials' => array(
                    'UserName' => 'Travelfund',
                    'Password' => 'Travelfund'
                ),
                'webSession' => array(
                    'IPAddress' => $_SERVER['SERVER_ADDR'],
                    'UserAgent' => $_SERVER['HTTP_USER_AGENT'],
                    'DeviceType' => 0
                ),
                'applicant' => array(
                    'Title' => $aParams['eligibility']['Title'],
                    'FirstName' => $aParams['eligibility']['FirstName'],
                    'LastName' => $aParams['eligibility']['LastName'],
                    'DOB' => $aParams['eligibility']['DOB'],
                    'House' => $aParams['eligibility']['House'],
                    'PostCode' => $aParams['eligibility']['PostCode'],
                    'TimeAtAddress' => $aParams['eligibility']['TimeAtAddress'],
                    'EmploymentStatus' => $aParams['eligibility']['EmploymentStatus'],
                    'ResidentialStatus' => $aParams['eligibility']['ResidentialStatus'],
                    'Income' => $aParams['eligibility']['Income'],
                    'ProductType' => $aParams['eligibility']['ProductType'],
                    'BTAmount' => $aParams['eligibility']['BTAmount'],
                    'CurrentBank' => $aParams['eligibility']['CurrentBank'],
                    'ClientReference' => $aParams['eligibility']['ClientReference'],
                    'TermsAgreed' => $aParams['eligibility']['TermsAgreed'],
                    'EmailAddress' => $aParams['eligibility']['EmailAddress'],
                    'Address1'=>$aParams['eligibility']['Address1'],
                    'Address2'=>$aParams['eligibility']['Address2'],
                    'Address3'=>$aParams['eligibility']['Address3'],
                ),
                'requestedProducts' => array('RequestedProduct' => array(
                        'ProductCode' => 'Travelfund',
                        'ProductSet' => 1,
                        'ProductRank' => 1,
                    ), ),
                'bespokeInputs' => array('BespokeInputs' => array( array(
                            'Name' => 'DepartureDate',
                            'Value' => $aParams['eligibility']['DepartureDate'],
                        ), )),
            );

            try
            {
                //create the web service client
                //$client = new SoapClient("https://securepreprod.hdd2.co.uk/webservicesv3/enquiryv2.asmx?wsdl");
                $client = new SoapClient("https://secure.hdd2.co.uk/WebServicesV3/enquiryv2.asmx?wsdl");
                // LIVE URL

                $res = $client->ApplicantScore($req);
                $res = $res->ApplicantScoreResult;

            }
            catch(Exception $e)
            {
                $this->redirect_hd_server_down($front_eligibility_page);
            }
            
            $partner_code = $this->session->userdata('partner_code');
                
            //If partner code is empty then possiblity is travelfund.    
            if(empty($partner_code)){
                $partner_code='Travel-Fund';
            }                

            //Product likelihood score = 1 means
            //The applicant’s likelihood of being approved for this product
            if (isset($res->Products->Product->ProductLikelihood) && $res->Products->Product->ProductLikelihood == '1')
            {
                
                //load eligiblity template
                //MAINTAIN records in database if Status has Approved
                $aData["title"] = $aParams['eligibility']['Title'];
                $aData["first_name"] = $aParams['eligibility']['FirstName'];
                $aData["last_name"] = $aParams['eligibility']['LastName'];
                $aData["birth_date"] = $dob;
                $aData["house_number"] = $aParams['eligibility']['House'];
                $aData["post_code"] = $aParams['eligibility']['PostCode'];
                $aData["howmany_add"] = $aParams['eligibility']['TimeAtAddress'];
                $aData["email"] = $aParams['eligibility']['EmailAddress'];
                $aData["emp_status"] = $aParams['eligibility']['EmploymentStatus'];
                $aData["anum_income"] = $aParams['eligibility']['Income'];
                $aData["anum_hs_income_b_tax"] = $aParams['eligibility']['BTAmount'];
                $aData["departure_date"] = $dd;
                $aData["status"] = 'HD Decision Approved';
                $aData["send"] = '0';
                $aData['created_datetime'] = date('Y-m-d H:i:s');
                $aData['partner_code']=$partner_code;

                //Store email into database.
                $this->db->insert('email', $aData);

                /**
                 * send mail to customer
                 */

                $aData["email"] = $this->input->post('email', true);
                $aData["name"] = $this->input->post('first_name', true);

                $aData["tags"] = "1-hd-decision-acceptance";
                $aData["base_url"] = base_url();

                $aData["email_type"] = "1-hd-decision-acceptance";

                $aData['apply_now'] = base_url();
                $aData["merge_data"] = array(
                    'base_url' => $aData['base_url'],
                    'name' => $aData['name'],
                    "apply_now" => $aData['apply_now']
                );

                $aData["tags"] = array('tags' => $aData['tags']);

                //Load Email library
                $this->load->library("Email");

                //send command mail function
                $this->email->configure_email($aData);
                //$this->load->view("application/customer_eligibility_no", array('data' => $res)); //if hd decision have no fund

                //load eligiblity template
                if ($front_eligibility_page == 1)
                {
                    redirect("eligibilityCheckYes");
                }
                else
                {
                    $this->load->view("application/customer_eligibility_yes", array('data' => $res));
                }

            }
            else
            {
                //load eligiblity template
                //MAINTAIN records in database if Status has Decline
                $aData["title"] = $aParams['eligibility']['Title'];
                $aData["first_name"] = $aParams['eligibility']['FirstName'];
                $aData["last_name"] = $aParams['eligibility']['LastName'];
                $aData["birth_date"] = $dob;
                $aData["house_number"] = $aParams['eligibility']['House'];
                $aData["post_code"] = $aParams['eligibility']['PostCode'];
                $aData["howmany_add"] = $aParams['eligibility']['TimeAtAddress'];
                $aData["email"] = $aParams['eligibility']['EmailAddress'];
                $aData["emp_status"] = $aParams['eligibility']['EmploymentStatus'];
                $aData["anum_income"] = $aParams['eligibility']['Income'];
                $aData["anum_hs_income_b_tax"] = $aParams['eligibility']['BTAmount'];
                $aData["departure_date"] = $dd;
                $aData["send"] = '0';
                $aData['created_datetime'] = date('Y-m-d H:i:s');

                $aData["status"] = 'HD Decision Decline';
                $aData['partner_code']=$partner_code;

                //Store email into database.
                $this->db->insert('email', $aData);

                $aParent['partner_url'] = $this->session->userdata('parent_url');
                $aParent['partner_name'] = $this->session->userdata('partner_name');

                if ($front_eligibility_page == 1)
                {
                    redirect("eligibilityCheckNo");
                }
                else
                {
                    $this->load->view("application/customer_eligibility_no", array('data' => $aParent));
                }

            }
        }
        else
        {
            if ($front_eligibility_page == 1)
            {
                $this->load->view("eligibilityCheck");

            }
            else
            {
                $this->load->view("application/customer_eligiblity_detail");
            }
        }
        //end
    }

    /**
     * Display respose of customer's eligibilty for loan
     */
    function customer_eligibility_response_no()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        $this->load->view("application/customer_eligibility_no");
    }

    /**
     * Display FAQ's
     */
    function faq()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        $this->load->view("application/faq");
    }

    /**
     * Display login form for registered user.
     */
    function login($partner_code = '')
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        //Checkout.
        if (!empty($partner_code))
        {

            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " :: Checkout widget");

            //Start new session.
            $this->session->sess_create();
            $this->session_id = $this->session->userdata('session_id');
            //Check for partner status and registration with TF.
            //Load Model.
            $this->load->model('frontend/partner_model', 'partner');

            //Check if partner(OTA) is eligible to have TF facility.
            if (!empty($partner_code) && ($this->partner->check_eligibility(array('code' => $partner_code)) === TRUE))
            {
                //Partner is allowed to have TF application.
                //Store into session.
                $this->session->set_userdata(array('partner_eligibility' => 'yes'));
                $this->session->set_userdata(array('widget_action' => 'login'));

                //webpage url at which TF widget is placed.
                $this->session->set_userdata(array('parent_url' => $this->input->get('partner_url')));

                $this->partner_eligibility = 'yes';
                $this->load->view("application/checkout_login");
                return;
            }
        }

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes')
        {
            $this->load->view("application/login");
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }
    }//fun

    /**
     * Authenticate user.
     */

    function authenticate()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id);

        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'no')
        {
            $this->partner_not_eligible();
            return;
        }

        //Validate inputs.
        //Rule : 'application/authenticate'
        if ($this->form_validation->run() === TRUE)
        {

            $this->load->model('frontend/customer_model', 'cust');

            $aQParams['where'] = array(
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password')),
            );

            //Authenticate user
            if ($this->cust->authenticate($aQParams))
            {
                //Get full application.
                //Get customer.
                unset($aQParams['where']['password']);
                $aCust = $this->cust->get_customer($aQParams);

                log_message('error', __FUNCTION__ . " :: " . $this->session_id . " Customer authenticated Customer Data " . print_r($aCust, TRUE));

                //Get application last application.
                if (!empty($aCust[0]->id))
                {
                    $this->load->model('frontend/application_model', 'app');
                    $aApp = $this->app->get_application(array(
                        'where' => array('cust_id' => $aCust[0]->id, ),
                        'order_by' => 'modified_datetime DESC'
                    ));

                    log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Application " . print_r($aApp, TRUE));

                    //If application is decline .... display
                    //your account is expired.
                    if ($aApp[0]->app_status == 'NVALID' || $aApp[0]->app_status == 'DUPE' || $aApp[0]->app_status == 'VCDEC' || $aApp[0]->app_status == 'ACDEC' || $aApp[0]->app_status == 'UWDEC')
                    {
                        if($this->session->userdata("widget_action") == "application"){
                            
                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " :: " . $this->session_id . " redirect_account_exipre");
                            //Application timelime expire even if approved.
                            $this->redirect_account_exipre();
                                
                        }
                        elseif ($this->session->userdata("widget_action") == "login")
                        {
        
                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " Application life span expire even if approved.");
                            //Application timelime expire even if approved.
                            $this->redirect_checkout_account_expire();
                            
                        }
                    }

                    //Display card details only for 72 hours.
                    if (!empty($aApp[0]->id))
                    {

                        $d1 = new DateTime($aApp[0]->modified_datetime);
                        $d2 = new DateTime("now");

                        $diff = $d2->diff($d1);

                        $seconds = ($diff->days) * 24 * 3600;
                        $seconds += ($diff->h) * 3600;
                        $seconds += ($diff->i) * 60;
                        $seconds += ($diff->s);

                        if (!empty($aApp[0]->account_number))
                        {
                            //72*3600
                            //Application within 72 hours.
                            if ($seconds < 259200)
                            {

                                $seconds = 259200 - $seconds;

                                //Convert seconds into time.
                                $H = floor($seconds / 3600);
                                $i = ($seconds / 60) % 60;
                                $s = $seconds % 60;

                                if (strlen($H) == 1)
                                    $H = "0" . $H;

                                if (strlen($i) == 1)
                                    $i = "0" . $i;

                                $time_left = $H . ":" . $i;

                                log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " Application since :: " . $time_left);

                                //Aproved application has life span of 72 hours.
                                //If user login within 72hours display account details.
                                //Store application details into session.
                                $this->session->set_userdata(array('application' => array(
                                        'time_left' => $time_left,
                                        'cust_id' => $aCust[0]->id,
                                        'app_id' => $aApp[0]->id,
                                        'per_detail' => get_object_vars($aCust[0]),
                                        'app_detail' => get_object_vars($aApp[0]),
                                    )));

                                if ($this->session->userdata("widget_action") == "application")
                                {

                                    log_message('error', __FUNCTION__. " :: " . $this->session_id . " :: " . $this->session_id . " :: " . $this->session_id . " Application Login -> redirect_get_account_details ");

                                    $this->redirect_get_account_details();
                                }
                                else if ($this->session->userdata("widget_action") == "login")
                                {

                                    log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " Checkout Login -> api_card_details ");
                                    //Checkout.
                                    //User is authenticated.User has loan approved.
                                    redirect('application/api_card_details');
                                }
                            }
                        }//if
                    }//if
                }//if

                
                //If Jasper account is approved then do not apply time limit for his account when he do checkout/transaction.
                //this for test purpose.Test will be on live.
                    
                if(!empty($aApp[0]->account_number) 
                    && $aCust[0]->email == 'jasperdykes@gmail.com')
                {
                
                        log_message('error',' Jasper login ' .print_r($aCust[0]->email,true));
                
                        
                        $this->session->set_userdata(array('application' => array(
                                        'time_left' => $time_left,
                                        'cust_id' => $aCust[0]->id,
                                        'app_id' => $aApp[0]->id,
                                        'per_detail' => get_object_vars($aCust[0]),
                                        'app_detail' => get_object_vars($aApp[0]),
                        )));
                
                        if ($this->session->userdata("widget_action") == "application")
                        {

                            log_message('error', __FUNCTION__. " :: " . $this->session_id . " :: " . $this->session_id . " :: " . $this->session_id . " Application Login -> redirect_get_account_details ");

                            $this->redirect_get_account_details();
                        }
                        else if ($this->session->userdata("widget_action") == "login")
                        {

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " Checkout Login -> api_card_details ");
                            //Checkout.
                            //User is authenticated.User has loan approved.
                            redirect('application/api_card_details');
                        }
                }
                        
                //As per new rule credit is availabe for 7 (604800 seconds) day.
                if(!empty($aApp[0]->account_number) 
                    && $seconds < 604800 
                    ){
                    
					$seconds = 604800 - $seconds;

                    //Convert seconds into time.
                    $H = floor($seconds / 3600);
                    $i = ($seconds / 60) % 60;
                    $s = $seconds % 60;

                    if (strlen($H) == 1)
                        $H = "0" . $H;

                    if (strlen($i) == 1)
                        $i = "0" . $i;

                    $time_left = $H . ":" . $i;
								
                    $this->session->set_userdata(array('application' => array(
                            'time_left' => $time_left,
                            'cust_id' => $aCust[0]->id,
                            'app_id' => $aApp[0]->id,
                            'per_detail' => get_object_vars($aCust[0]),
                            'app_detail' => get_object_vars($aApp[0]),
                    )));
                    
                    
					
					if ($this->session->userdata("widget_action") == "application")
                    {

                        log_message('error', __FUNCTION__. " :: " . $this->session_id . " :: " . $this->session_id . " :: " . $this->session_id . " Application Login -> redirect_get_account_details ");

                        $this->redirect_get_account_details();
                    }
                    else if ($this->session->userdata("widget_action") == "login")
                    {

                        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: " . $this->session_id . " Checkout Login -> api_card_details ");
                        //Checkout.
                        //User is authenticated.User has loan approved.
                        redirect('application/api_card_details');
                    }
                        
                    //Checkout.
                    //User is authenticated.User has loan approved.
                    //redirect('application/api_card_details');                
                    
                }
                
                
                
                //If application older then 30 days then display your account
                //is closed.go for new applicaiton.
                //30*24*3600
                if ($seconds > 2592000)
                {

                    log_message('error', __FUNCTION__ . " application older then 30 days redirect_account_exipre");

                    $this->redirect_account_exipre();
                }

                if ($this->session->userdata("widget_action") == "application")
                {
                    //Get address.
                    if (!empty($aApp[0]->id))
                    {
                        $this->load->model('frontend/address_model', 'add');
                        $aAdd = $this->add->get_address(array('where' => array('app_id' => $aApp[0]->id, )));
                    }
                    //Get employmenet.
                    if (!empty($aApp[0]->id))
                    {
                        $this->load->model('frontend/employement_model', 'emp');
                        $aEmp = $this->emp->get_employment(array('where' => array('app_id' => $aApp[0]->id)));
                    }

                    //Display form which user need to feel for incomplete application.
                    if (!empty($aCust[0]->id) && !empty($aApp[0]->id))
                    {

                        //Check for fund availability.
                        //Check if fund is avaliable with travelfund to lend customer.
                        $aReq['lender'] = 'APS';
                        $aReq['method']['name'] = 'fund_availability';
                        $aReq['method']['arg'] = array();

                        $aData = $this->_lender($aReq);

                        //Fund not available with TravelFund
                        if ($aData === FALSE || (isset($aData['avail_fund']) && $aData['avail_fund'] == 0))
                        {

                            log_message('error', __FUNCTION__. " :: " . $this->session_id  . " :: redirect_fund_not_available");

                            $this->redirect_fund_not_available();
                        }

                        //if (empty($aAdd[0]->id) && $aApp[0]->app_status == "NONE")
                        //Display address form
                        if ($aApp[0]->app_status == "NONE")
                        {
                           
                           //Version 1.2 - No response from APS. 
                            if(!empty($aAdd[0]->id)){
                                $aALS = array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'add_id' => $aAdd[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                    'address' => get_object_vars($aAdd[0]),
                                );
                            }else{
                                $aALS = array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                );
                            }
                            //Store application details into session.
                            $this->session->set_userdata(array(
                                'application' => $aALS,
                                'len_app_id' => $aApp[0]->len_app_id,
                            ));

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Redirect to address");
 
                            //Redirect address.
                            redirect('application/address_details');
                        }
                        //else if (empty($aEmp[0]->id) && $aApp[0]->app_status == "VCREQ")
                        //display employment form.
                        else if ($aApp[0]->app_status == "VCREQ")
                        {
                            
                            //Version 1.2 - No response from APS.
                            if(!empty($aEmp[0]->id)){
                                $aALS =array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'add_id' => $aAdd[0]->id,
                                    'emp_id' => $aEmp[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                    'address' => get_object_vars($aAdd[0]),
                                    'employement' => get_object_vars($aEmp[0]),
                                );
                            }else{
                                $aALS = array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'add_id' => $aAdd[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                    'address' => get_object_vars($aAdd[0]),
                                );
                            }
                            //Store application details into session.
                            $this->session->set_userdata(array(
                                'application' => $aALS,
                                'len_app_id' => $aApp[0]->len_app_id,
                            ));

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Redirect employement page");

                            //Redirect employement page.
                            redirect('application/employement_details');
                        }
                        //Display card verification page.
                        else if ($aApp[0]->app_status == "ACREQ" 
                                    || $aApp[0]->app_status == "ACAUTH" 
                                    || $aApp[0]->app_status == "ACPROC")
                        {
                            //Store application details into session.
                            $this->session->set_userdata(array(
                                'application' => array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'add_id' => $aAdd[0]->id,
                                    'emp_id' => $aEmp[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                    'address' => get_object_vars($aAdd[0]),
                                    'employement' => get_object_vars($aEmp[0]),
                                ),
                                'len_app_id' => $aApp[0]->len_app_id,
                            ));

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id .  " :: Redirect to payment verification page");

                            //Redirect payment verification page which will authorize card.
                            redirect('application/card_details');
                        }
                        //Display agreement page.
                        else if ( $aApp[0]->app_status == "FULL" && empty($aApp[0]->account_number))
                        {
                            //Store application details into session.
                            $this->session->set_userdata(array(
                                'application' => array(
                                    'cust_id' => $aCust[0]->id,
                                    'app_id' => $aApp[0]->id,
                                    'add_id' => $aAdd[0]->id,
                                    'emp_id' => $aEmp[0]->id,
                                    'per_detail' => get_object_vars($aCust[0]),
                                    'app_detail' => get_object_vars($aApp[0]),
                                    'address' => get_object_vars($aAdd[0]),
                                    'employement' => get_object_vars($aEmp[0]),
                                ),
                                'len_app_id' => $aApp[0]->len_app_id,
                            ));

                            //Get product offer from APS as we do not store it in db.
                            //It is only in session.

                            $this->get_app_status();

                            //Redirect to agreement form.

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: Redirect to agreement form.");

                            redirect('application/agreement_details');
                        }
                        else
                        {

                            log_message('error', __FUNCTION__ . " :: " . $this->session_id . " Application life span expire even if approved.");

                            //Application life span expire even if approved.
                            $this->redirect_account_exipre();
                        }
                    }//if

                }//if
                elseif ($this->session->userdata("widget_action") == "login")
                {

                    log_message('error', __FUNCTION__ . " :: " . $this->session_id . " Application life span expire even if approved.");

                    //Application timelime expire even if approved.
                    $this->redirect_checkout_account_expire();
                }
            }
            else
            {
                //Set custom error.
                $this->form_validation->set_error('invalide_credentials', 'Incorrect email or password');
                //Error.Render login page again.
                if ($this->session->userdata('widget_action') == 'login')
                {
                    $this->load->view('application/checkout_login');
                }
                else
                {

                    $this->load->view('application/login');
                }

            }

        }
        else
        {
            //Error.Render login page again.
            if ($this->session->userdata('widget_action') == 'login')
            {
                $this->load->view('application/checkout_login');
            }
            else
            {

                $this->load->view('application/login');
            }

        }

    }//fun

    function redirect_checkout_account_expire(){
        redirect('application/checkout_account_expire');
    }
    
    function checkout_account_expire(){
        
        //Destroy session.
        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');
        
        //Destroy session.
        $this->session->sess_destroy();
        
        $this->load->view('application/checkout_account_expire',array('data'=>$aData));
    }

    /* Redirect HD Sever is down.*/
    function redirect_hd_server_down($front_eligibility_page)
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        redirect("application/hd_server_down/$front_eligibility_page");
    }

    /* HD sever down.*/
    function hd_server_down($front_eligibility_page = 0)
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        if ($front_eligibility_page == 1)
        {
            $this->load->view('application/front_hd_server_down');
        }
        else
        {
            $this->load->view('application/hd_server_down');
        }

    }

    /**
     * Account has expired.
     */
    function account_exipre()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        //Destroy session.
        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');
        
        //Destroy session.
        $this->session->sess_destroy();
        $this->load->view('application/account_exipre',array('data'=>$aData));
    }

    /**
     * Redirect to account expire page
     */
    function redirect_account_exipre()
    {

        log_message('error', __FUNCTION__ . " :: " . $this->session_id);

        redirect('application/account_exipre');
    }

    /**
     * Redirect to application decline file.
     */

    function redirect_application_decline()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id );

        redirect('application/application_decline');
    }

    /**
     * Application decline.
     */
    function application_decline()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        //Destroy session.
        $aData['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner_name'] = $this->session->userdata('partner_name');

        $this->load->view('application/application_decline', array('data' => $aData));
        
        //Distroy session.
        $this->session->sess_destroy();
    }

    /**
     * Redirect to account detail page.
     */
    function redirect_get_account_details()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        redirect('application/get_account_details');
    }

    /**
     * Get account details from aps.
     */
    function get_account_details()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        //Get application from session.
        $aApp = $this->session->userdata('application');

        //Get card details.
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'get_account_summary';
        $aReq['method']['arg'] = array('acc_num' => $aApp['app_detail']['account_number']);

        $aData = $this->_lender($aReq);

        //No response then register it.
        if(empty($aData)){
            
            //load application model
            $this->load->model('frontend/application_model', 'app');
            
            //Save new application.
            $aTemp['col_val']['tf_status'] = "LOGIN_NO_RESPONSE";
            $aTemp['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
            
            $aTemp['where']['id'] = $aApp['app_detail']['id'];
            
            $this->app->update($aTemp,FALSE);
            
            //Redirect...as there is no response from APS.
            $this->redirect_no_response();
            
        }
            
        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: APS Response " . print_r($aData, TRUE));

        $aData['application'] = $aApp;
        $aData['partner']['partner_url'] = $this->session->userdata('parent_url');
        $aData['partner']['partner_name'] = $this->session->userdata('partner_name');

        $this->load->view('application/account_details', array('data' => $aData));
    }

    /**
     * Get virtual card details.
     */

    function get_card_details()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        //Get application from session.
        $aApp = $this->session->userdata('application');

        //Get card details.
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'get_card_detail';
        $aReq['method']['arg'] = array('acc_num' => $aApp['app_detail']['account_number']);

        $aData = $this->_lender($aReq);

        log_message('error', __FUNCTION__ . " :: " . $this->session_id . " :: APS Response " . print_r($aData, TRUE));

        echo json_encode($aData);
        exit ;
    }

    /**
     * Logout customer.
     */
    function logout()
    {

        //Get partner code
        $partner_code = $this->session->userdata('partner_code');
        //Destroy session.
        $this->session->sess_destroy();
        //Need to create session after destroy due to bug #1314.
        $this->session->sess_create();
        //Redirect to home page.
        redirect('application/index/' . $partner_code);

    }

    function api_card_details()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);
        //Partner should be eligible to have TF facility for customer.
        if ($this->partner_eligibility == 'yes' && $this->customer_authenticated == 'yes')
        {
            //Get application id.
            $aApp = $this->session->userdata('application');

            //Get customer's virtual card details.
            $aReq['lender'] = 'APS';
            $aReq['method']['name'] = 'get_card_detail';
            $aReq['method']['arg'] = array('acc_num' => $aApp['app_detail']['account_number']);
            $aData = $this->_lender($aReq);

            //No response then register it.
            if(empty($aData)){
                
                //load application model
                $this->load->model('frontend/application_model', 'app');
                
                //Save new application.
                $aTemp['col_val']['tf_status'] = "CHECKOUT_NO_RESPONSE";
                $aTemp['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
                
                $aTemp['where']['id'] = $aApp['app_detail']['id'];
                
                $this->app->update($aTemp,FALSE);
                
                //Redirect...as there is no response from APS.
                $this->redirect_no_response();
                
            }
        
            $aData['partner_name'] = $this->session->userdata('partner_name');
            $aData['partner_url'] = $this->session->userdata('partner_url');

            log_message('error', __FUNCTION__. " :: " . $this->session_id . " :: APS Response " . print_r($aData, TRUE));

            $this->load->view("application/checkout_card_detail", array('data' => $aData));
        }
        else
        {
            $this->partner_not_eligible();
            return;
        }

    }

    /**
     * Check field for validation through ajax call.
     */
    function validate()
    {
        $field = $this->input->post('field');
        $label = $this->input->post('label');
        $rule = $this->input->post('rule');

        //Set rule for field having value.
        $this->form_validation->set_rules($field, $label, $rule);
        //Run field validation.
        $this->form_validation->run();
        //Get error.
        $this->form_validation->set_error_delimiters("", "");

        $err = $this->form_validation->error($field);

        if (!empty($err))
        {
            echo json_encode(array('error' => $err));
        }
        else
        {
            echo json_encode(array('right' => 'yes'));
        }
        exit ;
    }

    /**
     * Check if fund is availabe with lender for TravelFund.
     * @param array
     */

    private function _lender($aReq)
    {
        //Load wrapper
        if (!isset($this->lender))
            $this->load->library('lender/lender', '', 'lender');
        //Load actual lender
        if (!isset($this->lender->lender))
            $this->lender->load($aReq['lender']);
        //Travelfund unique id with Lender.
        return $this->lender->call($aReq['method']);
    }

    /**
     * disable javascript - Any browser
     * Display Javascript Error MSG
     * Developed by: Nirav D.
     */
    function show_javascript_msg()
    {
        $this->load->view("application/show_javascript_msg");
    }

    /**
     * This function retrieve address information based on post code
     */

    function get_address_details($SearchPostcode = '')
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $SearchPostcode = urldecode($SearchPostcode);

        //create the web service client
        $client = new SoapClient("http://services.postcodeanywhere.co.uk/uk/lookup.asmx?wsdl");

        //create the object we will send to the web service
        $FastAddressRequest = new FastAddressRequest;
        $FastAddressRequest->Postcode = $SearchPostcode;
        $FastAddressRequest->Language = "enLanguageEnglish";
        $FastAddressRequest->ContentType = "enContentStandardAddress";
        $FastAddressRequest->AccountCode = "TRAVE11200";
        $FastAddressRequest->LicenseKey = "YJ99-NY29-XB79-AR47";

        //call the web service
        $oResult = $client->FastAddress($FastAddressRequest);

        $isErr = $errNumber = $errMessage = '';
        $oAdd = new stdClass();

        isset($oResult->FastAddressResult->IsError) ? $isErr = $oResult->FastAddressResult->IsError : '';

        isset($oResult->FastAddressResult->ErrorNumber) ? $errNumber = $oResult->FastAddressResult->ErrorNumber : '';

        isset($oResult->FastAddressResult->ErrorMessage) ? $errMessage = $oResult->FastAddressResult->ErrorMessage : '';

        isset($oResult->FastAddressResult->Results) ? $oAdd = $oResult->FastAddressResult->Results->Address : '';

        $aAddInfo = array();
        if (empty($isErr) && !empty($oAdd))
        {
            $aAddInfo['add']['city'] = $oAdd->PostTown;
            $aAddInfo['add']['county'] = $oAdd->County;
            $aAddInfo['add']['street'] = $oAdd->Line1;
        }
        else
        {
            //$aAddInfo['err'] = $errMessage;
            $aAddInfo['err'] = "Please enter your full UK postcode";
            //Custom msg show
        }

        echo json_encode($aAddInfo);
        exit ;
    }
    
    /**
     * This function retrieve address information based on Capture plus API
     */

    function get_address_details_capture_plus($SearchPostcode = '')
    {

        log_message('error', __FUNCTION__);
        
        $this->load->library('captureplus');

        //$SearchPostcode = urldecode($SearchPostcode);
        $this->captureplus->CapturePlus_Interactive_Find_v2_00 ("AR53-WC72-DR45-BA23",$SearchPostcode,"","PostalCodes","GBR","EN");

        $this->captureplus->MakeRequest();
        //$pa->MakeRequest();
        if ($this->captureplus->HasData())
        {
           $data = $this->captureplus->HasData();
           $start =  "<select name='select_address' id='select_address' onchange='fill_data();'>";
           $str_address='';
           foreach ($data as $item)
           {
                $Id = urlencode($item['Id']);
                $str_address .= "<option value='{$Id}'>{$item['Text']} {$item['Description']}</option>";
           }
           $end = "</select>";
            
           $final = $start .$str_address .$end;
        }
        echo json_encode(array('data'=>$final),JSON_UNESCAPED_SLASHES);
        exit ;
    }
    
    /**
     * This function get address (selected) from Capture plus API
     */
    function get_select_address_details_capture_plus($id = '')
    {

        log_message('error', __FUNCTION__);
        
        $this->load->library('captureplusretrieve');

        $this->captureplusretrieve->CapturePlus_Interactive_Retrieve_v2_00("AR53-WC72-DR45-BA23",  urldecode($id));
        $this->captureplusretrieve->MakeRequest();
        
        $aAddInfo = array();
        
        if ($this->captureplusretrieve->HasData())
        {
            $data = $this->captureplusretrieve->HasData();
            //print_r($data);
            
            //$house_number = $data[0]["SubBuilding"][0].", ". $data[0]["BuildingName"][0]." ".$data[0]["BuildingNumber"][0];
            //$aAddInfo['house_number'] = $data[0]["BuildingName"][0];
            $aAddInfo['house_number'] = $data[0]["BuildingNumber"][0];
            $aAddInfo['street'] = $data[0]["Street"][0];
            $aAddInfo['city'] = $data[0]["City"][0];
            $aAddInfo['BuildingName'] = $data[0]["BuildingName"][0];
            $aAddInfo['SubBuilding'] = $data[0]["SubBuilding"][0];
        }
        echo json_encode(array('add'=>$aAddInfo),JSON_UNESCAPED_SLASHES);
        exit ;
    }

    /**
     * Register email address of customer who has requested us
     * to send an email when travelfund has enough fund.
     * Added by asavaliya-itaction.in
     */

    function insert_email()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $this->form_validation->set_rules('email', 'Please enter a valid email address', 'trim|required|valid_email|max_length[50]');

        if ($this->form_validation->run() == TRUE)
        {
            $email = $this->input->post('email', TRUE);
            //Insert email into tabel.
            $ret = $this->db->insert('email', array(
                'email' => $email,
                'status' => 'No Fund',
                'send' => 0,
                'created_datetime' => date('Y-m-d H:i:s')
            ));

            if ($ret == TRUE)
            {
                echo json_encode(array('status' => '1'));
                exit ;
            }

        }
        else
        {
            echo json_encode(array('status' => 'Please enter a valid email address'));
            exit ;
        }

    }

    /**
     * Show agreement in new page.
     */
    function print_agreements()
    {
        //Get agreement text from APS.
        //Get Pre-contract credit information details from lender.
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'get_secci';
        $aReq['method']['arg'] = array();
        $aRespo['secci'] = $this->_lender($aReq);

        //Get Credit Agreement details from lender.
        $aReq['lender'] = 'APS';
        $aReq['method']['name'] = 'get_credit_agreement';
        $aReq['method']['arg'] = array();
        $aRespo['ci'] = $this->_lender($aReq);

        $this->load->view('application/print_agreement', array('data' => $aRespo));

    }

    /**
     * Display security & privacy
     */
    function display_security_privacy()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $this->load->view("application/display_security_privacy");
    }

    /**
     * Display Summary Box Terms & Conditions
     */
    function summary_terms_conditions()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $this->load->view("application/summary_terms_conditions");
    }

    /**
     * Display Pre Contract Information
     */
    function pre_contract_information()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $this->load->view("application/pre_contract_information");
    }

    /**
     * Display Pre Application Check Terms & Conditions - Eligibility form
     */
    function eligibility_terms_conditions()
    {

        log_message('error', __FUNCTION__. " :: " . $this->session_id);

        $this->load->view("application/eligibility_terms_conditions");
    }

}

//define object to hold the data we send to Web Service
class FastAddressRequest
{
    public $Postcode;
    public $Language;
    public $ContentType;
    public $AccountCode;
    public $LicenseKey;
}
?>
