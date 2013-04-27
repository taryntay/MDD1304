<div id="container">
<div id="body">
	<p><?php echo anchor('site/bookworm', '<img src="http://localhost:8888/MDD1304/assets/images/logo.png">', 'Home Page');?></p>
		<h1>Recent Books</h1>
		<div id="recentbooks">
				<?php 
	
					foreach($results as $row){
		
						echo anchor('site/details/' .$row->bookId, $row->title, 'recent book');
					}
				?>
		</div>
		<?php echo form_open('site/create');?><p><input type="submit" value="Add a Book"></p><?php echo form_close();?>
		<?php echo form_open('login/logout');?><input type="submit" value="Logout"><?php echo form_close();?>
		<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>
</div>
</div>