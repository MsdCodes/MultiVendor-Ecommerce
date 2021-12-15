<?php

	session_start();
	include 'functions/db-confing.php';
	include 'functions/function.php';
	if(!isset($_SESSION['email']))
	{
		echo "<div class='alert alert-danger'> Please Login To Perform Access All Features </div>";	
		header('location:sign-in.php');
	}
	else
	{

		$customer_id = $_GET['user_id'];
		
		$em = $_SESSION['email'];

		$p_id = $_GET['wish'];

			$customer_order = "SELECT * FROM register WHERE email='$em'";
			$run_order = mysqli_query($conn, $customer_order);

			$row_order = mysqli_fetch_array($run_order);

			$cid = $row_order['user_id'];

		$qry = "INSERT INTO wishlist(p_id,user_id) VALUES('$p_id','$cid')";
		$r = mysqli_query($conn, $qry);

	

		if($r)
		{
			?>
				<script>
					
					window.open('index.php','_self');
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert('Sorry');
				</script>
			<?php
		}
	}

 ?>