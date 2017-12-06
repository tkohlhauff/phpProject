<?php 
class cart
{
	
	public function __construct()
	{
		if (!isset($_SESSION['cart']) ) {
			$_SESSION['cart'] = array();
		}
	}
	public function add_item($item_id,$qty)
	{
		$_SESSION['cart'][$item_id]=round($qty,0);
	}
	public function update_item($item_id,$qty)
	{
		$_SESSION['cart'][$item_id]=round($qty,0);
	}
	public function remove_item($item_id)
	{
		if(isset($_SESSION['cart'][$item_id])){
			unset($_SESSION['cart'][$item_id]);
		}
	}
	public function empty_cart()
	{
		if(isset($_SESSION['cart']))
			unset($_SESSION['cart']);
	}
}
?>





















