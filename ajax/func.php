<?php function safe_value($conn, $value)
	{
		return mysqli_real_escape_string($conn,$value);
	}

	// function add_to_cart($pid,$qty)
	// {
	// 	$_SESSION['CART'][$pid]['QTY']=$qty;
	// }

	// function total_cart_items()
	// {
	// 	if(isset($_SESSION['CART']))
	// 	{
	// 		return count($_SESSION['CART']);
	// 	}
	// 	else
	// 	{
	// 		return 0;
	// 	}
	// }

?>