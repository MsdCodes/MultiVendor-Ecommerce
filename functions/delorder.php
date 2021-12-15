<?php
	
	include 'db-confing.php';
	include 'function.php';


	$order_id = $_GET['order_id'];

	$sql = "DELETE FROM orders WHERE order_id='$order_id'";

	$data = mysqli_query($conn, $sql);

	if($data)
	{
	
		header('location:../myaccount.php');
		
	}
	

	

 ?>