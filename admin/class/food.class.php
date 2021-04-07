 <?php 
class food extends common
{
	public $food_id,$fname,$dsc,$vg_nvg,$date;
	public $fphoto_id,$photo;
	public $foodcat_id,$cat_id;
	public $restfood_id,$rest_id;

////////////// Food Database ////////////////////	
 	public function selectfood()
 	{
 		$sql = "select * from food";
 		return $this->select($sql);
 		  
 	}

 	public function selectfoodbyid()
 	{
 		$sql = "select * from food where food_id = '$this->food_id' ";
 		return $this->select($sql);
	 }
	 
	 public function selectfoodbyname()
 	{
 		$sql = "select * from food where fname = '$this->fname' ";
 		return $this->select($sql);
 	}

 	public function insertfood()
 	{

		$sql ="insert into food(fname,dsc,vg_nvg,date)values('$this->fname','$this->dsc','$this->vg_nvg','$this->date')";
 		return $this->insert($sql);
 	}

 	public function deletefood()
 	{
 		$sql = "delete from food where food_id = '$this->food_id' ";
 		return $this->delete($sql);
 	}

 	public function updatefood()
 	{
	 	$sql = "update food set fname = '$this->fname', dsc= '$this->dsc', vg_nvg = '$this->vg_nvg', date = '$this->date' where food_id = '$this->food_id'";
	 	return $this->update($sql);
	}


//////////////// Food Photo database /////////////////

 	public function selectphoto_byid()
 	{
 		$sql = "select * from fphoto where food_id = '$this->food_id' ";
 		return $this->select($sql);
 	}

 	public function insert_foodphoto()
 	{

		$sql ="insert into fphoto(food_id,photo)values('$this->food_id','$this->photo')";
 		return $this->insert($sql);
 	}

 	public function deletephoto()
 	{
 		$sql = "delete from fphoto where food_id = '$this->food_id' ";
 		return $this->delete($sql);
 	}

//////////////// Food Category Database /////////////////

	public function selectcategory_byid()
 	{
 		$sql = "select * from foodcat where food_id = '$this->food_id' ";
 		return $this->select($sql);
 	}

 	public function insert_food_category()
 	{

		$sql ="insert into foodcat(food_id,cat_id)values('$this->food_id','$this->cat_id')";
 		return $this->insert($sql);
 	}

 	public function delete_foodcategory()
 	{
 		$sql = "delete from foodcat where food_id = '$this->food_id' ";
 		return $this->delete($sql);
 	}

/////////////////// Food and Restaurant Database/////////////

	public function select_restaurantfood_byid()
 	{
 		$sql = "select * from rest_food where rest_id = '$this->rest_id' ";
 		return $this->select($sql);
 	}

 	public function insert_restfood()
 	{

		$sql ="insert into rest_food(food_id,rest_id)values('$this->food_id','$this->rest_id')";
 		return $this->insert($sql);
 	}

 	public function delete_restfood()
 	{
 		$sql = "delete from rest_food where food_id = '$this->food_id' ";
 		return $this->delete($sql);
 	}

}
?>