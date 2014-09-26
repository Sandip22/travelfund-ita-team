<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
?>
<?php 
$ci = &get_instance();
$full_name = $ci->session->userdata('customer_full_name');
?>
<div class="middleBar" style="min-height:0; margin:0; padding:0;">
  <div class="row">
    <div class="large-12 columns">
      <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2 text-center">
          <li class="accountNavActive"><a href="<?php echo base_url().'customer/myaccount/';?>">
          <h3>Book</h3>
          <div class="large-9 medium-9 large-centered small-centered columns">
            <h6>Click here to display your card details</h6>
          </div>
          </a> </li>
        <li class="accountNav rightDivider"><a href="<?php echo base_url().'customer/myaccount/';?>">
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
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns text-right" style="margin-top: 10px;">
    <h8><?php echo $full_name ?> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php  echo base_url() . 'customer/myaccount/logout';?>">logout</a></h8>
  </div>
</div>
<div class="row">
    <div class="large-12 columns">
    <div class="panel" style="margin-top: 20px; min-height:200px;">
        <div class="row">
            <div class="large-12 columns margintop marginbottom">
                <h5>Here is your unique virtual card number. Please use these details to make payments from your account.</h5>
            </div>
            <div class="row">
                <div class="large-3 medium-3 columns"><p>Available credit is 
                        <?php if($data['summary']['Card']['CreditLimit']!=""):
                                            echo "&pound".$data['summary']['Card']['CreditLimit'];
                                 endif;?>
                        <br>Account expires in 7 Days</p></div>
                <div class="large-6 medium-6 columns">
                  <div class="large-12 medium-12 columns">
                    <div class="panel">
                        <div class="row">
                          <div class="large-12 large-centered small-centered columns ">
                            <div class="row" style="background-color: #BCBCBA;">
                              <div class="large-12 medium-12 columns">
                                <h5>Virtual Card</h5>
                              </div>
                            </div>
                              <div class="row">&nbsp;</div> 
                            <div class="row text-center">
                              <div class="large-12 medium-12 columns">
                                <h5>
                                <?php if($data['summary']['Card']['CardNumber']!=""):
                                            echo $data['summary']['Card']['CardNumber'];
                                 endif;?>
                                </h5>
                              </div>
                            </div>
                            <div class="row">
                              <div class="large-6 medium-6 columns">
                                <p>
                                         <?php if($data['summary']['Card']['EmbossedName']!=""):
                                            echo $data['summary']['Card']['EmbossedName'];
                                        endif;?>
                                    <BR> Security Code: Sent to your mobile.</p>
                              </div>
                              <div class="large-6 medium-6 columns">
                                  <h5>
                                      <?php if($data['summary']['Card']['Expiry']!=""):
                                            echo $data['summary']['Card']['Expiry'];
                                        endif;?>
                                  </h5>                          
                              </div>
                            </div> 
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="large-3 medium-3 columns"> &nbsp; </div>
            </div>
            <div class="row">
                <div class="large-12 columns margintop marginbottom">
                    <h5>Don't forget:</h5>
                    <div class="large-3 medium-3 columns"> &nbsp; </div>
                    <div class="large-9 medium-9 columns">
                        <p>To select Mastercard Debit as the card type(or just Mastercard)<br>
                        We send the Card Verification Code to your mobile for secruity<br>
                        We only give you a maximum of 7 days to use your balance!<br>
                        We spread what ever you spend over 12 monthly instalments<br>
                        </p></div>
                </div>
            </div>
    </div>
</div>
</form>

<?php
include_once ITA_BASE_PATH."views/footer.php";
?>
