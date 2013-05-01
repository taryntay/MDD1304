<fieldset>
<?php 
$logo = img('assets/images/logo.png');
?>
<p><?php echo anchor('site/bookworm', $logo, 'Home Page');?></p>
<h1>Add a Book</h1>
	<?php echo form_open('site/add');?>
	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="author">Author:</label>
		<input type="text" name="author" id="author" />
	</p>
	<p>
		<label for="quote">Favorite Quote:</label>
		<textarea rows="3" cols="40" name="quote" id="quote"></textarea>
	</p>
	<p>
		<label for="review">Review:</label>
		<textarea rows="5" cols="40" name="review" id="review"></textarea>
	</p>
	<p>
		<label for="favorite">Add to Favorites?</label>
		<br /><input type="radio" name="favorite" value="Yes">Yes
		<br /><input type="radio" name="favorite" value="No" checked="checked">No
	</p>
	<p>
		<input type="submit" value="Add">
	</p>
	
	<?php echo form_close();?>
	<?php echo form_open("site/bookworm");?>
		<input type="submit" value="Home">
	<?php echo form_close();?>
	
<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>
</fieldset>	
</body>

</html>