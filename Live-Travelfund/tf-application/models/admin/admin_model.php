<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/*Admin model.
 *All other admin model extend this class.
 *@author asavaliya-itaction.
 * */

class Admin_model extends TF_Model {

    function __construct() {
        parent::__construct();
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
