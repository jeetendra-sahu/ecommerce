<?php 
   require "includes/common.php";
if(session_status() === PHP_SESSION_NONE) session_start();
 
    if (!isset($_SESSION['id'])) {
         header("Location:index.php");
      } 
 // forgot password  
    if (isset($_POST['forgot'])) {
    	$old=$_POST['oldPassword'];
    	$new=$_POST['newpassword'];
    	$retype=$_POST['retypepassword'];
    	$password_pattern='/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/';

    	if (!preg_match($password_pattern, $old)) {
              $_SESSION['error'] = "Invalid old pattern";
              //header("Location:signup.php"); 
              die();
           }
           if (!preg_match($password_pattern, $new)) {
              $_SESSION['error'] = "Invalid new pattern";
              //header("Location:signup.php"); 
              die();
           }
           if (!preg_match($password_pattern, $retype)) {
              $_SESSION['error'] = "Invalid retype pattern";
              //header("Location:signup.php"); 
              die();
           }
          $old=md5(mysqli_real_escape_string($conn,$old));
          $new=md5(mysqli_real_escape_string($conn,$new));
          $retype=md5(mysqli_real_escape_string($conn,$retype));
          if (strcmp($new, $retype)!==0) {
          	  $_SESSION['error'] = "password does not match";
               
          }
          else
          {
          $sql="select id from user where password='$old'";
          $fire=$conn->query($sql) or die($conn->error);
          if($fire->num_rows>0) {
          	$id=$_SESSION['id'];
          	$sql="update user set password='$new' where id='$id'";
           $fire=$conn->query($sql) or die($conn->error);
           if($fire==true){
           	$_SESSION['error'] = "password updated successfully";
           }
           else
           {
           		$_SESSION['error'] = "something went wrong ";
           }
          }
          else
          		$_SESSION['error'] = "wrong old password";
          }
    }
  header("Location:setting.php");

 ?>
 