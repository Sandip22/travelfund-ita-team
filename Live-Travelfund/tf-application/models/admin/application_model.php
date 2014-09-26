<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Application_model extends Admin_model {

    public $_table_name = 'application';
    
    //Model's data base field.
    var $aDBFields = array(
        'id' => 'id',
        'cust_id' => 'cust_id',
        'partner_id' => 'partner_id',
        'lender_id' => 'lender_id',
        'app_status' => 'app_status',
        'mobile_phone' => 'mobile_phone',
        'departure_date' => 'departure_date',
        'accept_terms' => 'accept_terms',
        'sp_terms' => 'sp_terms', //Security and privacy terms.
        'created_datetime' => 'created_datetime',
        'modified_datetime' => 'modified_datetime',
    );

    //Field should have value in following formate
    //when stored to Database.

    var $aDBFormat = array(
        'departure_date' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        ),
        'created_datetime' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        )
    );
    //Field should have value in following formate
    //when display to user.
    var $aDispFormat = array(
        'created_datetime' => array(
            'type' => 'date',
            'format' => 'd-m-Y'
        ),
        'departure_date' => array(
            'type' => 'date',
            'format' => 'd-m-Y'
        )
    );

    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }

    /*Get list of customers.
     * */
    public function get_list($query_params) {
        $query_params = array_merge($query_params, array('table' => $this -> _table_name));
        return $this -> get_rows($query_params);
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

}
