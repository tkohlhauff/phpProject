<?php include 'header.php' ?>


<div class=" col-md-12 product-list">

<div class="row">
  <div class=" side-menu col-md-2">
    <!--   <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="265">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
 -->  
    <div class="list-group">
    <a href="product.php" class="list-group-item">All Products</a>
    <a href="camera.php" class="list-group-item">Camera</a>
    <a href="dvr.php" class="list-group-item">DVR</a>
    <a href="connector.php" class="list-group-item">Connector</a>
    <a href="powersupply.php" class="list-group-item">Power Supply</a>
    <a href="wire.php" class="list-group-item">Wire</a>
  </div>
  </div>
  <div class="product-info col-md-10 slideanim">
        <br><br>
       

        <div id="product-all">
          <h1>All products</h1>
          <div class="card ">
          <img src="images/product1.jpg" style="width: 100%; height: 300px;">
          <div>
          <br>
            <button type="button" class="btn btn-default btn-block">View more</button>
            <button type="button" class="btn btn-info btn-block">Add to cart</button>
          </div>
          </div>

          <div class="card slideanim">
          <img src="images/product2.jpg" style="width: 100%; height: 300px;">
          <div>
          <br>
            <button type="button" class="btn btn-default btn-block">View more</button>
            <button type="button" class="btn btn-info btn-block">Add to cart</button>
          </div>
          </div>

          <div class="card slideanim">
          <img src="images/product3.jpg" style="width: 100%; height: 300px;">
          <div>
          <br>
            <button type="button" class="btn btn-default btn-block">View more</button>
            <button type="button" class="btn btn-info btn-block">Add to cart</button>
          </div>
          </div>
        </div>
        <br><br>


  </div>
</div>
</div>
<?php include 'footer.php' ?>

