 <?php 
class food extends common
{
	public $food_id,$fname,$dsc,$price,$vg_nvg,$photo_id;
	public function insertfood()
	{
		$sql ="insert into food(fname,dsc,price,vg_nvg,photo_id)values('$this->fname','$this->dsc','$this->price','$this->vg_nvg','$this->photo_id')";
		return $this->insert($sql);
	}
	public function selectfood()
	{
		$sql= "select * from food";
		return $this->select($sql);
	}
} 
?>