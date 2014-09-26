<?php
//Header of page.
require 'header.php';
?>
<div class="middleBar">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <h2>Contact Us</h2>
      <br>
      <h9>Please complete the form below and we will be in touch!</h9>
      <br>
    </div>
      
    <div class="row">
        <?php if(count(@$data)>0 && $data['msg']!="") {?>
            <div class="large-12 medium-12 columns">
                <div data-alert class="alert-box info radius">
                    <?php echo @$data['msg'];?>
                </div>
            </div>
        <?php }?>
    </div>  
    <div class="large-12 medium-12 columns text-center marginbottom margintop"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
  </div>
  
  <!-- CONTACT FORM -->
  
  <?php echo form_open(base_url() . 'home/sendMailContact', array(
                    'name' => 'sendMailContact',
                    'id' => 'sendMailContact',
                    'autocomplete'=>'off',
                    ));
                ?>
    <div class="row">
      <div class="large-12 large-centered small-centered columns ">
        <div class="row">
          <div class="large-4 medium-4 columns">
            <h5>Name*</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="name" id="name">
              <div id="err_title"><?php echo form_error('name'); ?></div>  
          </div>
        </div>
        <div class="row nopadmarg">
          <div class="large-4 medium-4 columns">
            <h5>Job Title</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="title" id="title">
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 columns">
            <h5>Company Name</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="companyname" id="companyname">
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 columns">
            <h5>Your Email*</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="email" id="email">
              <div id="err_title"><?php echo form_error('email'); ?></div>  
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 columns">
            <h5>Your phone number</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="phone" id="phone">
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 columns">
            <h5>ATOL/ABTA number</h5>
          </div>
          <div class="large-8 medium-8 columns">
              <input type="text" name="atol_number" id="atol_number">
          </div>
        </div>
      </div>
    </div>
    
    <!-- SUBMIT BUTTON -->
      <div class="row">
          <div class="large-2 medium-2 columns large-centered small-centered marginbottom margintop"> <a href="#" id="linkId" class="button">Submit</a> </div>
  </form>

  </div>
</div>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>
<script type="text/javascript">
$(document).ready(function() {
    $("#linkId").click(function(){
        $("#sendMailContact").submit();
        return false;
    });
});
</script>