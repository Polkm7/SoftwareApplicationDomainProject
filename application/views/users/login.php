<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="container">
			<?php echo validation_errors(); ?>
			<div class="card">
				<div class="card-header">
					<h2>User Login</h2>
				</div>
				<div class="card-body">
					<?php echo form_open(base_url('users/login')); ?>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="userEmail" type="email" required autofocus />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="userPassword" type="password" required />
							</div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" />
						</fieldset>
					</form>
				</div>
				<div class="card-footer text-center">
					<a href="<?=site_url('users/register');?>">User Registration</a> | <a href="<?=site_url('users/forgotPassword');?>">Forgot Password?</a>
				</div>
			</div>
		</div>
