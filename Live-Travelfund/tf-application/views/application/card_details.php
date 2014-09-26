<?php
//Header of page.
require 'header.php';
$ci = & get_instance();
$base_url = $ci->config->item('base_url');

$redirect_url = urlencode($base_url . "/application/payment_inprocess");
$iframe_name = urlencode("tf_ita_iframe");
$len_app_id = $data['len_app_id'];

$CI = &get_instance();
$tmp_url = $CI->session->userdata('parent_url');

//$oAPS = new ;

$url = APS::$base_url . "DebitCard/Authenticate/{$len_app_id}?redirectUrl=$redirect_url%3FautoRedirect%3DAuthenticated.";

/*
  if(strpos($tmp_url, 'http://beta.travelpack.com/') !== FALSE){
  $url= "https://test.secure.mycashplus.co.uk/onlineapi/DebitCard/Authenticate/{$len_app_id}?redirectUrl=$redirect_url%3FautoRedirect%3DAuthenticated.";
  }else{
  $url= "https://live.secure.mycashplus.co.uk/onlineapi/DebitCard/Authenticate/{$len_app_id}?redirectUrl=$redirect_url%3FautoRedirect%3DAuthenticated.";
  }
 */
?>
<div class="row">
    <div class="large-12 columns">
        <div class="pbar">
            <div class="pbar-parts">
                <div class="pbar-part1 pbar-part-color-4">About You</div>
                <div class="pbar-part2 pbar-part-color-4">Address Info</div>
                <div class="pbar-part3 pbar-part-color-1">Employment</div>
                <div class="pbar-part4 pbar-part-color-2">Payment Set-Up</div>
                <div class="pbar-part5">Credit Agreement</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <div class="panel" style="margin-top: 20px;"> <span class="panel-title radius"></span>
            <div class="row">
                <div class="large-4 medium-4 columns right margintop1">
                    <h6> Need help ? Check out our FAQ's <a onclick="open_window('faq');"><u>here</u></a></h6>
                    <div id="faq"></div>
                </div>
            </div>

            <div class="row">
                <div class="large-11 medium-11 columns small-centered large-centered">
                    <h1>Your debit card details</h1>
                    <h6>If you're accepted for a Travelfund account, we'll need these details to collect your monthly payments.</h6>   
                </div>
            </div>

            <div class="large-11 medium-11 columns small-centered large-centered">
                <iframe id="myiFrameName" name="myiFrameName" src ="<?php echo $url; ?>" width="100%" height="523px" scrolling="auto" frameBorder="0"></iframe>
            </div>
        </div>            
        <div class="row">

            <?php
            echo form_open(base_url() . 'application/payment_inprocess', array(
                'name' => 'card_detail',
                'id' => 'card_detail',
            ));
            ?>
            <div class="row">
                <div class="large-3 medium-3 columns large-centered small-centered text-center"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
            </div>
            <div class="row">
                <div class="large-3 medium-3 columns large-centered small-centered text-center margintop2">
                    <button name="sbutton" id="sbutton" onclick="if (check_app_status() == false)
                                return false;", class='button radius orange' value="insert" >Continue</button>
                </div>
                <div class="large-3 medium-3 columns left margintop2">
                      <div id="payment_process_img" class="hidden">
                          <img src='/skin/common/images/ajax-loader.gif' width="16" height="16" />
                      </div>          
                    
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    /* Check status of application.
     * Do not submit unless card verification is done.    
     */
    function check_app_status() {

        var ciurl = '/application/get_app_status';
        //Get status from APS
        //Ajax request to get data.        
        var jqxhr = $.ajax({
            url: ciurl,
            beforeSend: function(xhr) {
               $("#payment_process_img").removeClass("hidden"); 
            }
        })
        
       
        
                .done(function(data) {
                    
                    //request id done.
                    $("#payment_process_img").addClass("hidden");
                    
                    var oData = eval('(' + data + ')');

                    console.log(oData);

                    if (oData['status'] == "FULL") {
                        $("#card_detail").submit();
                        return true;
                    } else if (oData['status'] == "ACREQ") {
                        var msg = 'Card Authentication Process\nPlease enter your debit card details and click "Pay Now" to start the verification process.\nWhen your card is successfully verified, click "Continue" to proceed.\nIf your card cannot be verified, please log back in to your account and try again.\nStill need help? Contact us on support@travelfund.co.uk'; 
                        alert(msg);
                        return false;
                    }
                    else if (oData['status'] == "ACPROC" || oData['status'] == "ACAUTH") {
                        var msg = 'Card Authentication Process\nPlease enter your debit card details and click "Pay Now" to start the verification process.\nWhen your card is successfully verified, click "Continue" to proceed.\nIf your card cannot be verified, please log back in to your account and try again.\nStill need help? Contact us on support@travelfund.co.uk'; 
                        alert(msg);
                        return false;
                    } else {
                        $("#card_detail").attr("action", "<?php echo base_url() . "application/application_decline" ?>");
                        $("#card_detail").submit();
                        return true;
                    }
                    return false;
                    /*if(oData['status'] == "ACDEC"){
                     alert('Card is not authorize');
                     return false;
                     }else if(oData['status'] == "UWDEC"){
                     alert('The applicant has been declined for credit. There will be no agreements.');
                     return false;
                     }else if(oData['status'] == "UWERR"){
                     alert('Credit underwriting failed.');   
                     }
                     else if(oData['status'] == "NO_RESPONSE"){
                     alert('APS server is down.');
                     return false;
                     }*/

                })
                .fail(function() {
                    alert("Fail to fetch application status from APS.");
                });
        return false;
    }

</script>

<?php
include_once "footer.php";
?>