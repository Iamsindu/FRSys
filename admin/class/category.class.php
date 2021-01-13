 <?php 
class category extends common
{
	public $cat_id,$catname,$dsc;
	public function insertcategory()
	{
		$sql ="insert into cat(catname,dsc) values ('$this->catname','$this->dsc')";
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
	 	$sql = "update cat set catname = '$this->catname',dsc = '$this->dsc' where cat_id='$this->cat_id'";
	 	return $this->update($sql);
	}
	
	public function deletecategory()
 	{
 		$sql = "delete from cat where cat_id = '$this->cat_id' ";
 		return $this->delete($sql);
 	}
} 
?>