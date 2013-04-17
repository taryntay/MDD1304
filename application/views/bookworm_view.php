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
		<h2>Recent Books</h2>
				<?php 
	
					foreach($results as $row){
		
						echo anchor('bookworm/details/' .$row->bookId, $row->title, 'recent book');
						echo " ";
						echo "<br />";
					}
				?>
				<a href="">Add a Book</a>
	</div>

</div>

</body>
</html>