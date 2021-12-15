<?php
	
	include 'db-confing.php';
	include 'function.php';


	$pid = $_GET['del'];

	$sql = "DELETE FROM wishlist WHERE p_id='$pid'";

	$data = mysqli_query($conn, $sql);

	if($data)
	{
	
		header('location:../my_whishlist.php');
		
	}
	

	

 ?>