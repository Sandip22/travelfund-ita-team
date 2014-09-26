<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Address model for admin section
 * @Author asavaliya-itaction
 */

class Address_model extends Admin_model
{

    public $_table_name = 'address';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'app_id' => 'app_id',
        'house_number' => 'house_number',
        'street' => 'street',
        'post_code' => 'post_code',
        'city' => 'city',
        'county' => 'county',
        'howmany_add' => 'howmany_add',
        'created_datetime' => 'created_datetime',
        'modified_datetime' => 'modified_datetime',
    );

    //Field should have value in following formate
    //when stored to Database.
    var $aDBFormat = array();

    //Field should have value in following formate
    //when display to user.
    var $aDispFormat = array();

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get list of Address.
     */
    public function get_list($query_params)
    {
        $query_params = array_merge($query_params, array('table' => $this->_table_name));
        return $this->get_rows($query_params);
    }
    
    /**
     * Get Address.
     */
    function get_address($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        $aData = $this->get_row($aQParams);
        if(!empty($aData)) 
            return array_shift($aData);
        else 
            return array(); 
    }

    /**
     * Get total number of rows into table
     */
    function count_all_rows()
    {
        $this->get_total_rows($this->_table_name);
    }

}
