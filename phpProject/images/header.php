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
    <div class="col-sm-4"><img src="images/logo2.png"></div>
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
        <li><a href="index.php">HOME</a></li>
    <!--     <li><a href="product.php">PRODUCTS</a></li> -->
        <li class="dropdown">
                        <a href="product.php" data-toggle="dropdown" class="dropdown-toggle">PRODUCTS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="camera.php" class="list-group-item"> Cameras</a></li>
                          <li><a href="dvr.php" class="list-group-item">DVR</a></li>
                          <li><a href="connector.php" class="list-group-item">Connectors</a></li>
                          <li><a href="powersupply.php" class="list-group-item">Power Supply</a></li>
                          <li><a href="wire.php" class="list-group-item">Wires</a></li>
                        
                        </ul>
                    </li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
        <li><a href="myaccount.php"><span class="glyphicon glyphicon-user">Account</span></a></li>
        <li data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Sign Up</h4>
                </div>
                <div class="modal-body">
                  <form action="">
                  <div class="form-group">
                      <label for="f_name">First Name:</label>
                      <input type="text" class="form-control" id="f_name" placeholder="First Name" name="f_name">
                    </div>
                    <div class="form-group">
                      <label for="l_name">Last Name:</label>
                      <input type="text" class="form-control" id="l_name" placeholder="Last Name" name="l_name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
            </div>
        <li data-toggle="modal" data-target="#myModal1"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                <form action="">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>
      </ul>
    </div>

  </div>

