<?php
//Header of page.
require 'header.php';

log_message('error',"I already have an account details");
log_message('error',print_r($data,TRUE));
?>
<script>
    var partner_url = "<?php echo $data['partner']['partner_url']; ?>";
</script>

<div class="row">
  <div class="large-12 medium-12 columns">
    <div class="large-12 medium-12 columns blueBackground">
      <div class="row">
        <div class="large-12 columns margintop2 marginbottom">
          <div class="large-12 medium-12 columns">
            <h1>Only <?php echo $data['application']['time_left']; ?> hours left to make a booking...</h1>
            <h1>You have <font color="#CADB2B">&pound;<?php echo $data['Card']['AvailableBalance']; ?></font> in your travelfund account.</h1>
            <div class="large-12 medium-12 columns text-center marginbottom"> <img src="/skin/common/images/interface assets/horizontal_divide.png" /> </div>
            <div class="row">
              <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/how it works/choose.png" width="200" height="150"/>
                <h3>1. Choose</h3>
                <div class="large-12 medium-12 columns">
                  <h5>Find your holiday at <?php echo $data['partner']['partner_name']; ?></h5>
                </div>
              </div>
              <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/how it works/book.png" width="200" height="150"/>
                <h3>2. Book</h3>
                <div class="large-12 medium-12 columns">
                  <h5>Complete your travel booking within 7 days</h5>
                </div>
              </div>
              <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/how it works/pay.png" width="200" height="150"/>
                <h3>3. Pay</h3>
                <div class="large-12 medium-12 columns">
                  <h5>Choose travelfund at the payment page or pay by phone</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
</div>
</div>
<div class="row">
  <div class="large-12 medium-12 columns text-center">
    <p class="decline_msg">Payment on the phone ? <a onclick="get_account_detail();"><font class="decline_msg">Click Here</font></a></p>
  </div>
</div>
<div class="row hidden" id="card_details">
  <div class="large-10 medium-10 columns large-centered medium-centered small-centered" id="account_details">
    <div class="large-12 medium-12 columns text-center">
      <p class="decline_msg">Your travelfund virtual card details are below.</p>
    </div>
    <div class="row">
      <div class="large-3 medium-3 columns">
        <h6>Card Number  : </h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6><span id="card_number"></span></h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6>
        Card Type :</small></div>
      <div class="large-3 medium-3 columns">
        <h6>MasterCard</h6>
      </div>
    </div>
    <div class="row">
      <div class="large-3 medium-3 columns">
        <h6>Expiry Date :</h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6><span id="expiry_date"></span></h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6>Security Code : </h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6><b>Sent to your mobile.</b></h6>
      </div>
    </div>
    <div class="row">
      <div class="large-3 medium-3 columns">
        <h6>Card Holder Name : </h6>
      </div>
      <div class="large-3 medium-3 columns">
        <h6><b><span id="name"></span></b></h6>
      </div>
      <div class="large-3 medium-3 columns">&nbsp;</div>
      <div class="large-3 medium-3 columns"><a class="card_font" onclick="get_account_detail();">
        <h6><u>Didn't receive it?</u></h6>
        </a> </div>
    </div>
  </div>
</div>
</div>
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
              }else{
                  $("#card_details").removeClass('hidden');
                  $("#card_number").text(oData['CardNumber']);
                  $("#expiry_date").text(oData['Expiry']);
                  $("#name").text(oData['EmbossedName']);
              }
          })
          .fail(function() {
            alert( "Fail to fetch status from APS." );
          });
        return false;
        
    }
    function travelfund_close(){
        //Detect screen size.
        //if mobile then open in same screen.
        if(screen.width < 800){
            window.location = partner_url;
        }else{
            parent.location = partner_url;
        } 
    }
</script>
<?php
//footer 
include_once "footer.php";
?>
