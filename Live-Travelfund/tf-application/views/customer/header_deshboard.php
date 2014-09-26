<!-- ACCOUNT NAV -->
<?php 
$ci = &get_instance();
$full_name = $ci->session->userdata('customer_full_name');
?>
<div class="middleBar" style="min-height:0; margin:0; padding:0;">
  <div class="row">
    <div class="large-12 columns">
      <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2 text-center">
        <li class="accountNavActive"><a href="<?php echo base_url().'customer/myaccount/';?>">
          <h3>Account</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>See your account balance and what you've bought</h6>
          </div>
          </a> </li>
        <li class="accountNav rightDivider"><a href="<?php  echo base_url() . 'customer/myaccount/personal';?>">
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