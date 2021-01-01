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

	public function updatemenu()
 	{
 		if(!empty($this->photo_id))
 		{
 			$sql = "update menu set menuname ='$this->menuname', dsc='$this->dsc', rest_id='$this->rest_id', photo_id = '$this->photo_id' where menu_id = '$this->menu_id'";
 		}
	 	else	
	 	{
	 		$sql = "update menu set menuname ='$this->menuname', dsc='$this->dsc', rest_id='$this->rest_id' where menu_id = '$this->menu_id'";
	 	}
	 	return $this->update($sql);
	}

	public function deletemenu()
 	{
 		$sql = "delete from menu where menu_id = '$this->menu_id' ";
 		return $this->delete($sql);
	}
	 
}
?>