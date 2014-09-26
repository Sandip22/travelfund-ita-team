<?php
//Header of page.
require 'header.php';
?>

<div class="row">
    <div class="large-12 columns">
        <div class="pbar">
            <div class="pbar-parts">
                <div class="pbar-part1 pbar-part-color-1 ">About You</div>
                <div class="pbar-part2 pbar-part-color-2">Address Info</div>
                <div class="pbar-part3">Employment</div>
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
                    <h1>Your address information</h1>
                </div>
            </div>
            <?php
            echo form_open(base_url() . 'application/insert_address_details', array(
                'name' => 'personal_detail',
                'id' => 'personal_detail',
                'autocomplete' => 'off',
            ));
            ?>
            <div class="row" style="margin-top: 10px;">
                <div class="large-11 medium-11 columns small-centered large-centered">
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="post_code" class="left inline">Post Code</label>
                        </div>
                        <div class="large-3 medium-3 columns " >
                            <input type="text" name='post_code' id='post_code' value='<?php echo set_value('post_code'); ?>'>
                            <div id="err_post_code"><?php echo form_error('post_code'); ?></div>
                        </div>
                        <div class="large-3 medium-3 columns end margintop" >
                            <div id="post_code_in_process" class="hidden"> <h6>Fetching Address</h6></div>
                            <div> <small class="hidden" id="post_code_err"></small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="house_number" class="left inline">House Number/Name</label>
                        </div>
                        <div class="large-3 medium-3 columns end" >
                            <input type="text" name='house_number' id='house_number' value='<?php echo set_value('house_number'); ?>'>
                            <div id="err_house_number"><?php echo form_error('house_number'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="street" class="left inline">Street</label>
                        </div>
                        <div class="large-7 medium-7 columns end" >
                            <input type="text" name='street' id='street' value='<?php echo set_value('street');?>'>
                            <div id="err_street"><?php echo form_error('street'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="city" class="left inline">Town/City</label>
                        </div>
                        <div class="large-7 medium-7 columns end" >
                            <input type="text" name='city' id='city' value='<?php echo set_value('city'); ?>'>
                            <div id="err_city"><?php echo form_error('city'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="county" class="left inline">County</label>
                        </div>
                        <div class="large-7 medium-7 columns end" >
                            <input type="text" name='county' id='county' value='<?php echo set_value('county'); ?>'>
                            <div id="err_county"><?php echo form_error('county'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label for="howmany_add" class="left inline"> How many addresses have you lived at during the last three years </label>
                        </div>
                        <div class="large-3 medium-3 columns end" >
                            <select name="howmany_add" id="howmany_add">
                                <option disabled="disabled" selected="selected"> [Please Select] </option>
                                <?php for ($i = 1; $i < 20; $i++): ?>
                                    <option <?php echo set_select('howmany_add', $i); ?> value=<?php echo $i ?> ><?php echo $i ?></option>
<?php endfor; ?>
                            </select>
                            <div id="err_howmany_add"><?php echo form_error('howmany_add'); ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="large-3 medium-3 columns">&nbsp;</div>
                        <div class="large-3 medium-3 columns">&nbsp;</div>
                        <div class="large-3 medium-3 columns"><!--<a onclick="populate_form();">Demo Data</a>--></div>
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
<script>
    $("#post_code").blur(function() {

        if ($("#post_code").val().trim() == '') {
            return true;
        }
        //Get jason data        
        var ciurl = "/application/get_address_details/" + $("#post_code").val();

        //Ajax request to get data.        
        var jqxhr = $.ajax({
            url: ciurl,
            beforeSend: function(xhr) {

                $('#post_code_err').text('');
                $("#post_code_err").removeClass("error").addClass("hidden");

                $("#post_code_in_process").removeClass("hidden");

            }
        })
                .done(function(data) {
                    //request id done.
                    $("#post_code_in_process").addClass("hidden");
                    var oData = eval('(' + data + ')');
                    if (typeof oData.add !== "undefined") {
                        $('#city').val(oData.add.city);
                        $('#county').val(oData.add.county);
                        $('#street').val(oData.add.street);
                    } else {
                        $("#post_code_err").removeClass("hidden").addClass("error");
                        $('#post_code_err').text(oData.err);
                    }
                })
                .fail(function() {
                    $("#post_code_in_process").addClass("hidden");
                    alert("Failed to fetch address.");
                });
    });
</script> 
<!-- client side velitation --> 
<script type="text/javascript" charset="utf-8">

    $(document).ready(function() {

        //Client side validation rule.
        validation.addCRule({field: "post_code", label: "Please enter your full UK postcode", rule: 'required'});
        validation.addCRule({field: "house_number", label: "Please enter a valid house number", rule: 'required|alphaNumericWithSpace'});
        validation.addCRule({field: "street", label: "Please enter a valid street", rule: 'required'});

        validation.addCRule({field: "city", label: "Please enter a valid town", rule: 'required|alphabet'});
        validation.addCRule({field: "howmany_add", label: "Please make a selection", rule: 'required|numeric'});

        //Bind validation to element.  
        validation.bind(validation);

    });//end  

</script>
<?php
include_once "footer.php";
?>