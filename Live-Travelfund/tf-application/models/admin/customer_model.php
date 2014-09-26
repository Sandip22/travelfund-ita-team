<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Custome model class for admin.
 */
class Customer_model extends Admin_model
{

    public $_table_name = 'customer';

    var $aDBFields = array(
        'id' => 'id',
        'title' => 'title',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'birth_date' => 'birth_date',
        'email' => 'email',
        'is_email_validated' => 'is_email_validated',
        'password' => 'password',
        'password_reset_code' => 'password_reset_code',
        'password_reset_expiry_datetime' => 'password_reset_expiry_datetime',
        'created_datetime' => 'created_datetime',
        'modified_datetime' => 'modified_datetime',
        'application__id' => 'application__id',
        'application__app_status' => 'application__app_status',
        'application__tf_status' => 'application__tf_status',
        'application__created_datetime' => 'application__created_datetime',
        'application__modified_datetime' => 'application__modified_datetime',
        'application__len_app_id' => 'application__len_app_id',
        'application__partner_id' => 'application__partner_id',
    );

    var $aJoin = array('application' => array('id' => 'cust_id'));

    //Field should have value in following formate
    //when stored to Database.
    var $aDBFormat = array(
        'birth_date' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        ), 
        'application__created_datetime' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        ),
        'application__modified_datetime' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        ),
        );
    //Field should have value in following formate
    //when display to user.
    var $aDispFormat = array(
    
        'birth_date' => array(
            'type' => 'date',
            'format' => 'd-m-Y'
        ),
        'created_datetime' => array(
            'type' => 'datetime',
            'format' => 'd-m-Y'
        ),
        'modified_datetime' => array(
            'type' => 'datetime',
            'format' => 'd-m-Y'
        ),
        'application__created_datetime' => array(
            'type' => 'datetime',
            'format' => 'd-m-Y'
        ),
        'application__modified_datetime' => array(
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
     *This method save data into db.
     * @param array $aData : Data to insert into db.
     */

    function insert($aData)
    {
        //Current DateTime in mysql formate.
        $aData['created_datetime'] = date('Y-m-d H:i:s');
        $aData['modified_datetime'] = date('Y-m-d H:i:s');

        $aData = array_merge(array('col_val' => $aData), array('table' => $this->_table_name));
        return parent::insert($aData);
    }

    /**
     * This function retrive specified customer.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_customer($aQParams)
    {

        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_row($aQParams);
    }

    /*Get list of customers.
     * */
    public function get_list($aQParams)
    {
        //Do join here.
        $this->joins($aQParams);
        
        //Specify select
        $aQParams['select'] = "customer.id as cust_id,
            customer.first_name as first_name,
            customer.last_name as last_name,
            customer.email as email,
            customer.birth_date as birth_date,
            application.id as app_id,
            application.len_app_id as app_len_app_id,
            application.id as app_id,
            application.app_status as app_app_status,
            application.tf_status as app_tf_status,
            DATE_FORMAT(application.created_datetime,'%d-%m-%Y %H:%i:%s') as app_created_datetime,
            DATE_FORMAT(application.modified_datetime,'%d-%m-%Y %H:%i:%s') as app_modified_datetime,
            partner.name as partner_name,
            
        ";
        
        if(!empty($aQParams['order_by'])){
            //Specify oder by.  
            $aQParams['order_by']=$this->_table_name.".".$aQParams['order_by'];    
        }
        
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        
        return $this->get_rows($aQParams);
    }

    /* This function create joins as per where condition*/
    function joins(&$aQParams)
    {

        //Modify where
        if (!empty($aQParams['where']))
        {
            $aQParams['where'] = str_replace("__", ".", $aQParams['where']);
        }

        //Append left join application by default.
        $aQParams['join']['application|left'] = 'application.cust_id=customer.id';
        $aQParams['join']['partner|left'] = 'application.partner_id=partner.id';
        
    }

    /*Get total number of rows into table
     * */
    function count_all_rows($aQParams)
    {

        //Do join here.
        $this->joins($aQParams);

        //In case, all rows of table to be count.
        if (!isset($aQParams['where']))
        {
            $aQParams['where'] = array();
        }
        $aQParams = array_merge(array('table' => $this->_table_name), $aQParams);
        return $this->get_total_rows($aQParams);

    }

    /*Get full name of customer
     * */
    function get_full_name($aQParams)
    {

        $aData = array();
        //There should be some filter to select customer.
        if (empty($aQParams['where']))
        {
            return '';
        }

        //Select fields.
        $aQParams['select'] = array(
            'first_name',
            'last_name'
        );

        //To get customer name by application id we
        //need to join person table with application table.
        if (array_key_exists('app_id', $aQParams['where']))
        {
            //Join
            //$aQParams['join']['application'] = $this->_table_name . '.id = application.cust_id';

            //replace app_id with tablename.id as we have join here.
            $aQParams['where']["application.id"] = $aQParams['where']["app_id"];
            unset($aQParams['where']["app_id"]);

            //Get Record.
            $aData = $this->get_list($aQParams);
        }
        else
        {
            if(!empty($aQParams['where']["id"])){
                $aQParams['where']["customer.id"] = $aQParams['where']["id"];
                unset($aQParams['where']["id"]);
            }
                
            
            //Get record.
            $aData = $this->get_list($aQParams);
        }
        //Return full name of customer.
        if (!empty($aData))
        {
            return $aData[0]->first_name . ' ' . $aData[0]->last_name;
        }
        else
        {
            return '';
        }
    }

}//class
