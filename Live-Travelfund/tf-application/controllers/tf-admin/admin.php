<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Admin Controller Class.
 */

class Admin extends TF_Controller
{
    var $user_authenticated = false;

    /**
     * Constructore
     */
    function __construct()
    {
        global $admin_user_full_name;
        parent::__construct();

        //admin_user_authenticated
        if ($this->session->userdata('admin_user_authenticated') === 'yes')
        {
            $this->user_authenticated = TRUE;
            $admin_user_full_name = $this->session->userdata('admin_user_full_name');
        }
        $this->load->database();

    }

    /**
     *Default controller.It will render login page.
     */
    public function index()
    {
        if ($this->user_authenticated === TRUE)
        {
            redirect('tf-admin/customers/get_list');
        }
        else
        {
            //Display login page.
            $this->redirect_login();
        }
    }

    /**
     * If user not authenticated then redirect to login page.
     */

    public function redirect_login()
    {
        redirect('/tf-admin/login');
    }

}
