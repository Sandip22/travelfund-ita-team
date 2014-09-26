<?php
//Header of page.
require 'header.php';
?>
<!-- Foundation js - slider -->
<script type="text/javascript" src="/skin/common/js/foundation/foundation.js"></script>
<script type="text/javascript" src="/skin/common/js/foundation/foundation.slider.js"></script>
<div class="middleBar">
    <div class="row ">
        <div class="large-12 columns">
            <h1> How it works...</h1>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns margintop2">
            <ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 text-center">
                <li class="divider">
                	<div style="height: 130px;">
                		<img src="/skin/common/img/home/apply-online.png" style="padding-top: 19px;">
            		</div>
                    <h3>1 - APPLY ONLINE</h3>
                    <div class="large-12 medium-12 columns">
                        <p>Takes less than 5 minutes for an instant decision & your no obligation credit limit</p>
                    </div>
                </li>
                <li class="divider">
                	<div style="height: 130px;">
                		<img src="/skin/common/img/home/browse.png" style="padding-top: 6px;">	
                	</div> 
                	
                    <h3>2 - BROWSE</h3>
                    <div class="large-12 medium-12 columns">
                        <p>Select your travel arrangement from any one of our Travel Partners</p>
                    </div>
                </li>
                <li class="divider">
                	<div style="height: 130px;">
                		 <img src="/skin/common/img/home/book.png" style="padding-top: 21px;">
            		 </div>
                    <h3>3 - BOOK</h3>
                    <div class="large-12 medium-12 columns">
                        <p>Complete your booking by selecting Fly Now, Pay Later on the payment page and enter your log in details</p>
                    </div>
                </li>
                <li> 
                	<div style="height: 130px;">
                		<img src="/skin/common/img/home/repay.png">
            		</div>
                    <h3>4 - REPAY</h3>
                    <div class="large-12 medium-12 columns">
                        <p>First repayment due 30 days after booking followed by 11 monthly repayments</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="large-12 text-center large-centered columns marginbottom"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
        <div class="row">
            <div class="large-9 columns">
                <div class="large-12 columns">
                    <div class="large-12 medium-12 columns text-center"><p style="font-size: 1.438em; color: #FFFFFF ;margin-bottom:0px;">How much will it cost?</p></div>
                </div>
                <div class="large-12 medium-12 columns">

                    <div class="large-3 medium-3 columns text-right"><p style="font-size: 1.438em; color: #FFFFFF">If you spend<font color="#CADB2B" style="font-size:20px;"> -</font></p></div> 
                    <div class="large-6 medium-6 columns" style="padding-left: 0px; padding-right: 0px;">
                        <div class="range-slider" data-slider data-options="step: 5;">
                            <span class="range-slider-handle"></span> 
                            <span class="range-slider-active-segment"></span> 
                            <input type="hidden" name="slider_value" id="slider_value" value="50">
                        </div>
                    </div>
                    <div class="large-3 medium-3 columns"><p style="font-size: 1.438em; color: #FFFFFF"><font color="#CADB2B" style="font-size:20px;">+</font> &pound;<span id="spend">1000</span><p></div> 
                </div>  
                <div class="large-12 columns">
                    <div class="large-12 medium-12 columns text-center"><p style="font-size: 1.438em; color: #FFFFFF; margin-bottom:0px; ">Monthly payments over 12 months &pound;<span id="monthly">91.83</span>
                            Total cost &pound;<span id="year">1,101.99</span><p></div>  

                </div>
                
                <!--<div class="large-12 columns">
                    <div class="large-19 medium-10 columns text-right">
                    	<h6 style=color:white;">
                    		Representative 19.9% APR
                		</h6>
                    </div>  
                </div>-->
                
                <!--<div class="large-12 columns ">
                    <div class="large-6 medium-6 columns text-right"><h6 style=color:white;"><u>Spend up to your credit limit</u></h6></div>  
                    <div class="large-6 medium-6 columns text-right"><h6 style=color:white;" align="left" ><u>Spend multiple times</u></h6></div>  
                </div> -->        
            </div>
            <div class="large-3 columns"> 

                <a onclick="travelfund_box('travelfund','application','');" href="#" class="button green expand">Apply now</a>
                <br>
                <a href="<?php echo base_url() . 'eligibilityCheck/'; ?>" class="button green expand">Check your eligibility</a>

            </div>

        </div>
        <div class="large-12 text-center large-centered columns marginbottom"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
        <div class="row">
            <div class="large-12 medium-12 columns">
            	<div class="large-1 medium-1 columns">&nbsp;</div>
                <div class="large-6 medium-6 columns">
                    <h3>Who can Apply?</h3>
                    <ul type="circle">
                        <li><p style="margin-bottom:0px;">You are a UK resident aged 18 or over</p></li>
                        <li><p style="margin-bottom:0px;">You are employed for at least 16 hours per week</p></li>
                        <li><p style="margin-bottom:0px;">You have an email address & mobile number</p></li>
                        <li><p style="margin-bottom:0px;">You have a valid debit card registered to your home address (so we can take your monthly repayments)</p></li>
                    </ul>
                </div>
                <div class="large-4 medium-4 columns">
                    <h3>Representative example:</h3>
                    <ul type="circle">
                            <li><p style="margin-bottom:0px;">Representative APR - 19.9% APR</p></li>
                            <li><p style="margin-bottom:0px;">Purchase rate p.a - 19.9% APR</p></li>
                            <li><p style="margin-bottom:0px;">Assumed credit limit - &pound;2,000</p></li>
                    </ul>
                </div>
                <div class="large-1 medium-1 columns">&nbsp;</div>
            </div>
        </div>
    </div>        
</div><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>
<script>
    $(document).foundation({
        slider: {
            on_change: function() {
                //set slider value
                var spend_val = $('#slider_value').val();
                spend_val = spend_val * 20;
                $("#spend").text(spend_val);

                //monthly installment
                var month_val;
                var interest_val;
                interest_val = spend_val * (10.199 / 100);

                //year installment
                var year_val;
                year_val = spend_val + interest_val;
                year_val = year_val.toFixed(2);
                $('#year').text(year_val);

                month_val = year_val / 12;
                month_val = month_val.toFixed(2);
                $("#monthly").text(month_val);


            }
        }
    });
</script>

