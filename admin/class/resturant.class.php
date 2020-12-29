 <?php 
class resturant extends common
{
	public $rest_id, $rest_name, $phone_no, $password, $email_id, $date, $status, $open_time, $close_time, $delivery, $photo_id, $sim_id ;
	public function insertresturant()
	{
		$sql ="insert into resturant(rest_id,rest_name,phone_no,email_id,date,status,delivery)
						=values('$this->rest_id','$this->rest_name','$this->phone_no','$this->email_id','$this->date', $this->status,$this->delivery)";
		return $this->insert($sql);
	}
	public function selectresturant()
	{
		$sql= "select * from resturant";
		return $this->select($sql);
	}
	public function selectresturant_name()
	{
		$sql= "select rest_name from resturant";
		return $this->select($sql);
	}
} 
?>

<?php
 class product extends common{
 	public $id,$name,$price,$cat,$picture,$disc;

 	public function selectproduct()
 	{
 		$sql = "select * from tbl_product";
 		$data= $this->select($sql);
 		return $data; 
 	}

 	public function selectproductbyid()
 	{
 		$sql = "select * from tbl_product where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertproduct()
 	{

 		$sql = "insert into tbl_product(name,price,cat_name,picture,disc)values('$this->name','$this->price','$this->cat','$this->picture','$this->disc') ";
 		
 		return $this->insert($sql);
 	}

 	public function insertwithoutimg()
 	{
 		 $sql = "insert into tbl_product(name,price,cat_name,disc)values('$this->name','$this->price','$this->cat','$this->disc')";
 	
 		return $this->insert($sql);
 	}

 	public function deleteproduct()
 	{
 		$sql = "delete from tbl_product where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateproduct()
 	{

 		if(!empty($this->picture))
 		{
 			$sql = "update tbl_product set name = '$this->name',price = '$this->price',cat_name = '$this->cat',picture = '$this->picture',disc = '$this->disc' where id='$this->id'";
 		}
	 	else	
	 	{
	 		$sql = "update tbl_product set name = '$this->name',price = '$this->price',cat_name = '$this->cat',disc = '$this->disc' where id='$this->id'";
	 	}
	 	return $this->update($sql);
	 }

}
?>


