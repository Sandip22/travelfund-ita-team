<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
$ci = &get_instance();
$full_name = $ci->session->userdata('customer_full_name');
 
//require 'header_deshboard.php';
?>
<!-- ACCOUNT NAV -->
<div class="middleBar" style="min-height:0; margin:0; padding:0;">
  <div class="row">
    <div class="large-12 columns">
      <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2 text-center">
        <li class="accountNav rightDivider"><a href="<?php echo base_url().'customer/myaccount/';?>">
          <h3>Account</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>See your account balance and what you've bought</h6>
          </div>
          </a> </li>
        <li class="accountNav rightDivider"><a href="#">
          <h3>Personal</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>Edit your log in details</h6>
          </div>
          </a> </li>
        <li class="accountNavActive"><a href="#">
          <h3>Payment</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>Click here to make a payment to your account</h6>
          </div>
          </a> </li>
        <li class="accountNav rightDivider"><a href="https://travelfund.zendesk.com">
          <h3>Help</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>Look through our list of frequently asked questions</h6>
          </div>
          </a> 
      </li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns text-right" style="margin-top: 10px;">
    <h8><?php echo $full_name ?> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php  echo base_url() . 'customer/myaccount/logout';?>">logout</a></h8>
  </div>
</div>
<!-- Payment -->
<div class="row">
<div class="large-12 columns">
    <div class="panel" style="margin-top: 20px; min-height:200px;">
        <span class="panel-title radius">Notice</span>
        <div class="row">
            <div class="large-12 columns margintop marginbottom">
                <h5>We're Sorry, your application is in complete. 
                    Please login and complete your application process.
                    <!-- Please <a href="<?php echo base_url();?>">click here.</a> --> 
                </h5>
            </div>
        </div>
    </div>
</div>

<?php
include_once ITA_BASE_PATH."views/footer.php";
?>