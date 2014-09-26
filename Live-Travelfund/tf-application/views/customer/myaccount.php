<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
require 'header_deshboard.php';

$balance = floatval(@$data['summary']['Card']['AvailableBalance']);
$climit = floatval(@$data['summary']['Card']['CreditLimit']);

$loanRatio=0;
if($climit > 0 ){
    $loanRatio = round((($climit-$balance)*100)/$climit,2);     
}

//After 72 hours loan is expired.
if(!empty($data['account_expire']))
{
    $loanRatio='100';
}

?>
<div class="row">
  <div class="large-12 columns">
    <div class="panel" style="margin-top: 20px; min-height:200px;"> <span class="panel-title radius">Your Account</span>
        
      <div class="row">
        <p><br />&nbsp;&nbsp;&nbsp;&nbsp;Customer Number : <?php echo $data['summary']['Card']['AccountNumber']; ?>     
        <br />&nbsp;&nbsp;&nbsp;&nbsp;Please use this number when contacting customer services.</p>
      </div>
      <div class="row">
        <div class="large-12 columns text-center large-centered small-centered margintop">
          <h5>
              <?php if(empty($data['account_expire'])):?>
              Available : &pound;<?php echo $balance; ?></h5>
              <?php else :?>
              Current Balance : &pound;<?php echo $balance; ?></h5>
              <?php endif ?>
        </div>
        <div class="large-12 medium-12">
            
          <?php if(empty($data['account_expire'])):?>  
            <div class="large-1 columns"> &nbsp; </div>
            <div class="large-8 columns">
                <div class="progress" title="<?php echo $loanRatio; ?>%"> <span class="meter" style="width:<?php echo $loanRatio; ?>%"></span> </div>
            </div>
            <div class="large-3 columns text-center">
                <h12>Your current credit limit is<br>
                    <strong>&pound;<?php echo $climit; ?></strong>
                </h12>
            </div>
          <?php else : ?>
            <div class="large-2 columns"> &nbsp; </div>
            <div class="large-8 columns">
                <div class="progress" title="100%"> <span class="meter" style="width:100%"></span> </div>
            </div>
            <div class="large-2 columns text-center"> &nbsp;</div> 
          <?php endif ?>       
        </div>
        <div class="large-12 medium-12 columns margintop">
          <div class="large-3 medium-3 columns"> &nbsp; </div>
          <div class="large-4 medium-4 columns text-center  large-centered small-centered">
              <?php if(!empty($data['account_expire'])):?>
                  <h12 align="center">Your drawdown period has now expired.</h12>
              <?php else :?>
                    <h12 align="center">You have <strong><?php echo @$data['time_left']; ?></strong> hours until your credit expires.</h12>
              <?php endif ?>
          </div>
          <div class="large-3 medium-3 columns"> &nbsp; </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- bottom -->
<div class="row">
<div class="large-12 medium-12 columns">
<div class="large-6 medium-6 columns">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <div class="panel" style="margin-top: 20px; min-height:200px;"> <span class="panel-title radius text-center">Your Transactions</span>
        <!-- header -->          
        <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-3 panel-title2">
          <li style="text-align:center; padding-bottom:0; margin-bottom:0;">
            <h10 >Date</h10>
          </li>
          <li style="text-align:center; padding-bottom:0; margin-bottom:0;">
            <!-- h10>Travel Partner</h10 -->
            <h10>&nbsp;</h10>
          </li>
          <li style="text-align:center; padding-bottom:0; margin-bottom:0;">
            <h10>Amount</h10>
          </li>
        </ul>
        <!-- transaction details -->
        <?php
            if(!empty($data['summary']['Transactions']))
            {    
                foreach($data['summary']['Transactions'] as $aTrans){
                        
                    if($aTrans['Type'] == 'Credit'){
                        continue;
                    }                        
                    
                    $date = date('d-m-Y', strtotime($aTrans['Date']));
                    $amount = $aTrans['Amount'];
                    $otp = $aTrans['Description'];
                    $otp='';
                    if(strpos($aTrans['Amount'],".") === FALSE){
                        $amount = $aTrans['Amount'].".00";
                    }
                    echo '<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-3 ">';
                    echo '<li style="text-align:left; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>'.$date.'</h11>'; 
                    echo '</li>';
                    echo '<li style="text-align:center; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>&nbsp;'.$otp.'</h11>';
                    echo '</li>';
                    echo '<li style="text-align:right; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>&pound;'.$amount.'</h11>';
                    echo '</li>';
                    echo '</ul>';
                }
            }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Your Payments -->

<div class="large-6 medium-6 columns">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <div class="panel" style="margin-top: 20px; min-height:200px;"> <span class="panel-title radius text-center">Your Payments</span>
                 
        <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-3 panel-title2">
          <li style="text-align:left; padding-bottom:0; margin-bottom:0;">
            <h10>Date</h10>
          </li>
          <li style="text-align:center; padding-bottom:0; margin-bottom:0;">
            <!--h10>Travel Partner</h10-->
            <h10>&nbsp;</h10>
          </li>
          <li style="text-align:right; padding-bottom:0; margin-bottom:0;">
            <h10>Amount</h10>
          </li>
        </ul>
        
        <?php
        
            if(!empty($data['summary']['Transactions']))
            {
                foreach($data['summary']['Transactions'] as $aTrans)
                {
                        
                    if($aTrans['Type'] == 'Debit'){
                        continue;
                    }                        
                    
                    $date = date('d-m-Y', strtotime($aTrans['Date']));
                    $amount = $aTrans['Amount'];
                    $otp = $aTrans['Description'];
                    $otp='';
                    
                    if(strpos($aTrans['Amount'],".") === FALSE){
                        $amount = $aTrans['Amount'].".00";
                    }
                    echo '<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-3 ">';
                    echo '<li style="text-align:left; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>'.$date.'</h11>'; 
                    echo '</li>';
                    echo '<li style="text-align:center; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>&nbsp;'.$otp.'</h11>';
                    echo '</li>';
                    echo '<li style="text-align:right; padding-bottom:0; margin-bottom:0;">';
                    echo '<h11>&pound;'.$amount.'</h11>';
                    echo '</li>';
                    echo '</ul>';
                }
            }
 
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Account Services -->

<!--div class="large-4 medium-4 columns">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <div class="panel" style="margin-top: 20px; min-height:200px;"> <span class="panel-title radius text-center">Account Services</span> <br>
        <br>
        
        <a href="#">
        <h12>> View my statement</h12>
        </a><br>
        <br>
        <a href="#">
        <h12>> Make a payment</h12>
        </a><br>
        <br>
        <a href="#">
        <h12>> Help</h12>
        </a>
         
        </div>
    </div>
  </div>
</div-->

<?php
include_once ITA_BASE_PATH."views/footer.php";
?>