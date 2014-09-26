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
            
			<div class="large-12 medium-12 columns margintop2 marginbottom">
			    <h6><a href="/application/how_it_works" > << Back</a></h6>
            <div class="large-12 medium-12 columns">

                <h1>Not sure if you're eligible?</h1><br>
                
                <h5>

                By completing the below application form we can tell you if you are likely to be accepted for an account. 

Our pre application check does not impact your credit record, so it won't affect your ability to get credit elsewhere.


                </h5>
                
                                  <div class="large-12 medium-12 columns text-center marginbottom margintop2">
       	<img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
        </div>

                <?php echo form_open(base_url() . 'application/customer_eligibility_response', array(

                    'name' => 'eligibility_detail',

                    'id' => 'eligibility_detail',

                    'autocomplete'=>'off',

                    ));

                ?>

                <div class="row">

                    <div class="large-6 medium-6 columns">

                        <label for="hv_tf_acc" class="left">Do you have a Travelfund account</label>

                    </div>

                    <div class="large-6 medium-6 columns end" >

                        <input type="radio" name="hv_tf_acc" id="hv_tf_acc_no" value="No" <?php echo set_radio('hv_tf_acc', 'No',TRUE); ?> >

                            <label for="hv_tf_acc_no">No</label>

                        <input type="radio" name="hv_tf_acc" id="hv_tf_acc_yes" value="Yes" <?php echo set_radio('hv_tf_acc', 'Yes'); ?> >

                            <label for="hv_tf_acc_yes">Yes</label>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="title" class="left inline">Name</label>

                    </div>

                    <div class="large-2 medium-2 columns" >

                        <select name="title" id= "title" placeholder="please select" >

                            <option disabled="disabled" selected value='' <?php echo set_select('title', ''); ?> >Title</option>

                            <option value='Mr' <?php echo set_select('title', 'Mr'); ?> >Mr</option>

                            <option value='Mrs' <?php echo set_select('title', 'Mrs'); ?> >Mrs</option>

                            <option value='Miss' <?php echo set_select('title', 'Miss'); ?> >Miss</option>

                            <option value='Ms' <?php echo set_select('title', 'Ms'); ?> >Ms</option>

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

                    <div class="large-4 medium-4 columns">

                        <label for="right-label" class="left inline">Date of Birth</label>

                    </div>

                    <div class="large-2 medium-2 columns">

                        <select name='birth_date_dd' id="birth_date_dd">

                            <option disabled="disabled" selected >Day</option>

                            <?php for($i=1; $i<32; $i++) { 

                                $theday = date('d', mktime(0,0,0,0,$i,2000));

                                $sel = ( $i == date('d') ? ' selected="selected"' : '');

                                ?>

                                <option value='<?php echo $theday;?>' <?php echo set_select('birth_date_dd', $i); ?>><?php echo $theday; ?></option>

                            <?php } // end for ?>

                        </select>

                        <div id="err_birth_date_dd"><?php echo form_error('birth_date_dd'); ?></div>

                    </div>

                    <div class="large-3 medium-3 columns">

                        <select name='birth_date_mm' id="birth_date_mm">

                            <option disabled="disabled" selected >Month</option>

                            <?php for($i=1; $i<13; $i++) { 

                                $themonth = date('F', mktime(0,0,0,$i,2,2000));

                                $month = date('m', mktime(0,0,0,$i,2,2000));

                                $sel = ( $i == date('n') ? ' selected="selected"' : '');

                                ?>

                            <option value='<?php echo $month; ?>' <?php echo set_select('birth_date_mm', $i); ?>><?php echo $themonth; ?></option>

                            <?php } // end for ?>

                        </select>

                        <div id="err_birth_date_mm"><?php echo form_error('birth_date_mm'); ?></div>

                    </div>

                    <div class="large-3 medium-3 columns">

                        <select name='birth_date_yyyy' id="birth_date_yyyy">

                            <option disabled="disabled" selected >Year</option>

                            <?php for($i=2000; $i>1915; $i--) { ?>

                            <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_yyyy', $i); ?>><?php echo $i; ?></option>

                            <?php } // end for ?>

                        </select>

                        <div id="err_birth_date_yyyy"><?php echo form_error('birth_date_yyyy'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="house_number" class="left inline">House number or name</label>

                    </div>

                    <div class="large-8 medium-8 columns end">

                        <input type="text" name='house_number' id='house_number' value="<?php echo set_value('house_number'); ?>">

                        <div id="err_house_number"><?php echo form_error('house_number'); ?></div>

                    </div>

                </div> 

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="post_code" class="left inline">Post Code</label>

                    </div>

                    <div class="large-8 medium-8 columns end" >

                        <input type="text" name='post_code' id='post_code' value="<?php echo set_value('post_code'); ?>">

                        <div id="err_post_code"><?php echo form_error('post_code'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="time_at_add" class="left inline">

                            Time At Address (years)

                        </label>

                    </div>

                    <div class="large-8 medium-8 columns end" >
                        <select name="time_at_add" id="time_at_add">
                            <option disabled="disabled" selected="selected"> [Please Select] </option>
                            <?php for($i=1;$i<20;$i++): ?>
                            <option <?php echo set_select('time_at_add', $i); ?> value=<?php echo $i ?> ><?php echo $i ?></option>
                            <?php endfor; ?>
                          </select>    
                        <div id="err_time_at_add"><?php echo form_error('time_at_add'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="email" class="left inline">

                            Email Address

                        </label>

                    </div>

                    <div class="large-8 medium-8 columns end" >

                        <input type="text" name='email' id='email' value="<?php echo set_value('email'); ?>">

                        <div id="err_email"><?php echo form_error('email'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="emp_status" class="left inline">Employment status</label>

                    </div>

                    <div class="large-8 medium-8 columns end" >

                        <select name='emp_status' id='emp_status'>

                            <option disabled="disabled" value='' selected="selected" >[please select]</option>

                            <option value='employed' <?php echo set_select('emp_status', 'employed'); ?> >Employed</option>

                            <option value='self_employed' <?php echo set_select('emp_status', 'self_employed'); ?> >Self employed</option>

                            <option value='temporary' <?php echo set_select('emp_status', 'temporary'); ?> >Temporary</option>

                            <option value='unemployed' <?php echo set_select('emp_status', 'unemployed'); ?> >Unemployed</option>

                            <option value='retired' <?php echo set_select('emp_status', 'retired'); ?> >Retired</option>

                            <option value='student' <?php echo set_select('emp_status', 'student'); ?> >Student</option>

                            <option value='homemaker' <?php echo set_select('emp_status', 'homemaker'); ?> >Homemaker</option>

                            <option value='other' <?php echo set_select('emp_status', 'other'); ?> >Other</option>

                        </select>

                        <div id="err_emp_status"><?php echo form_error('emp_status'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="anum_income" class="left inline">Yearly Income</label>

                    </div>

                    <div class="large-8 medium-8 columns end" >

                        <input type="text" name='anum_income' id='anum_income' value="<?php echo set_value('anum_income'); ?>">

                        <div id="err_anum_income"><?php echo form_error('anum_income'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="anum_hs_income_b_tax" class="left inline">Annual household income before tax</label>

                    </div>

                    <div class="large-8 medium-8 columns end" >

                        <input type="text" name='anum_hs_income_b_tax' id='anum_hs_income_b_tax' value="<?php echo set_value('anum_hs_income_b_tax'); ?>">

                        <div id="err_anum_hs_income_b_tax"><?php echo form_error('anum_hs_income_b_tax'); ?></div>

                    </div>

                </div>

                <div class="row">

                    <div class="large-4 medium-4 columns">

                        <label for="departure_date" class="left inline">Approximate Departure Date</label>

                    </div>

                    <div class="large-8 medium-8 columns end">

                        <input type='text' id ="departure_date" name='departure_date' readonly="readonly" value='<?php echo set_value('departure_date'); ?>' />

                        <div id="err_departure_date"><?php echo form_error('departure_date'); ?></div>

                    </div>

                </div>
                
                <div class="large-12 medium-12 columns text-center marginbottom margintop2">
       			<img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
       			</div>

                <div class="row">
                
                     <div class="large-12 medium-12 columns">

                    <h3>About our eligibility checks</h3>

                    <ul type="circle"><h5>
                    <li>This is only a guide and results may vary when you make a full application.</li>
                    <li>No impact on your ability to get credit elsewhere.</li>
                    <li>It's simple and quick with results in seconds.</li>
                    </h5>
                    </ul>                           

           			 
                   </div>

					<div class="large-12 medium-12 columns text-center marginbottom margintop2">
                    <img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
                    </div>
                    
                    <div class="large-12 medium-12 columns">

                        <h5>Once you have agreed with the terms and conditions, click continue.

                        We'll give you an instant decision on whether you are likely to be eligible for Travelfund.

                        This may also be sent to email address you have supplied above.

                        </h5>
                    
                    </div>
                    
                    
               

                        <div class="large-10 medium-10 columns margintop2">
                            <label for="accept_terms" class="left">
                                <input style="margin-top: 7px;" class="left" type='checkbox' name='accept_terms' id="accept_terms" value='1' <?php echo set_checkbox('accept_terms', 'Yes'); ?> />&nbsp;
                                <b>I confirm that I have read the <a onclick="open_window('eligibility_terms_conditions');"><u>Terms and Conditions.</u></a>&nbsp;&nbsp;<b>
                            </label>
                        </div>
                        <div id="popup_msg"></div>

                        <div class="large-10 medium-10 columns">

                            <div id="err_accept_terms"><?php echo form_error('accept_terms'); ?></div>

                        </div>        


                    </div>

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

<div class="large-4 medium-4 columns large-centered small-centered text-center margintop2 paddingtop">

<button name="submit" it="submit" type="submit" class='button radius' value="insert" >Continue</button>

</div>         

<script>
    
    jQuery( document ).ready(function() {
    // Handler for .ready() called.
    jQuery("#departure_date").datepicker({
                dateFormat : 'dd-mm-yy',
                minDate:0,
                });
                
    //Set value of check box as per checked status.
       $("#accept_terms").click(function(ele){
              
               if(this.checked === true)
               {
                   $(this).prop("value","yes");
               }else{
                   $(this).prop("value","");
               }
           }
       );                
    //Client side validation rule.
    validation.addCRule({field:"title",label:"Please select your title",rule : 'required'});
    validation.addCRule({field:"first_name",label:"Please enter a valid first name",rule : 'required|alphabet'});
    validation.addCRule({field:"last_name",label:"Please enter a valid last name",rule : 'required|alphabetLastname'});
    
    validation.addCRule({field:"birth_date_dd",label:"Please select your date of birth",rule : 'required'});
    validation.addCRule({field:"birth_date_mm",label:"Please select your date of birth",rule : 'required'});
    validation.addCRule({field:"birth_date_yyyy",label:"Please select your date of birth",rule : 'required|validBirthdate',});
    
    validation.addCRule({field:"house_number",label:"Please enter a valid house number",rule : 'required|alphaNumericHouseNumber'});
    validation.addCRule({field:"post_code",label:"Please enter your full UK postcode",rule : 'required|alphaNumericWithSpace'});
    
    validation.addCRule({field:"time_at_add",label:"Please enter time At Address",rule : 'required|numeric'});
    validation.addCRule({field:"email",label:"Please enter a valid email address",rule : 'required|validEmail'});
    
    
    validation.addCRule({field:"emp_status",label:"Please select your employment status",rule : 'required'});
    validation.addCRule({field:"anum_income",label:"Please enter your yearly income",rule : 'required|numeric'});
    validation.addCRule({field:"anum_hs_income_b_tax",label:"Please enter your annual household income before tax using numbers only",rule : 'required|numeric'});
    validation.addCRule({field:"Approximate Departure Date",label:"Please select your approximate departure date",rule : 'required'});
    
    //Client side validation rule.
    validation.addCRule({field:"accept_terms",label:"Please tick the box if you accept the terms and conditions",rule : 'required'});

    //Bind validation to element.  
    validation.bind(validation);            
                
});

    
</script>
<?php
include_once "footer.php";
?>