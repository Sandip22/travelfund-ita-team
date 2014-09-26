<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is main controller.All controller should extend it
 */

class Personal extends Front_Controller
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
     * Display Login detail page.
     */
    function index()
    {
        $this->load->view('customer/personal');    
    }
}