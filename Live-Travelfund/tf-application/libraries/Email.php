<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Library for sending emails. This uses a third party system to send the transactional emails
 * and perform tracking
 *
 * @author Mark
 *
 */
class Email
{
    var $key = "92ZXJKzrFNcJdNZy0chAoQ";
    var $url = "https://mandrillapp.com/api/1.0/messages/send-template.php";
    var $email = "asavaliya@itaction.in";

    /**
     @string aData - having all require parameter 
     */
    public function configure_email($aData)
    {
        
        /* @param string	$email_type		The template in the Mandrill templates (minus environment)
         * @param string	$to_email		The email address to send to
         * @param string 	$to_name		The name of the recipient
         * @param array	$merge                          The array of merge data (associative)
         * @param array	$tags                           The array of tags to link to the message
        // Send the email */
        $this->send($aData['email_type'], $aData['email'], $aData['name'], $aData["merge_data"], $aData["tags"]);
    }        
    
    /**
     * This function send an email having link to reset password.
     */
    public function send_reset_password_email($aData)
    {
        //Email address is not validated.So customer require to validate it.
        //Password reset will work only after it.
        /*
        if (isset($aData['email_confirm_link']))
        {
            $this->send_validate_email($aData);
        }
        */
        // Set the conditional data
        $tags = array("reset-password");
        $merge_data = array(
            'reset_password_link' => $aData['reset_password_link'],
            'base_url' => base_url(),
            'name' => $aData['name'],
        );
        
log_message("error",print_r($merge_data,TRUE));

        // Send the email
        $this->send("Reset-Password", $aData['email'], $aData['name'], $merge_data, $tags);
    }

    /**
     * Send the email that asks customer to validate their address.
     *
     * @param array    $aData
     */
    public function send_validate_email($aData)
    {

        // Set the conditional data
        $tags = array("validate-email");
        $merge_data = array(
            'email_confirm_link' => $aData['email_confirm_link'],
            'base_url' => base_url(),
            'name' => $aData['name'],
        );

        // Send the email
        $this->send('Validate-Email', $aData['email'], $aData['name'], $merge_data, $tags);
    }

    /**
     * Send the email that asks customer to validate their address.
     *
     * @param object 	$application		The application model instance
     * @param string	$validation_link	The URL for validating the email
     */
    public function send_validate_email_backup($application, $validation_link)
    {
        $email = null;
        $tags = null;
        $merge_data = null;

        // Convert the email if not on the live environment
        $email = $this->email_convert($application->email);

        // Set the conditional data
        $tags = array("email-confirm");
        $merge_data = array(
            "first_name" => $application->first_name,
            "email_confirm_link" => $validation_link
        );

        // Send the email
        $this->send(CODE_ENV . "-confirm-email", $email, $application->first_name, $merge_data, $tags);
    }

    /**
     * Send the email to allow the customer to reset their password
     *
     * @param object 	$person				The person model instance
     * @param string	$reset_link			The URL for resetting the password
     */
    public function send_reset_password($person, $reset_link)
    {
        $email = null;
        $tags = null;
        $merge_data = null;

        // Convert the email if not on the live environment
        $email = $this->email_convert($person->email);

        // Set the conditional data
        $tags = array("reset-password");
        $merge_data = array(
            "first_name" => $person->first_name,
            "reset_password_link" => $reset_link
        );

        // Send the data
        $this->send(CODE_ENV . "-reset-password", $email, $person->first_name, $merge_data, $tags);
    }

    /**
     * Send the email that confirms the account has been set-up
     *
     * @param object 	$application	The application model instance
     * @param object 	$agreement		The agreement model instance
     */
    public function send_completion_email($application, $agreement)
    {
        $email = null;
        $tags = null;
        $merge_data = null;

        // Convert the email if not on the live environment
        $email = $this->email_convert($application->email);

        // Set the conditional data
        $tags = array("application-complete");
        $merge_data = array("first_name" => $application->first_name);

        // Send the email
        $this->send(CODE_ENV . "-application-complete", $email, $application->first_name, $merge_data, $tags);
    }

    /**
     * Send the email receipt after a purchase is made.
     *
     * @param object 	$person			The person model instance
     * @param object 	$purchase		The purcahse model instance
     */
    public function send_receipt_email($person, $purchase)
    {
        $email = null;
        $tags = null;
        $merge_data = null;

        // Convert the email if not on the live environment
        $email = $this->email_convert($person->email);

        // Set the conditional data
        $tags = array("payment-receipt");
        $merge_data = array(
            "first_name" => $person->first_name,
            "product_price_amount" => $purchase->product_price_amount,
            "partner_name" => $purchase->partner_name,
            "confirmed_datetime" => $purchase->confirmed_datetime,
            "purchase_id" => $purchase->purchase_id,
            "partner_name" => $purchase->partner_name,
            "client_transaction_uid" => $purchase->client_transaction_uid
        );

        // Send the email
        $this->send(CODE_ENV . "-payment-receipt", $email, $person->first_name, $merge_data, $tags);
    }

    /**
     * Send the email that explains a decline has been received
     *
     * @param object 	$application	The application model instance
     */
    public function send_decline_email($application)
    {
        $email = null;
        $tags = null;
        $merge_data = null;

        // Convert the email if not on the live environment
        $email = $this->email_convert($application->email);

        // Set the conditional data
        $tags = array("application-declined");
        $merge_data = array("first_name" => $application->first_name);

        // Send the email
        $this->send(CODE_ENV . "-application-declined", $email, $application->first_name, $merge_data, $tags);
    }

    /**
     * The internal method for sending an email via Mandrill email service. Don't access this
     * directly, call one of the helper functions for the specific email type being sent
     *
     * @param string	$email_type		The template in the Mandrill templates (minus environment)
     * @param string	$to_email		The email address to send to
     * @param string 	$to_name		The name of the recipient
     * @param array		$merge			The array of merge data (associative)
     * @param array		$tags			The array of tags to link to the message
     *
     * @return	boolean	TRUE if the email has been sent to the queue OK
     */
    protected function send($email_type, $to_email, $to_name = "", $merge = array(), $tags = array())
    {
        $CI = &get_instance();
        $CI->load->library('curl');

        // Declare variables
        $send_data = array();
        $request = null;
        $response = null;
        $sent_ok = false;
        $http_status = false;
        $merge_data = array();

        // Build the data to send
        $send_data["key"] = $this->key;
        $send_data["async"] = false;
        $send_data["template_name"] = $email_type;
        $send_data["template_content"] = array( array(
                //"name" => "not used",
                //"content" => "not used"
            ));

        // Create the data to merge into the message
        foreach ($merge as $name => $content)
        {
            $merge_data[] = array(
                "name" => $name,
                "content" => $content
            );
        }

        $send_data["message"] = array(
            //"from_email" => "hello@" . $_SERVER['HTTP_HOST'],
            //"from_email" => "hello@mail128-18.atl41.mandrillapp.com",
            "from_email" => "donotreply@travelfund.co.uk",
            "to" => array( array(
                    "email" => $to_email,
                    "name" => $to_name
                )),
            "merge" => true,
            "merge_vars" => array( array(
                    "rcpt" => $to_email,
                    "vars" => $merge_data
                )),
            "tags" => array($tags),
            "track_opens" => false,
            "track_clicks" => false
        );

        // Comms test with a basic ping. Keep here for testing and debugging connection
        //$url = "https://mandrillapp.com/api/1.0/users/ping.json";
        //$send_data = array("key" => $api_key);

        $request = json_encode($send_data);
        log_message("debug", $request);

        // Create CURL session and configure
        $CI->curl->create($this->url);
        $CI->curl->option(CURLOPT_TIMEOUT, 30);
        // Force a maximum timeout
        $CI->curl->option(CURLOPT_SSL_VERIFYPEER, false);
        // No certificate validation
        $CI->curl->post($request);
        $response = $CI->curl->execute();

        // Evaluate the response and act accordingly
        if ($CI->curl->info["http_code"] !== 200)
        {
            log_message("error", "Send error: [HTTP code: " . $CI->curl->info["http_code"] . "][Response: " . $response . "][cURL Error code: " . $CI->curl->error_code . "][cURL Error message: " . $CI->curl->error_string . "]");
            return false;
        }
        else
        {
            $response_array = unserialize($response);

            // Check the response. It may return a 200 http response but send back an error encoded
            // in an array
            if (is_array($response_array) && !empty($response_array[0]["status"]))
            {
                if ($response_array[0]["status"] == "rejected")
                {
                    log_message("error", "Send error: [Response: " . print_r($response_array, true) . "]");
                }
                else
                {
                    $sent_ok = true;
                }
            }
            else
            {
                // Another unknown issue occurred
                log_message("error", "Send error: [Raw response: {$response}]");
            }
        }

        return $sent_ok;
    }

    /* This function send an email to admin to inform
     * customer that fund is available with Travelfund.
     * */
    public function send_fund_avail_email($user_email)
    {

        //Send email to customer as well as admin user.
        $tags = array("notify-on-fund-avail");
        // Send the email
        $this->send(CODE_ENV . "-notify-on-fund-avail", $user_email, 'TravelFund Admin', array(), $tags);

        //Send an email to admin also.
        //$admin_email = 'alpesh.savaliya@gmail.com';
        $this->send(CODE_ENV . "-notify-on-fund-avail", $this->email_convert(), 'TravelFund Admin', array(), $tags);
    }//function.

}
