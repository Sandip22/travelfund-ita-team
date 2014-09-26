<?php
//Header of page.
require 'header.php';
?>
<div class="middleBar">
  <div class="row marginbottom">
    <div class="large-12 columns">
      <h1> How it works...</h1>
    </div>
  </div>
  <div class="row" style="margin-bottom: 1%;">
    <div class="large-12 large-centered columns">
      <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1 text-center">
        <li class="divider"> <img src="/skin/common/img/how_it_works/apply_online.png">
          <h3><br>Apply online</h3>
          <div class="large-11 medium-11 large-centered small-centered columns">
            <p>Apply <a href="#" onclick="travelfund_box('travelfund','application','');"><font color="#FFFFFF">here</font></a> or with our Travel Partner by clicking Fly Now,<br>
                Pay Later
            </p>
          </div>
          <h9> It only takes 5 minutes!</h9>
          <!--<div style="margin-top: 10px;margin-left: 7px;margin-right: 7px;">
              <a onclick="travelfund_box('travelfund','application','');" href="#" id="travelfund" class="button" style="font-size: 1.4em;">Apply now</a>
          </div>
          -->
        </li>
        <li class="divider"> <img src="/skin/common/img/how_it_works/choose_a_holiday.png"><br>
          <h3><br>Choose a holiday</h3>
          <div class="large-11 medium-11 large-centered small-centered columns">
          <p>Now your account has been approved, choose your holiday with one of our Travel Partners</p>
          </div>
          <h9>Widest choice of holidays</h9>
        </li>
        <li> <img src="/skin/common/img/how_it_works/pay_with_travelfund.png">
          <h3><br>Pay with Travelfund</h3>
          <div class="large-11 medium-11 large-centered small-centered columns">
          <p>Complete your booking on the Travel Partner website and select travelfund at checkout</p>
          </div>
          <h9>Financial Protection</h9>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="large-12 large-centered columns">
      <div class="large-2 medium-2 columns  marginbottom">&nbsp;</div>  
      <div class="large-4 medium-4 columns  marginbottom">
        <a href="<?php echo base_url().'eligibilityCheck/';?>" class="button green expand">Check your eligibility</a>
      </div>
      <div class="large-4 medium-4 columns  marginbottom">
        <a href="<?php echo base_url().'travelPartners/';?>" class="button green expand">Travel Partners</a>
      </div>
      <div class="large-2 medium-2 columns  marginbottom">&nbsp;</div>
    </div>
  </div>
    <div class="row">
        <div class="large-11 large-centered columns marginbottom"><i>Representative example:<br>
Representative APR : 19.9% APR(Fixed) Purchase Rate p.a:19.9% APR(Fixed) Assumed credit limit:
&pound;2,000 Annual Fee: No annual fee<br></i></div>
    </div>
</div><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>