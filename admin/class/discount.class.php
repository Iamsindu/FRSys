<?php 
class discount extends common
{
	public $dis_id,$rate,$special;
	
	public function insertdiscount()
	{
		$sql ="insert into discount(rate,special) values ('$this->rate','$this->special')";
		return $this->insert($sql);
	}
	public function selectdiscount()
	{
		$sql= "select * from discount";
		return $this->select($sql);
	} 
} 
?>