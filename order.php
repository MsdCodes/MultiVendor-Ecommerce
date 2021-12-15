<?php include 'functions/db-confing.php'; ?>
<?php include 'functions/function.php'; ?>

<?php

	if(isset($_GET['cid']))
	{
		$customer_id = $_GET['cid'];
	}

	$ip = getRealIpAddr();

    $total = 0;

	$selling_price = "SELECT * FROM cart WHERE ip_add='1'";
	$run_selling = mysqli_query($conn, $selling_price);
	// $product_id = $_GET['product_id'];
	$status = 'Pending';
	$invoice = mt_rand();
	$count = mysqli_num_rows($run_selling);
	while($row = mysqli_fetch_assoc($run_selling))
	{
		$pro_id = $row['p_id'];
		$qty = $row['qty'];
		$prod = "SELECT * FROM products WHERE p_id='$pro_id'";
		$run_prod = mysqli_query($conn, $prod);

		while($prie = mysqli_fetch_assoc($run_prod))
		{
			$price = array($prie['price']);
			$prod_title = $prie['product_name'];
		    $img = $prie['img'];
			$p_price = $prie['price'];
			$values = array_sum($price);

			$total +=$values;

			"$" . $total;

			$qt = "SELECT * FROM cart";
	$rt = mysqli_query($conn, $qt);
	$getch = mysqli_fetch_array($rt);
	$qty = $get_qty['qty'];
	if($qty==0)
	{
		$qty = 1;
		$sub_total = $total;
	}
	else
	{
		$qty = $qty;
		$sub_total = $total*$qty;
	}
	
	$ints = "INSERT INTO orders(customer_id,product_id,due_amount,invoice_no,total_products,order_date,order_status) VALUES('$customer_id','$pro_id','15','$invoice','$count',NOW(),'$order_status')";
	$oer = mysqli_query($conn,$ints);
	$uptqty = "UPDATE products SET qty=qty-1 WHERE p_id='$pro_id'";
	$ty = mysqli_query($conn,$uptqty);

	
			
		

		$pending = "INSERT INTO pending_orders(customer_id,invoice_no,product_id,qty,order_status) VALUES('$customer_id','$invoice','$pro_id','$qty','$status')";
		$pendi = mysqli_query($conn,$pending);
	
$empty = "DELETE FROM cart WHERE ip_add='1'";
		$rn = mysqli_query($conn, $empty);

		}
	}

	?>

	<script>
				alert('Your Order Booked Successfully ! Thank You');
	</script>
		<script>
				window.open('index.php','_self');
	</script>
		
<?php

	
?>


