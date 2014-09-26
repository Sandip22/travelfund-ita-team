<?php
//Header of page.
require 'header.php';
?>
       <script type="text/javascript">
            
            function open_window(type){
                alert("ADFADS");
                //Display FAQ page.
                if(type=='eligibility_terms_conditions'){
                    $( "#popup_msg" ).dialog({
                        title: "Pre Application Check Terms & Conditions",
                        height:480,
                        width : 600,
                        maxHeight : 880,
                        maxWidth : 864,
                        position:{ my: "center center", at: "center center", of: "#body" } ,
                        open: function(event, ui) {
                            $('#popup_msg').load('home/eligibility_terms_conditions');
                        }
                    });
                 }
            }//fn
        </script> 
<div class="middleBar">
<div class="row">
  <div class="large-12 medium-12 columns marginbottom">
    <h2>Not Sure if you're eligible? Find out here...</h2>
    <h9>By completing the below application form we can tell you if you are likely to be accepted for a Travelfund account. This process only leaves a "footprint" on your credit record, so it won't affect your ability to get credit else where.</h9>
  </div>
  <div class="large-12 medium-12 columns text-center marginbottom"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
</div>

<!-- ELIGIBILITY FORM -->
<?php echo form_open(base_url() . 'application/customer_eligibility_response', array(

                    'name' => 'eligibility_detail',

                    'id' => 'eligibility_detail',

                    'autocomplete'=>'off',

                    ));

                ?>
<input type="hidden" name="front_eligibility" value="1">
  <div class="row">
    <div class="large-8 columns">
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Do you have a travelfund account?</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="radio" name="hv_tf_acc" id="hv_tf_acc_no" value="No" <?php echo set_radio('hv_tf_acc', 'No',TRUE); ?> >
            <label for="hv_tf_acc_no"><h9>No</h9></label>
           <input type="radio" name="hv_tf_acc" id="hv_tf_acc_yes" value="Yes" <?php echo set_radio('hv_tf_acc', 'Yes'); ?> >
            <label for="hv_tf_acc_yes"><h9>Yes</h9></label>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Title</h9>
        </div>
        <div class="large-6 medium-6 columns">
            <select name="title" id= "title" placeholder="please select" >
                <option disabled="disabled" selected value='' <?php echo set_select('title', ''); ?> >Title</option>
                <option value='Mr' <?php echo set_select('title', 'Mr'); ?> >Mr</option>
                <option value='Mrs' <?php echo set_select('title', 'Mrs'); ?> >Mrs</option>
                <option value='Miss' <?php echo set_select('title', 'Miss'); ?> >Miss</option>
                <option value='Ms' <?php echo set_select('title', 'Ms'); ?> >Ms</option>
            </select>
            <div id="err_title"><?php echo form_error('title'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>First name</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='first_name' id='first_name' value='<?php echo set_value('first_name'); ?>'>
            <div id="err_first_name"><?php echo form_error('first_name'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Last name</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='last_name' id='last_name' value='<?php echo set_value('last_name'); ?>'>
          <div id="err_last_name"><?php echo form_error('last_name'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Date of birth</h9>
        </div>
        <div class="large-6 medium-6 columns">
            <div class="large-4 medium-2 columns">
                <select name='birth_date_dd' id="birth_date_dd">
                    <option disabled="disabled" selected >Day</option>
                    <?php for($i=1; $i<32; $i++) { 
                        $theday = date('d', mktime(0,0,0,0,$i,2000));
                        $sel = ( $i == date('d') ? ' selected="selected"' : '');
                        ?>
                        <option value='<?php echo $theday;?>' <?php echo set_select('birth_date_dd', $i); ?>><?php echo $theday; ?></option>
                    <?php } // end for ?>
                </select>
            </div>
            <div class="large-4 medium-2 columns">
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
            </div>
            <div class="large-4 medium-2 columns">
                <select name='birth_date_yyyy' id="birth_date_yyyy">
                    <option disabled="disabled" selected >Year</option>
                        <?php for($i=2000; $i>1915; $i--) { ?>
                            <option value='<?php echo $i; ?>' <?php echo set_select('birth_date_yyyy', $i); ?>><?php echo $i; ?></option>
                        <?php } // end for ?>
                        </select>
            </div>
          </div>  
        <div class="large-6 medium-6 columns">
            <div id="err_birth_date_yyyy"><?php echo form_error('birth_date_yyyy'); ?></div>
        </div>
        
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>House number or name</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='house_number' id='house_number' value="<?php echo set_value('house_number'); ?>">
            <div id="err_house_number"><?php echo form_error('house_number'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Post code</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='post_code' id='post_code' value="<?php echo set_value('post_code'); ?>">
           <div id="err_post_code"><?php echo form_error('post_code'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Time at address (years)</h9>
        </div>
        <div class="large-6 medium-6 columns">
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
        <div class="large-6 medium-6 columns">
          <h9>Email address</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='email' id='email' value="<?php echo set_value('email'); ?>">
            <div id="err_email"><?php echo form_error('email'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Employment status</h9>
        </div>
        <div class="large-6 medium-6 columns">
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
        <div class="large-6 medium-6 columns">
          <h9>Yearly income</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='anum_income' id='anum_income' value="<?php echo set_value('anum_income'); ?>">
            <div id="err_anum_income"><?php echo form_error('anum_income'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Total household income before tax</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type="text" name='anum_hs_income_b_tax' id='anum_hs_income_b_tax' value="<?php echo set_value('house_number'); ?>">
            <div id="err_anum_hs_income_b_tax"><?php echo form_error('anum_hs_income_b_tax'); ?></div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <h9>Approximate departure date</h9>
        </div>
        <div class="large-6 medium-6 columns">
          <input type='text' id ="departure_date" name='departure_date' readonly="readonly" value='<?php echo set_value('departure_date'); ?>' />
            <div id="err_departure_date"><?php echo form_error('departure_date'); ?></div>
        </div>
      </div>
    </div>
    <div class="large-4 medium-4 columns margintop">
      <div class="large-12 medium-12 columns margintop">
        <div class="panel radius">
          <h3><font color="#CADB2B">About our eligibility checks</font></h3>
          <br>
          <h4>This is only a guide and results may vary when you make a full application.</h4>
          <br>
          <h4>No impact on your ability to get credit elsewhere.</h4>
          <br>
          <h4>It's simple and quick with results in seconds.</h4>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 medium-12 columns text-center marginbottom"> <img src="/skin/common/img/interface_assets/horizontal_divide.png"> </div>
    <div class="large-12 medium-12 columns marginbottom">
      <h9>Once you have agreed to the terms and conditions, click "submit" to continue. We'll give you an instant decision on whether you are likely to be eligible for Travelfund. This may also be sent to the email address you have supplied above.</h9>
    </div>
    <div class="large-8 medium-8 columns  marginbottom">
        <h9>I confirm that I have read the <a href="#" onclick="return myFunction();"><u>Terms and Conditions.</u></a>&nbsp;</h9>
      

<div id="termsCondition" class="reveal-modal" data-reveal>
<popupText1>Pre Application Check Terms &amp; Conditions</popupText1><br><br>

<popupText2>Callcredit Limited (&quot;we/us&quot;) is a UK consumer credit reference agency. A credit
reference agency collects and stores details about you and your personal credit
history. Lenders, including banks, building societies and other financial
service providers, share credit information about their customers with us. The
information we receive is used to create your credit report.</popupText2><br><br>

<popupText2>By submitting
your details, you are instructing us to provide your credit report to HD
Decisions Ltd (&quot;HD&quot;). HD has
been appointed as a processing agent for Travel Fund Limited (&quot;TF&quot;) &amp;
APS Financial Limited (&quot;AFL&quot;). HD will (on behalf of such credit intermediaries &amp; providers)
analyse key elements of your credit file, in order to determine your current
financial standing. The analysis of your credit file will be used by HD to
assess your eligibility for a Travelfund account. </popupText2><br><br>

<popupText2>Please note your credit file will not be provided to you directly. The information will be used
by HD, at your request, on your behalf, to assess your eligibility for a Travelfund
account. Any information received about
you during the eligibility check will be stored securely, whether or not you
proceed with a full Travelfund application, to help APS Financial Limited (in
partnership with Travel Fund Limited)analyse and develop their products and
services.</popupText2><br><br>

<popupText2>This process will not have any adverseimpact upon your credit standing. If you choose to proceed to apply for a
Travelfund account then APS Financial Limited will proceed to carry out their
own identification and credit application checks.</popupText2><br><br>

<popupText2>Please note that the provision of your credit
report to HD is subject to the Callcredit Terms and Conditions
(&quot;&lt;Callcredit Terms and Conditions – SEE BELOW&gt;&quot;)</popupText2><br><br>

<popupText2>You agree that the personal details you supply
to us will be used for the purposes of:</popupText2><br><br>

<popupText2>a) verifying your identity in order to ensure
that we are providing your credit report in accordance with your instructions;</popupText2><br><br>

<popupText2>b) providing services to our clients in which
your personal details are used to assist with identity verification, prevention
of fraud/money laundering, service delivery and process implementation.</popupText2><br><br>

<popupText1>Call Credit Terms and Conditions</popupText1><br><br>

<popupText2>1. These Terms
and Conditions apply to the individual (&quot;you/your&quot;) who instructs
Callcredit Limited (&quot;we/us/our&quot;) to provide their credit report (&quot;Credit
Report Services&quot;) to HD Decisions Limited (&quot;HD&quot;) via the website
at www.travelfund.co.uk or any Travelfund widget (&quot;Websites&quot;).</popupText2><br><br>

<popupText2>2. Your credit
report will not be provided to you directly. However it will be used by HD to identify your eligibility for a
Travelfund account (&quot;HD Services&quot;).</popupText2><br><br>

<popupText2>3. You may only request your own credit
report. It is unlawful to order credit information about anyone else.</popupText2><br><br>

<popupText2>4. Notwithstanding any provision to the
contrary, nothing in these Terms and Conditions excludes or limits our
liability for death or personal injury caused by negligence, fraudulent
misrepresentation, or any other liability which may not otherwise be limited or
excluded under applicable law. Nothing in these Terms and Conditions affects
any statutory rights you may have as a consumer.</popupText2><br><br>

<popupText2>5. We make no representation or warranty of
any kind express or implied statutory or otherwise regarding the availability
of the Credit Report Services or the HD Services or that they will be timely or
error-free or that defects will be corrected, or that the computer systems that
make them available are free of viruses or bugs.</popupText2><br><br>

<popupText2>6. We will not be responsible or liable to you
for any loss of content or material uploaded or transmitted through the website
at www.travelfund.co.uk or on any Travelfund widget (&quot;Websites&quot;) and
we accept no liability of any kind for any loss or damage from action taken or
taken in reliance on the Credit Report Services, the HD Services, or any other
material or information contained on the Website. Except as otherwise stated in
these Terms and Conditions we will not be liable whether for breach of
contract, negligence or otherwise for any direct or indirect economic losses
you may make (these include without limitation any loss of revenue or loss of income);
or any indirect, special or consequential losses arising out of or in
connection with the Credit Report Services or the HD Services whether these
losses were foreseeable or not at the time you requested the Credit Report
Services, or the HD Services.</popupText2><br><br>

<popupText2>7. We will use reasonable endeavours to ensure
that the information provided in your credit report is accurate, however, we
rely on information from various different sources to put together your credit
report. We accept no liability for any losses you may incur due to the details
of your credit report being inaccurate or not up to date; or for any other
losses you suffer in connection with the provision of the HD Services.</popupText2><br><br>

<popupText2>8. Except as expressly stated in these Terms
and Conditions we give no conditions, undertakings or warranties (whether
express or implied) in relation to the Credit Report Services, and the HD
Services.</popupText2><br><br>

<popupText2>9. The Credit Report Services shall be
governed by the laws of England and any dispute between us will be resolved
exclusively in the courts of England.</popupText2><br><br>

<popupText2>10. We shall be under no liability for any
delay or failure to deliver the Credit Report Services or otherwise perform any
obligation as specified in these Terms and Conditions if the same is wholly or
partly caused whether directly or indirectly by circumstances beyond our
reasonable control. </popupText2><br><br>

<popupText2>11. Our total liability to you (whether in
contract, tort or otherwise) for any loss or damage arising out of your use of
the Credit Report Services will be limited to £100.</popupText2><br><br>

<popupText2>12. If any
portion of these Terms and Conditions is held by any competent authority to be
invalid or unenforceable in whole or in part, the validity or enforceability of
the other sections of these Terms and Conditions shall not be affected.</popupText2><br><br>

<popupText2>13. These Terms and Conditions do not create
or confer any rights or benefits enforceable by any person that is not a party
(within the meaning of the UK Contracts (Rights of Third Parties) Act 1999) but
this does not affect any rights or remedies of a third party which exist or are
available apart from that Act.</popupText2><br><br>

<popupText2>14. These Terms and Conditions (together with
information on the Website referring to the Credit Report Services) supersede
all prior representations understandings and agreements between you and us
relating to the Credit Report Services (&quot;Services&quot;) and sets forth
the entire agreement and understanding between you and us in connection with
such Services.</popupText2><br><br>

<br><br>

  <a class="close-reveal-modal">&#215;</a>
</div>
      <input type='checkbox' name='accept_terms' id="accept_terms" value='1' <?php echo set_checkbox('accept_terms', 'Yes'); ?> />
      <label for="yes">
        <h9>yes</h9>
      </label>
      <div id="err_accept_terms"><?php echo form_error('accept_terms'); ?></div>
    </div>
    <div class="large-4 medium-4 columns  marginbottom"> <a href="#" id="linkId" class="button">Submit</a> </div>
  </div>
<div id="popup_msg"></div>
  </div>
</form>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php
include_once "footer.php";
?>
<script>
    
    jQuery( document ).ready(function() {
        
    $("#linkId").click(function(){
        $("#eligibility_detail").submit();
        return false;
    });
    
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
    validation.addCRule({field:"last_name",label:"Please enter a valid last name",rule : 'required|alphabet'});
    
    validation.addCRule({field:"birth_date_dd",label:"Please select your date of birth",rule : 'required'});
    validation.addCRule({field:"birth_date_mm",label:"Please select your date of birth",rule : 'required'});
    validation.addCRule({field:"birth_date_yyyy",label:"Please select your date of birth",rule : 'required|validBirthdate',});
    
    validation.addCRule({field:"house_number",label:"Please enter a valid house number",rule : 'required|alphaNumeric'});
    validation.addCRule({field:"post_code",label:"Please enter your full UK postcode",rule : 'required|alphaNumericWithSpace'});
    
    validation.addCRule({field:"time_at_add",label:"Please enter time At Address",rule : 'required|numeric'});
    validation.addCRule({field:"email",label:"Please enter a valid email address",rule : 'required|validEmail'});
    
    
    validation.addCRule({field:"emp_status",label:"Please select your employment status",rule : 'required'});
    validation.addCRule({field:"anum_income",label:"Please enter your yearly income",rule : 'required|numeric'});
    validation.addCRule({field:"anum_hs_income_b_tax",label:"Please enter your annual household income before tax using numbers only",rule : 'required|numeric'});
    validation.addCRule({field:"Approximate Departure Date",label:"Please select your approximate departure date",rule : 'required'});
    
    //Client side validation rule.
    validation.addCRule({field:"accept_terms",label:"Please tick the box if you accept the terms and condition",rule : 'required'});

    //Bind validation to element.  
    validation.bind(validation);            
                
});

    
</script>
<script>
function myFunction() {
    var myWindow = window.open("http://travelfund.co.uk/home/eligibility_terms_conditions", "MsgWindow", "width=600, height=700, top=500, left=500,toolbar=yes, scrollbars=yes, resizable=yes");
    //myWindow.document.write("<p>This is 'MsgWindow'. I am 200px wide and 100px tall!</p>");
}
</script>