<?php include "../header.php"; ?>
<?php 
	$id=$_POST['id'];
	$qty=$_POST['qty'];
	$cart->update_item($id,$qty);
	$location='/phpProject/view/cart.php';
	header("Location: $location");
	exit;
?>