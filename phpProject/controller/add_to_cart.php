<?php session_start(); include "cart.php";include "../locations.php"; include "$db_conn_loc";?>
<?php
if(!empty($_POST)){	
	$username="maintenance";
	$password="040700";
	//UPDATED CONNECTION USING PDO
	$database= new db($username,$password,'test');
	$cart=new cart();
	$cart->add_item($_POST['product_id'],$_POST['quantity']);
	$cart->subtotal_item($_POST['product_id'],$database);
}
?>