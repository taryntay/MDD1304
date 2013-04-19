<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
</head>
<body>
<!-- Facebook API Connection with JS SDK -->
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '539717602746861',                        // App ID from the app dashboard
      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="container">

	<div id="body">
	<img src="http://localhost:8888/MDD1304/assets/images/logo.png"><p></p>
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
		<p></p><a href="http://localhost:8888/MDD1304/">Home</a></p>
				
</div>
</div>

</body>
</html>