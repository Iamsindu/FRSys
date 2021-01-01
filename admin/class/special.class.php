<?php 
class special extends common
{
	public $spcl_id, $rest_id, $food_id, $dsc, $date ;
	public function insertspecial()
	{
		$sql ="insert into spcl(rest_id, food_id, dsc, date) values('$this->rest_id','$this->food_id','$this->dsc','$this->date')";
		return $this->insert($sql);
	}
	public function selectspecial()
	{
		$sql= "select * from spcl";
		return $this->select($sql);
	}
}
?>