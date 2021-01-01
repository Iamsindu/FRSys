<?php 
class resturant_category extends common
{
	public $restcat_id,$rest_id,$cat_id ;
	public function insertresturant_category()
	{
		$sql ="insert into restcat(rest_id,cat_id) values('$this->rest_id','$this->cat_id')";
		return $this->insert($sql);
	}
	public function selectresturant_category()
	{
		$sql= "select * from restcat";
		return $this->select($sql);
	}
}
?>