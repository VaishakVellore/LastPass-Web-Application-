<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Splash Screen</title>  
    <link rel="stylesheet" href="css/mainpage.css">
  </head>
<style type="text/css">
body
{
    background-image:url('images.jpg');
}
</style>
<body>
	<div class="form"> 	
	 	<h1>Asterisks</h1>
	 	<button type="button" class="button" onClick="location.href='passwords.php'">View Passwords</button>
	 	<button type="button" class="button" onClick="location.href='addpasswords.php'">Add Passwords</button>
		<button type="button" class="button">Rate Passwords</button>
	</div>  
</body>
</html>
