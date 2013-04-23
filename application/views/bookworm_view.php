<div id="container">
<div id="body">
	<p><img src="http://localhost:8888/MDD1304/assets/images/logo.png"></p>
		<h2>Recent Books</h2>
				<?php 
	
					foreach($results as $row){
		
						echo anchor('site/details/' .$row->bookId, $row->title, 'recent book');
						echo " ";
						echo "<br />";
					}
				?>
			<p><br /><?php echo anchor('site/create', 'Add a Book', 'Add books');?></p>
			<p><?php echo anchor('login/logout', 'Logout', 'Logout');?></p>
</div>
</div>