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
		$_SESSION['cart']['item'][$item_id]=round($qty,0);
	}
	public function update_item($item_id,$qty)
	{
		$_SESSION['cart']['item'][$item_id]=round($qty,0);
	}
	public function remove_item($item_id)
	{
		if(isset($_SESSION['cart']['item'][$item_id])){
			unset($_SESSION['cart']['item'][$item_id]);
		}
	}
	public function empty_cart()
	{
		if(isset($_SESSION['cart']))
			unset($_SESSION['cart']);
	}
	public function subtotal_item($item_id,$db)
	{
		$item=[$item_id];
		$query="SELECT price FROM product WHERE product_id=?";
		$price=$db->select($query,$item);
		$_SESSION['cart']['subtotal'][$item_id]=$_SESSION['cart']['item'][$item_id]*$price[0]['price'];
	}
	public function get_items($db)
	{
		$item_name=array();
		$item_qty=array();
		$item_sub=array();

		foreach($_SESSION['cart']['item'] as $key=>$item){
				$query="SELECT product_name FROM product WHERE product_id=?";
				$product=$db->select($query,$item_id=[$key]);
				$product_name=$product[0]["product_name"];
				array_push($item_name,$product_name);
				array_push($item_qty,$item);
		}
		foreach($_SESSION['cart']['subtotal'] as $key=>$item){
				array_push($item_sub,$item);
		}
		$item_tbl=['product_name'=>$item_name,'item_qty'=>$item_qty,'item_sub'=>$item_sub];
		return $item_tbl;
		
	}
	public function total()
	{	
		$total=0;
		foreach($_SESSION['cart']['subtotal'] as $subtotal){
			$total+=$subtotal;
		}
		$_SESSION['cart']['total']=$total;
	}
}
?>





















