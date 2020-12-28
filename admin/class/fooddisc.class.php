<?php 
class fooddisc extends common
{
	public $disf_id,$food_id,$dis_id,$rel_date,$exp_date,$date;
	
	public function insertfooddisc()
	{
		$sql ="insert into disf(food_id,dis_id,rel_date,exp_date,date) values ('$this->food_id','$this->dis_id','$this->rel_date','$this->exp_date','$this->date')";
		return $this->insert($sql);
	}
	public function selectfooddisc()
	{
		$sql= "select * from disf";
		return $this->select($sql);
	} 
} 
?>