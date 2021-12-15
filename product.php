<?php require_once 'inc/header.php'; ?>
<?php require_once 'functions/function.php'; ?>
<?php 
cart();  $ip = getRealIpAddr(); 
 ?>

<?php 
	$product_id = "";

	if(isset($_GET['p_id']))
	{
		$product_id=$_GET['p_id'];
	}
	$product = main_page_product('');
	$result = mysqli_fetch_array($product);



 ?>
<?php require_once 'inc/nav.php'; ?>
	
<?php 
    if(isset($_GET['p_id'])){
     
      $g_p = "SELECT * FROM products WHERE p_id='$product_id' AND status='1'";
      $r_p = mysqli_query($conn,$g_p);
      $row_product=mysqli_fetch_array($r_p);

      $p_cat_id = $row_product['category_name'];
      $p_title = $row_product['product_name'];

      $g_p_c = "SELECT * FROM categories WHERE id='$p_cat_id'";
      $r_p_c=mysqli_query($conn, $g_p_c);
      $row_p_catas=mysqli_fetch_array($r_p_c);
      $p_cat_title=$row_p_catas['cat_name'];
    }
?>



	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Categories</h4>
			<div class="site-pagination">
				<a href="#">Home</a> /
				<a href="#"><?php echo $p_cat_title; ?></a> /
				<a href="#"><?php echo $p_title; ?></a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="#"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="admin/img/<?php echo $result['img']; ?>">
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $result['product_name']; ?></h2>
					<h3 class="p-price">₹<?php echo $result['price']; ?></h3>
					<?php 
						$stock = "SELECT qty FROM products WHERE p_id='$product_id'";
						$run_stock = mysqli_query($conn, $stock);
						// die($stock);
						$ftch = mysqli_fetch_assoc($run_stock);
						
						$nff = "SELECT * FROM products WHERE p_id='$product_id'";
						$sd = mysqli_query($conn,$nff);
						$nm = mysqli_num_rows($sd);
						if($ftch['qty']>5)
						{
							echo '<h4 class="p-stock" >Available: <span style="color: green;">In Stock</span></h4>';
						}
						elseif($ftch['qty']<1)
						{

							echo '<h3 class="p-stock" style="color: red;">Unavailable: <span>Out of Stock</span></h3>';
						}
						else
						{
							echo '<h3 class="p-stock" style="color: red;">Hurry Up! : <span>Few Are Left</span></h3>';
						}
					 ?>
					

					<?php 
                         $sql_q = "SELECT * FROM products WHERE p_id='$product_id'";
                           $sq_r = mysqli_query($conn, $sql_q);
                          
                           while ($row1=mysqli_fetch_assoc($sq_r)) {
                            $vid = $row1['vid'];
                           }
                         ?>
						
					<?php 
								
								
								$r = "SELECT * FROM products WHERE vid='$vid'";
								$rr = mysqli_query($conn, $r);
								while($row = mysqli_fetch_assoc($rr))
									$vndrid = $row['vid'];

								 ?>
								 <h2 class="p-title"><?php  $vndrid; ?></h2>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<?php 
							$cnt = "SELECT * FROM rating_review WHERE p_id='$product_id'";
							$dn = mysqli_query($conn, $cnt);
							$pri = mysqli_num_rows($dn);
						 ?>
						<a href="reviews.php"><?php echo $pri; ?> reviews</a>|<a href="rating.php">Add your review</a>
					</div>
						
					
           <?php 
           	if($ftch['qty']<=0)
           	{
           		echo '<div class="tag-sale">No</div>';
           		echo "";

           	}
           	else
           	{
           		
           	echo '	<a href="?add_cart='.$row_product['p_id'].'"><button type="button" class="site-btn"><i class="fa fa-shopping-bag" style="margin-right: 13px;"></i>	Add to Cart</button></a>';
           
           	}
            ?>
					
					</form>
					<br><br>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo $result['description']; ?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="assets/img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							 
							<div class="panel-header" id="headingThree">	
								
								<button class="panel-link active" data-toggle="collapse" data-target="#w" aria-expanded="false" aria-controls="collapse3">vendor details </button>
							</div>
							<div id="w" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">


									
									<h4><?php echo $vndrid; ?></h4>
									<p>hello vendor<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- Review and rating system start -->

	<hr>
	<?php

		if(isset($_SESSION['email']))
		{
			?>
				<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 contact-info">
					<h3>Rates & Reviews</h3>
					<!-- <div class="p-rating"> -->
					<!-- 	<label for="rating">Top Rating - </label>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div><br> -->
					<?php
					$em = $_SESSION['email'];

			$customer_order = "SELECT * FROM register WHERE email='$em'";
			$run_order = mysqli_query($conn, $customer_order);
			$f=mysqli_fetch_assoc($run_order);

			?>
						<form class="contact-form" method="POST">
						<input type="text" placeholder="Your name" name="name"   required >
						<input type="text" placeholder="Your e-mail" name="email"   required>
						<textarea placeholder="Message"	cols="3" rows="" name="message" required=""></textarea>
						<button type="submit" name="btn_rr" class="site-btn">ADD REVIEW</button>
					</form>
				</div>
			</div>
		</div>
	</section>
			<?php
		}
		else
		{
			?>
				<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 contact-info">
					<h3>Rates & Reviews</h3>
					<div class="p-rating">
						<label for="rating">Top Rating - </label>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div><br>

						<form class="contact-form" method="POST">
						<input type="text" placeholder="Your name" name="name" value="Please Login" disabled>
						<input type="text" placeholder="Your e-mail" name="email" v  disabled>
						<textarea placeholder="Message"	cols="3" rows="" name="message" disabled> </textarea>
						<a href="sign-in.php" class="site-btn">LOGIN TO POST</a>
					</form>
				</div>
			</div>
		</div>
	</section>
			<?php
		}

	 ?>
	
<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-12 pd-4">
						
					<h3>Recently Comments</h3>
						<br><br>
						<?php 
						  // $rid = $_POST['p_id'];

						  $sele = "SELECT * FROM rating_review WHERE p_id='$product_id' AND status='0'";
						  $h = mysqli_query($conn, $sele);

						  while($ro = mysqli_fetch_assoc($h))
						  {
						  	$name = $ro['r_name'];
						 		echo "<br><br>";
						  	$message = $ro['r_msg'];
						  	$date = $ro['r_time'];

						  	?>
						  	<h4> <i class='fa fa-user'> <?php echo $name ?>  -  <?php echo $date ?></h4></i>
						  	<br>
						  	<p><?php echo $message ?></p>
						  	<hr>
						  	

						  	<?php
						  	echo "<script> window.open('product.php'); </script>";
						  }

					 ?>
					 <br>
					</div>
				<!-- </div> -->
			</div>
		</div>
	<!-- Review and rating system end -->
	<br><br>
	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>

			</div>

			<div class="product-slider owl-carousel">
					<?php 
					$sele = "SELECT * FROM products WHERE category_name='$p_cat_id' ORDER BY rand() LIMIT 0,4";
					$sn = mysqli_query($conn, $sele);
					while($r = mysqli_fetch_assoc($sn))
					{
						?>
								<div class="product-item">
								<div class="pi-pic">
										
									<a href='product.php?p_id=<?php  echo $r['p_id']; ?>'><img src='admin/img/<?php echo $r['img']; ?>'></a>
									<div class="pi-links">
										<a href="?add_cart=<?php  echo $r['p_id']; ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="wishlist.php?wish=<?php echo $r['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>₹<?php echo $r['price']; ?></h6>
									<p><?php echo $r['product_name']; ?></p>
								</div>
							</div>
						<?php
					}
				 ?>
						
				</div>
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->
<?php 
	
	if(isset($_POST['btn_rr']))
	{
		if(mysqli_num_rows()>0)
		{
			?>
				<script>
					alert('Revade....');
				</script>
			<?php
		}
		else
		{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$ins = "INSERT INTO rating_review(r_name,r_email,r_msg,p_id,r_time,status) VALUES('$name','$email','$message','$product_id',NOW(),'0')";
		$run = mysqli_query($conn, $ins);

		if($run)
		{
			?>
				<script>
					alert('Review added Thank You....');
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert('Something Went Wrong....');
				</script>
			<?php
		}
	}
}
?>
<?php require_once 'inc/footer.php'; ?>