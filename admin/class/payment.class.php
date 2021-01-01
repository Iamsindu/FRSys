<?php
class payment extends common
{
	public $payment_id,$bill_id,$amount,$paymethod,$date;
 	public function selectpayment()
 	{
 		$sql = "select * from payment";
 		$data= $this->select($sql);
 		return $data; 
 	}
 	public function insertpayment()
 	{
		$sql ="insert into payment(bill_id,amount,paymethod,date)values('$this->bill_id','$this->amount','$this->paymethod','$this->date')";
 		return $this->insert($sql);
 	}
}
?>