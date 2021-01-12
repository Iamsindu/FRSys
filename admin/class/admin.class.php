<?php 
class admin extends common
{
	public $admin_id,$username,$password,$salt,$role,$email_id,$last_login,$status;
	public function selectadmin()
	{
		$sql="select * from admin ";
		return $this->select($sql);
	}

	public function insertadmin()
	{
		$sql ="insert into admin(username,password,salt,role,email_id,last_login,status)values('$this->username','$this->password','$this->salt','$this->role','$this->email_id','$this->last_login','$this->status')";
		return $this->insert($sql);
	}

	public function selectadminbyid()
 	{
 		$sql = "select * from admin where admin_id = '$this->admin_id'";
 		return $this->select($sql);
	}
	 
	public function updateadmin()
	{
		 $sql = "update admin set username = '$this->username', email_id = '$this->email_id', role = '$this->role', status = '$this->status' where admin_id = '$this->admin_id'";
		 return $this->update($sql);
	}

	public function updatelastlogin()
	{
		 $sql = "update tbl_admin set last_login = '$this->last_login' where username = '$this->username'";
		 $this->update($sql);
	}

	public function updateadminwithpassword()
	{
		 $sql = "update tbl_admin set username = '$this->username', email_id= '$this->email_id', password = '$this->password' where admin_id = '$this->admin_id'";
		 return $this->update($sql);
	}
	
	public function deleteadmin()
 	{
 		$sql = "delete from admin where admin_id = '$this->admin_id' ";
 		return $this->delete($sql);
 	}
} 
?>