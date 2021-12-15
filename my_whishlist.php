<?php require_once("inc/header.php"); ?>
<?php require_once("functions/function.php"); ?>
<?php 
	
	
	
?>
<?php require_once("inc/nav.php"); ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your whishlist</h4>
			<div class="site-pagination">
				<a href="index.php">Home</a> /
				<a href="">Your Faveroiet Items</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>Your Whishlist</h3>
						<div class="cart-table-warp">
							<form action="cart.php" method="POST" enctype="multipart/form-data">
							<table>
							<thead>
								<tr>
									<th class="product-th">product</th>
								
									<th class="total-th">price</th>
									<th class="total-th">Remove</th>
								
								</tr>
							</thead>
							<tbody>
								<?php

								

								$total = 0;
								$em = $_SESSION['email'];

								$customer_order = "SELECT * FROM register WHERE email='$em'";
								$run_order = mysqli_query($conn, $customer_order);

								$row_order = mysqli_fetch_array($run_order);

								$cid = $row_order['user_id'];

								$selling_price = "SELECT * FROM wishlist WHERE user_id='$cid'";
								$run_selling = mysqli_query($conn, $selling_price);

								while($row = mysqli_fetch_assoc($run_selling))
								{
									$pro_id = $row['p_id'];
								
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

?>
								<tr>
									<td class='product-col'>
										<img src='admin/img/<?php echo $img; ?>' height='80px' width='100px'>
										<div class='pc-title'>
											<h4><?php echo $prod_title; ?></h4>
											<p>₹<?php echo $p_price; ?></p>
										</div>
									</td>
														
									<td class='total-col'><h4>₹<?php echo $p_price; ?></h4></td>
									<td class='total-col'><a href='functions/deletewish.php?del=<?php echo $pro_id; ?>'><i class='fa fa-trash' style='font-size: 24px; color: #F2097C;'></a></i></td>
								
								</tr>
								<?php
								}

							}
							?>	
							</tbody>
						</table>
						</form>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="assets/img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="assets/img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="assets/img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="assets/img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->



<?php require_once("inc/footer.php"); ?>	