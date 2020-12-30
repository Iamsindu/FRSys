<?php 
class resturant extends common
{
	public $rest_id, $rest_name, $phone_no, $password, $email_id, $date, $status, $open_time, $close_time, $delivery, $photo_id, $sim_id ;
	public function insertresturant()
	{
		$sql ="insert into resturant(rest_id,rest_name,phone_no,email_id,date,status,delivery)
						=values('$this->rest_id','$this->rest_name','$this->phone_no','$this->email_id','$this->date', $this->status,$this->delivery)";
		return $this->insert($sql);
	}
	public function selectresturant()
	{
		$sql= "select * from resturant";
		return $this->select($sql);
	}
	public function selectresturant_name()
	{
		$sql= "select rest_id rest_name from resturant";
		return $this->select($sql);
	}
} 
?>