 <?php 
class resturant extends common
{
	public $rest_id, $rest_name, $phone_no, $password,$salt, $email_id, $date, $status, $open_time, $close_time, $delivery, $photo_id, $sim_id ;
	public function insertresturant()
	{
		$sql ="insert into resturant(rest_name,phone_no,password,salt,email_id,date,status,open_time,close_time,delivery,photo_id,sim_id)values('$this->rest_name','$this->phone_no','$this->password','$this->salt','$this->email_id','$this->date','$this->status','$this->open_time','$this->close_time','$this->delivery','$this->photo_id','$this->sim_id')";
		return $this->insert($sql);
	}

	public function insertresturant_withouimg()
	{
		$sql ="insert into resturant(rest_name,phone_no,password,salt,email_id,date,status,open_time,close_time,delivery)values('$this->rest_name','$this->phone_no','$this->password','$this->salt','$this->email_id','$this->date','$this->status','$this->open_time','$this->close_time','$this->delivery')";
		return $this->insert($sql);
	}

	public function selectresturant()
	{
		$sql= "select * from resturant";
		return $this->select($sql);
	}
	
	public function selectresturant_name()
	{
		$sql= "select rest_id rest_name from resturant";
		return $this->select($sql);
	}

	public function updateresturant()
 	{
 		if(!empty($this->photo_id))
 		{
 			$sql = "update resturant set rest_name ='$this->rest_name', phone_no='$this->phone_no', email_id='$this->email_id',  status='$this->status', open_time='$this->open_time', close_time='$this->close_time', delivery='$this->delivery', photo_id='$this->photo_id' where rest_id = '$this->rest_id'";
 		}
	 	else	
	 	{
	 		$sql = "update resturant set rest_name = '$this->rest_name', phone_no='$this->phone_no', email_id='$this->email_id', status='$this->status', open_time='$this->open_time', close_time='$this->close_time', delivery='$this->delivery'  where rest_id = '$this->rest_id'";
	 	}
	 	return $this->update($sql);
	}

	public function deleteresturant()
 	{
 		$sql = "delete from resturant where rest_id = '$this->rest_id' ";
 		return $this->delete($sql);
 	}
} 
?>



