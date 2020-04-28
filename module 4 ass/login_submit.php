<?php 
    require "includes/common.php";
       session_start();
       
    if (isset($_POST['submit'])) {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']));
    $sql="select id,email from user where email='$email' and password='$password'";
    $fire=$conn->query($sql) or die($conn->error);
     if($fire->num_rows>0)
     {
     	   $_SESSION['email']=$email;
           $row=$fire->fetch_assoc();
           $_SESSION['id']=$row['id'];
            
        header("Location:product.php");
     	
     }
     else
     {
        $_SESSION['error']="there is no account associate with this email or password";
              header("Location:login.php");
     }
    
         
    }

 ?>