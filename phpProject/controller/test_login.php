<?php session_start(); include "cart.php";include "../locations.php"; include "$db_conn_loc";?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<form action="test_login.php" method="post">
	Item_ID:<br>
	<input type="number" name="Item_ID" required><br>
	qty:<br>
	<input type="number" name="qty" required><br>
	<input type="submit" value="Submit">
</form>
<?php
if(!empty($_POST)){
	$database= new db("maintenance","040700",'test');	
	$test_cart=new cart();
	//$test_cart->add_item($_POST['Item_ID'],$_POST['qty']);
	//$test_cart->subtotal_item($_POST['Item_ID'],$database);
	$test_cart->total();
	$cart=$test_cart->get_items($database);
	$html = "<table>";
	$html .= "<tr>";
	$html .="<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>";
	$html .="</tr>";
	$y=count($cart["product_name"]);
	for($x=0;$x<$y;$x++){
		$html .= "<tr>";
		$html .= "<td>". $cart["product_name"][$x] . "</td>";
		$html .= "<td>". $cart["item_qty"][$x]."</td>";
		$html .="<td>".$cart["item_sub"][$x]."</td>";
		$html .= "</tr>";
	}
	$html.="<tr>";
	$html.="<td> Total</td>";
	$html.="<td> </td>";
	$html.="<td>".$_SESSION['cart']['total']."</td></tr>";
	
	echo $html;
}
?>