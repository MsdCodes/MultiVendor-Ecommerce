<?php 

	// session_start();
	error_reporting(0);
	include 'db-confing.php';
	function menu_cat()
	{
		global $conn;
		
		$qry = "SELECT * FROM categories WHERE status=1 LIMIT 0,4";
		return $run = mysqli_query($conn, $qry);
	}

	function main_page_product($cat_id='',$product_id='')
	{
		global $conn;


                  $sql_q = "SELECT * FROM products";
                $sq_r = mysqli_query($conn, $sql_q);
                          
              while ($row=mysqli_fetch_assoc($sq_r)) {
             $vid = $row['vid'];
          }
                        
		
		$qry = "SELECT * FROM products WHERE status='1' ORDER BY p_id DESC";

		if($cat_id!='')
		{
			$qry = "SELECT * FROM products WHERE category_name='$cat_id' AND status='1'";
			
		}
	
		$product_id = $_GET['p_id'];
		if($product_id!='')
		{
			$qry = "SELECT * FROM products WHERE p_id='$product_id' AND status='1'";
		}

		

		return $run = mysqli_query($conn, $qry);

	}



	function safe_value($conn, $value)
	{
		return mysqli_real_escape_string($conn,$value);
	}

	function getRealIpAddr()
	{
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	function cart()
	{
		global $conn;
		if(isset($_GET['add_cart']))
		{
			$ip = getRealIpAddr();

			$p_id = $_GET['add_cart'];

			$ip = 1;

			$check_cart = "SELECT * FROM cart WHERE ip_add='1' AND p_id='$p_id'";
			$run_check = mysqli_query($conn, $check_cart);

			if(mysqli_num_rows($run_check)>0)
			{
				?>
					<script>
						alert('This item is aleady added');
						window.open('category.php','_self');
					</script>
				<?php
			}
			else
			{
								
				$adding_product = "INSERT INTO cart(p_id,ip_add,qty) VALUES('$p_id','1','1')";
				$run_add = mysqli_query($conn, $adding_product);
				echo "<script> window.open('cart.php','_self') </script>";
			}

		}
	}

	function total_of_items()
	{
		if(isset($_GET['add_cart']))
		{
			global $conn;
			$ss = "SELECT * FROM cart";
			$j = mysqli_query($conn,$ss);
			$fo = mysqli_fetch_assoc($j);
			$id = $fo['id'];
			// $id=$_POST['id'];
			$get_item = "SELECT * FROM cart WHERE id='$id'";
			$run_item = mysqli_query($conn, $get_item);
			$cnt_itm = mysqli_num_rows($run_item);

		}
		else
		{
				global $conn;
			$gt = "SELECT * FROM cart WHERE ip_add='1'";
			$n= mysqli_query($conn, $gt);
			$cn = mysqli_num_rows($n);
			echo $cn;
		}
		
	} 

	function login()
	{
		global $conn;

		if(isset($_POST['btn_login']))
		{
		   $email = safe_value($conn, $_POST['email']);
			$password = safe_value($conn, $_POST['password']);
		
		$qry = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn, $qry);
		if(!mysqli_num_rows($result))
		{
			$_SESSION['status'] = "email";
			$_SESSION['status_code'] = "error";
		}
		else
		{
			if($row=mysqli_fetch_assoc($result))
			{
			$password = $row['password'];
			if($password==false)
			{
				$_SESSION['status'] = "Wrong";
				$_SESSION['status_code'] = "error";
				echo "Wrong Password";
			}
			elseif($password==true)
			{
				$email = $_SESSION['email']=$email;
				?>
				<script>
					alert('Welcome Back ! <?php echo $email ?>');
					window.location = './index.php';
				</script>
				<?php
			}
			else
			{
				"Wrong Detailes";
			}
		}
		}
		}
		
	}

	function total_wishlist()
	{
		global $conn;
		if(isset($_GET['id']))
		{
			
			$id=$_GET['id'];
			$get_item = "SELECT * FROM wishlist WHERE id='$id'";
			$run_item = mysqli_query($conn, $get_item);
			$cnt_itm = mysqli_num_rows($run_item);

		}
		else
		{
			
			$em = $_SESSION['email'];

			$customer_order = "SELECT * FROM register WHERE email='$em'";
			$run_order = mysqli_query($conn, $customer_order);

			$row_order = mysqli_fetch_assoc($run_order);

			$cid = $row_order['user_id'];
			$gt = "SELECT * FROM wishlist WHERE user_id='$cid'";
			$n= mysqli_query($conn, $gt);
			$cn = mysqli_num_rows($n);

			echo $cn;
		}
		
	} 
	

	function view_order()

	{
		global $conn;

		$em = $_SESSION['email'];

		$customer_order = "SELECT * FROM register WHERE email='$em'";
		$run_order = mysqli_query($conn, $customer_order);

		$row_order = mysqli_fetch_array($run_order);

			$cid = $row_order['user_id'];

			$order = "SELECT * FROM orders WHERE customer_id='$cid' AND order_status='Pending'";

			$run = mysqli_query($conn, $order);

			$counting = mysqli_num_rows($run);

			if($counting>0)
			{
				echo "<h6 style='color: green'>Your Have $counting Pending Orders</h6>";
			}
			else
			{

				echo "<h6 style='color: red'>Your Have $counting Orders</h6>";
			}			

	}

	function payment_option()
	{
		global $conn;
		if(isset($_POST['payment']))
		{
			?>
				<script>
					alert('Your order has confirmed');
					window.location = 'category.php';
				</script>
			<?php
		}
	}

	function msg()
	{
		global $conn;
		$msg = "SELECT * FROM seller";
		$mg = mysqli_query($conn, $msg);
		$n = mysqli_num_rows($mg);
		echo $n;
	}


  ?>