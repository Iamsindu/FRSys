<?php 
class orders extends common
{
	public $order_id, $rest_id, $user_id, $quantity, $total_price, $order_date;
	public function selectorder()
	{
		$sql="select * from orders where rest_id = '$this->rest_id' ";
		return $this->select($sql);
	}
	public function insertorder()
	{
		$sql ="insert into ord(r_id, user_id,total_price,ord_date)values('$this->r_id', '$this->user_id','$this->total_price',CURRENT_DATE)";
		return $this->insert($sql);
	}
	public function count()
	{
		$sql= "select COUNT(*) as count from orders ";
		return $this->select($sql);
	}
	public function select_cart()
	{
		$sql ="select * from carts where user_id='$this->user_id' and date= CURRENT_DATE";
		return $this->select($sql);
	}
	public function select_rest()
	{
		$sql ="select DISTINCT r_id from carts where user_id='$this->user_id' and date= CURRENT_DATE";
		return $this->select($sql);
	}
	public function select_carts()
	{
		$sql= "select * from carts where user_id='$this->user_id' and r_id='$this->r_id' and date=CURRENT_DATE";
		return $this->select($sql);
	}
} 
?>