<?php 
class resturant_rating extends common
{
	public $rrate_id, $rest_id, $user_id, $rating, $date ;
	public function insertresturant_rating()
	{
		$sql ="insert into rrate( rest_id, user_id, rating, date) values('$this->rest_id','$this->user_id','$this->rating','$this->date')";
		return $this->insert($sql);
	}
	public function selectresturant_rating()
	{
		$sql= "select * from rrate";
		return $this->select($sql);
	}
}
?>