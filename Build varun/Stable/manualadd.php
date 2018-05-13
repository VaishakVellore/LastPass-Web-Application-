<!DOCTYPE html>
<html >
<head>
  <title>Splash Screen</title>  
  <link rel="stylesheet" href="css/manualadd.css">
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
  <h1>Manual Add</h1>
    <form action="updatepassdb.php" method="POST" name="register">  
      <input type="text" class="form-control" placeholder="Site" name="Site">
      <input type="text" class="form-control" placeholder="Username" name="Username">
      <input type="password" class="form-control" placeholder="Password " name="Password">
      <button type="submit" class="submit-btn" name="Submit">Submit</button>
    </form>
  </div>
</body>
</html>
