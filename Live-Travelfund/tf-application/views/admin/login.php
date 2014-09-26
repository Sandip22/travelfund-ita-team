<?php
require 'header.php';
?>
<div class="container">
    <div class="login">
        <h1>Login</h1>
         <?php echo form_open(base_url() . 'tf-admin/login/authenticate', array(
                    'name' => 'login',
                    'id' => 'login'
                    ));
        ?>
        <p>
            <input type="text" name="user_name" value="" placeholder="Username">
            <?php echo form_error('user_name'); ?>
        </p>
        <p>
            <input type="password" name="password" value="" placeholder="Password">
            <?php echo form_error('password'); ?>
        </p>
        <P>
            <?php echo form_error('credentials_invalide'); ?>
        </P>
        
<!--        
        <p class="remember_me">
            <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Remember me on this computer 
            </label>
        </p>
-->        
        <p class="submit">
            <button type="submit" name="submit" value="authenticate" class="admin-login-button">
                Submit
            </button>
        </p>
        </form>
    </div>
<!--
    <div class="login-help">
        <p>
            Forgot your password? <a href="index.html">Click here to reset it</a>.
        </p>
    </div>
-->    
</div>
<?php
require 'footer.php';
?>