<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>    
  <link rel="stylesheet" href="css/passwords.css">  
</head>
<style type="text/css">
  h1 {
    
    text-align: center;
    font-size: 70px;
    color: #808080;
  }

body
{
    background-image:url('images.jpg');
}
</style>
<body>
  <div class="form"> 
  <h1>Passwords</h1>
  <?php

    $db = $_SESSION['name'];
    $con = mysqli_connect("localhost","root","","WebProject");

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT * FROM $db;";

    $result = mysqli_query($con,$query);

    if(!$result)
    { 
        echo("Error description: ".mysqli_error($con));
    }

    echo "<table align='center' border='1'>
    <tr>
    <th>Site</th>
    <th>Username</th>
    <th>Password</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['site'] . "</td>";
      echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['password'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
  ?>
</div>
</body>
</html> 
