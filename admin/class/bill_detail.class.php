<?php 
class bill_detail extends common
{
	public $bdtl_id, $bill_id, $rest_id, $food_id, $quantity, $price, $date;
	public function selectbill_detail()
	{
		$sql="select * from bill_dtl ";
		return $this->select($sql);
	}
	public function insertbill_detail()
	{
		$sql ="insert into bill_dtl(bill_id, rest_id, food_id, quantity, price, date)values('$this->bill_id', '$this->rest_id', '$this->food_id', '$this->quantity', '$this->price', '$this->date')";
		return $this->insert($sql);
	}
} 
?>