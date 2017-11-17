
<?php include '../header.php'; include "$db_conn_loc";?>
<?php 	
		if(!empty($_POST)){
			$not_in_tbl=TRUE;
			$f_name=$_POST['f_name'];
			$l_name=$_POST['l_name'];
			if($_POST['pwd']==$_POST['re_pwd']){
				$username="maintenance";
				$password="040700";
				$db_name="test";
				$user_info=[$_POST['email'],md5($_POST['pwd'])];
				//UPDATED CONNECTION USING PDO
				$database= new db($username,$password,$db_name);
				$select_query="SELECT email FROM user;";
				$result=$database->select($select_query);
				foreach($result as $row){
					if($_POST['email']== $row['email']){
						$not_in_tbl=FALSE;
						break;
					}
					//User email is not in use already !
				}
				if($not_in_tbl){
					$insert_query="INSERT INTO user(email,password) VALUES (:email,:password)";
					$database->insert($insert_query,$user_info);
					$insert_query="INSERT INTO customer(first_name,last_name) VALUES(:fname,:lname)";
					$user_info=[$f_name,$l_name];
					$database->insert($insert_query,$user_info);
					$_SESSION['user']=$_POST['email'];
					header("Location: $myaccount_loc");
					exit;
				}
				else{
					//Throw error saying email in use
				}
					
			}
		}
?>
      <br><br><br>
      <h1 class="center">Sign Up</h1>
      <br><br><br>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 login">
            <form action="user-register.php" method="post">
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
                <div class="form-group">
                <label for="pwd">Re-Password:</label>
                <input type="password" class="form-control" id="re_pwd" placeholder="Enter password" name="re_pwd">
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
      </div>
      <br><br><br>
<?php include 'footer.php' ?>