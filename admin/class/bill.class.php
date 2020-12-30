<?php 
class bill extends common
{
	public $bill_id, $user_id, $date;
	public function selectbill()
	{
		$sql="select * from bill ";
		return $this->select($sql);
	}
	public function insertbill()
	{
		$sql ="insert into bill(bill_id, user_id, date)values('$this->bill_id', '$this->user_id', '$this->date')";
		return $this->insert($sql);
	}
} 
?>