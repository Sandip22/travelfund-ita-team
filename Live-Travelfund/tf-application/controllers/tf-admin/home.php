<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Home extends Admin
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
            //$this->load->view("admin/dashlet.php");
            redirect('tf-admin/customers/get_list');
        }
        else
        {
            $this->redirect_login();
        }
    }
}
