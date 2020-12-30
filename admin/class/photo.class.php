<?php 
class photo extends common
{
	public $photo_id,$photo1,$photo2,$photo3,$photo4;
 	public function selectphoto()
 	{
 		$sql = "select * from photo";
 		$data= $this->select($sql);
 		return $data;
 	}
 	public function insertphoto()
 	{
		$sql ="insert into photo(photo_id,photo1,photo2,photo3,photo4)values('$this->photo_id','$this->photo1','$this->photo2','$this->photo3','$this->photo4')";
 		return $this->insert($sql);
 	}
}
?>