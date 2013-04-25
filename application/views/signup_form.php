<fieldset>
<p><?php echo anchor('login', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
<h1>Sign Up</h1>
<h2>Your Name</h2>
<?php
	echo form_open('login/create_user');
	echo form_input('first_name', set_value('first_name', 'First Name'));
	echo form_input('last_name', set_value('last_name', 'Last Name'));
?>

<h2>Login Info</h2>
<?php
	echo form_input('username', set_value('username', 'Username'));
	echo form_password('password', set_value('password', 'Password'));
	
	echo form_submit('submit', 'Create Account');
?>

<?php echo validation_errors('<p class="error">');?>
<p>Already have an account? <u><?php echo anchor('login', 'Login', 'Login');?></u></p>
</fieldset>