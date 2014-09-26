<?php
//Header of page.
require 'header.php';
?>

<div class="row">
  <div class="large-12 columns">
    <div class="pbar">
      <div class="pbar-parts">
        <div class="pbar-part1 pbar-part-color-4">About You</div>
        <div class="pbar-part2 pbar-part-color-1">Address Info</div>
        <div class="pbar-part3 pbar-part-color-2">Employment</div>
        <div class="pbar-part4">Payment Set-Up</div>
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
      <div class="row">
        <div class="large-11 medium-11 columns small-centered large-centered">
          <h1>Your employment details</h1>
        </div>
      </div>
      <?php echo form_open(base_url() . 'application/insert_employement_details', array(
                'name' => 'personal_detail',
                'id' => 'personal_detail',
                'autocomplete'=>'off',
                ));
            ?>
      <div class="row" style="margin-top: 10px;">
        <div class="large-11 medium-11 columns small-centered large-centered">
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="emp_status" class="left inline">Employment status</label>
            </div>
            <div class="large-3 medium-3 columns end" >
              <select name='emp_status' id='emp_status'>
                <option disabled="disabled" value='' selected="selected" >[please select]</option>
                <option value='Full Time Employed' <?php echo set_select('employment_status', 'Full Time Employed'); ?> >Full Time Employed</option>
                <option value='Part Time Employed' <?php echo set_select('employment_status', 'Part Time Employed'); ?> >Part Time Employed</option>
                <option value='Self Employed' <?php echo set_select('employment_status', 'Self Employed'); ?> >Self Employed</option>
                <option value='Not Employed' <?php echo set_select('employment_status', 'Not Employed'); ?> >Not Employed</option>
                <option value='Student' <?php echo set_select('employment_status', 'Student'); ?> >Student</option>
                <option value='Homemaker' <?php echo set_select('employment_status', 'Homemaker'); ?> >Homemaker</option>
                <option value='Retired' <?php echo set_select('employment_status', 'Retired'); ?> >Retired</option>
                <option value='other' <?php echo set_select('employment_status', 'other'); ?> >Other</option>
              </select>
              <div id="err_emp_status"><?php echo form_error('emp_status'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="anum_hs_income_b_tax" class="left inline">Annual household income before tax</label>
            </div>
            <div class="large-3 medium-3 columns end" >
              <input type="text" name='anum_hs_income_b_tax' id='anum_hs_income_b_tax' value='<?php echo set_value('anum_hs_income_b_tax'); ?>'>
              <div id="err_anum_hs_income_b_tax"><?php echo form_error('anum_hs_income_b_tax'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="emp_type" class="left inline">Employment type</label>
            </div>
            <div class="large-6 medium-6 columns end" >
              <select name='emp_type' id='emp_type'>
                <option disabled="disabled" selected="selected" value='' >[please select]</option>
                <option value='Administration/Customer Service' <?php echo set_select('emp_type', 'Administration/Customer Service'); ?> >Administration/Customer Service</option>
                <option value='Catering' <?php echo set_select('emp_type', 'Catering'); ?> >Catering</option>
                <option value='Cleaning Services' <?php echo set_select('emp_type', 'Cleaning Services'); ?> >Cleaning Services</option>
                <option value='Driver/Mechanic' <?php echo set_select('emp_type', 'Driver/Mechanic'); ?> >Driver/Mechanic</option>
                <option value='Education' <?php echo set_select('emp_type', 'Education'); ?> >Education</option>
                <option value='Farmer/Gardener' <?php echo set_select('emp_type', 'Farmer/Gardener'); ?> >Farmer/Gardener</option>
                <option value='Health Care Worker' <?php echo set_select('emp_type', 'Health Care Worker'); ?> >Health Care Worker</option>
                <option value='Management' <?php echo set_select('emp_type', 'Management'); ?> >Management</option>
                <option value='Medical Professional' <?php echo set_select('emp_type', 'Medical Professional'); ?> >Medical Professional</option>
                <option value='Professional' <?php echo set_select('emp_type', 'Professional'); ?> >Professional</option>
                <option value='Public Services/Security/Military' <?php echo set_select('emp_type', 'Public Services/Security/Military'); ?> >Public Services/Security/Military</option>
                <option value='Retail/Sales/Financial Services' <?php echo set_select('emp_type', 'Retail/Sales/Financial Services'); ?> >Retail/Sales/Financial Services</option>
                <option value='Tradesman/Construction' <?php echo set_select('emp_type', 'Tradesman/Construction'); ?> >Tradesman/Construction</option>
                <option value='Warehouse/Production' <?php echo set_select('emp_type', 'Warehouse/Production'); ?> >Warehouse/Production</option>
                <option value='Self Employed' <?php echo set_select('emp_type', 'Self Employed'); ?> >Self Employed</option>
                <option value='Retired' <?php echo set_select('emp_type', 'Retired'); ?> >Retired</option>
                <option value='Student' <?php echo set_select('emp_type', 'Student'); ?> >Student</option>
                <option value='Homemaker' <?php echo set_select('emp_type', 'Homemaker'); ?> >Homemaker</option>
                <option value='Unemployed' <?php echo set_select('emp_type', 'Unemployed'); ?> >Unemployed</option>
                <option value='Other' <?php echo set_select('emp_type', 'Other'); ?> >Other</option>
              </select>
              <div id="err_emp_type"><?php echo form_error('emp_type'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="res_status" class="left inline">Residential status</label>
            </div>
            <div class="large-6 medium-6 columns end" >
              <select name='res_status' id='res_status'>
                <option disabled="disabled"  selected="selected" value=''  >[please select]</option>
                <option value='Owner' <?php echo set_select('res_status', 'Owner'); ?> >Owner</option>
                <option value='Tenant Unfurnished' <?php echo set_select('res_status','Tenant Unfurnished'); ?> >Tenant Unfurnished</option>
                <option value='Tenant Furnished' <?php echo set_select('res_status', 'Tenant Furnished'); ?> >Tenant Furnished</option>
                <option value='Council Tenant' <?php echo set_select('res_status', 'Council Tenant'); ?> >Council Tenant</option>
                <option value='House Share' <?php echo set_select('res_status', 'House Share'); ?> >House Share</option>
                <option value='Living With Parents' <?php echo set_select('res_status', 'Living With Parents'); ?> >Living With Parents</option>
                <option value='Other Tenant' <?php echo set_select('res_status', 'living_with_parent_guardian'); ?> >Other Tenant</option>
              </select>
              <div id="err_res_status"><?php echo form_error('res_status'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="salary_day" class="left inline">When do you usually get paid?</label>
            </div>
            <div class="large-3 medium-3 columns end" >
              <select name='salary_day' id='salary_day'>
                <option disabled="disabled"  selected="selected" value=''  >[please select]</option>
                <option value='End of the month' <?php echo set_select('res_status', 'End of the month'); ?> >End of the month</option>
                <option value='Middle of the month' <?php echo set_select('res_status','Middle of the month'); ?> >Middle of the month</option>
                <option value='Weekly' <?php echo set_select('res_status', 'Weekly'); ?> >Weekly</option>
              </select>
              <div id="err_salary_day"><?php echo form_error('salary_day'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="uk_curr_acc" class="left inline">Do you have a UK current account?</label>
            </div>
            <div class="large-3 medium-3 columns end" >
              <select name='uk_curr_acc' id='uk_curr_acc'>
                <option disabled="disabled"  selected="selected" value=''  >[please select]</option>
                <option value='Yes' <?php echo set_select('uk_curr_acc', 'Yes'); ?> >Yes</option>
                <option value='No' <?php echo set_select('uk_curr_acc','No'); ?> >No</option>
              </select>
              <div id="err_uk_curr_acc"><?php echo form_error('uk_curr_acc'); ?></div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label for="uk_saving_acc" class="left inline">Do you have a UK savings account?</label>
            </div>
            <div class="large-3 medium-3 columns end" >
              <select name='uk_saving_acc' id='uk_saving_acc'>
                <option disabled="disabled"  selected="selected" value=''  >[please select]</option>
                <option value='Yes' <?php echo set_select('uk_saving_acc', 'Yes'); ?> >Yes</option>
                <option value='No' <?php echo set_select('uk_saving_acc','No'); ?> >No</option>
              </select>
              <div id="err_uk_saving_acc"><?php echo form_error('uk_saving_acc'); ?></div>
            </div>
          </div>
          <div class="large-12 medium-12 columns text-center"> <img src="../skin/common/images/interface assets/horizontal_divide.png" /> </div>
          <div class="row">
            <div class="large-5 medium-5 columns"> <strong>Phone Verification Code</strong> </div>
          </div>
          <div class="row">
              <div class="large-9 medium-9 columns end" >
                <label for="mobile_verif_code" class="left inline">Please enter the 4 digit verification code that we sent to your mobile phone here : </label>
              </div>
              <div class="large-3 medium-3 columns end" >
                  <input type="text" name='mobile_verif_code' id='mobile_verif_code' maxlength="4">
                  <div id="in_pro_mobile_verif_code" class="hidden"><h6><img src="/skin/common/icon/ajax-loader.gif">&nbsp;Sending sms...</h6></div>
                <div id="err_mobile_verif_code"><?php echo form_error('mobile_verif_code'); ?></div>
              </div>
              <div class="large-12 medium-12 columns end" >
                <label class="inline">Didn't receive it? <a id="a_mobile_verif_code" onclick="send_verification_code('mobile_verif_code');">Click Here</a></label>
              </div>
            </div>
          </div>
        </div>
        <div class="large-3 medium-3 columns">&nbsp;</div>
        <div class="large-3 medium-3 columns">&nbsp;</div>
        <!-- <div class="large-3 medium-3 columns"><a  id="a_mobile_verif_code" onclick="populate_form();">Demo Data</a></div> --> 
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
<!-- client side velitation --> 
<script type="text/javascript" charset="utf-8">
   $( document ).ready(function() {
        
        //Client side validation rule.
        validation.addCRule({field:"emp_status",label:"Please select your employment status",rule : 'required'});
        validation.addCRule({field:"anum_hs_income_b_tax",label:"Please enter your annual household income before tax using numbers only",rule : 'required|numericWithDecimal'});
        validation.addCRule({field:"emp_type",label:"Please make select your employment type",rule : 'required'});
        
        validation.addCRule({field:"res_status",label:"Please select your residential status",rule : 'required'});
        validation.addCRule({field:"salary_day",label:"Please make a selection",rule : 'required'});
        validation.addCRule({field:"uk_saving_acc",label:"Please make a selection",rule : 'required'});
        validation.addCRule({field:"uk_curr_acc",label:"Please make a selection",rule : 'required'});
        
        validation.addCRule({field:"mobile_verif_code",label:"Invalid code",rule : 'required|numeric'});
        
        //Bind validation to element.  
        validation.bind(validation);
    
    });//end  
                
    function send_verification_code(id)
    {
       //Remove 
       $("#err_" + id).remove();
       $("#in_pro_"+ id).show();
       
       //Send varification code.
       var jqxhr = $.ajax({
            url : "/application/send_verification_code",
            type : "post",
            dataType : 'json',
        }).done(function(respo) {
            $("#in_pro_"+ id).hide();
            
            //error found.
            if (respo.error) {
                str = "<h6 id='err_" + id +"' class='error'>"+respo.error+"</h6>";
                $("#" + id).after(str);
            } else if(respo.right) {
                str = "<h6 id='err_" + id +"'>"+respo.right+"</h6>";
                $("#" + id).after(str);    
            }
        }).fail(function(respo) {
            $("#in_pro_"+ id).hide();
            console.log(respo);
        });
    }                
</script>
<?php
include_once "footer.php";
?>