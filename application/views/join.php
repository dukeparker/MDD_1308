<section>

<h3>Join TopLine</h3>
	<div class="row">
		<div class="span12">
	
			<div>
				<?php echo validation_errors('<p class="text-error">', '</p>'); ?>
			</div>
	
			<!-- This is the form for a new member. -->
			<?php $attributes = array('class' => 'form-horizontal'); ?>
			<?php $attributes2 = array('class' => 'control-label'); ?>
			
			<?php echo form_open('join', $attributes); ?>
						
				<div class="control-group">
					<?php echo form_label('Name: ', 'name', $attributes2); ?>
					<div class="controls">
						<?php echo form_input('name', set_value('name'), 'class="span3"'); ?>
					</div>
				</div>
				
				<div class="control-group">
					<?php echo form_label('Email: ', 'email', $attributes2); ?>
					<div class="controls">
						<?php echo form_input('email', set_value('email'), 'class="span3"'); ?>
					</div>
				</div>
	
				<div class="control-group">
					<?php echo form_label('Password: ', 'password', $attributes2); ?>
					<div class="controls">
						<?php echo form_password('password', '', 'class="span3"'); ?>
					</div>
				</div>
	
				<div class="control-group">
					<?php echo form_label('Confirm Password: ', 'password-confirm', $attributes2); ?>
					<div class="controls">
						<?php echo form_password('password-confirm', '', 'class="span3"'); ?>
					</div>
				</div class="control-group">
	
				<div class="control-group">
					<div class="controls">
						<?php echo form_submit('submit', 'Sign Up', 'class="btn btn-primary"'); ?>
					</div>
				</div>
				
			<?php echo form_close(); ?>
		</div>
	</div>
</section>