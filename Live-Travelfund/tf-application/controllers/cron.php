<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*This is main controller.All controller should extend it
 * */

class cron extends Front_Controller
{
    /**
     * This function send followup email to customer 
     * who has not pass eligibility test via hd-decision.
     * @author asavaliya-itaciton
     */
    function send_eligibility_mail()
    {
        ini_set('max_execution_time', 0);
        
        exit;// STOP AS PER SANDIP SAID ON 4TH AUG
        
        //Load database.
        $this->load->database();

        //Where condition.
        $this->db->where('created_datetime >= DATE_SUB(NOW(),INTERVAL 48 HOUR)', NULL, FALSE);
        $this->db->where('status', 'HD Decision Approved');
        $this->db->where('send', 0);
        
        //Get data.
        $query = $this->db->get('email');

        //Get application.
        $this->load->model('frontend/customer_model', 'cust');
        
        foreach ($query->result() as $row)
        {
            
            $aQParams['where'] = array(
                    'email' => $row->email,
             );

            $res = $this->cust->get_application($aQParams,'latest');

log_message('error','Latest Application '.print_r($res,TRUE));       

            
            if(isset($res->app_id) && !empty($res->app_id)){
                continue; 
            }

            //EXIT;

            $aData=array();
            //Send follow up after 48 hours.
            $aData["email"] = $row->email;
            $aData["name"] = $row->first_name .' '. $row->last_name;
            $aData["base_url"] = base_url();
            $aData["email_type"] = "2-hd-decisions-follow-up";
            $aData['apply_now'] = base_url();
            
            $aData["merge_data"] = array(
                'base_url' => $aData['base_url'],
                'name' => $aData['name'],
                "apply_now" => $aData['apply_now']
            );

            $aData["tags"] = array('tags' =>"2-hd-decisions-follow-up");

            if(!isset($this->email)){
                //Load Email library
                $this->load->library("Email");    
            }

            //send command mail function
            $this->email->configure_email($aData);
            
            //$aData["email"] = "donotreply@travelfund.co.uk"; // TESTING CRON
            //$this->email->configure_email($aData); // TESTING CRON
            
            //Update email table.
            $aData=array();
            $aData['send']=1;
            $aData['sent_datetime']=date('Y-m-d H:i:s');
            $this->db->where('id',$row->id);
            $this->db->update('email',$aData);
        }
        log_message("debug", "Cron:Job - Send eligiblity mail");
    }
    
    /**
     * Reminder email to customer
     */
    function send_reminder_mail()
    {
        ini_set('max_execution_time', 0);
        
        exit;// STOP AS PER SANDIP SAID ON 4TH AUG
        
        //Load database.
        $this->load->database();

        $sql = "select a.*,c.* from application a, customer c "
                . "where a.id = c.id and "
                ." a.created_datetime >= DATE_SUB(NOW(),INTERVAL 168 HOUR) and "
                . "a.app_status  = 'FULL' and "
                . "a.accept_terms  = 'yes' and "
                . "a.sp_terms  = 'yes' and "
                . "account_number != ''";
        
        
        //echo $sql;//exit;
        $query = $this->db->query($sql);
        foreach ($query->result() as $row)
        {
            
            $aData=array();
            //Send follow up after 48 hours.
            $aData["email"] = $row->email;
            $aData["name"] = $row->first_name .' '. $row->last_name;
            $aData["base_url"] = base_url();
            $aData["email_type"] = "8-reminder-email";
            $aData['apply_now'] = base_url();
            
            $aData["merge_data"] = array(
                'base_url' => $aData['base_url'],
                'name' => $aData['name'],
                "apply_now" => $aData['apply_now']
            );

            //Time is running out!
            $aData["tags"] = array('tags' =>"8-reminder-email");

            if(!isset($this->email)){
                //Load Email library
                $this->load->library("Email");    
            }

            //send command mail function
            $this->email->configure_email($aData);
            
            //$aData["email"] = "donotreply@travelfund.co.uk"; // TESTING CRON
            //$this->email->configure_email($aData); // TESTING CRON
            
            //Update application table.
            $aData=array();
            $aData['send']=1;
            $aData['sent_datetime']=date('Y-m-d H:i:s');
            $this->db->where('id',$row->id);
            $this->db->update('application',$aData);
        }
        log_message("debug", "Cron:Job - Send Reminder mail");
    }
    
    /**
     * For testing getting latest customer detail to pass APS
     */
    function get_latest_customer_details($hours=1)
    {
        ini_set('max_execution_time', 0);
        
        $hours = $hours*24;
        //Load database.
        $this->load->database();

        $sql = "SELECT a.id, a.len_app_id, a.cust_id, a.app_status, a.accept_terms, a.sp_terms, a.created_datetime, a.modified_datetime, c.title, c.first_name, c.last_name, c.email "
                . "FROM application a, customer c "
                . "WHERE a.cust_id = c.id "
                . "AND a.account_number = '' "
                . "AND a.app_status != 'FULL' "
                . "AND a.created_datetime >= DATE_SUB( NOW( ) , INTERVAL $hours HOUR ) order by a.created_datetime desc";
        
        //echo $sql;//exit;
        $query = $this->db->query($sql);
        $res = $query->result();
        echo "<pre>";
        print_r($res);
    }
}
