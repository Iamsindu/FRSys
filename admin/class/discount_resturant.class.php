<?php 
class fooddisc extends common
{
	public $disr_id,$rest_id,$dis_id,$rel_date,$exp_date,$date;
	
	public function insert_resturant_discount()
	{
		$sql ="insert into disr(disr_id,rest_id,dis_id,rel_date,exp_date,date) values ('$this->disr_id','$this->rest_id', '$this->dis_id','$this->rel_date','$this->exp_date','$this->date')";
		return $this->insert($sql);
	}
	public function selectfooddisc()
	{
		$sql= "select * from disr";
		return $this->select($sql);
	} 
} 
?>