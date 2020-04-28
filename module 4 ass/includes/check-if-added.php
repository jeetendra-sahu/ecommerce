<?php
if(session_status() === PHP_SESSION_NONE) session_start();
     require "common.php"; 

if (isset($_SESSION['id']) && isset($_GET['item'])) {
            $item_id=$_GET['item'];
            $user_id=$_SESSION['id'];
       
       $sql="select id from cart_item where user_id='$user_id' and product_id='$item_id' and status='added'";
       
       $fire=$conn->query($sql) or die($conn->error);
      if ($fire->num_rows>0) {
      	$_SESSION['cart_msg']="This item is already in your cart";
      	 header("Location:../product.php");
      }
     else { 
    $sql="insert into cart_item(user_id,product_id,status) values('$user_id','$item_id','added')";
    $fire=$conn->query($sql) or die($conn->error);
    if ($fire===true) {
    	$_SESSION['cart_msg']="Item has been added to in your cart";
    	header("Location:../product.php");
    }
   }
    
}


 ?>