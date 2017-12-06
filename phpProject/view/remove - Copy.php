<?php 
	session_start();
	include "../controller/cart.php";
	$id=$_GET['id'];
	$test_cart=new cart();
	$test_cart->remove_item($id);
	$location='/phpProject/view/cart.php';
	header("Location: $location");
	exit;
	
?>