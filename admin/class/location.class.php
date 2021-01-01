<?php 
class location extends common
{
	public $location_id,$country,$city,$street;
 	public function selectlocation()
 	{
 		$sql = "select * from location";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertlocation()
 	{
		$sql ="insert into location(country,city,street)values('$this->country','$this->city','$this->street')";
 		return $this->insert($sql);
 	}
}
?>