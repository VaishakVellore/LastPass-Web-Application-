<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>  
  <link rel="stylesheet" href="css/rating.css">
  <script src="verification.js"></script>
</head>
<style type="text/css">
	body
	{
	    background-image:url('images.jpg');
	}

  h2 {
    
    text-align: center;
    font-size: 40px;
  }
</style>
<div class="form"> 

<body>
	<?php

    $db = $_SESSION['name'];
    $con = mysqli_connect("localhost","root","","WebProject");

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query1 = "select count(password) from Level1 where password IN (select password from $db);";
    $query2 = "select count(password) from Level2 where password IN (select password from $db);";

    $result1 = mysqli_query($con,$query1);

    if(!$result1)
    { 
        echo("Error description: ".mysqli_error($con));
    }

    $result2 = mysqli_query($con,$query2);

    if(!$result2)
    { 
        echo("Error description: ".mysqli_error($con));
    }

    $row1 = mysqli_fetch_array($result1);
    $row2 = mysqli_fetch_array($result2);
      echo "<h2>";
      echo "You have " . $row1['count(password)'] . " Poor Password(s). Change these now!";
      echo "<br></br>";
      echo "You have " . $row2['count(password)'] . " Average Password(s)";
      echo "<br></br>";
      echo "The rest are great!";
      echo "</h2>";
    mysqli_close($con);
  ?>
	</div> 
</body>
</html>
