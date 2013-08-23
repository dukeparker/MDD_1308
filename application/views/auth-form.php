<section>
	<div>
	
		<h3>Sign In</h3>
	
		<div>
			<?php echo validation_errors(); ?>
		</div>
	
		<?php echo form_open('auth'); ?>
	
			<div>
				<?php echo form_label('Email: ', 'email'); ?>
				<?php echo form_input('email', set_value('email'), 'id=email'); ?>
			</div>
	
			<div>
				<?php echo form_label('Password: ', 'password'); ?>
				<?php echo form_password('password', '', 'id=password'); ?>
			</div>
			
			<div>
				<?php echo form_submit('submit', 'Sign In', 'class="btn btn-primary"'); ?>
			</div>
		
		<?php echo form_close(); ?>
	
		<a class="btn-link" href="#">Forgot Your Password?</a>
		
	</div>
</section>