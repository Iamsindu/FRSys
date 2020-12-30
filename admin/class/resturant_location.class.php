<?php 
class resturant_location extends common
{
	public $restloc_id, $rest_id , $location_id ;
	public function insertresturant_location()
	{
		$sql ="insert into restloc(restloc_id,rest_id,location_id) values('$this->restloc_id','$this->rest_id','$this->location_id')";
		return $this->insert($sql);
	}
	public function selectresturant_location()
	{
		$sql= "select * from restloc";
		return $this->select($sql);
	}
}
?>