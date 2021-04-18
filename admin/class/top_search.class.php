<?php
	
	
	
	class total extends common
{
	public $id;
	public function check1($id,$val)
	{
		$sql="SELECT food_name from rest_food where r_id='$id' and category = '$val'";
		return $this->select($sql);
	}
	public function check2($id,$val)
	{
		$sql="SELECT category from rest_food where r_id='$id' and category = '$val'";
		return $this->select($sql);
	}
	
	public function total()
	{
		$sql="SELECT search, COUNT(*) AS Repetition from search group by search order by Repetition DESC limit 10;";
		return $this->select($sql);
	}

	
	}

// $top = new total;
// $data = $top->total();
// foreach ($data as $value)
// {
	
// 		$sql ="insert into topsearch(item,repetation)values('$value->search','$value->Repetition')";
// 		$a= $top->insert($sql);
// 	if ($a==1)
// 	{
// 		echo "<script> alert('Inserted admin Successfully') </script>";
// 	}
// 	else{
// 		echo "<script> alert('Not Inserted admin Successfully') </script>";
// 	}

// }
?>