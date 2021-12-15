<?php require_once("inc/header.php"); ?>
<?php require_once 'functions/function.php'; ?>
<?php require_once("functions/db-confing.php"); ?>



<?php require_once("inc/nav.php"); ?>
<div class="page-top-info">
  <!-- <div class="container"> -->
 	 			<?php

					$search = $_POST['search'];

					$qru = "SELECT * FROM products WHERE keywords LIKE '%$search%' OR product_name LIKE '%$search%'";
					$res = mysqli_query($conn, $qru);

					$cnt = mysqli_num_rows($res);
					echo '<h5 style="margin-left: 100px; ">About '.$cnt.' results</h5>';
					if($cnt>0)
					{
						while($row=mysqli_fetch_array($res))
						{
							$p_id = $row['p_id'];
							$product_name = $row['product_name'];
							$img = $row['img'];
							$price = $row['price'];

						}
					}
							?>

  </div>
</div>

<section class="category-section spad">
		<div class="container">
			<div class="row">

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php

					$search = $_POST['search'];

					$qru = "SELECT * FROM products WHERE keywords LIKE '%$search%' OR product_name LIKE '%$search%'";
					$res = mysqli_query($conn, $qru);

					$cnt = mysqli_num_rows($res);
					// echo '<h5 style="margin-left: 100px; ">About '.$cnt.' of results</h5>';
					if($cnt>0)
					{
						while($row=mysqli_fetch_array($res))
						{
							$p_id = $row['p_id'];
							$product_name = $row['product_name'];
							$img = $row['img'];
							$price = $row['price'];


							?>

					<!-- <div class='text-center w-100 pt-3'> -->
							<div class='col-lg-4 col-sm-12'>
										<div class='product-item'>
											<div class='pi-pic'>
												<!-- <div class='tag-sale'>ON SALE</div> -->
													<a href='product.php?p_id=<?php echo $p_id ?>'><img src='admin/img/<?php echo $row['img'] ?>'></a>
												<div class='pi-links'>
													<a href='?add_cart=<?php  echo $p_id ?>' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
													<a href='wishlist.php?wish=<?php echo $row['p_id']; ?>' class='wishlist-btn'><i class='flaticon-heart'></i></a>
												</div>
											</div>
										<div class='pi-text'>
											<h6> ₹<?php echo $row['price'] ?> </h6>
												<a href='product.php'><p> <?php echo   $row['product_name']  ?></p></a>
										</div>
									</div>
								</div>
								
								

								<?php
							}
						}
						else
						{
							echo "<h3> No Products Found ! </h3>";
						}

					 ?>

							<!-- <button class="site-btn sb-line sb-dark">LOAD MORE</button> -->
						<!-- <div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

<?php require_once("inc/footer.php");