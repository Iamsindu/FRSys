<?php 
class food_review extends common
{
	public $freview_id,$food_id,$user_id,$dsc,$date;
 	public function selectfood_review()
 	{
 		$sql = "select * from freview";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertfood_review()
 	{

		$sql ="insert into freview(frate_id,user_id,food_id,dsc,date)values('$this->frate_id','$this->user_id','$this->food_id','$this->dsc','$this->date')";
 		
 		return $this->insert($sql);
 	}
}
?>