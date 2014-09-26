<?php
//Header of page.
require 'header.php';
?>

<script>var partner_url =  "<?php echo $data['partner_url']; ?>";</script>

<div class="row">
<div class="large-12 columns"> 
<div class="large-12 medium-12 columns blueBackground">
    <div class="row">
        <div class="large-12 columns margintop2">
            <div class="large-12 medium-12 columns marginbottom">
                <h1>We're very sorry...</h1>
                <br>
                <h5>
                    Our sincere apologies but we are full! Due to high demand for travelfund, we have stopped taking on new customers for today.
                </h5>
                <br>
                <h5>
                    Please enter your email address below and we'll notify you as soon as we are clear for take off!
                </h5><br>
                <div class="row">
                    <div class="large-2 medium-2 columns">
                        <label for="email" class="left inline">Email</label>
                    </div>
                    <div class="large-6 medium-6 columns">
                        <input type='text' name='email' id='email' value='<?php echo set_value('email'); ?>' />
                        <div id ="err_email" >&nbsp;</div>
                        <small class="error"><div id ="msg_email" >&nbsp;</div></small>
                    </div>
                    <div class="large-4 medium-4 columns">
                        <button id="register_email" name="register_email"  onclick="register_email();" class="button radius paddingtop">
                            Register email
                        </button>
                    </div>
                </div>
                <div class="large-12 medium-12 columns text-center marginbottom margintop2">
                    <img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
                </div>
                <h5>
                    Not sure if you are eligible? <a href="<?php echo site_url("application/customer_eligiblity_details"); ?>"><b><u>Click Here</u></b></a>
                </h5>
            </div>
        </div>
    </div>
    <!-- <h6>
        Please enter your email address below and we'll notify you as soon as we are clear for take off.
    </h6>
    <div class="row">
        <div class="large-2 medium-2 columns">
            <label for="email">Email*</label>
        </div>
        <div class="large-8 medium-8 columns end">
            <input type='text' name='email' id='email' value='<?php echo set_value('email'); ?>' />
            <?php echo form_error('email'); ?>
        </div>
    </div>
    -->
    <div class="row">
         <div class="large-12 medium-12 large-centered medium-centered small-centered columns">
            <div class="large-5 medium-5 large-centered medium-centered small-centered columns">
                <button onclick="travelfund_close();" class="button radius">
                    Return to <?php echo $data['partner_name']; ?>
                </button>
            </div>
        </div>
    </div>
    </div>
        <div class="large-1 medium-1 columns">&nbsp;</div>
    </div>
</div>

<script>

    $( document ).ready(function() {
        //no rule.add email validation to give label while checking confirm_email
        validation.addCRule({field:"email",label:"Please enter a valid email address",rule :'validEmail|maxTextlength',});
        //Bind validation to element.  
        validation.bind(validation);
    });//end  
    
    function register_email(){
        
        if ($("#email").val !== "") {
 
            //Save email.
            
            pData={"email":$("#email").val()};
                
           $("#msg_email").text("");
            var jqxhr = $.ajax({
                url : "/application/insert_email",
                type : "post",
                data : pData,
                dataType : 'json',
                async: false,
            }).done(function(respo) {
                
                console.log(respo);
                if(respo.status == "1"){
                    $("#msg_email").text("Thank you for registering. We'll be in touch shortly.");
                    $("#email").val("");
                    $('#register_email').attr("disabled", true); 
                }else{
                    $("#err_email").html('<small class="error" >' + respo.status + '</small>');
                }
            }).fail(function(respo) {
                console.log(respo);
            });
               
        }

    }
    
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