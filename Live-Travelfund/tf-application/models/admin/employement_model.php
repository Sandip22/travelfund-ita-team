<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Employement model.
 *
 */

class Employement_model extends Frontend_model
{
    public $_table_name = 'employement';

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
     * This function retrive specified employement details.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_employment($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        $aData = $this->get_row($aQParams);
        if(!empty($aData)) 
            return array_shift($aData);
        else 
            return array();
    }

}//class
