<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
   require "includes/common.php";  ?>
  
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
       <div class="session-msg">
         <?php if (isset($_SESSION['cart-msg'])) {
             echo "<h4>".$_SESSION['cart-msg']."</h4>";
             unset($_SESSION['cart-msg']);
         } ?>
       </div>
      <table class="table table-bordered">
           <thead>
             <tr>
               <th>Item Number</th>
               <th>Item Name</th>
               <th>Price</th>
               <th>Action</th>
             </tr>
             <tbody>
<?php $sum='';
      $no=0;
      $id=$_SESSION['id'];
$sql="select  cart_item.id as cartpk,product_id,status,name,price,image,category from cart_item inner join product on cart_item.product_id=product.id where cart_item.user_id='$id' and cart_item.status='added'";
$fi=$conn->query($sql) or die($conn->error);
if ($fi->num_rows>0) {
  while ($row=$fi->fetch_assoc()) {
      $sum+=$row['price'];
      $no++;
?>
               <tr>
                 <td><?php echo $no; ?></td>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['price']; ?></td>
                 <td>
            <a class="btn btn-danger"  href="remove_cart.php?item_id=<?php echo $row['product_id'];?>">Remove from cart</a>  
                     <a href="success.php?order_id=<?php echo $row['product_id']; ?>" class="btn btn-warning">place order</a>
                 </td>
               </tr>
<?php } } ?>
               <tr>
                 <td>Total -<?php echo $no;?>items </td>
                 <td></td>
                 <td><?php echo $sum; ?></td>
                 <td>
                <a href="success.php?order_all=<?php echo $_SESSION['id']; ?>">
                 <button  type="button" class="btn btn-primary btn-block">place All Order </button> 
                   
                </a>
                 </td>

               </tr>
               

             </tbody>
           </thead>
      </table>
    </div>
  </div>
</div>

  <?php include "includes/footer.php" ?>
  </body>
  </html>


