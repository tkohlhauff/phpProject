<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid topHead" >
 <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><img src="../images/logo2.png"></div>
    <div class="col-sm-4"></div>
  </div>
</div>


  <div class="container menu navbar-default" data-spy="affix" data-offset-top="207">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../">HOME</a></li>
        <li><a href="product.php">PRODUCTS</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
 		<?php if(isset($_SESSION['user'])) {
				$user=$_SESSION['user'];
				echo '<li><a href="myaccount.php"><span class="glyphicon glyphicon-user">Account</span></a></li>';
				echo '<li><a href="../log_out.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>;';
			}
			  else {
				echo '<li><a href="user-register.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>';
				echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>';
			  }?>
          
      </ul>
    </div>

  </div>

