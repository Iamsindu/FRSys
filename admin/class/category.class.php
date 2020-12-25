 <?php 
class category extends common
{
	public $cat_id,$catname;
	public function selectcategorybytype()
	{
		$sql="select * from cat where catname='$this->catname'";
		return $this->select($sql);
	}
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
} 
?>