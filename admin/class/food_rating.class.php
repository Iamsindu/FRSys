<?php 
class food_rating extends common
{
	public $frate_id,$food_id,$user_id,$rating,$date;
 	public function selectfood_rating()
 	{
 		$sql = "select * from frate";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertfood_rating()
 	{
		$sql ="insert into frate(food_id,user_id,rating,date)values('$this->food_id','$this->user_id','$this->rating','$this->date')";
 		return $this->insert($sql);
 	}
}
?>