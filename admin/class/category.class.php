 <?php 
class category extends common
{
	public $cat_id,$catname;
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
	 	$sql = "update cat set catname = '$this->catname' where cat_id='$this->cat_id'";
	 	return $this->update($sql);
	}
	
	public function deletecategory()
 	{
 		$sql = "delete from cat where cat_id = '$this->cat_id' ";
 		return $this->delete($sql);
 	}
} 
?>