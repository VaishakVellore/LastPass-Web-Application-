<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>  
  <link rel="stylesheet" href="css/register.css">
  <script src="verification.js"></script>
</head>

<style type="text/css">
body
{
    background-image:url('images.jpg');
}
</style>
<body>
  <div class="form"> 
  <h1>Enter The Details</h1>
  <form action="updatedb.php" method="POST" name="register" onsubmit="return verify()">
    <input type="text" class="form-control" placeholder="First Name " name="FName">
    <input type="text" class="form-control" placeholder="Last Name " name="LName">
    <input type="password" class="form-control" placeholder="Master Password" name="Password">
    <input type="text" class="form-control" placeholder="Email ID " name="Email">
    <button type="submit" class="submit-btn" name="Submit">Submit</button>
  </form>
  </div>
</body>
</html>
