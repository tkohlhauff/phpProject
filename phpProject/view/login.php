<?php  include '../header.php'; include "$db_conn_loc";?>
<?php
		if(!empty($_POST)){
			$user_email=[$_POST['email']];
			$username="maintenance";
			$password="040700";
			//UPDATED CONNECTION USING PDO
			$database= new db($username,$password,'test');
			$query="SELECT password FROM user WHERE email=?";
			try{
				$result=$database->select($query,$user_email);
				if(md5($_POST['pwd'])==$result[0]["password"]){
					$_SESSION['user']=$user_email;
					$location='/phpProject/';
					header("Location: $location");
					exit;
				}
				else
					echo "<script>alert('There was an error. Please retype your email and password')</script>";
			}
			catch(Exception $e){
				echo "<script>alert('There was an error. Please retype your email and password')</script>";
			}
			
			//OLD CONNECTION USE FOR TESTING ONLY
			/*$database="test";
			$link=mysqli_connect("localhost",$username,$password);
			mysqli_select_db($link,$database) or die( "Unable to select database");
			$user_email=$_POST['email'];
			$query="SELECT password FROM user WHERE email='$user_email'";
			$DB_pass=mysqli_query($link,$query);
			if($DB_pass->num_rows >0)
				$DB_pass=$DB_pass->fetch_assoc();
			if(md5($_POST['pwd'])==$DB_pass['password']){
				$_SESSION['user']=$user_email;
				mysqli_close($link);
				$location='/phpProject/';
				header("Location: $location"); 
				exit;
			}*/
		}
?>
            <br><br><br>
            <h1 class="center">Login</h1>
            <br><br><br>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 login">
                <form action="login.php" method="post">
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
              <div class="col-md-4"></div>
            </div>
            <br><br><br>
     <?php include 'footer.php' ?>