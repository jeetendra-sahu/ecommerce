<?php 
   require "includes/common.php";
if(session_status() === PHP_SESSION_NONE) session_start();
 
    if (!isset($_SESSION['id'])) {
         header("Location:index.php");
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
<?php  include "includes/header.php";  ?>

<div class="container" style="margin-top : 100px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div>
        <?php if(isset($_SESSION['error']))
        {
             echo "<h4>".$_SESSION['error']."</h4>";
             unset($_SESSION['error']);} ?>
              
        </div>
    <h1>Change Password</h1>
       <form action="setting_script.php" method="post">
         <div class="form-group">
           <input type="password" name="oldPassword" class="form-control" placeholder="Old Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="atleast one lowercase,upercase and numeric value " required>
         </div>

         <div class="form-group">
           <input type="password" name="newpassword" class="form-control" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="atleast one lowercase,upercase and numeric value " required>
         </div>

         <div class="form-group">
           <input type="password" name="retypepassword" class="form-control" placeholder="Re-type new Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="atleast one lowercase,upercase and numeric value" required>
         </div>
         <input type="submit" class="btn btn-primary" name="forgot" value="Change"> 
       </form>
    </div>
  </div>
</div>
 <?php include "includes/footer.php" ?>
  </body>
  </html>
