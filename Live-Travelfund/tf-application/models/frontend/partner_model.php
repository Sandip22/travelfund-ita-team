<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");

/**
 * Partner model.
 *
 */

class Partner_model extends Frontend_model
{
    private $_table_name = 'partner';
    public $name = '';

    //Database fields.
    var $aDBFields = array(
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'code' => 'code',
        'phone' => 'phone',
        'email' => 'email',
        'url' => 'url',
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

    //Partner is active.
    const STATUS_ACTIVE = "active";
    //Partner is deactive.
    const STATUS_DEACTIVE = "deactive";

    /**
     * This function check if partner (OTA) is eligibile to have TF facility.
     */
    function check_eligibility($aParams)
    {
        $aQParams['where'] = $aParams;
        $oPartner = $this->get_partner($aQParams);

log_message('error','check_eligibility :: ' . print_r($oPartner,TRUE));
        
        $this->name = $oPartner->name;
        //OTA must be register with TF.
        //It must have id,name,phone,email.
        //It must have status active, must be allowed to make request to TF and
        //must be allowed to do payment from TF.
        if ((!empty($oPartner->id) 
            && !empty($oPartner->name) 
            && $oPartner->status === self::STATUS_ACTIVE 
            ))
        {
        
            $this->session->set_userdata(array(
                'partner_id' => $oPartner->id,
                'partner_code' => $oPartner->code,
                'partner_name' => $oPartner->name,
                //webpage url at which widget is placed.
                'partner_url' => $this->input->get('partner_url'),
            ));

            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * This function retrive specified partner.
     * @param Array $aQParams : Query Params.
     * @return array of object
     */
    function get_partner($aQParams)
    {
        //Add tabel name.
        $aQParams = array_merge($aQParams, array('table' => $this->_table_name));
        return array_shift($this->get_row($aQParams));
    }

}
