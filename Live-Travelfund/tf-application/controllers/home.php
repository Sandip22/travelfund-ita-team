<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*This is main controller.All controller should extend it
 * */

class Home extends Front_Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        
    }
    
    /**
     * Default page.
     */
    function index()
    {
        $this->load->view('home');
    }
    
    /**
     * how page
     */
    function how()
    {
        $this->load->view('how');
    }
    /**
     * eligibilityCheck page
     */
    function eligibilityCheck()
    {
        $this->load->view('eligibilityCheck');
    }
    
    /**
     * eligibilityCheck Yes page
     */
    function eligibilityCheckYes()
    {
        $this->load->view('eligibilityCheck_yes');
    }
    /**
     * eligibilityCheck No page
     */
    function eligibilityCheckNo()
    {
        $this->load->view('eligibilityCheck_no');
    }
    
    /**
     * travelPartners page
     */
    function travelPartners()
    {
        $this->load->view('travelPartners');
    }
    
    /**
     * myaccount page
     */
    function account()
    {
        $this->load->view('account');
    }
    /**
     * about us page
     */
    function about()
    {
        $this->load->view('about');
    }
    /**
     * media Enquiries page
     */
    function mediaEnquiries()
    {
        $this->load->view('mediaEnquiries');
    }
    /**
     * cookie page
     */
    function cookie()
    {
        $this->load->view('cookie');
    }
    /**
     * privacy page
     */
    function privacy()
    {
        $this->load->view('privacy');
    }
    /**
     * term & condition page
     */
    function termsConditions()
    {
        $this->load->view('termsConditions');
    }
    /**
     * partners home page
     */
    function partnershome()
    {
        $this->load->view('partnershome');
    }
    
    /**
     * partners How page
     */
    function partnersHow()
    {
        $this->load->view('partnersHow');
    }
    /**
     * partners Contact page
     */
    function partnersContact()
    {
        $this->load->view('partnersContact');
    }
    
    /**
     * * responsible Lending
     */
    function responsibleLending()
    {
        $this->load->view('responsibleLending');
    }
    
    /**
     * * eligibility_terms_conditions
     */
    function eligibility_terms_conditions()
    {
        $this->load->view('eligibility_terms_conditions');
    }
    
    function sendMailContact()
    {
        
        //Validate inputs.
        //Rule : 'home/sendMailContact'
        if ($this->form_validation->run() === TRUE)
        {
                /**
                 * send mail to customer
                 */
                $aData["name"] = $this->input->post('name', true);
                $aData["title"] = $this->input->post('title', true);
                $aData["companyname"] = $this->input->post('companyname', true);
                $aData["contactemail"] = $this->input->post('email', true);
                $aData["phone"] = $this->input->post('phone', true);
                $aData["atol_number"] = $this->input->post('atol_number', true);

                $aData["tags"] = "contacus";

                $aData["email_type"] = "contactus";

                $aData["merge_data"] = array(
                    'name' => $aData['name'],
                    'title' => $aData['title'],
                    'companyname' => $aData['companyname'],
                    'contactemail' => $aData['contactemail'],
                    'phone' => $aData['phone'],
                    'atol_number' => $aData['atol_number'],
                );

                $aData['email'] = "donotreply@travelfund.co.uk";
                
                //Load Email library
                $this->load->library("Email");

                //send command mail function
                $this->email->configure_email($aData);
                
                //set msg
                $data['msg'] = "Message has been sent successfully.";
                $this->load->view('partnersContact',array('data'=>$data));                               

        }
        else
        {
            $this->load->view('partnersContact');
        }
        
    }
    
}