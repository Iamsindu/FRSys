<?php 
class dissimilar extends common
{
	public $diss_id,$food_id,$rest_id;
	
	public function insertdissimilar()
	{
		$sql ="insert into dissimilar(food_id,rest_id) values ('$this->food_id','$this->rest_id')";
		return $this->insert($sql);
	}
	public function selectdissimilar()
	{
		$sql= "select * from dissimilar";
		return $this->select($sql);
	} 
} 
?>