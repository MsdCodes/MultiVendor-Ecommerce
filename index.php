<?php require_once("inc/header.php"); ?>
<?php require_once 'functions/function.php'; ?>
 <?php session_start(); ?>
<?php 
cart();  $ip = getRealIpAddr();
 ?>
<?php require_once("inc/nav.php"); ?>
<?php
	$ssele = "SELECT * FROM products";
	$rn = mysqli_query($conn, $ssele);

	$p = $_POST['p_id'];

 ?>
<?php $product = main_page_product(''); ?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<?php 
								$slider = "SELECT * FROM slider";
								$n = mysqli_query($conn, $slider);
								while($rp = mysqli_fetch_assoc($n))
								{
									$sl_title=$rp['slider_name'];
									$img = $rp['slider_img'];
									$sl_desc=$rp['slider_description'];

									?>
									<div class="hs-item set-bg" data-setbg="admin/img/<?php echo $img; ?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							
							<span>New Arrivals</span>
							<h2><?php echo $sl_title; ?></h2>
							<p><?php echo $sl_desc; ?> </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>₹29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
									<?php
								}
							 ?>
			
			<div class="hs-item set-bg" data-setbg="assets/img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2><?php echo $sl_title; ?></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="assets/img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="assets/img/icons/2.png" alt="#">
						</div>
						<h2>COD Available</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="assets/img/icons/3.png" alt="#">
						</div>
						<h2>Easy Track Order</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h3>SHOP BY CATEGORY</h3>
			</div>
			<ul class="product-filter-menu">
				<?php 
					
					$img_cat = "SELECT * FROM categories LIMIT 0,6";
					$run = mysqli_query($conn, $img_cat);
					while($row = mysqli_fetch_assoc($run))
					{
						$img = $row['img'];
						echo "<li><a href='category.php?id=".$row['id']."'><img src='admin/img/cat/$img' height='100px' width='100px'></a></li>";
					}
				 ?>

			</ul>
			<br>
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>

			<div class="product-slider owl-carousel">

				<?php 
				
					while($row=mysqli_fetch_assoc($product))
					{
						?>
						<div class='product-item'>
						<div class='pi-pic'>
							
							<a href='product.php?p_id=<?php  echo $row['p_id']; ?>'><img src='admin/img/<?php echo $row['img']; ?>'></a>
								<div class='pi-links'>
									
									<a href='?add_cart=<?php  echo $row['p_id']; ?>' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
									<a href="wishlist.php?wish=<?php echo $row['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
							<div class="pi-text">
								<h6>₹<?php echo $row['price']; ?></h6>
								<a href='product.php?p_id=<?php  echo $row['p_id']; ?>'><p><?php echo $row['product_name']; ?></p></a>
						</div>
					</div>
					<?php

					}

				?>


				
			</div>

		</div>
	</section>
	
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BEST FOR KIDS</h2>
			</div>
		

			<div class="row">
			<?php

				$select = "SELECT * FROM products WHERE category_name='4'";

				$w = mysqli_query($conn,$select);

				while($ri=mysqli_fetch_assoc($w))
				{
				   ?>

				   
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href='product.php?p_id=<?php  echo $ri['p_id']; ?>'><img src='admin/img/<?php echo $ri['img']; ?>'></a>
							<div class="pi-links">
								<a href="?add_cart=<?php  echo $ri['p_id']; ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="wishlist.php?wish=<?php echo $ri['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>₹<?php echo $ri['price']; ?></h6>
							<p><?php echo $ri['product_name']; ?> </p>
						</div>
					</div>
				</div>

				   <?php
				}

			?>
			<div class="text-center pt-5">
				<!-- <button class="site-btn sb-line sb-dark">LOAD MORE</button> -->
			</div>
		</div>
	</section>


	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>TOP SELLING BRANDS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#"><img src="assets/img/oppo.png" height='70px' width='105' alt=""></a></li>
				<li><a href="#"><img src="assets/img/apple.png" height='70' width='105' alt=""></a></li>
				<li><a href="#"><img src="assets/img/samsung.png" height='70' width='105' alt=""></a></li>
				<li><a href="#"><img src="assets/img/hp.png" height='70' width='105' alt=""></a></li>
			</ul>
			<div class="row">
			<?php

				$select = "SELECT * FROM products WHERE category_name='24'";

				$w = mysqli_query($conn,$select);

				while($ri=mysqli_fetch_assoc($w))
				{
				   ?>

				   
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href='product.php?p_id=<?php  echo $ri['p_id']; ?>'><img src='admin/img/<?php echo $ri['img']; ?>'></a>
							<div class="pi-links">
								<a href="?add_cart=<?php  echo $ri['p_id']; ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="wishlist.php?wish=<?php echo $ri['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>₹<?php echo $ri['price']; ?></h6>
							<p><?php echo $ri['product_name']; ?> </p>
						</div>
					</div>
				</div>

				   <?php
				}

			?>

			<div class="text-center pt-5">
				<!-- <button class="site-btn sb-line sb-dark">LOAD MORE</button> -->
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


<?php require_once("inc/footer.php"); ?>