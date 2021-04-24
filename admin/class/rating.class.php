<?php 
class rating extends common
{
	public $rating_id, $r_id, $user_id, $rating;
	public function insertresturant_rating()
	{
		$sql ="insert into rating( user_id, r_id, rating) values('$this->user_id','$this->r_id','$this->rating')";
		return $this->insert($sql);
	}
	public function selectresturant_rating()
	{
		$sql= "select * from rating";
		return $this->select($sql);
	}
}
?>