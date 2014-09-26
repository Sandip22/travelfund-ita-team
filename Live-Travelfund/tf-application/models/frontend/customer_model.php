<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Customer_model extends Frontend_model
{

    private $_table_name = 'customer';

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
        'password_reset_attempt' => '  password_reset_attempt',
        'created_datetime' => 'created_datetime',
        'modified_datetime' => 'modified_datetime',
    );

    //Field should have value in following formate
    //when stored to Database.
    var $aDBFormat = array('birth_date' => array(
            'type' => 'date',
            'format' => 'Y-m-d'
        ), );
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
     * Authenticate customer.
     */
    function authenticate($aQParams)
    {
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        $oCust = array_shift($this->get_row($aQParams));

        //Credentials are true.
        if (!empty($oCust->id))
        {
            //set into session.
            $this->session->set_userdata(array(
                'customer_authenticated' => 'yes',
                'customer_id' => $oCust->id,
                'customer_full_name' => $oCust->first_name . ' ' . $oCust->last_name,
                'customer_email' => $oCust->email,
            ));

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * This function generate requested link.We need to confirm if it is from particular customer in case of
     * email verification.
     * @param $aQParams array Query Params
     * @param $method   string Controller method
     * @param $type string type of link
     * @return array
     */
    function generate_validation_link($aQParams, $method, $type = 'email')
    {
        $oCust = array_shift($this->get_customer($aQParams));
        $aReturn = array();

        if (!empty($oCust->id))
        {
            //Generate hash code to identify link.
            $bytes = openssl_random_pseudo_bytes(8);
            //Returns an ASCII string containing the hexadecimal representation of str
            $ehex = bin2hex($bytes);

            //Email validation link
            $aReturn['email_confirm_link'] = base_url() . "customer/account/{$method}/{$ehex}";

            //Store md5 into database.
            $aData['col_val']['email_validation_code'] = md5($ehex);
            //Update into Datebsae.
            $this->update($aData);

            return $aReturn;
        }
    }

    /**
     * Check if customer has give correct information to reset password.
     * @param $aQparams    array
     * @return bool
     */
    function process_password_reset($aQParams)
    {
        $aData = $aReturn = array();
        $oCust = array_shift($this->get_customer($aQParams));

        if (!empty($oCust->id))
        {

            //Customer id
            $aData['where']['id'] = $oCust->id;
            //Customer email
            $aReturn['name'] = $oCust->first_name . ' ' . $oCust->last_name;
            $aReturn['email'] = $oCust->email;

            //Send a link to validate email address.
            if ($oCust->is_email_validated == '0')
            {
                //Generate hash code to identify link.
                $bytes = openssl_random_pseudo_bytes(8);
                //Returns an ASCII string containing the hexadecimal representation of str
                $ehex = bin2hex($bytes);
                //Email validation link
                $aReturn['email_confirm_link'] = base_url() . "customer/credential/validate_email/{$ehex}";

                //Store md5 into database.
                $aData['col_val']['email_validation_code'] = md5($ehex);
            }
            //Generate hash code to identify link.
            $bytes = openssl_random_pseudo_bytes(8);
            //Returns an ASCII string containing the hexadecimal representation of str
            $phex = bin2hex($bytes);
            //Reset password link
            $aReturn['reset_password_link'] = base_url() . "customer/credential/reset_password/{$phex}";

            $aData['col_val']['password_reset_code'] = md5($phex);
            $aData['col_val']['modified_datetime'] = date('Y-m-d H:i:s');
            $aData['col_val']['password_reset_expiry_datetime'] = date('Y-m-d H:i:s', time() + 3600 * 24);

            //Customer can reset password 3 times in 24 hours.
            //After 24 hours we need to set attempt 0.
            $diff = 0;
            $now = strtotime("now");
            $expiry = strtotime($oCust->password_reset_expiry_datetime);
            $timediff = $now - $expiry;

            if ($timediff > 86400)
            {
                $aData['col_val']['password_reset_attempt'] = 0;
            }

            //Update into Datebsae.
            $this->update($aData);

            return $aReturn;
        }
        else
        {
            return false;
        }
    }

    /**
     * Change password
     * @param $aQparams    array
     * @return bool
     */
    function process_change_password($aQParams)
    {
        $aData = $aReturn = array();
        $oCust = array_shift($this->get_customer($aQParams));

        if (!empty($oCust->id))
        {

            //Customer id
            $aData['where']['id'] = $oCust->id;
            //Customer email
            $aReturn['name'] = $oCust->first_name . ' ' . $oCust->last_name;
            $aReturn['email'] = $oCust->email;

            //Send a link to validate email address.
            if ($oCust->is_email_validated == '0')
            {
                //Generate hash code to identify link.
                $bytes = openssl_random_pseudo_bytes(8);
                //Returns an ASCII string containing the hexadecimal representation of str
                $ehex = bin2hex($bytes);
                //Email validation link
                $aReturn['email_confirm_link'] = base_url() . "customer/credential/validate_email/{$ehex}";

                //Store md5 into database.
                $aData['col_val']['email_validation_code'] = md5($ehex);
            }
            //Generate hash code to identify link.
            $bytes = openssl_random_pseudo_bytes(8);
            //Returns an ASCII string containing the hexadecimal representation of str
            $phex = bin2hex($bytes);
            //Reset password link
            $aReturn['reset_password_link'] = base_url() . "customer/credential/reset_password/{$phex}";

            $aData['col_val']['password_reset_code'] = md5($phex);
            $aData['col_val']['modified_datetime'] = date('Y-m-d H:i:s');
            $aData['col_val']['password_reset_expiry_datetime'] = date('Y-m-d H:i:s', time() + 3600 * 24);

            //Customer can reset password 3 times in 24 hours.
            //After 24 hours we need to set attempt 0.
            $diff = 0;
            $now = strtotime("now");
            $expiry = strtotime($oCust->password_reset_expiry_datetime);
            $timediff = $now - $expiry;

            if ($timediff > 86400)
            {
                $aData['col_val']['password_reset_attempt'] = 0;
            }

            //Update into Datebsae.
            $this->update($aData);

            return $aReturn;
        }
        else
        {
            return false;
        }
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
     *This method save data into db.
     * @param array $aData : Data to insert into db.
     */

    function insert($aData)
    {
        //Current DateTime in mysql formate.
        if (!isset($aData['created_datetime']))
        {
            $aData['created_datetime'] = date('Y-m-d H:i:s');
        }

        if (!isset($aData['modified_datetime']))
        {
            $aData['modified_datetime'] = date('Y-m-d H:i:s');
        }

        $aData = array_merge(array('col_val' => $aData), array('table' => $this->_table_name));
        return parent::insert($aData);
    }

    /**
     * Function reset.
     */

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

    /**
     * check password before change
     */
    function check_old_password($aQParams)
    {
        //$sql = "SELECT password FROM $this->_table_name WHERE id = ? AND password = ?";
        //$query = $this->db->query($sql, array($aQParams['where']['cust_id'], $aQParams['where']['password']));

        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return $this->get_row($aQParams);

    }

    /**
     * Customer can not apply with same credentials within
     * 72 hours of loan approval
     * @return bool
     */
    function eligible_to_apply($aQParams)
    {
        return $this->get_application(array('where' => $aQParams), 'latest');
    }

    /**
     * Get applications of customers.
     */
    function get_application($aQParams, $case = '')
    {
        
log_message('error', __FUNCTION__);
        
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));

        switch($case)
        {
            case "latest" :
                //Get latest application.
                //Join
                $aQParams['select'] = 'application.modified_datetime as app_modified_datetime,application.id as app_id,application.app_status as app_status,application.account_number as acc_num,customer.id as cust_id';
                $aQParams['join']['application'] = $this->_table_name . '.id = application.cust_id';
                $aQParams['order_by'] = 'application.modified_datetime DESC';
                break;

            case 'full' :
                //$aQParams['select']="application.*,employement.*,address.*";
                $aQParams['join']['application'] = $this->_table_name . '.id = application.cust_id';
                $aQParams['join']['employement|left'] = 'employement.app_id = application.id';
                $aQParams['join']['address|left'] = 'address.app_id = application.id';
                break;
        }

        //Get data
        $aData = $this->get_row($aQParams);
        $oData = new stdClass();
        if (isset($aData[0]))
        {
            $oData = array_shift($aData);
        }

log_message('error', __FUNCTION__ ." LAST APP " . print_r($oData, TRUE));

        $oData->can_apply = TRUE;
        $oData->app_incompelete = FALSE;

        //Within 7days customer can not apply for loan with same credentials.
        //Application should be either accepted or declined.
        //In complete application should be allowed.
        if (!empty($oData->app_id))
        {
            $d1 = new DateTime($oData->app_modified_datetime);
            $d2 = new DateTime("now");

            $diff = $d2->diff($d1);

            $seconds = ($diff->days) * 24 * 3600;
            $seconds += ($diff->h) * 3600;
            $seconds += ($diff->i) * 60;
            $seconds += ($diff->s);


log_message('error','$seconds :: '. print_r($seconds, TRUE));

            //Can not apply for loan within 7 days.
            //In case application is approved for loan or rejected.
            //7*24*3600
            if ($seconds < 604800 && (
                    $oData->app_status == 'NVALID' 
                    || $oData->app_status == 'DUPE' 
                    || $oData->app_status == 'VCDEC' 
                    || $oData->app_status == 'ACDEC' 
                    || $oData->app_status == 'UWDEC'
                    || ($oData->app_status == 'FULL' && !empty($oData->acc_num))
                ))
            {
                $oData->can_apply = FALSE;
                
                //Disable rule in test or development enviornment.
                if(ENVIRONMENT == 'development' || ENVIRONMENT == 'testing')
                    $oData->can_apply = TRUE;
                
                return $oData;
            }else 
            //30-days application incomplete.                
            if(($seconds < 2592000  
                    && empty($oData->acc_num))
                    && ( $oData->app_status == 'NONE' 
                    || $oData->app_status == 'VCREQ' 
                    || $oData->app_status == 'VCVFD' 
                    || $oData->app_status == 'ACREQ' 
                    || $oData->app_status == 'ACAUTH'
                    || $oData->app_status == 'ACPROC'
                    || $oData->app_status == 'FULL') 
                )
            {
                $oData->app_incompelete = TRUE;
                
                //Disable rule in test or development enviornment.
                if(ENVIRONMENT == 'development' || ENVIRONMENT == 'testing')
                    $oData->app_incompelete = FALSE;
                
                return $oData;
            }
            else
            {
                $oData->can_apply = TRUE;
                return $oData;
            }
        }
        return $oData;
    }

}//class
