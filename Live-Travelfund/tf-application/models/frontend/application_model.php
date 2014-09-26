<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Application model.
 * 
 */

class Application_model extends Frontend_model {

    private $_table_name = 'application';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'cust_id' => 'cust_id',
        'partner_id'=>'partner_id',
        'lender_id'=>'lender_id',
        'app_status' => 'app_status',
        'account_number'=>'account_number',
        'mobile_phone' => 'mobile_phone',
        'departure_date' => 'departure_date',
        'sp_terms' => 'sp_terms', //Security and privacy terms.
        'accept_terms' => 'accept_terms',
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
        );
    //Field should have value in following formate
    //when display to user.
    var $aDispFormat = array(
            'departure_date' => array(
                'type' => 'date',
                'format' => 'd-m-Y'
            ),
            'created_datetime' =>array(
                'type' => 'datetime',
                'format' => 'd-m-Y'
             ),
            'modified_datetime' =>array(
               'type' => 'datetime',
               'format' => 'd-m-Y'
            )
        );
    //Application yet not approved by Lender
    const STATUS_PENDING = "Pending";
    //Application approved by Lender
    const STATUS_APPROVED = "Approved";
    //Application declined by Lender
    const STATUS_DECLINED = "Declined";
    
    /**
     * Default constructor
     */
    function __construct() {
        parent::__construct();
    }//fun
    
    /**
     *This method save data into db.
     * @param array $aData : Data to insert into db. 
     */
    
    function insert($aData) {
        
        //Current DateTime in mysql formate.
        if(!isset($aData['created_datetime'])){
            $aData['created_datetime'] = date('Y-m-d H:i:s');    
        }
        
        if(!isset($aData['modified_datetime'])){
            $aData['modified_datetime'] = date('Y-m-d H:i:s');    
        }
        
        $aData = array_merge(array('col_val' => $aData), array('table' => $this -> _table_name));
        return parent::insert($aData);
    }
    
     /**
     * This function update data of user
     */
    function update($aData,$time_update=true)
    {
        if($time_update == true)
            $aData['col_val']['modified_datetime'] = date('Y-m-d H:i:s');
        $aData = array_merge(array('table_name' => $this->_table_name), $aData);
        return parent::update($aData);
    }
    
    /**
     * This function retrive specified customer.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_application($aQParams)
    {
         //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this -> _table_name));
        return $this -> get_row($aQParams);
    }

}//class
