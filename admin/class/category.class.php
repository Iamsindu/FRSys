 <?php 
class category extends common
{
	public $cat_id,$catname;
	// public function selectcategorybytype()
	// {
	// 	$sql="select * from cat where catname='$this->catname'";
	// 	return $this->select($sql);
	// }
	public function insertcategory()
	{
		$sql ="insert into cat(catname) values ('$this->catname')";
		return $this->insert($sql);
	}
	public function selectcategory()
	{
		$sql= "select * from cat";
		return $this->select($sql);
	}
	public function selectcategorybyid()
 	{
 		$sql = "select * from cat where cat_id = '$this->cat_id' ";
 		return $this->select($sql);
 	}
	public function updatecategory()
 	{
	 	$sql = "update admin set username = '$this->username',role = '$this->role',email_id = '$this->email_id',date = '$this->date',status = '$this->status' where admin_id='$this->admin_id'";
	 	return $this->update($sql);
	}
	public function deletecategory()
 	{
 		$sql = "delete from admin where admin_id = '$this->admin_id' ";
 		return $this->delete($sql);
 	}
} 
?>