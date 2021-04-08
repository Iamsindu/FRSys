 <?php 
class resturant extends common
{
	public $rest_id, $rest_name, $phone_no, $email_id, $status, $open_time, $close_time, $delivery,$takeaway,$dsc;
	public $location_id, $city, $street;
	public $rphoto_id, $photo;
	public $restcat_id,$cat_id;
	public $rowner_id, $admin_id;

//////////////////// Restaurant database///////////////	
	public function insertrestaurant()
	{
		$sql ="insert into restaurant(rest_name,phone_no,email_id,status,open_time,close_time,delivery,takeaway,dsc)values('$this->rest_name','$this->phone_no','$this->email_id','$this->status','$this->open_time','$this->close_time','$this->delivery', '$this->takeaway','$this->dsc')";
		return $this->insert($sql);
	}

	public function selectrestaurant()
	{
		$sql= "select * from restaurant";
		return $this->select($sql);
	}
	
	public function selectrestaurantbyid()
	{
		$sql= "select * from restaurant where rest_id='$this->rest_id'";
		return $this->select($sql);
	}
	public function selectrestaurantbyname()
	{
		$sql= "select * from restaurant where rest_name='$this->rest_name'";
		return $this->select($sql);
	}

	public function updaterestaurant()
 	{
 		$sql = "update restaurant set rest_name ='$this->rest_name', phone_no='$this->phone_no', email_id='$this->email_id',  status='$this->status', open_time='$this->open_time', close_time='$this->close_time', delivery='$this->delivery', dsc='$this->dsc', takeaway='$this->takeaway' where rest_id = '$this->rest_id'";
	 	return $this->update($sql);
	}

	public function deleterestaurant()
 	{
 		$sql = "delete from restaurant where rest_id = '$this->rest_id' ";
 		return $this->delete($sql);
	}
	 
////////////////// Restaurant location //////////////	 
 	public function selectlocation_byid()
 	{
 		$sql = "select * from location where rest_id='$this->rest_id'";
 		return $this->select($sql);  
 	}
 	public function insertlocation()
 	{
		$sql ="insert into location(city,street,rest_id)values('$this->city','$this->street','$this->rest_id')";
 		return $this->insert($sql);
	}
	public function updatelocation()
 	{
 		$sql = "update location set city ='$this->city', streets='$this->streets' where rest_id = '$this->rest_id'";
	 	return $this->update($sql);
	}

	public function deletelocation()
 	{
 		$sql = "delete from location where rest_id = '$this->rest_id' ";
 		return $this->delete($sql);
	}

/////////////////// Restaurant Photo Database //////////////////
	public function selectphoto_byid()
 	{
 		$sql = "select * from rphoto where rest_id='$this->rest_id'";
 		return $this->select($sql);  
 	}
 	public function insert_restphoto()
 	{
		$sql ="insert into rphoto(rest_id,photo)values('$this->rest_id','$this->photo')";
 		return $this->insert($sql);
	}
	 
	public function delete_restphoto()
 	{
 		$sql = "delete from rphoto where rest_id = '$this->rest_id' ";
 		return $this->delete($sql);
	}

////////////// Restaurant Category Database ///////////////

	public function selectrcat_byid()
 	{
 		$sql = "select * from restcat where rest_id='$this->rest_id'";
 		return $this->select($sql);  
	 }
	 
 	public function insert_restcat()
 	{
		$sql ="insert into restcat(rest_id,cat_id)values('$this->rest_id','$this->cat_id')";
 		return $this->insert($sql);
	}
	 
	public function delete_restcat()
 	{
 		$sql = "delete from restcat where rest_id = '$this->rest_id' ";
 		return $this->delete($sql);
	}

/////////////////////// Restaurant Owner Database ///////////////////////

	public function selectowner_byadmin()
 	{
 		$sql = "select * from rest_owner where admin_id='$this->admin_id'";
 		return $this->select($sql);  
 	}
 	public function insert_restowner()
 	{
		$sql ="insert into rest_owner(admin_id,rest_id)values('$this->admin_id','$this->rest_id')";
 		return $this->insert($sql);
	}
	 
	public function delete_restowner()
 	{
 		$sql = "delete from rest_owner where admin_id = '$this->admin_id' ";
 		return $this->delete($sql);
	}


	public function selecttables()
	{
	// 	$sql = "SELECT restaurant.*, location.*, rating.*, discount.*, rphoto.*
	// 	FROM restaurant
	// 	FULL OUTER JOIN location ON restcat.rest_id = restaurant.rest_id
	// 	FULL OUTER JOIN rating ON rest_food.rest_id = restaurant.rest_id
	// 	FULL OUTER JOIN rphoto ON rphoto.rest_id = restaurant.rest_id
	// 	ORDER BY restaurant.rest_name" ;
		$sql = "select * from restaurant";
		return $this->select($sql);
	}
} 
?>