<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/*Admin model.
 *All other admin model extend this class.
 *@author asavaliya-itaction.
 * */

class Frontend_model extends TF_Model {

    /**
     * Default constructor
     */
    function __construct() {
        parent::__construct();
    }//fun

    /*Show error page and log error into log file
     * */
    function trigger_error($opt) {
        //Redirect to error page.
        switch($opt) {
            case 'No_Table_Selected' :
                log_message('error', 'No table specified');
                show_error('No table name spicified');
                exit ;
                break;
        }
    }

    /**
     * This method save data into database 
     * @param $aData Array : Data to be inserted.
     * @return bool true or false
     */
    protected function insert($aData) {
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aData['table']) || empty($aData['col_val'])) {
            $this -> trigger_error('No_Table_Selected');
        }
        return parent::insert($aData);
    }
    
    /**
     * Get Single row from db
     * @param array $aQParams  : Query params 
     * @return array of object.
     */
    protected function get_row($aQParams){
        //if no data is passed or table is not specified then fire error.
        //something goes wrong here.
        if (empty($aQParams['table'])) {
            $this -> trigger_error('No_Table_Selected');
        }
        $aQParams['offset']='1';
        $aQParams['limit']='0';
        return parent::get_row($aQParams);
    }
}
