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
        <h1>Opps! Something has gone wrong.</h1>
        <h5>We're sorry but something unexpected has happened. This may be a 
            temporary problem. If you have already started an application, please log
            back in with your email and password to complete your application.
        </h5>
        <h5>
            If it persists, please contact <a href="mailto:support@travelfund.co.uk"> support@travelfund.co.uk </a>
        </h5>
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
