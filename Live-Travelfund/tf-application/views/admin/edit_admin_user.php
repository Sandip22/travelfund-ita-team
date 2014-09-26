<?php 
//header
require 'header.php';
//menu
require 'menu.php';
?>
<div class="content">
	<span class="title">Edit a Admin User</span>
	<div class="form-container">
		<?php echo form_open(base_url() . 'tf-admin/users/update_admin_user', array(
            'name' => 'edit_admin_user',
            'id' => 'edit_admin_user'
        ));
		?>
		<table class="form-table">
			<tbody>
				<tr>
					<td colspan="2" align="right" class="form-field"><span class="required-mesg">* required</span></td>
				</tr>
				<tr>
					<td class="label form-field"><label for="user_name">User Name*</label></td>
					<td class="form-field">
					<input name="user_name" id="user_name" disabled="disabled" value="<?php echo set_value('user_name',isset($user_name) ? $user_name :'' ); ?> ">
					<?php echo form_error('user_name'); ?>
					</td>
					<input type="hidden" name="user_name" id="user_name" value="<?php echo set_value('user_name',isset($user_name) ? $user_name :'' ); ?> ">
					<input type="hidden" name="id" id="id" value="<?php echo set_value('id',isset($id) ? $id :'' ); ?>">
					<input type="hidden" name="op_mode" id="op_mode" value="edit">
				</tr>
				<tr>
					<td class="label form-field"><label for="first_name" >First Name*</label></td>
					<td class="form-field">
					<input name="first_name" id="first_name" value="<?php echo set_value('first_name', isset($first_name) ? $first_name :''); ?>">
					<?php echo form_error('first_name'); ?>
					</td>
				</tr>
				<tr>
					<td class="label form-field"><label for="last_name">Last Name*</label></td>
					<td class="form-field">
					<input name="last_name" id="last_name" value="<?php echo set_value('last_name', isset($last_name) ? $last_name :''); ?>">
					<?php echo form_error('last_name'); ?>
					</td>
				</tr>
				<tr>
					<td class="label form-field"><label for="email">Email*</label></td>
					<td class="form-field">
					<input name="email" id="email" value="<?php echo set_value('email', isset($email) ? $email :''); ?>">
					<?php echo form_error('email'); ?>
					</td>
				</tr>
				<tr>
					<td class="label form-field"><label for="status">status*</label></td>
					<td class="form-field">
					<select name="status">
						<option value="Deactive" <?php if(!empty($status) && $status == 'Deactive'){echo "selected";}?> >Deactive</option>
						<option value="Active" <?php if(!empty($status) && $status == 'Active'){echo "selected";}?> >Active</option>
					</select> <?php echo form_error('status'); ?> </td>
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
								<td><span>User</span>
								<input type="hidden" name="model_user" id="model_user" value="user">
								</td>
								<td>
								<input type="checkbox" name="model_user_read" id="model_user_read" value="<?php echo set_value('user_read', isset($user_read) ? $user_read :''); ?>">
								<?php echo form_error('user_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_user_add" id="model_user_add" value="<?php echo set_value('user_add', isset($user_add) ? $user_add :''); ?>">
								<?php echo form_error('user_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_user_edit" id="model_user_edit" value="<?php echo set_value('user_edit', isset($user_edit) ? $user_edit :''); ?>">
								<?php echo form_error('user_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_user_delete" id="model_user_delete" value="<?php echo set_value('user_delete', isset($user_delete) ? $user_delete :''); ?>">
								<?php echo form_error('user_delete'); ?>
								</td>
							</tr>
							<tr>
								<td><span>Partner</span>
								<input type="hidden" name="model_partner" id="model_partner" value="partner">
								</td>
								<td>
								<input type="checkbox" name="model_partner_read" id="model_partner_read" value="<?php echo set_value('partner_read', isset($partner_read) ? $partner_read :''); ?>">
								<?php echo form_error('partner_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_partner_add" id="model_partner_add" value="<?php echo set_value('partner_add', isset($partner_add) ? $partner_add :''); ?>">
								<?php echo form_error('partner_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_partner_edit" id="model_partner_edit" value="<?php echo set_value('partner_edit', isset($partner_edit) ? $partner_edit :''); ?>">
								<?php echo form_error('partner_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_partner_delete" id="model_partner_delete" value="<?php echo set_value('partner_delete', isset($partner_delete) ? $partner_delete :''); ?>">
								<?php echo form_error('partner_delete'); ?>
								</td>
							</tr>
							<tr>
								<td><span>Lender</span>
								<input type="hidden" name="model_lender" id="model_lender" value="lender">
								</td>
								<td>
								<input type="checkbox" name="model_lender_read" id="model_lender_read" value="<?php echo set_value('lender_read', isset($lender_read) ? $lender_read :''); ?>">
								<?php echo form_error('lender_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_lender_add" id="model_lender_add" value="<?php echo set_value('lender_add', isset($lender_add) ? $lender_add :''); ?>">
								<?php echo form_error('lender_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_lender_edit" id="model_lender_edit" value="<?php echo set_value('lender_edit', isset($lender_edit) ? $lender_edit :''); ?>">
								<?php echo form_error('lender_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_lender_delete" id="model_lender_delete" value="<?php echo set_value('lender_delete', isset($lender_delete) ? $lender_delete :''); ?>">
								<?php echo form_error('lender_delete'); ?>
								</td>
							</tr>
							<tr>
								<td><span>Customer</span>
								<input type="hidden" name="model_person" id="model_person" value="person">
								</td>
								<td>
								<input type="checkbox" name="model_person_read" id="model_person_read" value="<?php echo set_value('person_read', isset($person_read) ? $person_read :''); ?>">
								<?php echo form_error('person_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_person_add" id="model_person_add" value="<?php echo set_value('person_add', isset($person_add) ? $person_add :''); ?>">
								<?php echo form_error('person_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_person_edit" id="model_person_edit" value="<?php echo set_value('person_edit', isset($person_edit) ? $person_edit :''); ?>">
								<?php echo form_error('person_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_person_delete" id="model_person_delete" value="<?php echo set_value('person_delete',isset($person_delete) ? $person_delete :'' ); ?>">
								<?php echo form_error('person_delete'); ?>
								</td>
							</tr>
							<tr>
								<td><span>Application</span>
								<input type="hidden" name="model_application" id="model_application" value="application">
								</td>
								<td>
								<input type="checkbox" name="model_application_read" id="model_application_read" value="<?php echo set_value('application_read', isset($application_read) ? $application_read :''); ?>">
								<?php echo form_error('application_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_application_add" id="model_application_add" value="<?php echo set_value('application_add', isset($application_add) ? $application_add :''); ?>">
								<?php echo form_error('application_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_application_edit" id="model_application_edit" value="<?php echo set_value('application_edit', isset($application_edit) ? $application_edit :''); ?>">
								<?php echo form_error('application_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_application_delete" id="model_application_delete" value="<?php echo set_value('application_delete', isset($application_delete) ? $application_delete :''); ?>">
								<?php echo form_error('application_delete'); ?>
								</td>
							</tr>
							<tr>
								<td><span>Address</span>
								<input type="hidden" name="model_address" id="model_address" value="address">
								</td>
								<td>
								<input type="checkbox" name="model_address_read" id="model_address_read" value="<?php echo set_value('address_read', isset($address_read) ? $address_read :''); ?>">
								<?php echo form_error('address_read'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_address_add" id="model_address_add" value="<?php echo set_value('address_add', isset($address_add) ? $address_add :''); ?>">
								<?php echo form_error('address_add'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_address_edit" id="model_address_edit" value="<?php echo set_value('address_edit', isset($address_edit) ? $address_edit :''); ?>">
								<?php echo form_error('address_edit'); ?>
								</td>
								<td>
								<input type="checkbox" name="model_address_delete" id="model_address_delete" value="<?php echo set_value('address_delete',isset($address_delete) ? $address_delete :'' ); ?>">
								<?php echo form_error('address_delete'); ?>
								</td>
							</tr>

						</tbody>
					</table></td>
				</tr>
				<tr>
					<td class="form-field">&nbsp;</td>
					<td class="form-field">
					<br />
					<button type="submit" class='button'>
						Update User
					</button></td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>
</div>
<script>
	jQuery(document).ready(set_checkbox);
	function set_checkbox() {
		//Tick each check box having value on.
		jQuery('input:checkbox').each(function() {
			cb = jQuery(this);
			if (cb.val() == 'on') {
				cb.prop('checked', 'checked');
			}
		});
		//On change of checkbox status update it's value.
		jQuery('input:checkbox').change(function() {
			cb = jQuery(this);
			if (cb.prop('checked')) {
				cb.val("on");
			} else {
				cb.val("off");
			}
		});
	}
</script>
<?php
require 'footer.php';
?>