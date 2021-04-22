<?php 
class cart extends common
{
	public $cart_id,$r_id,$user_id,$quantity,$food_name,$price,$date;
	public function insertcart()
	{
		$sql ="insert into carts(r_id,user_id,quantity,food_name,price,date) values ('$this->r_id','$this->user_id','$this->quantity','$this->food_name','$this->price','$this->date')";
		return $this->insert($sql);
	}

	public function selectcategory()
	{
		$sql= "select * from cat";
		return $this->select($sql);
	}

	public function selectcategorybyid()
 	{
 		$sql = "select * from cat where cat_id = '$this->cat_id' ";
 		return $this->select($sql);
	}
	 
	public function updatecategory()
 	{
	 	$sql = "update cat set catname = '$this->catname',dsc = '$this->dsc' where cat_id='$this->cat_id'";
	 	return $this->update($sql);
	}
	
} 
?>