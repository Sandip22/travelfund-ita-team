<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Address model.
 *
 */

class Address_model extends Frontend_model
{

    private $_table_name = 'address';

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
    var $aDispFormat = array(
        'created_datetime' => array(
            'type' => 'datetime',
            'format' => 'd-m-Y'
        ),
        'modified_datetime' => array(
            'type' => 'datetime',
            'format' => 'd-m-Y'
        )
    );

    /**
     * Default constructor
     */
    function __construct()
    {
        parent::__construct();
    }//fun

    /**
     * This method save data into db.
     * @param array $aData : Data to insert into db.
     * @return bool
     */

    function insert($aData)
    {
        //Current DateTime in mysql formate.
        if(!isset($aData['created_datetime'])){
            $aData['created_datetime'] = date('Y-m-d H:i:s');    
        }
        
        if(!isset($aData['modified_datetime'])){
            $aData['modified_datetime'] = date('Y-m-d H:i:s');    
        }
        
        //Current DateTime in mysql formate.
        $aData['created_datetime'] = date('Y-m-d H:i:s');
        $aData['modified_datetime'] = date('Y-m-d H:i:s');

        $aData = array_merge(array('col_val' => $aData), array('table' => $this->_table_name));
        return parent::insert($aData);
    }

    /**
     * This function retrive specified address.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_address($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_row($aQParams);
    }
    
    /**
     * This function update data.
     */
    function update($aData)
    {
        
        //Current DateTime in mysql formate.
        if (!isset($aData['created_datetime']))
        {
            $aData['col_val']['modified_datetime'] = date('Y-m-d H:i:s');
        }
        
        $aData = array_merge(array('table_name' => $this->_table_name), $aData);
        return parent::update($aData);
    }

}//class
