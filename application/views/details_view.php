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
				
		<?php echo form_open("site/update/$row->bookId");?>
		<p>
			<input type="submit" value="Edit">
		</p>
		<?php echo form_close();?>
		<?php echo form_open("site/delete/$row->bookId");?>
		<p>
			<input type="submit" value="Delete">
			<br />Warning: Deleting a book cannot be undone.
		</p>
		<?php echo form_close();?>
		
		<p><?php echo anchor('site/bookworm', 'Home', 'Home Page');?></p>
				
</div>
</div>