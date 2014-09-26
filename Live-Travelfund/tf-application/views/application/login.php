<?php
//Header of page.
require 'header.php';
$ci = & get_instance();

$prev_url  = $ci->session->userdata('introduction_url');

if(empty($prev_url)){
    $prev_url="#";
}

?>

<div class="row">
<div class="large-12 columns"> 
  <div class="large-12 columns blueBackground">
    <div class="row">
        
      <div class="large-12 columns margintop2">
        <div class="large-12 columns">
          <h6><a href="<?php echo $prev_url ?>" > << Back</a></h6>  
          <h1>Hello again!</h1>
          <br>
          <h5>If you have already started an application with us or already have an account, then please login to continue. </h5>
        </div>
        <div class="large-12 medium-12 columns text-center marginbottom margintop2"> <img src="/skin/common/images/interface assets/horizontal_divide.png" /> </div>
        <div class="large-12 columns marginbottom"> <?php echo form_open(base_url() . 'application/authenticate', array(
                    'name' => 'login_detail',
                    'id' => 'login_detail',
                    'autocomplete'=>'off',
                    ));
                ?>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="email" class="left inline">Email Address</label>
            </div>
            <div class="large-5 medium-5 columns left">
              <input type="text" id="email" name="email" placeholder="Email">
              <?php echo form_error("email"); ?> </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="password" class="left inline">Password</label>
            </div>
            <div class="large-5 medium-5 columns">
              <input type="password" id="password" name="password" placeholder="Password">
              <?php echo form_error("password"); ?> <?php echo form_error("invalide_credentials"); ?> </div>
            <div class="large-4 medium-4 columns margintop"> <a href="/customer/credential">
              <h5><u>Forgot your password?</u></h5>
              </a> </div>
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
<div class="row">
  <div class="large-4 medium-4 columns large-centered small-centered text-center margintop2">
    <button name="submit" it="submit" type="submit" class='button radius paddingtop' value="login" >Continue</button>
  </div>
</div>
</form>
</div>
</div>
<div class="large-12 medium-12 columns large-centered small-centered text-center">
  <h6>Don't already have an account?</h6>
  <a href="<?php echo site_url('application/personal_details'); ?>">
  <h6><u>Apply Here</u></h6>
  </a> 
</div>
</div>
</div>
<!-- client side velitation --> 
<script type="text/javascript" charset="utf-8">
    
   $( document ).ready(function() {
        
        //Client side validation rule.
        validation.addCRule({field:"email",label:"Please enter a valid email address",rule :'required||validEmail|maxTextlength',});
        validation.addCRule({field:"password",label:"Please enter your password",rule :'required|validPassword'});
        //Bind validation to element.  
        validation.bind(validation);
    
    });//end    
</script>
<?php
include_once "footer.php";
?>