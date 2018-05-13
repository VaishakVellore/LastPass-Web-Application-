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

    $Password = $_POST["Password"];
    $Site = $_POST["Site"];
    $Username = $_POST["Username"];
    $db = $_SESSION['name'];

    $userAdd = "INSERT into $db values('$Site','$Username','$Password');";

    $result1 = mysqli_query($con,$userAdd);
    
    if(!$result1)
    {
      echo("Error description: ".mysqli_error($con));
    }

    header('Location: mainpage.php');
    exit();
  }
    
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    updateDB();
  } 
?>