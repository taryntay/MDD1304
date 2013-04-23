<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
</head>

<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
	<div id="container">

		<div id="body">
		
		<img src="http://localhost:8888/MDD1304/assets/images/logo.png"><p></p>
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="arial"></div><br /><br />
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
		<p></p><a href="http://localhost:8888/MDD1304/index.php/bookworm/loadApp/">Home</a></p>
				
		</div>
	</div>

</body>
</html>