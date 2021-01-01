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
		$sql ="insert into menu(menuname,dsc,rest_id,photo_id)values('$this->menuname','$this->dsc','$this->rest_id','$this->photo_id')";
 		return $this->insert($sql);
	}
	public function insertwithoutimg()
 	{
		$sql ="insert into menu(menuname,dsc,rest_id)values('$this->menuname','$this->dsc','$this->rest_id')";
 		return $this->insert($sql);
 	}
}
?>