<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is main controller.All controller should extend it
 */

class Forgetpass extends Front_Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.
        $this->load->database();
    }
    /**
     * Display forget password page.
     */
    function index()
    {
        $this->load->view('customer/forgetpass');    
    }
    
    /**
     * Send link to reset pass.
     */
    function reset()
    {
        $aQParams = array();
        $this->load->model("frontend/customer_model",'cust');
     
        //Validate
        //Rule : forgetpass/reset
        if($this->form_validation->run())
        {
            $_POST['birth_date'] = $_POST['birth_date_dd'].'-'.$_POST['birth_date_mm'].'-'.$_POST['birth_date_yyyy'];
            
            $aQParams['where']['title']=$this->input->post('title', true);
            $aQParams['where']['first_name']=$this->input->post('first_name', true);
            $aQParams['where']['last_name']=$this->input->post('last_name', true);
            $aQParams['where']['birth_date']=$this->input->post('birth_date', true);
            $aQParams['where']['email']=$this->input->post('email', true);
        
            $aData = $this->cust->process_password_reset($aQParams);
            
            if(!empty($aData))
            {
                //Load Email library
                $this->load->library("Email");
                if($this->email->send_reset_password_email($aData))
                {
                    //Load view
                    $this->load->view('customer/email_sent');    
                }else
                {
                    //Fail to send email.
                    $aNote['note']="Your email address is not validated by you.TravelFund has send you an email.
                                    Click on confirm email link";
                    $this->load->view('customer/email_sent_fail',$aNote);
                }
                
            }
            else
            {
                $this->form_validation->set_error('wrong_details','Details do not match.');
                $this->load->view('customer/forgetpass');    
            }    
        }else
        {
            $this->load->view('customer/forgetpass');
        }   
    }//func 
}