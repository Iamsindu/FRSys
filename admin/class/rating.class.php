<?php 
class rating extends common
{
	public $rating_id, $rest_id, $user_id, $rating, $date ;
	public function insertresturant_rating()
	{
		$sql ="insert into rating( user_id, rest_id, rating, date) values('$this->user_id','$this->rest_id','$this->rating','$this->date')";
		return $this->insert($sql);
	}
	public function selectresturant_rating()
	{
		$sql= "select * from rating where rest_id='$this->rest_id'";
		return $this->select($sql);
	}
}
?>