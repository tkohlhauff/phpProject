<?php include 'header.php'; ?>
<div class="container-fluid">
  <h1 class="center">My Account Info</h1>

  <ul class="nav nav-tabs">
    <li  onclick="openCity(event, 'myAccount')" id="defaultOpen" class="tablinks"><a href="#">My Account</a></li>
    <li onclick="openCity(event, 'setting')" class="tablinks"><a href="#">Setting</a></li>
    <li onclick="openCity(event, 'order')" class="tablinks"><a href="#">View Order</a></li>
  </ul>


<div id="myAccount" class="tabcontent">

    <form action="#" method="post">
      <h2 class="center">Change Info</h2>
          <label for="f_name">First Name:</label>
          <input type="text" class="form-control" id="f_name" placeholder="First Name" name="f_name"><br>
          <label for="l_name">Last Name:</label>
          <input type="text" class="form-control" id="l_name" placeholder="Last Name" name="l_name"><br>
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

          <br>
          <input class="btn" type="submit" name="Submit" value="Submit">
    </form>

   </div>

<div id="setting" class="tabcontent">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <form action="#" method="post">
      <h2>Change Password</h2>
          <label for="pwd">Current Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><br>
          <label for="pwd">New Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><br>
          <label for="pwd">Confirn New Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          <br>
          <input class="btn" type="submit" name="Submit" value="Submit">
    </form>
    <hr>
    <form>
        <center>
          <label>Delete Account</label><br>
          <input class="btn btn-danger" type="submit" name="Submit" value="Delete">
        </center>
    </form>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div> 
</div>

<div id="order" class="tabcontent">
<br><br>
  <table class="table table-striped" style="width: 100%">
    <thead>
      <tr>
        <th>Invoice #</th>
        <th>Date</th>
        <th>Custumer Name</th>
        <th>Order Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>12/12/2016</td>
        <td>john</td>
        <td>$200.00</td>
        <td><button class="btn btn-info">Veiw Invoice</button></td>
      </tr>
      <tr>
        <td>001</td>
        <td>12/12/2016</td>
        <td>john</td>
        <td>$200.00</td>
        <td><button class="btn btn-info">Veiw Invoice</button></td>
      </tr>
      <tr>
        <td>001</td>
        <td>12/12/2016</td>
        <td>john</td>
        <td>$200.00</td>
        <td><button class="btn btn-info">Veiw Invoice</button></td>
      </tr>
    </tbody>
  </table>
</div>


     

 <!--  <div class="row">
    <div class="col-sm-6">
    <form action="#" method="post">
      <h2>Change Password</h2>
          <label for="pwd">Current Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><br>
          <label for="pwd">New Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><br>s
          <label for="pwd">Confirn New Password *</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          <br>
          <input class="btn" type="submit" name="Submit" value="Submit">
    </form>
    </div>
    <div class="col-sm-6">
      
    </div>
  </div> -->
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php include 'footer.php'; ?>