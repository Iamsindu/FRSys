<?php 
class orders extends common
{
	public $order_id, $rest_id, $user_id, $quantity, $total_price, $order_date;
	public function selectorder()
	{
		$sql="select * from orders where rest_id = '$this->rest_id' ";
		return $this->select($sql);
	}
	public function insertorder($rid,$userid)
	{
		$sql ="insert into ord(r_id, user_id)values('$rid', '$userid', CURRENT_DATE)";
		return $this->insert($sql);
	}
	public function count()
	{
		$sql= "select COUNT(*) as count from orders ";
		return $this->select($sql);
	}
} 
?>