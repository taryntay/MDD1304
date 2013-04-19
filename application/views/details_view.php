<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
</head>
<body>

<div id="container">

	<div id="body">
	<img src="http://localhost:8888/MDD1304/assets/images/logo.png"><p></p>
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
		<p></p><a href="http://localhost:8888/MDD1304/">Home</a></p>
				
</div>
</div>

</body>
</html>