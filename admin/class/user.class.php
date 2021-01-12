<?php
 class users extends common{
 	public $user_id,$username,$name,$phone_no,$password,$salt,$email_id,$status,$photo,$city,$street;
 	public function selectusers()
 	{
 		$sql = "select * from users";
 		return $this->select($sql);
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
	
	public function insertuser()
	{
		$sql = "insert into users(username,name,phone_no,password,salt,email_id,status,photo,city,street)values('$this->username','$this->name','$this->phone_no','$this->password','$this->salt','$this->email_id','$this->status','$this->photo','$this->city','$this->street') ";
		return $this->insert($sql);
   	}
	   
	   
	public function updateuser()
	{
		if(!empty($this->photo))
		{
			$sql = "update users set username='$this->username', name='$this->name', phone_no='$this->phone_no', email_id='$this->email_id', status='$this->status', city='$this->city',street='$this->street',photo = '$this->photo' where user_id='$this->user_id'";
		}
		else{
			$sql = "update users set username='$this->username', name='$this->name', phone_no='$this->phone_no', email_id='$this->email_id', status='$this->status', city='$this->city',street='$this->street' where user_id='$this->user_id'";
		}
		return $this->update($sql);
	}
		
	public function deleteuser()
	{
		$sql = "delete from users where user_id='$this->user_id' ";
		return $this->delete($sql);
	}
	 
}
?>


