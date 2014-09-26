<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
//require 'header_deshboard.php';

$ci = &get_instance();
$full_name = $ci->session->userdata('customer_full_name');

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
        <li class="accountNavActive"><a href="<?php  echo base_url() . 'customer/myaccount/personal';?>">
          <h3>Personal</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>Edit your log in details</h6>
          </div>
          </a> </li>
        <li class="accountNav rightDivider"><a href="<?php echo base_url().'customer/myaccount/account_payment/';?>">
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
          </a> </li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns text-right" style="margin-top: 10px;">
    <h8><?php echo $full_name ?> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php  echo base_url() . 'customer/myaccount/logout';?>">logout</a></h8>
  </div>
</div>
<!-- Your travelfund account -->
<div class="row">
  <div class="large-12 columns">
    <div class="panel" style="margin-top: 50px; min-height:100px; margin-bottom:100px;"> <span class="panel-title radius">Login details</span>
      <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-2 panel-title2">
        <li style="text-align:left; padding-bottom:0; margin-bottom:0;">
          <h10><?php echo $full_name ?></h10>
        </li>
        <li style="text-align:right; padding-bottom:0; margin-bottom:0;">
          <h10>Joined: <?php if($data['created_datetime']!="")echo date('jS F Y ',  strtotime ($data['created_datetime']));?></h10>
        </li>
      </ul>
      <div class="row">
        <div class="large-11  medium-11 columns large-centered small-centered">
          <div class="row">
            <div class="large-2 columns" style="margin-top:40px;">
              <h5>Email:</h5>
            </div>
            <div class="large-2 columns" style="margin-top:40px;">
              <h5><?php if($data['email']!="")echo $data['email'];?></h5>
            </div>
            <div class="large-4 columns" style="margin-top:30px;">
              <!--ul class="box">
                <a href="#">
                <li class="orange">change email</li>
                </a>
              </ul-->
            </div>
          </div>
          <div class="row">
            <div class="large-2 columns">
              <h5>Password:</h5>
            </div>
            <div class="large-2 columns">
              <h5>********</h5>
            </div>
            <div class="large-4 columns">
              <ul class="box">
                <a class="button" href="<?php  echo base_url() . 'customer/myaccount/changepassword';?>">
                change password
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include_once ITA_BASE_PATH."views/footer.php";
?>