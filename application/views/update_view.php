
<?php 
foreach($results as $row){}
?>


	<h2>Update</h2>
	<?php echo form_open('site/edit/' .$this->uri->segment(3));?>
	<p>
		<label for="title">Title</label>
		<input type="text" name="title" id="title" value="<?php echo $row->title; ?>"/>
	</p>
	
	<p>
		<label for="author">Author</label>
		<input type="text" name="author" id="author" value="<?php echo $row->author; ?>"/>
	</p>
	<p>
		<input type="submit" value="submit">
	</p>
	<?php echo form_close();?>
	<p><?php echo anchor('site/bookworm', 'Home', 'Home Page');?></p>
	
</body>

</html>