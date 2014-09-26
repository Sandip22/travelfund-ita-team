<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/*This class handle right of admin user*/

class Right_model extends Admin_model {

    public $_table_name = 'admin_rights';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'model' => 'model',
        'user_id' => 'user_id',
        'read' => 'read',
        'add' => 'add',
        'edit' => 'edit',
        'delete' => 'delete',
        'created_datetime' => 'created_datetime',
        'modified_datetime' => 'modified_datetime',
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

    /*By default user has no right.
     *@ $user_id  id of user for which it is required to send default rights.
     *@ $aMwoR models without right
     *@return array.
     * */
    function get_default_rights($user_id = '', $aMwoR = array()) {

        if (empty($aMwoR))
            $aMwoR = $this -> config -> item('tf_right_based_models');

        $i = 0;
        foreach ($aMwoR as $model) {
            //field_name match to db column name.
            $aColVal[$i] = new stdClass;
            foreach ($this->aDBFields as $field_name) {
                if ($field_name == 'read' || $field_name == 'add' || $field_name == 'edit' || $field_name == 'delete') {
                    //set by default off.No rights
                    $aColVal[$i] -> $field_name = 'off';
                }
            }
            $aColVal[$i] -> model = strtolower($model);
            $aColVal[$i] -> user_id = $user_id;
            $i++;
        }

        return $aColVal;
    }

    /*This method save data into db.
     * */
    function insert($aData) {
        //col_val key will have associative array of users.
        $this -> db -> set('date_created', 'NOW()', FALSE);
        $aData = array_merge(array('col_val' => $aData), array('table_name' => $this -> _table_name));
        return parent::save($aData);
    }

    /*This function update data of user*/
    function udpate($aData) {
        $aData = array_merge(array('table_name' => $this -> _table_name), $aData);
        return parent::update($aData);
    }

    /*Save batch of data into database.*/
    public function insert_batch($aData) {
        //Sava data into database.
        $aData = array_merge(array('col_val' => $aData), array('table_name' => $this -> _table_name));
        parent::insert_batch($aData);
    }

    /*This function returns a list of rights*/
    public function get_list($aQParams) {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this -> _table_name));
        return $this -> get_rows($aQParams);
    }

}
