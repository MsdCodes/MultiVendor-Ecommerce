
<?php require_once("inc/header.php"); ?>
<?php require_once 'functions/function.php'; payment_option(); ?>
<?php require_once("inc/nav.php"); ?>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->
	
	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<!-- <form class="checkout-form" method="POST"> 
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Address">
								<input type="text" placeholder="Address line 2">
								<input type="text" placeholder="Country">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone no.">
							</div>
						</div> -->
									  <?php 
											$ip = getRealIpAddr();
											$get_customer = "SELECT * FROM register WHERE email='".$_SESSION['email']."'";
											$run = mysqli_query($conn, $get_customer);
											$customer = mysqli_fetch_array($run);
											$customer_id = $customer['user_id'];
										
										?>
						<div class="cf-title site-btn submit-order-btn">Choose Payment Method</div><br><br>
						<ul class="payment-list">
							 
								<div class="col-md-2">
								<div class="">
									<div class="cfr-item">
										
										<label for="one"><a href="order.php?cid=<?php echo $customer_id; ?>" class="text-center btn-lg cf-title site-btn submit-order-btn" style="margin-left: 200px;">Offline</a></label><br><br>
				
										
	<!-- checkout section end -->
	<?php

							$ip = getRealIpAddr();

								$total = 0;


								$selling_price = "SELECT * FROM cart WHERE ip_add='1'";
								$run_selling = mysqli_query($conn, $selling_price);

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
										?>
										
							<?php

								 "₹" . $total;
								}
							}
?>

									</div>
									<div class="cfr-item">

										<!-- <label for="two">PayPal</label> -->
									</div>
								</div>
							</div>
							
						
						
						</ul>
						<br><br>
						<!-- <button type="submit" name="payment" class="site-btn submit-order-btn">Confirm Purchase</button> -->
					</form>



				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						
						<ul class="product-list">
							<?php

							$ip = getRealIpAddr();

								$total = 0;


								$selling_price = "SELECT * FROM cart WHERE ip_add='1'";
								$run_selling = mysqli_query($conn, $selling_price);

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
										?>
										<li>
								<div class="pl-thumb"><img src="admin/img/<?php echo $img; ?>" alt=""></div>
								<h6><?php echo $prod_title; ?></h6>
								<p>₹<?php echo $p_price; ?></p>
							</li>
							<?php

								 "₹" . $total;
								}
							}
?>
							
						</ul>
						<ul class="price-list">
							<li>Total<span>₹<?php echo $total; ?></span></li>
							<li>Shipping<span>free</span></li>
							<li class="total">Total<span>₹<?php echo $total; ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</section>



	
<?php require_once("inc/footer.php"); ?>
