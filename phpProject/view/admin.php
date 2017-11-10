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
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li><a href="index.php">Visit Website</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
<div class="row">
    <div class="col-sm-2">
    <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Index page setting</a></li>
      <li><a href="#">Product page setting</a></li>
      <li><a href="#">cart setting</a></li>
      <li><a href="#">Contact setting</a></li>
      <li><a href="#">cart setting</a></li>
      <li><a href="#">About page setting</a></li>
    </ul>
    </div>
    <div class="col-sm-10">
      <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" class="form-control" placeholder="Page Title" value="About">
                  </div>
                  <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="editor1" class="form-control"  rows="7"placeholder="Page Body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </textarea>
                  </div>
                  
                  <input type="submit" class="btn btn-default" value="Update">
                </form>
              </div>
              </div>
    </div>
</div>
</body>


</html>
