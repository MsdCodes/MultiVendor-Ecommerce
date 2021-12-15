<?php 

	include 'db-confing.php';
	include 'function.php';
	$selling_price = "SELECT * FROM cart";
	$run_selling = mysqli_query($conn, $selling_price);
	$nm = mysqli_num_rows($run_selling);
	while($row = mysqli_fetch_assoc($run_selling))
	{
		$pro_id = $row['p_id'];
	}
		if(isset($_GET['up']))
		{
		$qty = $_GET['qty'];
		$up = "UPDATE cart SET qty='4' WHERE p_id='5'";
		$rn = mysqli_query($conn,$up);
		?>
			<script>
				alert('OK');
				window.open('../cart.php','_self');
			</script>
		<?php

	}

?>