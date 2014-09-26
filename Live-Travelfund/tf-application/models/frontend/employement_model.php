<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Employement model.
 *
 */

class Employement_model extends Frontend_model
{
    private $_table_name = 'employement';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'app_id' => 'app_id',
        'emp_status' => 'emp_status',
        'emp_type' => 'emp_type',
        'res_status' => 'res_status',
        'anum_hs_income_b_tax' => 'anum_hs_income_b_tax',
        'salary_day' => 'salary_day',
        'uk_curr_acc'=>'uk_curr_acc',
        'uk_saving_acc'=>'uk_saving_acc',
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

        $aData = array_merge(array('col_val' => $aData), array('table' => $this->_table_name));
        return parent::insert($aData);
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
    
    /**
     * This function retrive specified employement details.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_employment($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_row($aQParams);
    }

}//class
