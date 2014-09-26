<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Login extends Admin
{
    /**
     * Construct
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
            redirect('tf-admin/home');
        }
        else
        {
            $this->load->view("admin/login");
        }
    }

    /**
     * Authenticate user
     */
    function authenticate()
    {
        //Validate inputs.
        //Rule : 'login/authenticate'
        if ($this->form_validation->run() === TRUE)
        {

            //Load Model.
            $this->load->model('admin/user_model', 'user');

            $aQParams = array(
                'user_name' => $this->input->post('user_name', true),
                'password' => md5($this->input->post('password')),
            );

            //Authenticate user
            if ($this->user->authenticate($aQParams))
            {
                redirect('tf-admin/home');
            }
            else
            {
                //Set custom error.
                $this->form_validation->set_error('credentials_invalide', 'Please provide right credentials');
                //Error.Render login page again.
                $this->load->view('admin/login');
            }
        }
        else
        {
            //Error.Render login page again.
            $this->load->view('admin/login');
        }
    }

    /**
     * Logout user.
     */
    function logout()
    {
        $this->user_authenticated = FALSE;
        //Destroy session.
        $this->session->sess_destroy();
        //Need to create session after destroy due to bug #1314.
        $this->session->sess_create();
        //Redirect to home page.
        redirect(base_url());
    }

}
