<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
?>
<div class="middleBar">
<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-2 medium-2 columns">
				&nbsp;
			</div>
			<div class="large-8 medium-8 columns">
				<div class="row">
					<div class="large-12 columns">
						<div class="panel radius" style="margin-top: 20px;">
							<span class="panel-title radius">Reset password.</span>
							<?php echo form_open(base_url() . 'customer/credential/reset_password', array(
                                    'name' => 'reset_password',
                                    'id' => 'reset_password'
                                ));
							?>

							<div class="row" style="margin-top: 10px;">
								<div class="large-3 medium-3 columns">
									<label for="password" class="left inline">Password</label>
								</div>
								<div class="large-6 medium-6 columns end">
									<input type='password' name='password' id='password' value='' />
									<?php echo form_error('password'); ?>
								</div>
							</div>
							<div class="row">
								<div class="large-3 medium-3 columns">
									<label for="confirm_password" class="left inline">Confirm Password</label>
								</div>
								<div class="large-6 medium-6 columns end">
									<input type='password' name='confirm_password' id='confirm_password' value='' />
									<?php echo form_error('confirm_password'); ?>
								</div>
							</div>
							<div class="row">
								<div class="large-3 medium-3 columns">
									&nbsp;
								</div>
								<div class="large-6 medium-6 columns end">
									<button name="action" it="action" type="submit" class='button right radius ' value="reset_password" >
										Reset
									</button>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="large-2 medium-2 columns">
				&nbsp;
			</div>
		</div>
	</div>
</div>
</div>
<?php
include_once ITA_BASE_PATH."views/footer.php";
?>
