<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is main controller.All controller should extend it
 */

class Myaccount extends Front_Controller
{
    var $customer_authenticated = "no";

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.
        $this->load->database();

        //Customer is authenticated.
        if ($this->session->userdata('customer_authenticated') == 'yes')
        {
            $this->customer_authenticated = 'yes';
        }

        //load customer model
        $this->load->model("frontend/customer_model", 'cust');
    }

    /**
     * check valid access
     */
    function validate_access()
    {
        if ($this->session->userdata('customer_authenticated') !== 'yes')
        {
            redirect('customer/myaccount/login');
        }

    }

    /**
     * Display Myaccount/Landing page.
     */
    function index()
    {
        $this->validate_access();

        //Get latest approved application and associated account number.
        $this->load->model('frontend/customer_model', 'cust');

        //Get personal details.
        $aSess = $this->session->userdata('application');
        //Get latest approved application.
        $aQParam['where']['cust_id'] = $aSess['cust_id'];

        $oApp = $this->cust->get_application($aQParam, "latest");
       
        log_message('error','oApp'.print_r($oApp,TRUE));                
        
        $time_left='';
        
        //Incomplete applicatin.
        //Ask user to login and complete application.
        if($oApp->app_incompelete == TRUE && $oApp->can_apply == TRUE)
        {
            redirect('customer/myaccount/incomplete');
        }
        
        //If application is decline .... display
        //your account is expired.
        if ( $oApp->app_status == 'NVALID'
            || $oApp->app_status == 'DUPE'
            || $oApp->app_status == 'VCDEC'
            || $oApp->app_status == 'ACDEC'
            || $oApp->app_status == 'UWDEC')
        {
                redirect('customer/myaccount/expire');
        }
            
        //If app > 72 hours  and customer has made a transaction 
        //then he can ONLY login in to My Account .
       
        if(!empty($oApp->app_id)){
            
            //Calculate time left.
             $d1 = new DateTime($oApp->app_modified_datetime);
             $d2 = new DateTime("now");
    
             $diff = $d2->diff($d1);
    
             $seconds = ($diff->days) * 24 * 3600;
             $seconds += ($diff->h) * 3600;
             $seconds += ($diff->i) * 60;
             $seconds += ($diff->s);
    
            //New Rule :
            //IF there is a transcation from customer then 
            //he can see my account details.
            //No time limit for him/her.
            //72*3600
            //Application within 72 hours.
            //if ($seconds < 259200)
            //{
                //Application is valid only for 72 hours.
                //Calculate time left.
                //$seconds = 259200 - $seconds;
                
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
                
                $this->aps = new APS();
                //$aRespo = $this->aps->get_card_detail(array('acc_num' => $oApp->acc_num));
                $aRespo['time_left'] = $time_left;
                
                
            //}else{
              //  redirect('customer/myaccount/expire');
            //}
        }
        
        $aSummary = $this->aps->get_account_summary(array('acc_num' => $oApp->acc_num));
        $aRespo['summary']=$aSummary;
    
    
        //No response then register it.
        if(empty($aSummary))
        {
            
            $this->load->model('frontend/application_model', 'app');
            
            //Save new application.
            $aData['col_val']['tf_status'] = "MYACC_NO_RESPONSE";
            $aData['col_val']['tf_status_datetime'] = date('Y-m-d H:i:s');
            
            $aData['where']['id'] = $oApp->app_id;
            
            $this->app->update($aData,FALSE);
            
            $this->redirect_no_response();
        }
        
        log_message('error', ' MY ACC SESS ' . print_r($aSess['per_detail']->email,TRUE));
        //Special access to jasper.
        if($aSess['per_detail']->email == 'jasperdykes@gmail.com')
        {
            $aRespo['time_left']=' " infinite "';
            //Get APS account details.
            $this->load->view('customer/myaccount', array('data' => $aRespo));
            return;
        }
      
        //If app > 72 hours and customer is APPROVED but NO TRANSACTION.
        if ($seconds < 0 && empty($aRespo['summary']['Transactions']))
        {
            redirect('customer/myaccount/expire/all');
        }
        elseif($seconds < 0 && !empty($aRespo['summary']['Transactions']))
        {
            $aRespo['account_expire']=TRUE;
        }
    
        //If app > 72 hours  and customer has made a transaction 
        //then he can ONLY login in to My Account .
        
        //Get APS account details.
        $this->load->view('customer/myaccount', array('data' => $aRespo));

    }
    /* Redirect to no response page*/
    function redirect_no_response(){
        redirect("customer/myaccount/no_response");
    }
    
    /* Display no response page. */
    function no_response(){
        $this->load->view('customer/no_response');
    }
    
    /*Display incomplete application message*/
    function incomplete(){
        //Get APS account details.
        $this->load->view('customer/incomplete_app');
    }
    
    /* After 72 hours account expire*/
    function expire($notify=''){
        
        $data = array();
        if($notify == 'all'){
            $data['msg']="We're sorry but your account has expired at all logins. Please check out our FAQs for further information.";            
        }else{
            $data['msg']="We're sorry but your account has expired. Please check out our FAQs for further information.";
        }
        //Account expire.
        $this->load->view('customer/account_exipre',array('data'=>$data));
        
    }
    
    /**
     * Customer authenticate
     * Varification email & password
     * @author Nirav it-action
     */
    function authenticate()
    {
        //Load validation library
        $this->load->helper(array(
            'form',
            'url'
        ));

        //set server side Validate
        //check valid form
        if ($this->form_validation->run() === TRUE)
        {
            //Load customer model to check email & password
            $this->load->model('frontend/customer_model', 'cust');

            $aQParams['where'] = array(
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password')),
            );

            //Success then surve my account
            if ($this->cust->authenticate($aQParams))
            {
                //To get Customer detail to set into session
                $aCustData = $this->cust->get_customer($aQParams);

log_message('error'," ???? ".print_r($aCustData,TRUE));                
                
                //Store application details into session.
                $this->session->set_userdata(array('application' => array(
                        'cust_id' => $aCustData[0]->id,
                        'per_detail' => $aCustData[0],
                    )));

                //redirect myaccount - landing page after sucessfull login
                redirect('customer/myaccount');
            }
            else
            {
                //Set custom error.
                $this->form_validation->set_error('invalide_credentials', 'Incorrect email or password');

                //Error.Render login page again.
                $this->load->view('customer/login');
            }
        }
        else
        {
            //Error.Render login page again.
            $this->load->view('customer/login');
        }
    }

    /**
     * Display login form for registered user.
     */
    function login()
    {
        //Start new session.
        $this->session->sess_create();

        $this->load->view("customer/login");
    }

    /**
     * Logout customer.
     */
    function logout()
    {

        //Destroy session.
        $this->session->sess_destroy();

        //Redirect to home page.
        redirect('customer/myaccount/login');

    }

    /**
     * Change password
     */
    function changepassword()
    {
        $this->validate_access();
        $this->load->view('customer/changepassword');
    }

    /**
     * personal tab
     */
    function personal()
    {
        $this->validate_access();

        $aQParams = "";
        $aQParams['where']['id'] = $this->session->userdata('customer_id');

        //To get Customer detail to set into session
        $cust_data = $this->cust->get_customer($aQParams);

        $data["email"] = $cust_data[0]->email;
        $data["created_datetime"] = $cust_data[0]->created_datetime;

        $this->load->view('customer/personal', array('data' => $data));

    }

    /**
     * update password
     * @author Nirav - it action.
     */
    function updatepassword()
    {
        $aQParams = array();
        $this->load->model("frontend/customer_model", 'cust');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->library('form_validation');

        //Validate inputs.
        //Rule : 'application/updatepassword'
        // server side Validate
        if ($this->form_validation->run())
        {
            $aQParams['where']['id'] = $this->session->userdata('customer_id');
            $aQParams['where']['password'] = md5($this->input->post('password', true));

            // check old password into system
            $aData = $this->cust->check_old_password($aQParams);

            /** new password validation */
            $regex = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/';  
            $password = $this->input->post('newpassword');

            if (!preg_match($regex, $password))
            {
                $data['msg'] = "New password is not correct as per require.";
                $this->load->view('customer/changepassword', array('data' => $data));
            }
            else if (!empty($aData))
            {
                //Valid old password then change new password
                $aQParams = "";
                $aQParams['where']['id'] = $this->session->userdata('customer_id');
                $aQParams['col_val']['password'] = md5($this->input->post('newpassword'));

                // Update password
                $this->cust->update($aQParams);

                //set msg
                $data['msg'] = "Password has been changed successfully.";
                $this->load->view('customer/changepassword', array('data' => $data));
            }
            else
            {
                //old password not match into system
                $data['msg'] = "Old password does not match with our database";
                $this->load->view('customer/changepassword', array('data' => $data));
            }
        }
        else
        {
            //set form validation msg
            $data['msg'] = "All fields are required.";
            $this->load->view('customer/changepassword', array('data' => $data));
        }
    }

    /**
     * Display payment page.
     */
    function account_payment()
    {
        $this->load->view("customer/account_payment");
    }

    /**
     * Display front view forget password
     */
    function front_forgetpass()
    {
        $this->load->view("customer/front_forgetpass");
    }

}
