<?php include '../header.php'; include "$db_conn_loc";
$username="maintenance";
$password="040700";
//UPDATED CONNECTION USING PDO
$database= new db($username,$password,'test');
if(!empty($_SESSION['cart'])){
?>

<div id="cart">
<br><br>
  <div><h1 class="center">Shopping Cart</h1></div><br><br>
  <div class="cart-item">
      <table id="cart" class="table  table-condensed" style="width: 80%; margin-left: 10%">
            <thead>
            <tr>
              <th style="width:40%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
			  <th style="width:10%"></th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
		  <?php
		  foreach($_SESSION['cart'] as $item_id=>$qty){
			$query="SELECT product_name FROM product WHERE product_id=?"; 
			$product=$database->select($query,$id=[$item_id]);
			$query="SELECT price FROM product WHERE product_id=?"; 
			$price=$database->select($query,$id=[$item_id]);
			$query="SELECT img FROM product WHERE product_id=?"; 
			$img=$database->select($query,$id=[$item_id]);?>
           <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src=<?php echo $images_loc.$img[0]["img"];?> alt="" class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin"><?php echo $product[0]["product_name"];?></h4>
                  </div>
                </div>
              </td>

              <td data-th="Price"><?php echo "$".$price[0]['price'];?></td>
			  <form method="post" action="update.php">
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" name="qty" value=<?php echo $qty; ?> min="1">
				<input type="hidden" name="id" value=<?php echo $item_id;?>>
				<td>
				 <button type="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-update"></span>UPDATE
                </button>
				</td>
              </td>
			  </form>
              <td data-th="Subtotal" class="text-center"><?php echo "$".$price[0]['price']*$qty;?></td>
              <td class="actions" data-th="">
			   <a href='remove.php?id=<?php echo $item_id ?>'>
                <button type="button" class="btn btn-danger" >
                 <span class="glyphicon glyphicon-remove"></span>REMOVE
                </button> 
				</a>
              </td>
            </tr>
          </tbody>
		  <?php } ?>
          <!-- display total -->
          <tfoot>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><h3>Total</h3></td>
              <td class="text-right"><h3><strong><?php $total=0;
					foreach($_SESSION['cart'] as $item_id=>$qty){
						$query="SELECT price FROM product WHERE product_id=?";
						$price=$database->select($query,$id=[$item_id]);
						$total+=$_SESSION['cart'][$item_id]*$price[0]["price"];
					}
					echo "$".$total; 
	}?></strong></h3></td>
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
			  <?php if(!isset($_SESSION['user'])){ ?>
			  <a href="javascript:alert('Please Login or Sign Up before checking out')"><button type="button" class="btn btn-success">
                  Checkout <span class="glyphicon glyphicon-play"></span>
              </button></a></td>
			  <?php } else{ ?>
              <a href="checkout.php"><button type="button" class="btn btn-success">
                  Checkout <span class="glyphicon glyphicon-play"></span>
              </button></a></td>
			  <?php } ?>
			  
          </tr>
            
          </tfoot>
        </table>

  </div>
</div>

			  <?php include 'footer.php'; ?>