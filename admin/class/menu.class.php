<?php 
class menu extends common
{
	public $menu_id,$food_id,$rest_id,$cat_id,$price,$date,$dsc;
 	public function selectmenu()
 	{
 		$sql = "select * from menu";
 		return $this->select($sql); 
	}

	public function selectmenubyid()
 	{
 		$sql = "select * from menu where rest_id = '$this->rest_id' ";
 		return $this->select($sql);
 	}
	 
 	public function insertmenu()
 	{
		$sql ="insert into menu(food_id,rest_id,cat_id,price,date,dsc)values('$this->food_id','$this->rest_id','$this->cat_id','$this->price','$this->date','$this->dsc')";
 		return $this->insert($sql);
	}

	public function updatemenu()
 	{
		$sql = "update menu set food_id ='$this->food_id', dsc='$this->dsc', price = '$this->price', date = '$this->date' where menu_id = '$this->menu_id'";	
	 	return $this->update($sql);
	}

	public function deletemenu()
 	{
 		$sql = "delete from menu where menu_id = '$this->menu_id' ";
 		return $this->delete($sql);
	} 
}
?>