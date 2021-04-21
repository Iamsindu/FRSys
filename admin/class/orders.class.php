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
		$sql ="insert into orders(rest_id, user_id, quantity, total_price, order_date)values('$this->rest_id', '$this->food_id', '$this->quantity', '$this->total_price', '$this->order_date')";
		return $this->insert($sql);
	}
	public function count()
	{
		$sql= "select COUNT(*) as count from orders ";
		return $this->select($sql);
	}
} 
?>