
<?php  
include "../locations.php"; include "../controller/cart.php";include "$db_conn_loc";
if(isset($_POST["product_id"]))  
 { 

	$username="maintenance";
	$password="040700";
			//UPDATED CONNECTION USING PDO
	$database= new db($username,$password,'test');
	$cart=new cart();
      // $output = '';  
       // $dbc = mysqli_connect('127.0.0.1', 'root', '', 'php_project') or die("Unable to connect to database.");
    // //$product_id = $_GET['id'];
    // // age = mysqli_fetch_array($result);
    $query = "SELECT * FROM product WHERE product_id=?";
    $result=$database->select($query,[$_POST['product_id']]);
	$output=NULL;
	?>
		<div class="row">
           <div class="col-md-8"><img src=<?php echo "../images/".$result[0]['img'];?>  style="width: 55%; height: 300px;">
           </div>
            <div class="col-md-4">
                <h3><?php echo $result[0]["product_name"]; ?></h3>
                <p><?php echo $result[0]["product_description"]; ?></p><br>
                <h4><?php echo $result[0]["product_category"]; ?></h4>
                <h3> <?php echo $result[0]["price"]; ?></h3>
                <form method="post" action="info_product.php">
					<label>QTY:</label>
					<input type="number" id="qty" name="quantity" value="1" min= "1" max = "20">
					<input type="hidden" name="hidden_name" value=<?php echo $result[0]["product_name"]; ?>>
					<input type="hidden" name="hidden_price" value=<?php echo $result[0]["price"];?>>
					<br><br>
					<input type="submit" name="add_to_cart" id=<?php echo $result[0]["product_id"];?>style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" /> 
                </form>
			</div>
        </div>
     <?php 
	if(!empty($_POST["add_to_cart"])){
	$cart=new cart();
	$cart->add_item($result[0]["product_id"],$_POST['quantity']);
	$cart->subtotal_item($result[0]["product_id"],$database);
	}
 }
 ?>
