<?php 
class cart extends common
{
	public $cart_id,$r_id,$user_id,$quantity,$food_name,$price,$date;
	public function insertcart()
	{
		$sql ="insert into carts(r_id,user_id,quantity,food_name,price,date) values ('$this->r_id','$this->user_id','$this->quantity','$this->food_name','$this->price','$this->date')";
		return $this->insert($sql);
	}

	public function select_cart()
	{
		$sql= "select * from carts where user_id='$this->user_id' and r_id='$this->r_id' and date=CURRENT_DATE";
		return $this->select($sql);
	}

	public function selectcartbyid()
 	{
 		$sql = "select * from cart where user_id = '$this->user_id' ";
 		return $this->select($sql);
	}
	public function select_resturant()
	{
		$sql="select DISTINCT r_id from carts where user_id='$this->user_id' and date=CURRENT_DATE";
		return $this->select($sql);
	}
	 
	public function updatecategory()
 	{
	 	$sql = "update cat set catname = '$this->catname',dsc = '$this->dsc' where cat_id='$this->cat_id'";
	 	return $this->update($sql);
	}
	
} 
?>