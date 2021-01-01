<?php 
class food_category extends common
{
	public $foodcat_id, $food_id,$cat_id;
 	public function selectfood_category()
 	{
 		$sql = "select * from foodcat";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertfood_category()
 	{

		$sql ="insert into foodcat(food_id,cat_id)values('$this->food_id','$this->cat_id')";
 		
 		return $this->insert($sql);
 	}
}
?>