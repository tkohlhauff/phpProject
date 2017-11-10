<?php include '../header.php' ?>


<div class=" col-md-12 product-list">

<div class="row">
  <div class=" side-menu col-md-2">
  
   <!--  <div class="list-group">
    <a href="product.php" class="list-group-item">All Products</a>
    <a href="camera.php" class="list-group-item">Camera</a>
    <a href="dvr.php" class="list-group-item">DVR</a>
    <a href="connector.php" class="list-group-item">Connector</a>
    <a href="powersupply.php" class="list-group-item">Power Supply</a>
    <a href="wire.php" class="list-group-item">Wire</a>
  </div> -->
  </div>
  <div class="product-info col-md-8 slideanim">
        <br><br>
       

        <div id="wire">
          <h1>Wires</h1>
          <div class="card ">
          <img src="images/wire1.jpg" style="width: 100%; height: 300px;">
          <div>
          <br><br><br><br>
            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal_wire1">View more</button>
              <!-- Modal -->
                <div class="modal fade" id="myModal_wire1" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Bulllet Camera</h4>
                      </div>

                      <div class="modal-body">
                      <div class="row">
                        <div class="col-md-8"><img src="images/wire1.jpg" style="width: 60%; height: 250px;">
                        </div>
                        <div class="col-md-4">
                        <h3>Bullet Camera</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus lectus id risus porta mattis. Vivamus augue magna, imperdiet quis ligula sed, condimentum mollis urna. Praesent lobortis felis at nulla malesuada, eget interdum metus sagittis.</p><br>
                        <h3>$23.00</h3>
                        <form>
                          <label>QTY:</label>
                          <input type="number" name="numer"><br><br>
                          <input class="btn btn-warning btn-block" type="submit" name="submit" value="Add to Cart">
                        </form>

                        </div>
                      </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          </div>

          <div class="card ">
          <img src="images/wire2.jpg" style="width: 100%; height: 300px;">
          <div>
          <br><br><br><br>
            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal_wire2">View more</button>
              <!-- Modal -->
                <div class="modal fade" id="myModal_wire2" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Bulllet Camera</h4>
                      </div>

                      <div class="modal-body">
                      <div class="row">
                        <div class="col-md-8"><img src="images/wire2.jpg" style="width: 60%; height: 250px;">
                        </div>
                        <div class="col-md-4">
                        <h3>Bullet Camera</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus lectus id risus porta mattis. Vivamus augue magna, imperdiet quis ligula sed, condimentum mollis urna. Praesent lobortis felis at nulla malesuada, eget interdum metus sagittis.</p><br>
                        <h3>$23.00</h3>
                        <form>
                          <label>QTY:</label>
                          <input type="number" name="numer"><br><br>
                          <input class="btn btn-warning btn-block" type="submit" name="submit" value="Add to Cart">
                        </form>

                        </div>
                      </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
          </div>
        </div>
        <br><br>


  </div>
  <div class="col-md-2"></div>
</div>
</div>
<?php include 'footer.php' ?>

