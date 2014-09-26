<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
require 'header_deshboard.php';
?>
<!-- Change password -->
<?php echo form_open(base_url() . 'customer/myaccount/updatepassword', array(
                'name' => 'changepassword',
                'id' => 'changepassword'
                ));
            ?>
<div class="row">
    <div class="large-12 columns">
    <div class="panel" style="margin-top: 20px; min-height:200px;">
        <span class="panel-title radius">Change Password</span>
        <div class="row">
            <div class="large-12 columns margintop marginbottom">
                <h5>Please enter your new password details</h5>
            </div>
        <div class="row">
        <div class="large-3 medium-3 columns"> &nbsp; </div>
        <div class="large-6 medium-6 columns">
          <div class="large-12 medium-12 columns">
            <div class="panel">
                <div class="row">
                        <?php if(count(@$data)>0 && $data['msg']!="") {?>
                                <div data-alert class="alert-box info radius">
                                    <?php echo @$data['msg'];?>
                                    <a href="#" class="close">&times;</a>
                                </div>
                        <?php }?>
                </div>
                <div class="row">
                  <div class="large-12 large-centered small-centered columns ">
                    <div class="row">
                      <div class="large-4 medium-4 columns">
                        <h11>Password</h11>
                      </div>
                      <div class="large-8 medium-8 columns">
                        <input name="password" type="password" id="password" />
                          <div id="err_password"><?php echo form_error('password'); ?></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-4 medium-4 columns">
                        <h11>New Password</h11>
                      </div>
                      <div class="large-8 medium-8 columns">
                        <input type="password" name="newpassword" id="newpassword" />
                          <div id="err_newpassword"><?php echo form_error('newpassword'); ?></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-4 medium-4 columns">
                        <h11>Retype New Password</h11>
                      </div>
                      <div class="large-8 medium-8 columns">
                        <input type="password" name="retype_newpassword" id="retype_newpassword" />
                          <div id="err_retype_newpassword"><?php echo form_error('retype_newpassword'); ?></div>  
                      </div>
                    </div> 
                      <div class="row">
                      <div class="large-4 medium-4 columns"></div>
                      <div class="large-8 medium-8 columns">
                          <h11>*Password must have at least one number, one lowercase, one uppercase letter and minimum six characters.</h11> 
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="large-3 medium-3 columns" style="margin-top:110px;">
            <ul class="box">
                <a href="#" id="linkId" class="button">
                CONFIRM
                </a>
        </div>
        </div>
    </div>
</div>
</form>

<?php
include_once ITA_BASE_PATH."views/footer.php";
?>
<script type="text/javascript">
$(document).ready(function() {
    $("#linkId").click(function(){
        $("#changepassword").submit();
        return false;
    });

    validation.addCRule({field:"password",label:"Please enter your password",rule :'required'});
    validation.addCRule({field:"newpassword",label:"Please enter new password",rule :'required|validPassword'});
    validation.addCRule({field:"retype_newpassword",label:"Please confirm new password",rule :'required|match[newpassword]',});
    
    //Bind validation to element.  
     validation.bind(validation);
});
</script>