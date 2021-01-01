<?php
 class users extends common{
 	public $user_id,$username,$name,$phone_no,$password,$salt,$email_id,$date,$status,$photo_id,$location_id;

 	public function selectusers()
 	{
 		$sql = "select * from users";
 		$data= $this->select($sql);
 		return $data;
 	}
 	public function selectusers_byusername()
	{
		$sql="select * from users where username='$this->username'";
		return $this->select($sql);
	}
 		public function selectusers_byid()
 	{
 		$sql = "select * from users where user_id = '$this->user_id' ";
 		return $this->select($sql);
 	}
 	public function deleteuser()
 	{
 		$sql = "delete from users where user_id = '$this->user_id' ";
 		return $this->delete($sql);
 	}
 	public function insertuser()
 	{

 		$sql = "insert into users(username,name,phone_no,password,salt,email_id,date,status,photo_id,location_id)values('$this->username','$this->name','$this->phone_no','$this->password','$this->salt','$this->email_id','$this->date','$this->status','$this->photo_id','$this->location_id') ";
 		
 		return $this->insert($sql);
 	}
}
?>


