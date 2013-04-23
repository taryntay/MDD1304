<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
	<link href="../../libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../../libraries/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

	<h2>Create</h2>
	<?php echo form_open('site/add');?>
	<p>
		<label for="title">Title</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="author">Author</label>
		<input type="text" name="author" id="author" />
	</p>
	<p>
		<input type="submit" value="submit">
	</p>
	<?php echo form_close();?>
	<p><?php echo anchor('site/bookworm', 'Home', 'Home Page');?></p>
	
</body>

</html>