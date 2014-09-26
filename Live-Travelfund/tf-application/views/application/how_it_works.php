<?php
//Header of page.
require 'header.php';
$ci = & get_instance();
$prev_url  = $ci->session->userdata('introduction_url');
if(empty($prev_url)){
    $prev_url="#";
}
?>
<div class="row">
    <div class="large-12 columns"> 
        <div class="large-12 columns blueBackground">
             <div class="row">
                <div class="large-12 columns margintop2 marginbottom">
                    
                    <div class="row">       
                        <div class="large-7 medium-7 columns " >
                            <h6><a href="<?php echo $prev_url ?>" > << Back</a></h6>
                        </div>
                        <div class="large-5 medium-5 columns " style="padding-top: -10px;">
                            <h6 style="color:white;" > 
                                Need help ? Check out our FAQ's <a onclick="open_window('faq');"><u>here</u></a></h6>
                            <div id="faq"></div>
                        </div>
                    </div>
                    <div class="large-6 large-6 medium-6 columns">
                        <h1>Your Instant Credit Account</h1>
                    </div>
                    <div class="large-1 medium-1 columns">&nbsp;</div>
                    <!--div class="large-5 medium-5 columns right">
                        <h6 style="color:white;"> Need help ? Check out our FAQ's <a onclick="open_window('faq');"><u>here</u></a></h6>
                        <div id="faq"></div>
                    </div-->
                    
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="row">
                                 <div class="large-8 medium-8 columns large-centered small-centered margintop2"> 
                                <!--    <a href="<?php echo site_url("application/personal_details");?>" class="button expand radius" >Apply Now</a> -->
                                
                                <div class="large-6 medium-6 columns">
                                       <a class="button expand radius " href="<?php echo site_url("application/customer_eligiblity_details");?>">Check Your Eligibility</a>
                                </div>
                                <div class="large-6 medium-6 columns">
                                    <a href="<?php echo site_url("application/personal_details");?>" class="button expand radius green" >Apply Now</a>
                                </div>
                                
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="large-12 medium-12 columns text-center marginbottom margintop2">
                        <img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
                    </div>
                    <div class="large-4 medium-4 columns text-center">
                        <img src="/skin/common/images/who can apply/apply_online.png" width="150" height="113"/>
                        <h3>Apply Online</h3>
                        <h5>Takes less than 5 minutes to apply with a decision & credit limit given instantly</h5>
                    </div>
                    <div class="large-4 medium-4 columns text-center">
                        <img src="/skin/common/images/who can apply/browse.png" width="150" height="113"/>
                            <h3>Browse</h3>
                            <h5>Select a holiday from </br><b>Travelpack</b></h5>
                    </div>
                    <div class="large-4 medium-4 columns text-center">
                        <img src="/skin/common/images/who can apply/book_and_pay.png" width="150" height="113"/>
                        <h3>Book & Pay</h3>
                        <h5>Book and choose Travelfund on the payment page within 7 days </h5>
                    </div>  
                    <div class="large-12 medium-12 columns text-center marginbottom">
                        <img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
                    </div>
                    <div class="row">
                       <div class="large-12 medium-12 columns">
                           <div class="large-6 medium-6 columns">
                                <h1>Who can Apply?</h1>
                                    <ul type="circle">
                                    <h5>
                                        <li>You are a UK resident aged 18 or over</li>
                                        <li>You are employed for at least 16 hours per week</li>
                                        <li>You have an email address & mobile number</li>
                                        <li>You have a valid debit card registered to your home address (so we can take your monthly repayments)</li>
                                    </h5>
                                    </ul>
                           </div>
                            <div class="large-6 medium-6 columns">
                                <h3>Representative example:</h3>
                                    <ul type="circle">
                                    <h5>
                                        <li>Representative APR - <b> 19.9% APR</b></li>
                                        <li>Purchase rate p.a - <b> 19.9% APR</b></li>
                                        <li>Assumed credit limit - <b> &pound;2,000</b></li>
                                    </h5>
                                    </ul>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-4 medium-4 columns large-centered small-centered margintop2">
                
                <a href="<?php echo site_url("application/personal_details");?>" class="button expand radius green" >Apply Now</a>
                 
                    <a href="<?php echo site_url("application/customer_eligiblity_details");?>">
                        <h6 align="center"><u>Check Your Eligibility</u></h6>
                    </a> 
                
                
            <!--<div class="large-6 medium-6 columns">
                   <a class="button expand radius green" href="<?php echo site_url("application/customer_eligiblity_details");?>">Check Your Eligibility</a>
            </div>
            <div class="large-6 medium-6 columns">
                <a href="<?php echo site_url("application/personal_details");?>" class="button expand radius" >Apply Now</a>
            </div>
            -->
            </div>
        </div>
        <div class="row">
            <div class="large-12 medium-12 columns large-centered small-centered text-center">
                 <h6>Subject to application and status. The terms of your product may differ from the example.</h6>
            </div>
        </div>
    </div>
</div>

<?php
//Footer of page.
require 'footer.php';
?>