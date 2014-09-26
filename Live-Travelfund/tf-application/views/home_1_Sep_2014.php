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
        <h2>Spread the cost before and after your holiday</h2>
      </div>
      <div class="large-4 medium-4 columns">
        <!--div class="large-12 medium-12 columns "> <a href="<?php echo base_url().'eligibilityCheck/';?>" class="button green">Check your eligibility</a> </div-->
        <div class="large-12 medium-12 columns "> <a onclick="travelfund_box('travelfund','application','');" href="#" id="travelfund" class="button green">Apply now</a> </div>
        <div class="large-12 medium-12 columns "> <a href="<?php echo base_url().'how/';?>" class="button">Find out more</a> </div>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns margintop2">
        <ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 text-center">
          <li class="divider"> <img src="/skin/common/img/home/fly_now_pay_later.png">
            <h3>Fly Now,<br>
              Pay Later</h3>
            <div class="large-12 medium-12 columns">
              <p>Spread the cost of your holiday before and after you travel</p>
            </div>
          </li>
          <li class="divider"> <img src="/skin/common/img/home/financial_protection.png">
            <h3>Financial<br>
              Protection</h3>
            <div class="large-12 medium-12 columns">
              <p>Peace of mind you are covered in the unlikely event of financial failure by your travel supplier</p>
            </div>
          </li>
          <li class="divider"> <img src="/skin/common/img/home/no_hidden_costs.png">
            <h3>No Hidden<br>
              Costs</h3>
            <div class="large-12 medium-12 columns">
              <p>No card transaction fee, no early settlement penalty, no set up charge</p>
            </div>
          </li>
          <li> <img src="/skin/common/img/home/spread_the_cost.png">
            <h3>Spread the<br>
              Cost</h3>
            <div class="large-12 medium-12 columns">
              <p>Flexible finance plan over 12 months or less for your holiday</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>