<?php 
class resturant_review extends common
{
	public $review_id, $user_id, $rest_id, $dsc, $date ;
	public function insertresturant_review()
	{
		$sql ="insert into review( user_id, rest_id, dsc, date) values('$this->user_id','$this->rest_id','$this->dsc','$this->date')";
		return $this->insert($sql);
	}
	public function selectresturant_review()
	{
		$sql= "select * from review where rest_id='$this->rest_id'";
		return $this->select($sql);
	}
}
?>