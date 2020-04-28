<?php 
require "includes/common.php";
 if(session_status() === PHP_SESSION_NONE) session_start();
 
   if(isset($_POST['submit']))
   {   
   	$name= $_POST['name'];
   	$email= $_POST['email'];
   	$password= $_POST['password'];
   	$city=$_POST['city'];
   	$address=$_POST['address'];
   	$Contact=$_POST['Contact'];

       $name_pattern='/^[a-zA-Z ]*$/';
       $password_pattern='/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/';
        $city_pattern='/^[a-zA-Z ]*$/';
        $Contact_pattern='/^[0-9]{10}+$/';
       
       
           if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              $_SESSION['error']= "Invalid email format"; 
              header("Location:signup.php");
              die();
           }
           if (!preg_match($name_pattern, $name)) {
             $_SESSION['error'] = "Invalid name";
             header("Location:signup.php"); 
              die();
           }
         if (!preg_match($password_pattern, $password)) {
              $_SESSION['error'] = "Invalid password";
              header("Location:signup.php"); 
              die();
           }
          if (!preg_match($city_pattern, $city)) {
               $_SESSION['error'] = "Invalid city";
               header("Location:signup.php"); 
              die();
           }
          if (!preg_match($Contact_pattern, $Contact)) {
               $_SESSION['error'] = "Invalid mobile number";

               header("Location:signup.php"); 
              die();
           }
       
       $email=mysqli_real_escape_string($conn,$email);
       $name=mysqli_real_escape_string($conn,$name);
       $password=md5(mysqli_real_escape_string($conn,$password));
       $city=mysqli_real_escape_string($conn,$city);
       $Contact=mysqli_real_escape_string($conn,$Contact);
       $sql="select id from user where email='$email'";
       $fire=$conn->query($sql) or die($conn->error);

       if ($fire->num_rows>0) {
          $_SESSION['error']="email already exist";
          header("Location:signup.php");

       } 
       else{
           $sql="insert into user(name, email, password, city, mobile, address)VALUES('$name','$email','$password','$city','$Contact','$address')";
           $fire=$conn->query($sql) or die ($conn->error);
           if ($fire==true) {
              $_SESSION['error']="account created successfully";
              header("Location:signup.php");
           }
        }
      

}
  	 
 ?>