<?php
session_start();
?>
<?php
  function updateDB()
  {
    $con = mysqli_connect("localhost","root","","WebProject");

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];

    $userAdd = "INSERT into Users values('$Email','$FName','$LName','$Password');";
    $userTableAdd = "CREATE table $FName (site VARCHAR(20),username VARCHAR(30),password VARCHAR(30),PRIMARY KEY(site));";

    $result1 = mysqli_query($con,$userAdd);
    
    if(!$result1)
    {
      echo("Error description: ".mysqli_error($con));
    }

    $result2 = mysqli_query($con,$userTableAdd);

    if(!$result2)
    {
      echo("Error description: ".mysqli_error($con));
    }

    header('Location: index.html');
    exit();
  }
    
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    updateDB();
  } 
?>