<?php 
class admin extends common
{
	public $admin_id,$username,$salt,$password,$email_id,$role,$date,$status;
	public function selectadminbyusername()
	{
		$sql="select * from admin where username='$this->username'";
		return $this->select($sql);
	}
	public function insertadmin()
	{
		$sql ="insert into admin(username,password,salt,role,email_id,date,status)values('$this->username','$this->password','$this->salt','$this->role','$this->email','$this->date','$this->status')";
		return $this->insert($sql);
	}
} 
?>