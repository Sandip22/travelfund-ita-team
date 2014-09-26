<?php
//Header of page.
require 'header.php';

$parter_name = $data['partner_name'];
$partner_url = $data['partner_url'];

?>
<script>var partner_url =  "<?php echo $partner_url; ?>";</script>

<div class="row">
  <div class="large-12 columns">
    <div class="large-12 medium-12 columns blueBackground">
      <div class="row">
        <div class="large-12 columns margintop2 marginbottom">
          <div class="large-12 columns marginbottom text-center">
            <h1 >We're Sorry...</h1>
          </div>
          <div class="large-12 medium-12 columns text-center">
            <h5> Your application process has now expired, please apply again.</h5>
            <!--h5>Your account's 7 days drawdown period has expired. Please log in at <a target="_blank"  href="https://www.travelfund.co.uk">www.travelfund.co.uk</a> to manage your account.</h5-->
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
  <div class="large-4 medium-4 large-centered small-centered medium-centered columns margintop1">
    <button onclick="travelfund_close();" class="button radius expand paddingtop"> Return to <?php echo $parter_name; ?> </button>
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
include_once "footer.php";
?>