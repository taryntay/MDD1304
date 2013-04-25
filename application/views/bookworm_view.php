<div id="container">
<div id="body">
	<p><?php echo anchor('site/bookworm', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
		<h1>Recent Books</h1>
				<?php 
	
					foreach($results as $row){
		
						echo anchor('site/details/' .$row->bookId, $row->title, 'recent book');
						echo " ";
						echo "<br />";
					}
				?>

		<?php echo form_open('site/create');?><p><input type="submit" value="Add a Book"></p><?php echo form_close();?><?php echo form_open('login/logout');?><input type="submit" value="Logout"><?php echo form_close();?>

</div>
</div>