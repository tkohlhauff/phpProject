<?php include 'header.php'; ?>
<div  class="container-fluid">
  <h1 class="text-center">CONTACT</h1>
  <hr>

  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker" style="color:blue"></span>1401 Texas Ave N, Bryan TX</p>
      <p><span class="glyphicon glyphicon-phone" style="color:blue"></span> 9029232286</p>
      <p><span class="glyphicon glyphicon-envelope" style="color:blue"></span> is.24x7@gmail.com</p>     
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">

      <form method="post">
      
        <div class="col-sm-12 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <br>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <br>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="number" name="phone number" placeholder="Phone-number" type="tel" required>
        </div>
        <br>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success btn-block pull-right" type="submit">Send</button>
        </div>
        
        <!-- <div class="form-group slideanim">
        <label for="name">Your Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Your Name"
        />
        </div>
        <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Your Email"
         />
        </div>
        <div class="form-group">
        <label for="comment">Your Comment:</label>
        <textarea class="form-control" name="comment">
        </textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"
        /> -->
        </form>
      </div>

    </div>
  </div>
<br><br><br>
  <div class="map-content col-sm-12">
    <div class="frame ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.1318324200142!2d-96.37112898520168!3d30.65841599626219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864681833ef448dd%3A0x3ad5b376fb22626a!2s1401+Texas+Ave%2C+Bryan%2C+TX+77802!5e0!3m2!1sen!2sus!4v1505705215786" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

