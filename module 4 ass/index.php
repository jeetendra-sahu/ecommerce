<?php require 'includes/common.php'; 
  if (isset($_SESSION['email'])) {
    header("location:product.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>

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
 
  <div id="banner_image" style="margin-top: 50px; min-height: 100%;">
    <div class="container">
    <div class="row">
      <div  class=" col-xs-6 col-xs-offset-3" id="banner_content">

        <a href="product.php"><button class="btn btn-danger btn-lg active">Shop Now</button></a>
       </div>
      </div>
    </div>
  </div>
  <?php include "includes/footer.php" ?>
</body>
</html>