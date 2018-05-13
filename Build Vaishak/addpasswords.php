<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Splash Screen</title>  
    <link rel="stylesheet" href="css/addpasswords.css">
  </head>
<style type="text/css">
body
{
    background-image:url('images.jpg');
}
</style>
<body>
	<div class="form"> 	
	 	<h1>Add Passwords</h1>
	 	<button type="button" class="btn-primary" onClick="location.href='passwords.php'">Manual Add</button>
	 	<button type="button" class="btn-primary" onClick="location.href='generate.php'">Generate</button>
	</div>  
</body>
</html>
