
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
		<label for="quote">Favorite Quote:</label>
		<input type="text" name="quote" id="quote" value="<?php echo $row->quote; ?>"/>
	</p>
	<p>
		<label for="review">Review:</label>
		<textarea rows="4" cols="20" name="review" id="review"><?php echo $row->review; ?></textarea>
	</p>
	<p>
		<label for="favorite">Add to Favorites?</label>
		<input type="radio" name="favorite" value="Yes">Yes<br>
		<input type="radio" name="favorite" value="No">No
	</p>

	<p>
		<input type="submit" value="submit">
	</p>
	<?php echo form_close();?>
	<p><?php echo anchor('site/bookworm', 'Home', 'Home Page');?></p>
	
</body>

</html>