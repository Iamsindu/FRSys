<?php 
class resturant extends common
{
	public $rest_id, $rest_name, $phone_no, $email_id, $status, $open_time, $close_time, $delivery,$takeaway,$dsc;
	public $location_id, $city, $street;
	public $rphoto_id, $photo;
	public $restcat_id,$cat_id;
	public $rowner_id, $admin_id;
	public $r_id, $r_name, $category, $location, $rating;
	public $search;
	public function selectrest()
	{
		$sql= "select * from rest where r_name='$this->r_name'";
		return $this->select($sql);
	}
	public function toprest()
	{
		$sql= "select * from rest where r_name='$this->r_name' order by rating desc limit 5";
		return $this->select($sql);
	}
    public function insertrestaurant()
	{
		$sql ="insert into restaurant(rest_name,phone_no,email_id,status,open_time,close_time,delivery,takeaway,dsc)values('$this->rest_name','$this->phone_no','$this->email_id','$this->status','$this->open_time','$this->close_time','$this->delivery', '$this->takeaway','$this->dsc')";
		return $this->insert($sql);
	}
}