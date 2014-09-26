<?php 
//header
require 'header.php';
//menu
require 'menu.php';

?>
<div class="content">
    <span class="title">Add a Admin User</span>
    <div class="form-container">
    <?php echo form_open(base_url() . 'tf-admin/users/insert_admin_user',array('name'=>'add_admin_user','id'=>'add_admin_user')     ); ?>
    <table class="form-table">
        <tbody>
            <tr>
                <td colspan="2" align="right" class="form-field"><span class="required-mesg">* required</span></td>
            </tr>
            <tr>
                <td class="label form-field"><label for="user_name">User Name*</label></td>
                <td class="form-field"><input name="user_name" id="user_name" value="<?php echo set_value('user_name'); ?>">
                    <?php echo form_error('user_name'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="first_name" >First Name*</label></td>
                <td class="form-field"> <input name="first_name" id="first_name" value="<?php echo set_value('first_name'); ?>">
                    <?php echo form_error('first_name'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="last_name">Last Name*</label></td>
                <td class="form-field"><input name="last_name" id="last_name" value="<?php echo set_value('last_name'); ?>"> 
                    <?php echo form_error('last_name'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="email">Email*</label></td>
                <td class="form-field"><input name="email" id="email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="status">Status*</label></td>
                <td class="form-field">
                    <select name="status">
                        <option value="Deactive">Deactive</option>
                        <option value="Active">Active</option>
                    </select>
                    <?php echo form_error('status'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="password">Password*</label></td>
                <td class="form-field"><input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
                    <?php echo form_error('password'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field"><label for="confirm_password">Confirm Password*</label></td>
                <td class="form-field"><input type="password" name="confirm_password" id="confirm_password" value="<?php echo set_value('confirm_password'); ?>">
                    <?php echo form_error('confirm_password'); ?>
                </td>
            </tr>
            <tr>
                <td class="label form-field">User Rights</td>
                <td class="form-field">
                    <table style="width:500px;">
                        <tbody>
                            <tr>
                                <td>Model</td>
                                <td>Read</td>
                                <td>Add</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>User</span>
                                    <input type="hidden" name="model_user" id="model_user" value="user">
                                </td>
                                <td><input type="checkbox" name="model_user_read" id="model_user_read" value="<?php echo set_value('user_read'); ?>">
                                    <?php echo form_error('user_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_user_add" id="model_user_add" value="<?php echo set_value('user_add'); ?>">
                                    <?php echo form_error('user_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_user_edit" id="model_user_edit" value="<?php echo set_value('user_edit'); ?>">
                                    <?php echo form_error('user_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_user_delete" id="model_user_delete" value="<?php echo set_value('user_delete'); ?>">
                                    <?php echo form_error('user_delete'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Partner</span>
                                    <input type="hidden" name="model_partner" id="model_partner" value="partner">
                                </td>
                                <td><input type="checkbox" name="model_partner_read" id="model_partner_read" value="<?php echo set_value('partner_read'); ?>">
                                    <?php echo form_error('partner_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_partner_add" id="model_partner_add" value="<?php echo set_value('partner_add'); ?>">
                                    <?php echo form_error('partner_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_partner_edit" id="model_partner_edit" value="<?php echo set_value('partner_edit'); ?>">
                                    <?php echo form_error('partner_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_partner_delete" id="model_partner_delete" value="<?php echo set_value('partner_delete'); ?>">
                                    <?php echo form_error('partner_delete'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Lender</span>
                                    <input type="hidden" name="model_lender" id="model_lender" value="lender">
                                </td>
                                <td><input type="checkbox" name="model_lender_read" id="model_lender_read" value="<?php echo set_value('lender_read'); ?>">
                                    <?php echo form_error('lender_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_lender_add" id="model_lender_add" value="<?php echo set_value('lender_add'); ?>">
                                    <?php echo form_error('lender_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_lender_edit" id="model_lender_edit" value="<?php echo set_value('lender_edit'); ?>">
                                    <?php echo form_error('lender_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_lender_delete" id="model_lender_delete" value="<?php echo set_value('lender_delete'); ?>">
                                    <?php echo form_error('lender_delete'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Customer</span>
                                    <input type="hidden" name="model_person" id="model_person" value="person">
                                </td>
                                <td><input type="checkbox" name="model_person_read" id="model_person_read" value="<?php echo set_value('person_read'); ?>">
                                    <?php echo form_error('person_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_person_add" id="model_person_add" value="<?php echo set_value('person_add'); ?>">
                                    <?php echo form_error('person_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_person_edit" id="model_person_edit" value="<?php echo set_value('person_edit'); ?>">
                                    <?php echo form_error('person_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_person_delete" id="model_person_delete" value="<?php echo set_value('person_delete'); ?>">
                                    <?php echo form_error('person_delete'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Application</span>
                                    <input type="hidden" name="model_application" id="model_application" value="application">
                                </td>
                                <td><input type="checkbox" name="model_application_read" id="model_application_read" value="<?php echo set_value('application_read'); ?>">
                                    <?php echo form_error('application_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_application_add" id="model_application_add" value="<?php echo set_value('application_add'); ?>">
                                    <?php echo form_error('application_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_application_edit" id="model_application_edit" value="<?php echo set_value('application_edit'); ?>">
                                    <?php echo form_error('application_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_application_delete" id="model_application_delete" value="<?php echo set_value('application_delete'); ?>">
                                    <?php echo form_error('application_delete'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Address</span>
                                    <input type="hidden" name="model_address" id="model_address" value="address">
                                </td>
                                <td><input type="checkbox" name="model_address_read" id="model_address_read" value="<?php echo set_value('address_read'); ?>">
                                    <?php echo form_error('address_read'); ?>
                                </td>
                                <td><input type="checkbox" name="model_address_add" id="model_address_add" value="<?php echo set_value('address_add'); ?>">
                                    <?php echo form_error('address_add'); ?>
                                </td>
                                <td><input type="checkbox" name="model_address_edit" id="model_address_edit" value="<?php echo set_value('address_edit'); ?>">
                                    <?php echo form_error('address_edit'); ?>
                                </td>
                                <td><input type="checkbox" name="model_address_delete" id="model_address_delete" value="<?php echo set_value('address_delete'); ?>">
                                    <?php echo form_error('address_delete'); ?>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="form-field">&nbsp;</td>
                <td class="form-field"><br /><button type="submit" class='button'>Add New User</button></td>
            </tr>
        </tbody>
    </table>
    </form>
    </div>
</div>
<script>

 jQuery('input:checkbox').change(function(){
     cb = jQuery(this);
     if(cb.prop('checked')){
        cb.val("on");    
     }else{
        cb.val("off");    
     }
 });
 
</script>
<?php
require 'footer.php';
?>