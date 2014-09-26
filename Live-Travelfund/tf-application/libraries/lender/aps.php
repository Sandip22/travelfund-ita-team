<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class handle all operation with APS.
 */

class APS
{
    static $base_url = APS_URL;
    var $name = "APS";
    //lender name
    var $code = "APS";
    //lender code
    var $tf_id = "TVR001";
    //tf id with lender
    var $curl;
    var $session;
    var $data = array();
    //Map Travelfund form wise field with
    //lender field.
    var $field = array(
        'per_detail' => array(
            'title' => 'title',
            'last_name' => 'lastName',
            'first_name' => 'firstName',
            // 'gender' => 'gender',
            'birth_date' => 'dateOfBirth',
            'email' => 'email',
            'mobile_phone' => 'mobilePhone',
            ''
        ),
        'app_detail' => array(
            'len_app_id' => 'applicationId',
            'mobile_phone' => 'mobilePhone',
            'app_status' => 'statusCode',
            'sp_terms' => 'agreeTerms',
            'product_offer' => 'productOffer',
            'accept_terms' => 'agreeCreditTerms'
        ),
        'add_detail' => array(
            'house_number' => 'addresses[0].houseNumber',
            'street' => 'addresses[0].streetName',
            'city' => 'addresses[0].townCity',
            'post_code' => 'addresses[0].postcode',
            //'county' => 'county',
            //'country' => 'country',
        ),
        'emp_detail' => array(
            'emp_status' => 'employmentStatus',
            'res_status' => 'residentialStatus',
            'anum_hs_income_b_tax' => 'householdIncome',
            'mobile_verif_code' => 'verificationCode'
        ),
        'agree_detail' => array('data' => 'Data', ),
        'how_it_works' => array(
            'avail_fund' => 'availableFunds',
            'rep_apr' => 'representativeAPR',
            'purchase_rate' => 'purchaseRate',
            'assumed_limit' => 'assumedLimit',
        ),
        'app_compelet' => array('offer' => 'productOffer', ),
        "ita_concat" => array(
            'app_detail' => array('departure_date' => 'departureDate', ),
            'emp_detail' => array(
                'emp_type' => 'employmentType',
                'salary_day' => 'paymentFrequency',
            )
        ),
    );

    //Lender field has following format.so convert before call.
    var $field_format = array(
        'dateOfBirth' => array(
            'type' => 'date',
            'len_format' => 'Y-m-d',
            'tf_format' => 'd-m-Y',
        ),
        'departureDate' => array(
            'type' => 'date',
            'len_format' => 'Y-m-d',
            'tf_format' => 'd-m-Y',
        ),
    );

    /**
     * constructor.
     */

    function __construct()
    {
        //Get instance of CI
        $CI = &get_instance();
        $CI->load->library('curl');
        //Assign it to class valirable.
        $this->curl = &$CI->curl;
        //CURL session.
        $this->session = &$CI->session;

        $aData = array('lender' => array(
                'name' => $this->name,
                'code' => $this->code,
                'id' => $this->tf_id,
            ));

        $this->session->set_userdata($aData);

        $tmp_url = $this->session->userdata('parent_url');
        
log_message('error', " OTA URL :: " . print_r($tmp_url,TRUE));
log_message('error', " APS URL :: " . print_r(self::$base_url,TRUE));

        //Set application header to accept json data from third party.
        $this->curl->http_header('Accept', 'application/json');

    }

    /**
     * This function set value for application.
     * @param Array
     */

    function set($aData)
    {
        //ita_key is form id.
        //Set values for field.
        if (isset($this->field[$aData['ita_key']]))
        {
            foreach ($this->field[$aData['ita_key']] as $tf_field => $len_field)
            {
                if (isset($aData[$tf_field]))
                {
                    //Formate field as per lender requirement.
                    if (isset($this->field_format[$len_field]))
                    {
                        //Date formate.
                        if ($this->field_format[$len_field]['type'] == 'date')
                        {
                            //Create date object form user input.
                            $oDate = DateTime::createFromFormat($this->field_format[$len_field]['tf_format'], $aData[$tf_field]);
                            //Get date according to db formate.
                            $this->data[$len_field] = $oDate->format($this->field_format[$len_field]['len_format']);
                        }
                    }
                    else
                    {
                        $this->data[$len_field] = $aData[$tf_field];
                    }
                }//if
            }//foreach
        }//if

        //Set values for field which we need to concate in
        //call
        if (isset($this->field['ita_concat'][$aData['ita_key']]))
        {
            foreach ($this->field['ita_concat'][$aData['ita_key']] as $tf_field => $len_field)
            {
                if (isset($aData[$tf_field]))
                {
                    //Formate field as per lender requirement.
                    if (isset($this->field_format[$len_field]))
                    {
                        //Date formate.
                        if ($this->field_format[$len_field]['type'] == 'date')
                        {
                            //Create date object form user input.
                            $oDate = DateTime::createFromFormat($this->field_format[$len_field]['tf_format'], $aData[$tf_field]);
                            //Get date according to db formate.
                            $this->data['productSpecificDetails'][$len_field] = $oDate->format($this->field_format[$len_field]['len_format']);
                        }
                    }
                    else
                    {
                        $this->data['productSpecificDetails'][$len_field] = $aData[$tf_field];

                    }
                }//if

            }//foreach
        }//if
    }

    /**
     * Execut webservice call.
     * @param array
     * @return bool/array.
     */

    function execute($aData, $plain = FALSE)
    {
        // Create CURL session and configure
        $this->curl->create($aData['url']);
        //Do not varify SSL.
        $aData['options'][CURLOPT_SSL_VERIFYPEER] = FALSE;

        isset($aData['options']) ? $this->curl->options($aData['options']) : "";

        if (isset($aData['post']))
        {
            $this->curl->post($aData['post']);
            $this->curl->http_method('POST');
        }
        //Call webservice.
        $json = $this->curl->execute();

        if ($plain == TRUE)
        {
            return $json;
        }
        //json to array
        $aRespo = json_decode($json, true);


        if ($aRespo === FALSE)
        {
            //Unknow error
            log_message('error', 'Response' . print_r($this->cur->error_code . " " . $this->cur->error_string, TRUE));
            return FALSE;
        }
        else if (isset($aRespo['Meta']['Status']) && $aRespo['Meta']['Status'] != '200')
        {
            //Error thrown by lender.
            log_message('error', 'Response' . print_r($aRespo['Meta']['Status'] . " " . $aRespo['Meta']['Status'], TRUE));
            return FALSE;
        }
        else
        {
            //Successful.
            return $aRespo["Data"];
        }
    }

    /**
     * Return response as per travelfund fields.
     * @param array
     * @return bool/array
     */

    function return_response($aRespo)
    {

log_message('error', ' ROW Response' . print_r($aRespo, TRUE));

        //Return data is a string.
        if (is_string($aRespo))
        {
            return $aRespo;
        }

        //Get all keys
        $aKeys = array_keys($this->field);
        $aData = FALSE;
        foreach ($aKeys as $form_key)
        {
            //It is concated string.We need to handle it in
            //a different manner.
            if ($form_key == 'ita_concat' || $form_key == 'app_compelet')
            {
                continue;
            }
            foreach ($this->field[$form_key] as $tf_field => $lender_field)
            {
                if (isset($aRespo[$lender_field]))
                {
                    //Set value for travelfund field.
                    $aData[$tf_field] = $aRespo[$lender_field];
                }
            }
        }
        
log_message('error', 'Decoded Response' . print_r($aRespo, TRUE));

        return $aData;
    }

    /**
     * Check if TravelFund has enough credit to facilitate
     * loan.
     * @param array
     * @return bool/array
     */
    function fund_availability($aData = array())
    {
        $aData['url'] = self::$base_url . 'Api/Product/Summary?promocode=' . $this->tf_id;

        //Set Get http method.
        $this->curl->http_method('GET');
        $aRespo = $this->execute($aData);

        //Store fund availability status.
        if (isset($aRespo['availableFunds']) && $aRespo['availableFunds'] == '1')
        {
            $this->session->set_userdata(array('fund_availability' => 'yes'));
        }
        //Map response with TravelFund fields.
        return $this->return_response($aRespo);
    }

    /**
     * Submit new application to APS.
     */
    function apply()
    {
        $aData['url'] = self::$base_url . 'Api/Product/Apply/' . $this->tf_id;

        //product specific details should have following format while submitted to lender.
        //productSpecficDetails=departureDate^20140815|employmentType^type|paymentFrequency^End%20of%20the%20month
        if (isset($this->data['productSpecificDetails']))
        {
            $aTmp = array();
            foreach ($this->data['productSpecificDetails'] as $len_field => $value)
            {
                $aTmp[] .= $len_field . "^" . $value;
            }
            $this->data['productSpecificDetails'] = implode("|", $aTmp);
        }

        $this->data['promoCode'] = $this->tf_id;

        //Post Data
        $aData['post'] = $this->data;
        $aRespo = $this->execute($aData);

        //Application id return from lender.
        if (isset($aRespo["applicationId"]))
        {
            $this->session->set_userdata(array('len_app_id' => $aRespo["applicationId"]));
            $this->session->set_userdata(array('product_offer' => $aRespo["productOffer"]));

        }

        //Map response with TravelFund fields.
        return $this->return_response($aRespo);
    }

    /**
     * Lender will send an sms to customer on specific number.
     * @param array
     */
    function send_varification_sms($aArg = array())
    {
        //get app id
        $app_id = $this->session->userdata('len_app_id');

        if (!empty($app_id))
        {
            $aData['url'] = self::$base_url . 'Api/Product/Apply/' . $this->tf_id;

            //Post Data
            $aData['post']['applicationId'] = $this->session->userdata('len_app_id');
            $aData['post']['resendVerificationCode'] = 'true';

            $aRespo = $this->execute($aData);

            if ($aRespo === FALSE)
            {
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
    }

    /**
     * Fetch credit agreement text from lender.
     */
    function get_credit_agreement()
    {
        $app_id = $this->session->userdata('len_app_id');
        $product_offer = $this->session->userdata('product_offer');

        if (empty($app_id))
        {
            log_message('error', 'Session do not have lender application id.It must have it.');
            return;
        }

        $aData['url'] = self::$base_url . $product_offer['creditAgreementUrl'];

        $this->curl->http_method('GET');
        $aRespo = $this->execute($aData, TRUE);

        return $aRespo;
    }

    /**
     * Fetch SECCI from lender
     */
    function get_secci($t = array())
    {
        $app_id = $this->session->userdata('len_app_id');
        $product_offer = $this->session->userdata('product_offer');

        if (empty($app_id))
        {
            log_message('error', 'Session do not have lender application id.It must have it.');
            return;
        }

        $aData['url'] = self::$base_url . $product_offer['secciUrl'];

        $this->curl->http_method('GET');
        $aRespo = $this->execute($aData, TRUE);

        return $aRespo;
    }

    /**
     * Get current status of application.
     */
    function get_status()
    {
        $aData['url'] = self::$base_url . 'Api/Product/Apply/' . $this->tf_id;
        $aData['post']['applicationId'] = $this->session->userdata('len_app_id');

        $this->curl->http_method('POST');
        $aRespo = $this->execute($aData);
        
        if (isset($aRespo["applicationId"])){
            $this->session->set_userdata(array('product_offer' => $aRespo["productOffer"]));    
        }

        //Map response with TravelFund fields.
        return $this->return_response($aRespo);
    }

    /**
     * Fetch card details.
     */

    function get_card_detail($aData)
    {
        $account_number = $aData['acc_num'];
        if (empty($account_number))
        {
            log_message('error', 'Accoun number is empty.Can not fetch account details.');
            return;
        }

        $aData['url'] = self::$base_url . 'api/card/details/' . $account_number;
        $this->curl->http_method('GET');
        $aRespo = $this->execute($aData);

        //Map response with TravelFund fields.
        return $aRespo;
    }
    
    /**
     * Get account summary.
     */
    
    function get_account_summary($aData)
    {
        $account_number = $aData['acc_num'];
        if (empty($account_number))
        {
            log_message('error', 'Accoun number is empty.Can not fetch account details.');
            return;
        }

        $aData['url'] = self::$base_url . 'api/Account/Summary/' . $account_number;
        $this->curl->http_method('GET');
        $aRespo = $this->execute($aData);

log_message('error', ' get_account_summary' . print_r($aRespo, TRUE));

        //Map response with TravelFund fields.
        return $aRespo;
    }
}
