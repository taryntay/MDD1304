<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
<div id="container">
<div id="body">
<?php foreach ($results as $row){}?>		
<?php 
$logo = img('assets/images/logo.png');
?>
<p><?php echo anchor('site/bookworm', $logo, 'Home Page');?></p>
		<h1>Book Details: <?php echo $row->title; ?></h1>
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="arial"></div><br /><br />
				<?php 

					foreach($results as $row){
						echo "<b>Title: </b>";
						echo $row->title;
						echo "<b><p>Author: </b>";
						echo $row->author;
						echo "<b><p>Favorite Quote: </b>";
						echo $row->quote;
						echo "<b><p>Review: </b>";
						echo $row->review;
						echo "<b><p>Favorite: </b>";
						echo $row->favorite;
					}
				?>
				
		<?php echo form_open("site/update/$row->bookId");?>
			<input type="submit" value="Edit">
		<?php echo form_close();?>
		<?php echo form_open("site/delete/$row->bookId");?>
			<input type="submit" value="Delete">
		<?php echo form_close();?>
		<?php echo form_open("site/bookworm");?>
			<input type="submit" value="Home">
		<?php echo form_close();?>
		<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>		
</div>
</div>