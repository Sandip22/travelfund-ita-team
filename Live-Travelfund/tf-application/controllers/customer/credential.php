<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is main controller.All controller should extend it
 */

class Credential extends Front_Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.
        $this->load->database();
        //Partner should be eligible to have TF facility for customer.
        if ($this->session->userdata('partner_eligibility') == 'yes')
        {
            $this->partner_eligibility = 'yes';
        }
    }

    /**
     * Display forget password details form
     */
    function index()
    {
        $this->forgetpass();
    }

    /**
     * Display forget password details form
     */
    function forgetpass()
    {
        $this->load->view('customer/forgetpass');
    }

    /**
     * Send email which has reset password links.
     */
    function send_reset_password_email()
    {
        //Render calling function accordingly request
        $front_forgetpass = $this->input->post('front_forgetpass', true);
        
        $aQParams = array();
        $this->load->model("frontend/customer_model", 'cust');

        //Validate
        //Rule : credential/send_reset_password_email
        if ($this->form_validation->run())
        {
            $_POST['birth_date'] = $_POST['birth_date_dd'] . '-' . $_POST['birth_date_mm'] . '-' . $_POST['birth_date_yyyy'];

            $aQParams['where']['title'] = $this->input->post('title', true);
            $aQParams['where']['first_name'] = $this->input->post('first_name', true);
            $aQParams['where']['last_name'] = $this->input->post('last_name', true);
            $aQParams['where']['birth_date'] = $this->input->post('birth_date', true);
            $aQParams['where']['email'] = $this->input->post('email', true);

            $aData = $this->cust->process_password_reset($aQParams);

            if (!empty($aData))
            {
                //Load Email library
                $this->load->library("Email");
                $this->email->send_reset_password_email($aData);

                //Send notification.
                $notice['heading1'] = 'An email has been sent to you.';
                $notice['msg1'] = 'We have sent you an email containing a password reset link.';
                
                /* Do not required email confirmation.
                if (isset($aData['email_confirm_link']))
                {
                    $notice['msg1'] .= '<br />Your email address is not validated.
                                       <br />We have also send an email to validate it.
                                       <br />You can reset password after email validation.';
                }
                */
                if($front_forgetpass==1)
                {
                    //Display notification.
                    $this->load->view('customer/front_notification', $notice);
                    return;
                }
                else {
                    //Display notification.
                    $this->load->view('customer/notification', $notice);
                    return;
                }
     
            }
            else 
            {
                if($front_forgetpass==1)
                {
                    //Wrong details by user.
                    $this->form_validation->set_error('wrong_details', 'Details do not match.');
                    $this->load->view("customer/front_forgetpass");
                }
                else{
                    //Wrong details by user.
                    $this->form_validation->set_error('wrong_details', 'Details do not match.');
                    $this->load->view('customer/forgetpass');
                } 
            }
        }
        else
        {
            if($front_forgetpass==1)
             {
                      //redirect("customer/myaccount/front_forgetpass");
                      $this->load->view("customer/front_forgetpass");
              }
              else{
                       //Form has validation error.
                       $this->load->view('customer/forgetpass');
              }    


        }
    }

    /**
     * Reset password.
     */
    function reset_password()
    {

        $action = $this->input->post('action', true);

        if ($action == 'reset_password')
        {
            $this->update_password();
        }
        else
        {
            $this->display_reset_password_form();
        }
    }

    /**
     * Display reset password form.
     */

    function display_reset_password_form()
    {
        //Get password reset code.
        $password_reset_code = $this->uri->segment(4);

        if (!empty($password_reset_code))
        {
            //Load model
            $this->load->model('frontend/customer_model', 'cust');
            $aQParams['where']['password_reset_code'] = md5($password_reset_code);
            
            //Get customer
            $oCust = array_shift($this->cust->get_customer($aQParams));
            if (empty($oCust))
            {
                //Send notification.
                $notice['heading1'] = 'Notice';
                $notice['msg1'] = "Request seems wrong";
                //Display notification.
                $this->load->view('customer/front_notification', $notice);

                return;
            }

            //Store password reset code and reset attempt into session.
            $sData = array(
                'password_reset_attempt' => $oCust->password_reset_attempt,
                'password_reset_code' => $oCust->password_reset_code
            );

            $this->session->set_userdata($sData);
            //Email address must be validate to change password.

            //Do not required to check email validation.     
            /*
             * if ((int)$oCust->is_email_validated == 0)
            {
                $aQParams['where']['password_reset_code'] = $password_reset_code;

                //Get link to send email validation.
                //$aData = $this->cust->generate_validation_link($aQParams, 'email', 'send_validation_email');

                //Send notification.
                $notice['heading1'] = 'Your email address is not validated.';
                $notice['msg1'] = "We had send you an email.Please click over a link to validate your email.";

                //Display notification.
                $this->load->view('customer/notification', $notice);
                return;
            }
            */
            
            //Reset password only if request is 24 hours old.
            $diff = 0;
            $now = strtotime("now");
            $expiry = strtotime($oCust->password_reset_expiry_datetime);
            $timediff = $expiry - $now;

            if ((int)$oCust->password_reset_attempt > 3 || $timediff < 0 || $timediff > 86400)
            {
                //Send notification.
                $notice['heading1'] = 'Notice';
                $notice['msg1'] = "In 24 hours you can reset only 3 times.Your limit is over.";

                //Display notification.
                $this->load->view('customer/front_notification', $notice);
                return;
            }

            $this->load->view('customer/resetpass');

        }
        else
        {
            //Send notification.
            $notice['heading1'] = 'Notice.';
            $notice['msg1'] = "Your request seems wrong.";

            //Display notification.
            $this->load->view('customer/front_notification', $notice);
            return;
        }

    }

    /**
     * Update password.
     */
    function update_password()
    {
        $password_reset_code = $this->session->userdata('password_reset_code');
        $password_reset_attempt = $this->session->userdata('password_reset_attempt');

        if (empty($password_reset_code))
        {
            //Send notification.
            $notice['heading1'] = 'Notice';
            $notice['msg1'] = "Request seems wrong.";

            //Display notification.
            $this->load->view('customer/front_notification', $notice);
            return;
        }
        //Validation
        //Rule : credential/update_password
        if ($this->form_validation->run('credential/update_password'))
        {
            //load model
            $this->load->model('frontend/customer_model', 'cust');

            //Update password which has reset code
            $aQParams['where']['password_reset_code'] = $password_reset_code;

            $aQParams['col_val']['password'] = md5($this->input->post('password'));
            $aQParams['col_val']['password_reset_attempt'] = (int)$password_reset_attempt + 1;

            //Update password
            $this->cust->update($aQParams);
            
            //unset session values.
            $this->session->unset_userdata('password_reset_code');
            $this->session->unset_userdata('password_reset_attempt');
            //Send notification.
            $notice['heading1'] = 'Password Changed..';
            $notice['msg1'] = "Go to TravelFund login page.";

            //Display notification.
            $this->load->view('customer/front_notification', $notice);
        }
        else
        {
            //Display reset password form.
            $this->load->view('customer/resetpass');
        }

    }

    /**
     * Send validation email on customer request.
     */
    function send_validation_email()
    {
        //Get email validation code.
        $email_validation_code = $this->uri->segment(4);

        if (!empty($email_validation_code))
        {
            //Load model
            $this->load->model('frontend/customer_model', 'cust');
            $aQParams['where']['email_validation_code'] = md5($email_validation_code);

            //Get customer
            $oCust = array_shift($this->cust->get_customer($aQParams));

            if (!empty($oCust) && !empty($oCust->email))
            {
                //Get link to send email validation.
                $aData = $this->cust->generate_validation_link($aQParams, 'email', 'validate_email');

                //Load Email library
                $this->load->library("Email");
                $this->email->send_validate_email($aData);

                //Send notification.
                $notice['heading1'] = 'Email Sent for Validatoin.';
                $notice['msg1'] = "Please check your email account.Click over a link to validate your email address.";

                $this->load->view('customer/notification', $notice);

            }
            else
            {
                $this->load->view('customer/notification');
            }
        }
    }

    /**
     * This function validate email.
     */

    function validate_email()
    {
        //Get email validation code.
        $email_validation_code = $this->uri->segment(4);

        if (!empty($email_validation_code))
        {
            //Load model
            $this->load->model('frontend/customer_model', 'cust');
            $aQParams['where']['email_validation_code'] = md5($email_validation_code);

            //Get customer
            $oCust = array_shift($this->cust->get_customer($aQParams));

            if (!empty($oCust) && !empty($oCust->email))
            {
                //Flag email as validated.
                $aQParams['col_val']['is_email_validated'] = '1';
                $this->cust->update($aQParams);
                
                $notice['heading1'] = 'Email address validated.';
                $notice['msg1'] = "";

                $this->load->view('customer/notification', $notice);
            }
        }
        else
        {
            $notice['heading1'] = 'Request seems wrong.';
            $notice['msg1'] = "";

            $this->load->view('customer/notification', $notice);
        }
    }

}
