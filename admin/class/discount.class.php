<?php 
class discount extends common
{
	public $discount_id,$discount,$rest_id,$rels_date,$exp_date,$event;
	public function selectdiscount()
	{
		$sql= "select * from discount";
		return $this->select($sql);
	}

	public function selectdiscountbyid()
	{
		$sql= "select * from discount where discount_id='$this->discount_id'";
		return $this->select($sql);
	}
	
	public function insertdiscount()
	{
		$sql ="insert into discount(discount,rest_id,rels_date,exp_date,event) values ('$this->discount','$this->rest_id','$this->rels_date','$this->exp_date','$this->event')";
		return $this->insert($sql);
	}

	public function updatediscount()
 	{
	 	$sql = "update discount set discount='$this->discount', rels_date='$this->rels_date', exp_date='$this->exp_date', event='$this->event' where discount_id='$this->discount_id'";
	 	return $this->update($sql);
	}
	
	public function deletediscount()
 	{
 		$sql = "delete from discount where discount_id = '$this->discount_id' ";
 		return $this->delete($sql);
 	}
} 
?>