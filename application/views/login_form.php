<div id="login_form">
<p><?php echo anchor('login', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
	<h1>Login</h1>
	<?php
		echo form_open('login/validate_credentials');
		echo form_input('username', 'Username');
		echo form_password('password', 'Password');
		echo form_submit('submit', 'Login');
		echo anchor('login/signup', 'Create an Account');
	?>
	
</div>