<fieldset>
<p><?php echo anchor('login', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
<h1>Sign Up</h1>
<h2>Your Name</h2>
<?php
	echo form_open('login/create_user');
?>

<input type="text" name="first_name" id="first_name" placeholder="full name" />

<h2>Login Info</h2>

<input type="text" name="username" id="username" placeholder="username" />
<input type="text" name="password" id="password" placeholder="password" />
<input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="confirm password" />
<input type="submit" value="Create Account">


<?php echo validation_errors('<p class="error">');?>
<p><u><?php echo anchor('login', 'Already signed up? Login now.', 'Login');?></u></p>
<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>
</fieldset>