<?php
//Header of page.
require 'header.php';
?>
<script>var partner_url =  "<?php echo $data['partner_url']; ?>";</script>

<div class="row">
<div class="large-12 columns">
<div class="large-12 medium-12 columns blueBackground">
  <div class="row">
    <div class="large-12 columns margintop2 marginbottom">
      <div class="large-12 columns marginbottom">
        <h1>You have an incomplete application. </h1>
        <h5>Please log in via the link below to complete your application.</h5>
        </div>
        </div>
        <div class="row">
          <div class="large-5 medium-5 columns large-centered small-centered text-center"> <a href="<?php echo site_url("application/login");?>">
            <u><h5>I already have a travelfund account</h5></u></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface assets/blue_arrow.png" /> </div>
</div>
<div class="row">
  <div class="large-5 medium-5 large-centered medium-centered columns">
    <button onclick="travelfund_close();" class="button radius"> Return to <?php echo $data['partner_name']; ?> </button>
  </div>
</div>
<script>
    
    function travelfund_close() {
        
        //Detect screen size.
        //if mobile then open in same screen.
        if (screen.width < 800) {
            window.location = partner_url;
        } else {
            parent.location = partner_url;
        }
    }

</script>
<?php
//Footer of page.
require 'footer.php';
?>
