<?php include '../header.php'; ?>

<div id="cart">
<br><br>
  <div><h1 class="center">Shopping Cart</h1></div><br><br>
  <div class="cart-item">
    <form action="#" method="post"> 
      <table id="cart" class="table  table-condensed" style="width: 80%; margin-left: 10%">
            <thead>
            <tr>
              <th style="width:50%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="images/bullet1.jpg" alt="" class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product 1</h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>

              <td data-th="Price">$1.99</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1" min="1">
              </td>
              <td data-th="Subtotal" class="text-center">1.99</td>
              <td class="actions" data-th="">
                <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span> Remove
                </button></                
              </td>
            </tr>
          </tbody>

           <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="images/bullet1.jpg" alt="" class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product 1</h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>

              <td data-th="Price">$1.99</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1" min="1">
              </td>
              <td data-th="Subtotal" class="text-center">1.99</td>
              <td class="actions" data-th="">
                <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span> Remove
                </button></                
              </td>
            </tr>
          </tbody>

          <!-- display total -->
          <tfoot>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><h3>Total</h3></td>
              <td class="text-right"><h3><strong>$3.98</strong></h3></td>
          </tr>
          <br><br>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>
              <button type="button" class="btn btn-default">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
              </button></td>
              <td>
              <a href="checkout.php"><button type="button" class="btn btn-success">
                  Checkout <span class="glyphicon glyphicon-play"></span>
              </button></a></td>
          </tr>
            
          </tfoot>
        </table>

    </form>
  </div>
</div>

<?php include 'footer.php'; ?>