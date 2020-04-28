<?php
 if(session_status() === PHP_SESSION_NONE) session_start();
  require "includes/common.php";
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
   <?php if (isset($_GET['order_id']) || isset($_GET['order_all'])) {
        if (isset($_GET['order_id'])) {
           $order_id=$_GET['order_id'];
           $user_id=$_SESSION['id'];
           $sql="update cart_item set status='confirmed' where cart_item.user_id='$user_id' and cart_item.product_id='$order_id'";

         }  
         if (isset($_GET['order_all'])) {
           $order_all=$_GET['order_all'];
    $sql="update cart_item set status='confirmed' where cart_item.user_id='$order_all'";
         }
         $fire=$conn->query($sql);
         if ($fire==true) {
            echo "<h3>Your order is confirmed. Thank you for shopping
with us <a href='product.php'>Click here</a>  to purchase any other item </h3>";
          } 
          else
          {
            echo "something went wrong ";
          }

   } ?>

    </div>
  </div>
</div>
 <?php include "includes/footer.php" ?>
  </body>
  </html>
