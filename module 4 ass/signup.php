<?php 
    require "includes/common.php";
if(session_status() === PHP_SESSION_NONE) session_start();
 
    if (isset($_SESSION['id'])) {
         header("Location:product.php");
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
 <?php require "includes/header.php"; ?>
  <br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-xs-4 col-xs-offset-4">
<h1>Sign Up</h1>
<form action="signup_script.php" method="post">
    <div><h4><?php  if (isset($_SESSION['error'])) 
   {   echo  $_SESSION['error'];  unset($_SESSION['error']);   }
                 
     ?></h4></div>
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Name" title="should be character and greater than 4 only" pattern="[A-Za-z\s]{3,}" required>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Email" title="should be  greater than 5 only" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="atleast one lowercase,upercase and numeric value " required>
  </div>
  
  <div class="form-group">
    <input type="number" name="Contact" class="form-control" placeholder="Contact" title="number 10 digit only " pattern="[0-9]{10}" required>
  </div>
  <div class="form-group">
    <input type="text" name="city" class="form-control" placeholder="City" title="lowercase or upercase only" pattern="[A-Za-z]+"  required>
  </div>
  <div class="form-group" required>
    <input type="text" name="address" class="form-control" placeholder="Enter full address" required>
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>
</div>
 </div> 
 </div>
 <?php require "includes/footer.php"; ?>
</body>
</html>