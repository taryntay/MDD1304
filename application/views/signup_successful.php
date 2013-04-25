<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
</head>
<body>

<?php 
foreach($results as $row){}
?>
<?php $first_name = $_POST['first_name']; ?>
<div id="body">
<p><?php echo anchor('site/bookworm', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
<h1>Congrats, <?php echo $first_name; ?></h1>
<p>Your account has been created. <?php echo anchor('login', 'Login Now');?>.</p>

</body>

</body>
</html>