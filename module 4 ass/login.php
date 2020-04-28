 
<?php require "includes/common.php";
if(session_status() === PHP_SESSION_NONE) session_start();
 
  if (isset($_SESSION['email'])) {
     header('location:product.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >     
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php  require "includes/header.php"; 
  
 ?>
 
  <br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-xs-4 col-xs-offset-4">
<div>
   <?php if(isset($_SESSION['error']))
        {
             echo "<h4>".$_SESSION['error']."</h4>";
             unset($_SESSION['error']);}
         ?>
           
</div>
<form action="login_submit.php" method="post"> 
  <div class="panel panel-primary">
    <div class="panel-heading ">
      <h1>Login</h1>
    </div>
    <div class="panel-body">
    <p class="text-warning">Login to make a purchase</p>
    <div class="form-group">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div> 
      <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="password" required>
      </div> 

       <input type="submit" name="submit" class="btn btn-primary" value="Login">
      <br><br><br>
    </div>
    <div class="panel-footer">
      Don't have an account ? 
     
      <a href="signup.php" class="text-primary">Ragister</a>
    </div>
  </div>
  </form>
</div>
 </div> 
 </div>
  <?php include "includes/footer.php" ?>
</body>
</html>
<?php /*
session_unset();
session_destroy(); */

 ?>