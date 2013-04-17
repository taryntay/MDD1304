<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
				<?php 

					foreach($results as $row){
						echo "Title: ";
						echo $row->title;
						echo "<br />Author: ";
						echo $row->author;
						echo "<br />Favorite Quote: ";
						echo $row->quote;
						echo "<br />Review: ";
						echo $row->review;
						echo "<br />Favorite: ";
						echo $row->favorite;
					}
				?>
				
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>