<?php
//Header of page.
require 'header.php';
?>
<script>
    var partner_url = "<?php echo $data['partner_url']; ?>";
</script>

<div class="row">
  <div class="large-12 columns">
    <div class="large-12 columns blueBackground">
      <div class="row">
        <div class="large-12 columns margintop2 marginbottom">
          <div class="large-12 columns marginbottom">
            <h1>Oh dear...</h1>
          </div>
          <div class="large-12 medium-12 columns marginbottom">
            <h5>Based on the information you've supplied, 
              
              we're sorry but it is unlikely that you will be approved. 
              
              We may be able to offer you an account if your circumstances change, 
              
              so please try again in the future. </h5>
            <br>
            <h5>Remember, this process only leaves a "footprint" on your credit record, 
              
              so it won't affect your ability to get credit elsewhere. </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 medium-12 columns large-centered mediums-centered small-centered">
    <div class="large-6 medium-6 columns large-centered mediums-centered small-centered">
      <button name="back_top_artner" it="back_top_artner" class='button radius' value="back_top_artner" onclick="travelfund_close();" > Return to Travelpack </button>
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
include_once "footer.php";
?>
