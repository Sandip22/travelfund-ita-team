<?php
//Header of page.
require 'header.php';
?>

<script>

    var partner_url = "<?php echo $partner['partner_url']; ?>";

</script>

<div class="row">
<div class="large-12 medium-12 columns">
  <div class="large-12 medium-12 columns blueBackground">
    <div class="row">
      <div class="large-12 columns margintop2 marginbottom">
        <div class="large-12 medium-12 columns">
          <h1>You have <font color="#CADB2B">&pound;<?php echo $data['creditLimit']; ?></font> in your travelfund account.</h1>
          <h5>Remember, your balance is only availible for 7 days from now.</h5>
          <div class="large-12 medium-12 columns text-center marginbottom"> <img src="/skin/common/images/interface assets/horizontal_divide.png" /> </div>
          <div class="large-12 medium-12 columns text-center marginbottom">
            <h1>How it works</h1>
          </div>
          <div class="large-12 medium-12 columns text-center marginbottom"> <img src="/skin/common/images/interface assets/horizontal_divide.png" /> </div>
          <div class="row">
            <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/how it works/choose.png" width="200" height="150"/>
              <h3>1. Choose</h3>
              <div class="large-12 medium-12 columns">
                <!--<h5>Find your holiday at <?php echo $partner['partner_name'] ?></h5>-->
                <h5>Find your holiday</h5>
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
  <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
  <div class="row">
    <div class="large-6 medium-6 columns large-centered small-centered ">
      <button name="back_top_artner" it="back_top_artner" class='button radius' value="back_top_artner" onclick="travelfund_close();" > Find your holiday at <?php echo $partner['partner_name'] ?> </button>
    </div>
  </div>
 
<script>

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