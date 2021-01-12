<?php
 class user_history extends common{
 	public $history_id,$user_id,$food_id,$price,$order_date;
 	
 	public function selectuserhistory_byid()
 	{
 		$sql = "select * from user_history where user_id = '$this->user_id' ";
 		return $this->select($sql);
	}
	
	public function insertuser_history()
	{
		$sql = "insert into user_history(user_id,food_id,price,order_date)values('$this->user_id','$this->food_id','$this->price','$this->order_date') ";
		return $this->insert($sql);
   	}
	   
	public function deleteuser_history()
	{
		$sql = "delete from user_history where user_id='$this->user_id' ";
		return $this->delete($sql);
	}
	 
}
?>


