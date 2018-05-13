<?php
  session_start();

  function verifyUser()
  {
    $con = mysqli_connect("localhost","root","","WebProject");

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $UserName = $_POST["UserName"];
    $Password = $_POST["Password"];

    $query1 = "SELECT password FROM Users where email_id='$UserName' AND password='$Password';";
    $query2 = "SELECT * FROM Users where email_id='$UserName' AND password='$Password';";

    $result1 = mysqli_query($con,$query1);

    if(!$result1)
    {
        echo("Error description: ".mysqli_error($con));
    }

    if (mysqli_num_rows($result1) > 0)
    {
      $result2 = mysqli_query($con,$query2);
      $temp = mysqli_fetch_array($result2);
      $_SESSION['name'] = $temp['first_name'];
      //echo $_SESSION['name'];
      header('Location: mainpage.php');
      
      exit();
    }

    else
    {
      sleep(3);
      header('Location: index.html');
      exit();
    }
  }
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    verifyUser();
  } 
?>