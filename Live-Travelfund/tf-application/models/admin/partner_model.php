<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Partner_model extends Admin_model {

    public $_table_name = 'partner';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'code' => 'code',
        'phone' => 'phone',
        'email' => 'email',
        'secret_code' => 'secret_code',
        'is_allowed_app' => 'is_allowed_app',
        'is_allowed_payments' => 'is_allowed_payments',
        'created_datetime'=>'created_datetime',
        'modified_datetime'=>'modified_datetime',
    );

    //Field should have value in following formate
    //when stored to Database.
    var $aDBFormat = array();

    //Field should have value in following formate
    //when display to user.
    var $aDispFormat = array();

    function __construct() {
        parent::__construct();
    }
    
    /*Get total number of rows into table
     * */
    function count_all_rows($aQParams) {
        //In case, all rows of table to be count.
        if (!isset($aQParams['where'])) {
            $aQParams['where'] = array();
        }
        $aQParams = array_merge(array('table' => $this -> _table_name), $aQParams);
        return $this -> get_total_rows($aQParams);
    }
     /*This function return list of users
     * */
    function get_list($query_params) {
        //Add tabel name.
        $query_params = array_merge($query_params, array('table' => $this -> _table_name));
        return $this -> get_rows($query_params);
    }
}//class