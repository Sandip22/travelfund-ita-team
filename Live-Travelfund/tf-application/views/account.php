<?php
//Header of page.
require 'header.php';
?>
<div class="middleBar">
  <div class="row margintop">
    <div class="large-12 text-center columns"> <img src="/skin/common/img/login/login_graphic.png"> </div>
    <div class="large-12 text-center large-centered columns marginbottom"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
    <?php echo form_open(base_url() . 'customer/myaccount/authenticate', array(
                            'name' => 'personal_detail',
                            'id' => 'personal_detail'
                            ));
                            ?>
    <div class="large-6 large-centered columns">
      <div class="row">
        <div class="large-4 columns">
          <h9>Email Address</h9>
        </div>
        <div class="large-8 text-center columns">
          <input type="text" id="email" name="email" />
        </div>
      </div>
      <div class="row">
        <div class="large-4 columns">
          <h9>Password</h9>
        </div>
        <div class="large-8 text-center columns">
          <input type="password" id="password" name="password" />
          </div>
      </div>    
        <div class="row">
            <div class="large-4 columns"> &nbsp;</div>
          <div class="large-8 columns"> <a href="#" id="linkId" class="button">Submit</a> </div>
        </div>
        <div class="row">
            <div class="large-4 columns"> &nbsp;</div>
          <div class="large-8 columns text-center"> <a href="/customer/credential"><u>Forgotten your password?</u> </div>
        </div>
          </form>
    <div class="large-6 text-center large-centered columns margintop2"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
  </div>
</div>
</div>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>
<script type="text/javascript">
$(document).ready(function() {
    $("#linkId").click(function(){
        $("#personal_detail").submit();
        return false;
    });
});
</script>