<?php if(session_status() === PHP_SESSION_NONE) session_start();
 require "includes/common.php"; $m='';?>
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
<?php  require "includes/header.php";  ?>

  <br><br><br><br><br>

<div class="container" id="content">
<div class="jumbotron">
 
  <h1>Welcome to our Lifestyle Store!</h1>
  <p>We habe the best camras,watches and shirt for you. no need to hunt around,we have all in one place. </p>
</div>
<br>
<div>
  <?php if (isset($_SESSION['cart_msg'])) {
       echo "<h4>".$_SESSION['cart_msg']."</h4>";
        unset($_SESSION['cart_msg']);
        } ?>
</div>
  <?php  
      $sql="select * from product";
      $f = $conn->query($sql) or die($conn->error);
      while($row=$f->fetch_assoc()) { ?>
<div class="row">
<!-- item 1 -->
            <div class="col-sm-3 ">
              <div class="thumbnail">
                  <img src="image/<?php echo $row['image']; ?>" alt="camras">
                  <div class="caption text-center">
                    <h3>Cannon EOS</h3>
                    <p>Price:Rs.36000.00</p>
<?php
  if (isset($_SESSION['id'])) {

      $item_id=$row['id'];
      $user_id=$_SESSION['id'];
      $sql="select id from cart_item where user_id='$user_id' and product_id='$item_id' and status='added'"; 
       $fire=$conn->query($sql) or die($conn->error);
      if ($fire->num_rows>0) {
        $m=true;      
      }
      else
      {
        $m=false;
      }
    }
            ?>
                    
<p>
<?php if ($m==false) { ?>
 <?php if (isset($_SESSION['id'])) { ?>
<a href="includes/check-if-added.php?item=<?php echo $row['id']; ?>" class="btn btn-primary btn-block" role="button">Add to cart</a>     
<?php } else { ?>
<a href="login.php" class="btn btn-primary btn-block" role="button">Add to cart</a> 
<?php } } else { ?>
<a href="#" class="btn btn-danger btn-block" role="button" title="already in your cart" disabled>Buy Now</a>
<?php } ?>
</p>  
               </div>
               </div>
            </div>
<!-- item 2 -->
          <?php   $row=$f->fetch_assoc(); ?>
            <div class="col-sm-3 ">
                   <div class="thumbnail">
                <img src="image/<?php echo $row['image']; ?>" alt="camras">
                  <div class="caption text-center">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Price:Rs.<?php echo $row['price']; ?>.00</p>

<?php
  if (isset($_SESSION['id'])) {

      $item_id=$row['id'];
      $user_id=$_SESSION['id'];
      $sql="select id from cart_item where user_id='$user_id' and product_id='$item_id' and status='added'"; 
       $fire=$conn->query($sql) or die($conn->error);
      if ($fire->num_rows>0) {
        $m=true;      
      }
      else
      {
        $m=false;
      }
    }
            ?>
                    
<p>
<?php if ($m==false) { ?>
 <?php if (isset($_SESSION['id'])) { ?>
<a href="includes/check-if-added.php?item=<?php echo $row['id']; ?>" class="btn btn-primary btn-block" role="button">Add to cart</a>     
<?php } else { ?>
<a href="login.php" class="btn btn-primary btn-block" role="button">Add to cart</a> 
<?php } } else { ?>
<a href="#" class="btn btn-danger btn-block" role="button" title="already in your cart" disabled>Buy Now</a>
<?php } ?>
</p> 
               </div> 
            </div>
            </div>
            <!-- item 3 -->
            <?php   $row=$f->fetch_assoc(); ?>
            <div class="col-sm-3 ">
                   <div class="thumbnail">
                  <img src="image/<?php echo $row['image']; ?>" alt="camras">
                  <div class="caption text-center">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Price:Rs.<?php echo $row['price']; ?>.00</p>
                    <?php
  if (isset($_SESSION['id'])) {

      $item_id=$row['id'];
      $user_id=$_SESSION['id'];
      $sql="select id from cart_item where user_id='$user_id' and product_id='$item_id' and status='added'"; 
       $fire=$conn->query($sql) or die($conn->error);
      if ($fire->num_rows>0) {
        $m=true;      
      }
      else
      {
        $m=false;
      }
    }
            ?>
                    
<p>
<?php if ($m==false) { ?>
 <?php if (isset($_SESSION['id'])) { ?>
<a href="includes/check-if-added.php?item=<?php echo $row['id']; ?>" class="btn btn-primary btn-block" role="button">Add to cart</a>     
<?php } else { ?>
<a href="login.php" class="btn btn-primary btn-block" role="button">Add to cart</a> 
<?php } } else { ?>
<a href="#" class="btn btn-danger btn-block" role="button" title="already in your cart" disabled>Buy Now</a>
<?php } ?>
</p> 
               </div> 
            </div>
            </div>
            <!-- item 4 -->
            <?php   $row=$f->fetch_assoc(); ?>
            <div class="col-sm-3 ">
                   <div class="thumbnail">
                  <img src="image/<?php echo $row['image']; ?>" alt="camras">
                  <div class="caption text-center">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Price:Rs.<?php echo $row['price']; ?>.00</p>
                    <?php
  if (isset($_SESSION['id'])) {

      $item_id=$row['id'];
      $user_id=$_SESSION['id'];
      $sql="select id from cart_item where user_id='$user_id' and product_id='$item_id' and status='added'"; 
       $fire=$conn->query($sql) or die($conn->error);
      if ($fire->num_rows>0) {
        $m=true;      
      }
      else
      {
        $m=false;
      }
    }
            ?>
                    
<p>
<?php if ($m==false) { ?>
 <?php if (isset($_SESSION['id'])) { ?>
<a href="includes/check-if-added.php?item=<?php echo $row['id']; ?>" class="btn btn-primary btn-block" role="button">Add to cart</a>     
<?php } else { ?>
<a href="login.php" class="btn btn-primary btn-block" role="button">Add to cart</a> 
<?php } } else { ?>
<a href="#" class="btn btn-danger btn-block" role="button" title="already in your cart" disabled>Buy Now</a>
<?php } ?>
</p> 
               </div> 
            </div>
            </div>
  </div> 
<?php }   ?>
</div>
<br><br><br>
 

</body>
 <?php include "includes/footer.php" ?>
</html>