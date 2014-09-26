<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is main controller.All controller should extend it
 */

class Book extends Front_Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        //Load Database connection.
        $this->load->database();
    }
    /**
     * Display Login detail page.
     */
    function index()
    {
        //Get latest approved application and associated account number.
        $this->load->model('frontend/customer_model', 'cust');
        
        //Get personal details.
        $aSess = $this->session->userdata('application');

log_message("error", __FUNCTION__ . " :: **********************  :: " . print_r($aSess, TRUE));
        
        //Get latest approved application.
        $aQParam['where']['cust_id'] = $aSess['cust_id'];

        $oApp = $this->cust->get_application($aQParam, "latest");
		
		
		$aSess['app_detail']=get_object_vars($oApp);
		$aSess['app_detail']['account_number']=$oApp->acc_num;
		
		$this->session->set_userdata(array('application'=>$aSess));
		
        if(!empty($oApp->app_id)){
          
		  
		  	//Calculate time left.
             $d1 = new DateTime($oApp->app_modified_datetime);
             $d2 = new DateTime("now");
    
             $diff = $d2->diff($d1);
    
             $seconds = ($diff->days) * 24 * 3600;
             $seconds += ($diff->h) * 3600;
             $seconds += ($diff->i) * 60;
             $seconds += ($diff->s);
    
            //New Rule :
            //IF there is a transcation from customer then 
            //he can see my account details.
            //No time limit for him/her.
            //72*3600
            //Application within 72 hours.
            //if ($seconds < 259200)
            //{
                //Application is valid only for 72 hours.
                //Calculate time left.
                //$seconds = 259200 - $seconds;
                
                $seconds = 604800 - $seconds;
				
                
                //Convert seconds into time.
                $H = floor($seconds / 3600);
                $i = ($seconds / 60) % 60;
                $s = $seconds % 60;
    
                if (strlen($H) == 1)
                    $H = "0" . $H;
    
                if (strlen($i) == 1)
                    $i = "0" . $i;
    
                $time_left = $H . ":" . $i;
    
	  
            $this->aps = new APS();
            
            $aSummary['Card'] = $this->aps->get_card_detail(array('acc_num' => $oApp->acc_num));
			
            $aRespo['summary']=$aSummary;
            
			$aRespo['time_left'] = $time_left;
			
log_message("error", __FUNCTION__ . " :: Get Summary for book tab  :: " . print_r($aRespo, TRUE));

	 		//Special access to jasper.
	        if($aSess['per_detail']->email == 'jasperdykes@gmail.com')
	        {
	            $aRespo['time_left']=' " 7 days "';
	        }
		
            //Show book view.
            $this->load->view('customer/book',array('data'=>$aRespo));    
        }
        
    }
}