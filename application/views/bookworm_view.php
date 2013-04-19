<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/MDD1304/assets/css/main.css">
	<link href="../../libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../../libraries/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

	<div id="fb-root"></div>

	<!-- Facebook Log In with JS SDK -->
	<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '539717602746861',                        // App ID from the app dashboard
      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });
    
    FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // connected
  } else if (response.status === 'not_authorized') {
    // not_authorized
    login();
  } else {
    // not_logged_in
    login();
  }
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
   
     function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
        } else {
            // cancelled
        }
    });
 
}
	</script>
	
	<div id="container">

		<div id="body">
		<!-- Facebook Log In Button -->
		<div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="1"></div>
		<p><img src="http://localhost:8888/MDD1304/assets/images/logo.png"></p>
 
		<h2>Recent Books</h2>
				<?php 
	
					foreach($results as $row){
		
						echo anchor('bookworm/details/' .$row->bookId, $row->title, 'recent book');
						echo " ";
						echo "<br />";
					}
				?>
				<p><a><a href="">Add a Book</a></p>
		</div>

	</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>