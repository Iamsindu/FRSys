 <?php 
class food extends common
{
	public $food_id,$fname,$dsc,$price,$vg_nvg,$photo_id;
 	public function selectfood()
 	{
 		$sql = "select * from food";
 		$data= $this->select($sql);
 		return $data; 
 	}

 	public function selectfoodbyid()
 	{
 		$sql = "select * from food where food_id = '$this->food_id' ";
 		return $this->select($sql);
 	}

 	public function insertfood()
 	{

		$sql ="insert into food(fname,dsc,price,vg_nvg,photo_id)values('$this->fname','$this->dsc','$this->price','$this->vg_nvg','$this->photo_id')";
 		return $this->insert($sql);
 	}

 	public function insertwithoutimg()
 	{
		$sql ="insert into food(fname,dsc,price,vg_nvg)values('$this->fname','$this->dsc','$this->price','$this->vg_nvg')";
 		return $this->insert($sql);
 	}

 	public function deletefood()
 	{
 		$sql = "delete from food where food_id = '$this->food_id' ";
 		return $this->delete($sql);
 	}

 	public function updatefood()
 	{
 		if(!empty($this->photo_id))
 		{
 			$sql = "update food set fname ='$this->fname',dsc='$this->dsc',price='$this->price',vg_nvg='$this->vg_nvg', photo_id = '$this->photo_id' where food_id = '$this->food_id'";
 		}
	 	else	
	 	{
	 		$sql = "update food set fname = '$this->fname', dsc= '$this->dsc',price='$this->price', vg_nvg = '$this->vg_nvg' where food_id = '$this->food_id'";
	 	}
	 	return $this->update($sql);
	}

}
?>