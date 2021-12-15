<?php
	
	include 'db-confing.php';
	include 'function.php';


	$pid = $_GET['id'];

	$sql = "DELETE FROM cart WHERE p_id='$pid'";

	$data = mysqli_query($conn, $sql);

	if($data)
	{
	
		header('location:../cart.php');
		
	}
	

	

 ?>