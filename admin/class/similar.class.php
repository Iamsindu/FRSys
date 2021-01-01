<?php 
class similar extends common
{
	public $sim_id, $food1, $food2, $food3, $food4 ;
	public function insertsimilar()
	{
		$sql ="insert into similar(food1, food2, food3, food4) values('$this->food1','$this->food2','$this->food3','$this->food4')";
		return $this->insert($sql);
	}
	public function selectsimilar()
	{
		$sql= "select * from similar";
		return $this->select($sql);
	}
}
?>