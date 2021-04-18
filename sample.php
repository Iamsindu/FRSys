<?php
	
	require_once 'admin/class/common.class.php';
	
	class total extends common
{
	
	public function total()
	{
		$sql="SELECT search, COUNT(*) AS Repetition from search group by search;";
		return $this->select($sql);
	}

	
	}

$top = new total;
$data = $top->total();
foreach ($data as $value)
{
	
		$sql ="insert into topsearch(item,repetation)values('$value->search','$value->Repetition')";
		$a= $top->insert($sql);
	if ($a==1)
	{
		echo "<script> alert('Inserted admin Successfully') </script>";
	}
	else{
		echo "<script> alert('Not Inserted admin Successfully') </script>";
	}

}
?>