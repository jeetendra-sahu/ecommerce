<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if (!isset($_SESSION['id'])) {
	 header("Location:index.php");
}
require "includes/common.php";
if (isset($_GET['item_id'])) {
     $item_id=$_GET['item_id'];
     $user_id=$_SESSION['id'];
     
$sql="select id from cart_item where user_id='$user_id' and product_id='$item_id'";
   
     $fi=$conn->query($sql) or die($conn->error);
      if($fi->num_rows==0)
      {
          $_SESSION['cart-msg']="not in cart";
          header("Location:cart.php");
      }
      else
      {
            $sql="delete from cart_item where user_id='$user_id' and product_id='$item_id'";
            
            $fi=$conn->query($sql) or die($conn->error);
            if ($fi==true) {
            $_SESSION['cart-msg']="successfully deleted from cart"; 
            header("Location:cart.php");
            }
            else
            {
            	$_SESSION['cart-msg']="somthing went wrong";
            	header("Location:cart.php");
            }
      }
}
 ?>