<?php
class payment extends common
{
	public $payment_id,$order_id,$amount,$pay_method,$pay_date;
 	public function insertpayment()
 	{
		$sql ="insert into payment(order_id,amount,pay_method,pay_date)values('$this->order_id','$this->amount','$this->pay_method','$this->pay_date')";
 		return $this->insert($sql);
	 }
	 public function selectpayment()
	{
		$sql="select * from payment where order_id = '$this->order_id' ";
		return $this->select($sql);
	}
}
?>