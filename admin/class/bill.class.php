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
		$sql ="insert into bill(user_id, date)values('$this->user_id', '$this->date')";
		return $this->insert($sql);
	}

	public function updatebill()
 	{
	 	$sql = "update bill set user_id = '$this->user_id', date = '$this->date' where bill_id='$this->bill_id'";
	 	return $this->update($sql);
	}
	
	public function deletebill()
 	{
 		$sql = "delete from bill where bill_id= '$this->bill_id' ";
 		return $this->delete($sql);
 	}
} 
?>