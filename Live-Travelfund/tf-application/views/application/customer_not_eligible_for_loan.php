<?php
//Header of page.
require 'header.php';
?>
<script>
    var partner_url = "<?php echo $data['partner_url']; ?>";
</script>

<div class="row">
  <div class="large-12 columns">
    <div class="large-12 medium-12 columns blueBackground">
      <div class="row">
        <div class="large-12 columns margintop2 marginbottom">
          <div class="large-12 columns marginbottom">
            <h1 >Our apologies...</h1>
          </div>
          <div class="large-12 medium-12 columns ">
            <h5> We're sorry, based on the information you've supplied we're unable to offer you an account at this time. We may be able to offer you an account should your circumstances change, so please try again in the future.</h5>
            <br>
            <h5> If you have already chosen your holiday, please return to <?php echo $data['partner_name']; ?> and select a different payment method. </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
</div>
<div class="row">
  <div class="large-12 medium-12 columns">
    <div class="large-5 medium-5 large-centered medium-centered columns">
      <button onclick="travelfund_close();" class="button radius"> Return to <?php echo $data['partner_name']; ?> </button>
    </div>
  </div>
</div>
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
//Footer of page.
require 'footer.php';
?>
