<fieldset>
<h1>Sign Up</h1>
<h2>Personal Information</h2>
<?php
	echo form_open('login/create_user');
	echo form_input('first_name', set_value('first_name', 'First Name'));
	echo form_input('last_name', set_value('last_name', 'Last Name'));
?>

<h2>Login Info</h2>
<?php
	echo form_input('username', set_value('username', 'Username'));
	echo form_input('password', set_value('password', 'Password'));
	
	echo form_submit('submit', 'Create Account');
?>

<?php echo validation_errors('<p class="error">');?>
<p>Already have an account? <u><?php echo anchor('login', 'Login', 'Login');?></u>.</p>
</fieldset>