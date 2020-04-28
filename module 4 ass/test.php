<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
  session_start();
  $_SESSION['test']="var is set";
   
   
   if(session_status() === PHP_SESSION_NONE) session_start();
   $v="hi item";
 ?>

 <form>
 	<input type="text"  name="jhdw"   title="wrong format">
 </form>
 <a href="includes/check-if-added.php?item=<?php echo $v; ?>">add to cart</a>
</body>
</html>