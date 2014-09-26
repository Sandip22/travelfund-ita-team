<?php
//Header of page.
require 'header.php';
?>
<div class="middleBar">
    <div class="row">
        <div class="large-12 columns margintop"> <img src="/skin/common/img/home/HOME_banner.png"> </div>
    </div>
    <div class="row">
        <div class="large-12 large-centered columns margintop">
            <div class="large-8 medium-8 columns">
                <h1><font color="#CADB2B">Fly Now,</font> Pay Later</h1>
                <h2>The virtual store card for travel</h2>
            </div>
            <div class="large-4 medium-4 columns">
              <!--div class="large-12 medium-12 columns "> <a href="<?php echo base_url() . 'eligibilityCheck/'; ?>" class="button green">Check your eligibility</a> </div-->
                <div class="large-12 medium-12 columns "> <a onclick="travelfund_box('travelfund', 'application', '');" id="travelfund" class="button green">Apply now</a> </div>
                <div class="large-12 medium-12 columns "> <a href="<?php echo base_url() . 'how/'; ?>" class="button">Find out more</a> </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns margintop2">
                <ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 text-center">
                    <li class="divider"> <img src="/skin/common/img/home/fly_now_pay_later.png">
                        <h3>No Obligation</h3>
                        <div class="large-12 medium-12 columns">
                            <p>Balance available for <?php echo ITA_CREDIT_LIFE_READABLE; ?> with no obligation. No purchase, nothing to pay</p>
                        </div>
                    </li>
                    <li class="divider"> <img src="/skin/common/img/home/spread_the_cost.png">
                        <h3>You're In Control</h3>
                        <div class="large-12 medium-12 columns">
                            <p>Pay nothing upfront! Spend up to your credit limit and spread the cost over 12 monthly instalments</p>
                        </div>
                    </li>
                    <li class="divider"> <img src="/skin/common/img/home/no_hidden_costs.png">
                        <h3>No Hidden Costs</h3>
                        <div class="large-12 medium-12 columns">
                            <p>No transaction fees, no early settlement penalty, no set up charge</p>
                        </div>
                    </li>
                    <li> <img src="/skin/common/img/home/financial_protection.png">
                        <h3>Financial Protection</h3>
                        <div class="large-12 medium-12 columns">
                            <p>Peace of mind you are covered in the unlikely event of financial failure by your travel supplier</p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="large-12 columns " style="padding-left: 27px; padding-right: 20px; margin-top: -30px;">
                <h6>Representitive example</h6>
                <div class="large-3 medium-2 columns">
                    <p style="font-size:0.8rem;"><u>19.9% APR </u><br> Representitive (Variable)</p>
                </div>
                <div class="large-3 medium-2 columns">
                    <p style="font-size:0.8rem;"><u>19.9% p.a</u><br>Purchase rate p.a</p>
                </div>
                <div class="large-3 medium-2 columns">
                    <p style="font-size:0.8rem;"><u>£2,000</u><br>Assumed credit limit</p>
                </div>
                <div class="large-3 medium-2 columns"></div>
            </div>  
            
        </div>
    </div>
</div>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>