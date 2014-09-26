<?php
//Header of page.
require 'header.php';
?>

<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
            <div class="large-8 medium-8 columns">
                <h3 style="text-align:center;" class="color-text-alt-1">Hello again!</h3>
                <p style="text-align:center;">If you have already started an application with us or already have an account, then please login to continue. </p>
                <?php echo form_open(base_url() . 'application/authenticate', array(
                    'name' => 'login_detail',
                    'id' => 'login_detail',
                    'autocomplete'=>'off',
                    ));
                ?>
                    <fieldset>
                    <legend>Login</legend>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <?php echo form_error("email"); ?>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <?php echo form_error("password"); ?>
                        <?php echo form_error("invalide_credentials"); ?>
                        <div class="row">
                            <div class="large-12 medium-12 columns">
                                <div class="large-8 medium-8 columns" >
                                    <p><small class="text-strong">Forgot your password? Click  <a href="/customer/credential"> here</a> to reset it.</small></p> 
                                </div>
                                <div class="large-4 medium-4 columns" >
                                    <button name="submit" it="submit" type="submit" class='button radius expand' value="login" >Continue</button>
                                </div>                                    
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>