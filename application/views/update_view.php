
<?php 
foreach($results as $row){}
?>

<fieldset>
	<h1>Edit a Book</h1>
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
		<textarea rows="3" cols="40" name="quote" id="quote"><?php echo $row->quote; ?></textarea>
	</p>
	<p>
		<label for="review">Review:</label>
		<textarea rows="5" cols="40" name="review" id="review"><?php echo $row->review; ?></textarea>
	</p>
	<p>
		<label for="favorite">Add to Favorites?</label>
		<input type="radio" name="favorite" value="Yes">Yes <input type="radio" name="favorite" value="No" checked="checked">No
	</p>

	<p>
		<input type="submit" value="submit">
	</p>
	<?php echo form_close();?>
	<p><?php echo anchor('site/bookworm', 'Home', 'Home Page');?></p>
</fieldset>	
</body>

</html>