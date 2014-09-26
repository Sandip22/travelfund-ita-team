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
<style >

	@font-face {
	    font-family: kredit;
	    src: url('/skin/common/fonts/kredit back.ttf');
	}
	
	@font-face {
	    font-family: kredit-front;
	    src: url('/skin/common/fonts/kredit front.ttf');
	}
	.virtual_card
	{
		color: #FFFFFF  !important;  
		font-family : kredit-front !important;
		font-size: 1.2em ;  
		font-weight: bolder !important;
	} 
	.virtual_card_letter_spacing{
		letter-spacing: 3px !important; 
	}
	.no-bottom-margin{
		margin-bottom: 0px !important;
	}
	
	.sky-blue{
	color: #1A9AD6;
	}
	
	/*Display checkbox before list*/
	.checkbox-list{
		list-style-image: url('/skin/common/icon/16x16_check.png');
		font-size:0.95rem;
	}
	
</style>
<div class="row">
    <div class="large-12 columns">
    <div class="panel" style="margin-top: 20px; min-height:200px;">
    	<span class="panel-title radius">Your card details</span>
        <div class="row">
        	
        	<div class="large-2 medium-2 columns"> &nbsp; </div>
        	
            <div class="large-8 medium-8 columns margintop marginbottom ">
            	
                <h5 style="font-size: 0.95rem;">Please use virtual card details to make payments from your account.</h5>
                <h5 style="font-size: 0.95rem;">Available credit is <?php if($data['summary']['Card']['CreditLimit']!=""):
	                        echo "&pound".$data['summary']['Card']['CreditLimit'];
	                 endif;?>
	                . Account expires in <?php  echo @$data['time_left']; ?>
                </h5>
                
            </div>
            <div class="large-2 medium-2 columns"> &nbsp; </div>
            
            <div class="large-12 columns marginbottom">
            	<div class="row">
            	
                    <div class="large-3 medium-3 columns">&nbsp;</div>
                    
                    <div class="large-6 medium-6 columns ">
                    	<div class="panel" style="margin:auto;width:85.60mm;height:53.98mm;border-radius: 15px;  ;background: none repeat scroll 0 0 rgb(37, 189, 230); border-style: solid;border-width: 5px; border-color:#C0C0C0">
                    		
                    		<div>
                    			<h5 style="font-family: Sans-serif"><strong><span style="color:#FFFFFF">Fly Now,</span><span style="color: #c8e049"> Pay Later</span></strong></h5>
                    		</div>
                    		<br/>
                    		<div>
                    			<p class="virtual_card no-bottom-margin">Number  : <span class="virtual_card_letter_spacing"><?php echo @$data['summary']['Card']['CardNumber'];?></span></p>
                    			<p class="virtual_card ">Name : <span class="virtual_card_letter_spacing"><?php echo @$data['summary']['Card']['EmbossedName']; ?></span></p>
                    		</div>
                    		<div class="row">
                    			
                    			<div class="large-7 medium-7 columns">
                    				<p class="virtual_card no-bottom-margin">Expiry Date : <?php echo @$data['summary']['Card']['Expiry'];  ?></p>
                    				<p class="virtual_card no-bottom-margin" style="font-size: 1em;">Security Code : Sent to your mobile</p>
                    			</div>
                    			
                    			<div class="large-5 medium-5 columns">
                    				<br />
                    				<img style="padding-left: 10px;" src="/skin/common/images/mastercard-logo.png" />
                    			</div>	
                    			
                    			<div class="large-12 medium-12 columns">
                    				<br /><br /> 
                    				<p class="text-center ">
                    					<a onclick="get_account_detail();" ><span class="sky-blue" >Didn't receive security code ? <u class="sky-blue">Click Here</u></span></a>
                    				</p>
                    			</div>
                    		</div>	
                    			
                    	</div>
                    </div>
                        
                <!--<div class="large-6 medium-6 columns">
                  <div class="large-12 medium-12 columns">
                      <div class="panel" style="background: none repeat scroll 0 0 rgb(37, 189, 230)">
                        <div class="row">
                          <div class="large-12 large-centered small-centered columns ">
                            <div class="row">
                              <div class="large-12 medium-12 columns">
                                <img src="/skin/common/images/logo.png" />    
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
                </div>-->
                
                <div class="large-3 medium-3 columns"> &nbsp; </div>
            </div>
            </div>
            
            <div class="row">
                <div class="large-12 columns margintop marginbottom">
                    <div class="large-2 medium-2 columns"> &nbsp; </div>
                    <div class="large-10 medium-10 columns">
                    	
                    	<h5 style="font-size: 0.95rem;"> <strong>Don't forget:</strong></h5>
                    	<ul class="sky-blue checkbox-list">
                    		<li>To select Mastercard Debit as the card type(or just Mastercard)</li>
                    		<li>We send the Card Verification Code to your mobile for secruity</li>
                    		<li>We only give you a maximum of 7 days to use your balance!</li>
                    		<li>We spread what ever you spend over 12 monthly instalments</li>
                    	</ul>
                    </div>
                </div>
            </div>
    </div>
</div>
</form>

<script>

     function get_account_detail(){
     	
         var ciurl='/application/get_card_details';
        //Get status from APS
        //Ajax request to get data.        
        var jqxhr = $.ajax({
                url:ciurl,
            })
          .done(function(data) {
              var oData = eval( '(' + data + ')' );
              
              if(typeof oData['CardNumber'] == undefined)
              {
                  alert('Fail to fetch card details');
                  return false;
              }
          })
          .fail(function() {
            alert( "Fail to fetch status from APS." );
          });
        return false;
    }
</script>
    
<?php
include_once ITA_BASE_PATH."views/footer.php";
?>
