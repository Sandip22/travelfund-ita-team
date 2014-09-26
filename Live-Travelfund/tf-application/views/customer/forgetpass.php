<?php
//Header of page.
//require 'header.php';
include_once(realpath(__DIR__ . '/../application/header.php')) ;
//require 'header_deshboard.php';
?>

<div class="row">
  <div class="large-12 columns">
    <div class="panel"> <span class="panel-title radius"></span>
      <div class="row">
        <div class="large-4 medium-4 columns margintop1">
              <h6><a href="/application/login">&nbsp;&nbsp;<< Back </a></h6>
        </div>
        <div class="large-4 medium-4 columns right margintop1">
              <h6> Need help ? Check out our FAQ's <a onclick="open_window('faq');"><u>here</u></a></h6>
              <div id="faq"></div>
        </div>
      </div>
      <div class="row">
          <div class="large-11 medium-11 columns small-centered large-centered">
            <h1>Reset Password</h1>
          </div>
      </div>
            <?php echo form_open(base_url() . 'customer/credential/send_reset_password_email', array(
                'name' => 'reset',
                'id' => 'reset'
                ));
            ?>
              <div class="row" style="margin-top: 10px;">
        <div class="large-11 medium-11 columns small-centered large-centered">
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <label for="title" class="left inline">Name</label>
                            </div>
                            <div class="large-3 medium-3 columns" >
                                <select name='title' id= "title" placeholder="please select" >
                                    <option disabled="disabled" selected value='' <?php echo set_select('title', ''); ?> >Title</option>
                                    <option value='Mr' <?php echo set_select('title', 'Mr'); ?> >Mr</option>
                                    <option value='Mrs' <?php echo set_select('title', 'Mrs'); ?> >Mrs</option>
                                    <option value='Miss' <?php echo set_select('title', 'Miss'); ?> >Miss</option>
                                    <option value='Ms' <?php echo set_select('title', 'Ms'); ?> >Ms</option>
                                </select>
                                <?php echo form_error('title'); ?>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <input type="text" name='first_name' id='first_name' placeholder="First Name" value='<?php echo set_value('first_name'); ?>'>
                                <?php echo form_error('first_name'); ?>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <input type="text" name='last_name' id='last_name' placeholder="Last Name" value='<?php echo set_value('last_name'); ?>'>
                                <?php echo form_error('last_name'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <label for="right-label" class="left inline">Date of Birth</label>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <select name='birth_date_dd' style="width: 50% !important">
                                    <option disabled="disabled" selected >Day</option>
                                    <?php for($i=1; $i<32; $i++) { ?>
                                        <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_dd', $i); ?>><?php echo $i; ?></option>
                                    <?php } // end for ?>
                                </select>
                                <?php echo form_error('birth_date_dd'); ?>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <select name='birth_date_mm' style="width: 50% !important" >
                                    <option disabled="disabled" selected >Month</option>
                                    <?php for($i=1; $i<13; $i++) { ?>
                                    <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_mm', $i); ?>><?php echo $i; ?></option>
                                    <?php } // end for ?>
                                </select>
                                <?php echo form_error('birth_date_mm'); ?>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <select name='birth_date_yyyy' style="width: 50% !important">
                                    <option disabled="disabled" selected >Year</option>
                                    <?php for($i=2000; $i>1915; $i--) { ?>
                                    <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_yyyy', $i); ?>><?php echo $i; ?></option>
                                    <?php } // end for ?>
                                </select>
                                <?php echo form_error('birth_date_yyyy'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <label for="email" class="left inline">Email</label>
                            </div>
                            <div class="large-9 medium-9 columns end">
                                <input type='text' name='email' id='name' value='<?php echo set_value('email'); ?>' />
                                <?php echo form_error('email'); ?>
                                <?php echo form_error('wrong_details'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-3 large-centered medium-3 columns">&nbsp;</div>
                            <div class="large-6 medium-6 columns">
                                <h5>
                                    Travelfund will send you an email with a link to reset your password. Please ensure all your details are correct.
                                </h5>
                                </div>
                            <div class="large-3 large-centered medium-3 columns">
                                <button name="submit" it="submit" type="submit" class="button radius orange" value="insert" >Reset</button>
                            </div>
                        </div>                        
                  </div>
                </div>
            </form>
        </div>    
    </div>
</div>  
<?php
include_once(realpath(__DIR__ . '/../application/footer.php')) ;
?>