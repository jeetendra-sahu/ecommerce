 <?php 
if(session_status() === PHP_SESSION_NONE) session_start();
 
?>
<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

       <div class="navbar-header">
       <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
        <a href="index.php" class="navbar-brand">Lifestyle Store</a>
       </div>
       <div class="collapse navbar-collapse" id="mynavbar">

        <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['email'])) {  ?> 
           <li>
            <a href="#">welcome : <?php echo $_SESSION['email']; ?></a>
            </li>
          <li><a href="cart.php"> <div class="glyphicon glyphicon-shopping-cart"></div>Cart</a> </li>

          <li><a href="setting.php"> <i class="glyphicon glyphicon-user"></i>Setting</a> </li>
             
             <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span>Logout </a> </li>
            <?php } else {   ?>

            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </li>
             <li>  <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
             </li>
             <?php } ?>
        </ul>
       </div>
    </div>
  </nav>
  </header>
