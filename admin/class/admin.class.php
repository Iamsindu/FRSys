<?php 
class admin extends common
{
	public $admin_id,$username,$salt,$password,$email_id,$role,$date,$status;
	public function selectadmin()
	{
		$sql="select * from admin ";
		return $this->select($sql);
	}
	public function insertadmin()
	{
		$sql ="insert into admin(username,password,salt,role,email_id,date,status)values('$this->username','$this->password','$this->salt','$this->role','$this->email_id','$this->date','$this->status')";
		return $this->insert($sql);
	}
	public function selectadminbyid()
 	{
 		$sql = "select * from admin where admin_id = '$this->admin_id' ";
 		return $this->select($sql);
 	}
	public function updateadmin()
 	{
	 	$sql = "update admin set username = '$this->username',password = '$this->password',salt = '$this->salt',role = '$this->role',email_id = '$this->email_id',date = '$this->date',status = '$this->status' where admin_id='$this->admin_id'";
	 	return $this->update($sql);
	}
	public function deleteadmin()
 	{
 		$sql = "delete from admin where admin_id = '$this->admin_id' ";
 		return $this->delete($sql);
 	}
} 
?>