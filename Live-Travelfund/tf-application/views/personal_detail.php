<?php
//Header of page.
require 'header.php';

?>

<div class="row">
  <div class="large-12 columns">
    <div class="pbar">
      <div class="pbar-parts">
        <div class="pbar-part1 pbar-part-color-3 ">About you</div>
        <div class="pbar-part2">Address Info</div>
        <div class="pbar-part3">Employment</div>
        <div class="pbar-part4">Payment Set-up1</div>
        <div class="pbar-part5">Credit Agreement</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <div class="panel" style="margin-top: 20px;"> <span class="panel-title radius"></span>
      <div class="row">
        <div class="large-5 medium-5 columns right margintop1">
          <h6> Need help ? Check out our FAQ's <a onclick="open_window('faq');"><u>here</u></a></h6>
          <div id="faq"></div>
        </div>
      </div>
      <div class="large-11 medium-11 columns small-centered large-centered">
        <h1>About you</h1>
      </div>
      <?php echo form_open(base_url() . 'application/insert_personal_details', array(
                'name' => 'personal_detail',
                'id' => 'personal_detail',
                'autocomplete'=>'off',
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
                <option disabled="disabled" selected value="" <?php echo set_select('title', ''); ?> >Title</option>
                <option value='Mr' <?php echo set_select('title', 'Mr'); ?> >Mr</option>
                <option value='Mrs' <?php echo set_select('title', 'Mrs'); ?> >Mrs</option>
                <option value='Miss' <?php echo set_select('title', 'Miss'); ?> >Miss</option>
                <option value='Ms' <?php echo set_select('title', 'Ms'); ?> >Ms</option>
                <option value='Dr' <?php echo set_select('title', 'Dr'); ?> >Dr</option>
              </select>
              <div id="err_title"><?php echo form_error('title'); ?></div>
            </div>
            <div class="large-3 medium-3 columns">
              <input type="text" name='first_name' id='first_name' placeholder="First Name" value='<?php echo set_value('first_name'); ?>'>
              <div id="err_first_name"><?php echo form_error('first_name'); ?></div>
            </div>
            <div class="large-3 medium-3 columns">
              <input type="text" name='last_name' id='last_name' placeholder="Last Name" value='<?php echo set_value('last_name'); ?>'>
              <div id="err_last_name"><?php echo form_error('last_name'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="right-label" class="left inline">Date of Birth</label>
            </div>
            <div class="large-3 medium-3 columns">
              <select name='birth_date_dd' id="birth_date_dd" style="width: 50% !important">
                <option disabled="disabled" selected value="">Day</option>
                <?php for($i=1; $i<32; $i++) { ?>
                <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_dd', $i); ?>><?php echo $i; ?></option>
                <?php } // end for ?>
              </select>
              <div id="err_birth_date_dd"><?php echo form_error('birth_date_dd'); ?></div>
            </div>
            <div class="large-3 medium-3 columns">
              <select name='birth_date_mm' id="birth_date_mm" style="width: 50% !important" >
                <option disabled="disabled" selected value="">Month</option>
                <?php for($i=1; $i<13; $i++) { ?>
                <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_mm', $i); ?>><?php echo $i; ?></option>
                <?php } // end for ?>
              </select>
              <div id="err_birth_date_mm"><?php echo form_error('birth_date_mm'); ?></div>
            </div>
            <div class="large-3 medium-3 columns">
              <select name='birth_date_yyyy' id="birth_date_yyyy" style="width: 50% !important">
                <option disabled="disabled" selected value="">Year</option>
                <?php for($i=2000; $i>1915; $i--) { ?>
                <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_yyyy', $i); ?>><?php echo $i; ?></option>
                <?php } // end for ?>
              </select>
              <div id="err_birth_date_yyyy"><?php echo form_error('birth_date_yyyy'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="email" class="left inline">Email</label>
            </div>
            <div class="large-9 medium-9 columns ">
              <input type='text' name='email' id='email' value='<?php echo set_value('email'); ?>' />
              <div id="err_email"><?php echo form_error('email'); ?></div>
            </div>
            <div class="large-3 medium-3 columns"> 
              <!--<img id="email_yes"class="hidden" src="/skin/common/icon/16x16_check.png" />--> 
              <!--<img id="email_no"class="hidden" src="/skin/common/icon/16x16_cross.png" />--> 
              <!--<span class="font-small">*Email must be unique</span>--> 
            </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="confirm_email" class="left inline">Confirm Email</label>
            </div>
            <div class="large-9 medium-9 columns end">
              <input type='text' name='confirm_email' id='confirm_email' value='<?php echo set_value('confirm_email'); ?>' />
              <div id="err_confirm_email"><?php echo form_error('confirm_email'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="password" class="left inline">Password</label>
            </div>
            <div class="large-9 medium-9 columns">
              <input type='password' name='password' id='password' value='' />
              <div id="err_password"><?php echo form_error('password'); ?></div>
            </div>
            <div class="large-9 medium-9 columns"><h6>*Password must have at least one number, one lowercase, one uppercase letter and minimum six characters.</h6></div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="confirm_password" class="left inline">Re-Type Password</label>
            </div>
            <div class="large-9 medium-9 columns">
              <input type='password' name='confirm_password' id='confirm_password' value='' />
              <div id="err_confirm_password"><?php echo form_error('confirm_password'); ?></div>
            </div>
            <div class="large-9 medium-9 columns"> <h6>*Please remember this details to log in at any time to complete your application</h6> </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="right-label" class="left inline">Mobile phone number</label>
            </div>
            <div class="large-9 medium-9 columns end">
              <input type='text' name='mobile_phone' id='mobile_phone' value='<?php echo set_value('mobile_phone'); ?>' />
              <div id="err_mobile_phone"><?php echo form_error('mobile_phone'); ?></div>
            </div>
              <div class="large-9 medium-9 columns"> <h5>Have your mobile phone handy as <strong>we'll be sending you a verification code.</strong>  You'll also <strong>need your mobile every time you make a payment </strong>from your account.
</h5> </div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">
              <label for="departure_date" class="left inline">Approximate Departure Date</label>
            </div>
            <div class="large-3 medium-3 columns end">
              <input type='text' id ="departure_date" name='departure_date'  readonly="" value='<?php echo set_value('departure_date'); ?>' placeholder="Please select a date" />
              <div id="err_departure_date"><?php echo form_error('departure_date'); ?></div>
            </div>
            <div class="large-6 medium-6 columns"> 
              <!--<span class="font-small">* If traveling within 1 month, we'll need to take a 10% deposit from your debit card.</span>--> 
            </div>
          </div>
          <div class="row">
            <div class="large-11 small-11 columns"> <span>
              <input type="checkbox" name="sp_terms" id="sp_terms">
              </span> 
                <span>I have read and accepted the <a onclick="open_window('display_security_privacy');"><u>security & privacy statement</u></a>.  This includes using my personal 
                    information to check my identity & carry out a credit check if required.
</span>
                <br>
              <br>
              <span>Please read the <a onclick="open_window('summary_terms_conditions');"><u>summary box, terms and conditions </u></a>and <a onclick="open_window('pre_contract_information');"><u>pre contract information </u></a>before selecting continue.
</span>
              <div id="err_sp_terms" style="padding-top:5px "><?php echo form_error('sp_terms'); ?></div>
            </div>
              <div id="popup_msg"></div>
          </div>
          <div class="row">
            <div class="large-3 medium-3 columns">&nbsp;</div>
            <div class="large-3 medium-3 columns">&nbsp;</div>
            <div class="large-3 medium-3 columns"> <br>
              <a onclick="populate_form();">Demo Data</a> </div>
          </div>
        </div>
      </div>
    </div>

    <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="../skin/common/images/interface assets/blue_arrow.png" /> </div>

  <div class="row">
    <div class="large-3 medium-3 columns large-centered small-centered text-center margintop2">
      <button name="submit" it="submit" type="submit" class="button radius orange" value="insert" >Continue</button>
    </div>
  </div>
  </form>
</div>
</div>
</div>

<script type="text/javascript" charset="utf-8">
    
   $( document ).ready(function() {
       
         // Handler for .ready() called.
        $("#departure_date").datepicker({
                dateFormat : 'dd-mm-yy',
                minDate : 0,
        });
        
         $('#email').bind('copy paste cut',function(e) {
            e.preventDefault(); //disable cut,copy,paste
            //alert('cut,copy & paste options are disabled !!');
        });
        
        //Set value of check box as per checked status.
       $("#sp_terms").click(function(ele){
              
               if(this.checked === true)
               {
                   $(this).prop("value","yes");
               }else{
                   $(this).prop("value","");
                   //Add validation message.
               }
           }
       );
       
        //Server side validation rule.
        //validation.addSRule({field:"email",label:"Email",rule : 'required|valid_email|is_unique[customer.email]'});
        
        //Client side validation rule.
        validation.addCRule({field:"title",label:"Please select your title",rule : 'required|alphabet'});
        validation.addCRule({field:"first_name",label:"Please enter a valid first name",rule : 'required|alphabetName|maxTextlength|firstAlpha'});
        validation.addCRule({field:"last_name",label:"Please enter a valid last name",rule : 'required|alphabetName|maxTextlength|firstAlpha'});
        
        validation.addCRule({field:"birth_date_dd",label:"Please select your date of birth",rule : 'required'});
        validation.addCRule({field:"birth_date_mm",label:"Please select your date of birth",rule : 'required'});
        validation.addCRule({field:"birth_date_yyyy",label:"Please select your date of birth",rule : 'required|validBirthdate',}); 
        
        //no rule.add email validation to give label while checking confirm_email
        validation.addCRule({field:"email",label:"Please enter a valid email address",rule :'required|validEmail|maxTextlength',});
        validation.addCRule({field:"confirm_email",label:"Please confirm your email address",rule :'required|validEmail|match[email]',});
        
        validation.addCRule({field:"password",label:"Please enter your password",rule :'required|validPassword'});
        validation.addCRule({field:"confirm_password",label:"Please confirm your password",rule :'required|match[password]',});
        
        validation.addCRule({field:"mobile_phone",label:"Please enter a valid mobile number. Your mobile number must be 11 digits long.",rule :'required|ukPhoneValid'});
        validation.addCRule({field:"departure_date",label:"Please select your approximate departure date",rule :'required',});
        
        //Client side validation rule.
        validation.addCRule({field:"sp_terms",label:"Please tick the box  if you have read and accepted the security and privacy statement",rule : 'required'});
        
        //Bind validation to element.  
        validation.bind(validation);
        
        
        
        
    });//end  
                
</script> 

<?php
include_once "footer.php";
?>
