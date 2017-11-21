<?php include '../header.php';  include "../controller/cart.php";include "$db_conn_loc";
$test_cart=new cart();
$username="maintenance";
$password="040700";
//UPDATED CONNECTION USING PDO
$database= new db($username,$password,'test');
if(!empty($_SESSION['cart']['item'])){
$cart=$test_cart->get_items($database);
$test_cart->total();?>

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
		  <?php
			$y=count($cart["product_name"]);
		  for($x=0;$x<$y;$x++){ ?>
		  <?php $query = "SELECT product_id FROM product WHERE product_name= ? ";
		  $result=$database->select($query,[$cart["product_name"][$x]]);?>
           <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="images/bullet1.jpg" alt="" class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin"><?php echo $cart["product_name"][$x];?></h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>

              <td data-th="Price"><?php $price=$cart["item_sub"][$x]/$cart["item_qty"][$x]; echo $price;?></td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value=<?php echo $cart["item_qty"][$x]; ?> min="1">
              </td>
              <td data-th="Subtotal" class="text-center"><?php echo $cart["item_sub"][$x];?></td>
              <td class="actions" data-th="">
                <button type="button" class="btn btn-danger" >
                  <span class="glyphicon glyphicon-remove"></span>REMOVE
                </button>               
              </td>
            </tr>
          </tbody>
		  <?php } 
		  }?>
          <!-- display total -->
          <tfoot>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><h3>Total</h3></td>
              <td class="text-right"><h3><strong><?php echo $_SESSION['cart']['total']; ?></strong></h3></td>
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