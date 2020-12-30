<?php 
class menu extends common
{
	public $menu_id,$menuname,$dsc,$rest_id,$photo_id;
 	public function selectmenu()
 	{
 		$sql = "select * from menu";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertmenu()
 	{

		$sql ="insert into menu(location_id,country,city,street)values('$this->location_id','$this->country','$this->city','$this->street')";
 		return $this->insert($sql);
 	}
}
?>