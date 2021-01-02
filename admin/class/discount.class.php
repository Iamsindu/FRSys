<?php 
class discount extends common
{
	public $dis_id,$rate,$special;
	public function selectdiscount()
	{
		$sql= "select * from discount";
		return $this->select($sql);
	}

	public function selectdiscountbyid()
	{
		$sql= "select * from discount where dis_id='$this->dis_id'";
		return $this->select($sql);
	}
	
	public function insertdiscount()
	{
		$sql ="insert into discount(rate,special) values ('$this->rate','$this->special')";
		return $this->insert($sql);
	}

	public function updatediscount()
 	{
	 	$sql = "update discount set rate='$this->rate', special='$this->special' where dis_id='$this->dis_id'";
	 	return $this->update($sql);
	}
	
	public function deletediscount()
 	{
 		$sql = "delete from discount where dis_id = '$this->dis_id' ";
 		return $this->delete($sql);
 	}
} 
?>