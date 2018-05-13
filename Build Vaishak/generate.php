<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>
  <link rel="stylesheet" href="css/generate.css">   
</head>
<style type="text/css">
body
{
    background-image:url('images.jpg');
}
</style>
<body>
  <div class="form"> 
  <h1>Generate</h1>
 	 <button type="button" class="btn-primary" onClick="location.href='level1.php'">Level 1</button>
 	 <button type="button" class="btn-primary" onClick="location.href='level2.php'">Level 2</button>
	 <button type="button" class="btn-primary" onClick="location.href='level3.php'">Level 3</button>
  </div> 
</body>
</html>
