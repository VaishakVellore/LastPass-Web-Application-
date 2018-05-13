<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>
  <link rel="stylesheet" href="css/level.css"> 
</head> 
<style type="text/css">
  body
  {
      background-image:url('images.jpg');
  }
  h1 {
    text-align: center;
  }
  h2 {
    
    text-align: center;
    font-size: 40px;
    color: #808080;
  }
</style>     
<body>
   <div class="form"> 
  <h1>Level 3</h1>
    <?php

    $db = $_SESSION['name'];
    $con = mysqli_connect("localhost","root","","WebProject");

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT password FROM Level3 ORDER BY RAND() LIMIT 1;";

    $result = mysqli_query($con,$query);

    if(!$result)
    {
        echo("Error description: ".mysqli_error($con));
    }

    $row = mysqli_fetch_array($result);

    echo "<h2>";

    echo $row['password'];

    echo "</h2>";

    mysqli_close($con);
  ?>

  <button type="button" class="regenerate-btn1" onClick="location.href='level3.php'">Regenerate Password</button>
  <br></br>
  <button type="button" class="regenerate-btn1">Copy to Clipboard</button>
   </div> 
</body>
</html>
