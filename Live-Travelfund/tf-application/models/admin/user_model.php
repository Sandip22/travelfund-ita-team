<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Login Model.
 */
class User_model extends Admin_model
{

    public $_table_name = 'admin_user';

    var $aDBFields = array(
        'id' => 'id',
        'user_name' => 'user_name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'password' => 'password',
        'email' => 'email',
        'status' => 'status',
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
     * Authenticate User
     * @Author asavaliya-itaction.
     * @param array $aQParams  : Query params
     * @return bool.
     */
    public function authenticate($aQParams)
    {

        global $admin_user_full_name;
        $aUser = array();
        $oUser = new stdClass();

        $aUser = $this->get_user(array('where' => $aQParams));
        $oUser = array_shift($aUser);

        //Credentials are true.
        if (!empty($oUser->id) && $oUser->status === 'Active')
        {
            //set into session.
            $this->session->set_userdata(array(
                'admin_user_authenticated' => 'yes',
                'admin_user_id' => $oUser->id,
                'admin_user_full_name' => $oUser->first_name . ' ' . $oUser->last_name,
            ));

            $admin_user_full_name = $this->session->userdata('admin_user_full_name');
            return true;
        }
        else
        {
            return false;
        }

    }//fun.

    /**
     * This method save data into db.
     */
    function insert($aData)
    {
        $aData = array_merge(array('col_val' => $aData), array('table' => $this->_table_name));
        return parent::insert($aData);
    }

    /**
     * This function update data of user
     */
    function update($aData)
    {
        $aData = array_merge(array('table_name' => $this->_table_name), $aData);
        return parent::update($aData);
    }

    /**
     * Get Single row from db
     * @param array $aQParams  : Query params
     * @return array of object.
     */
    public function get_user($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_row($aQParams);
    }//fun

    /**
     * Get total number of rows into table
     */
    function count_all_rows($aQParams)
    {

        //In case, all rows of table to be count.
        if (!isset($aQParams['where']))
        {
            $aQParams['where'] = array();
        }
        $aQParams = array_merge(array('table' => $this->_table_name), $aQParams);
        return $this->get_total_rows($aQParams);

    }

    /**
     * This function return list of users
     *
     */
    function get_list($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_rows($aQParams);
    }
}
