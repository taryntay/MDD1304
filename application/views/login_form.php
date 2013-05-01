<div id="login_form">
<p><?php echo anchor('login', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
	<h1>Login</h1>
	<?php echo form_open('login/validate_credentials'); ?>
	
		<input type="text" name="username" id="username" placeholder="username" />
		<input type="password" name="password" id="password" placeholder="password" />
		<input type="submit" value="Login">
		<?php echo anchor('login/signup', 'Create an Account'); ?>
	<?php echo form_close();?>

</div>