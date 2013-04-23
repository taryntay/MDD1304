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

	<div id="container">

		<div id="body">
		<p><img src="http://localhost:8888/MDD1304/assets/images/logo.png"></p>
 
		<h2>Recent Books</h2>
				<?php 
	
					foreach($results as $row){
		
						echo anchor('bookworm/details/' .$row->bookId, $row->title, 'recent book');
						echo " ";
						echo "<br />";
					}
				?>
				<p><a><a href="">Add a Book</a></p>
		</div>

	</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>