<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if (!isset($_SESSION['email'])) {
  header("Location:index.php");
}
  session_unset();
  session_destroy(); 

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
<?php   require "includes/header.php";  ?>

  <br><br><br><br><br>
 

<div class="container" style="margin-top : 100px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
     <h3>Your are Successfully Logout  <a href="product.php">Click here</a>  to purchase other item. </h3>
    </div>
  </div>
</div>
 
 <?php require "includes/footer.php"; 
   
 ?>
 <div class="container">

   </div>
</body>
</html>
