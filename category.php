<?php require_once("inc/header.php"); ?>
<?php require_once 'functions/function.php'; ?>	
<?php 
cart();  $ip = getRealIpAddr();
 ?>

<?php 

$cat_id=''; 

if(isset($_GET['id']))
	{ $cat_id = $_GET['id'];} 

$particular_product = main_page_product($cat_id); 

 ?>
<?php require_once("inc/nav.php"); ?>
	


<?php 
    if(isset($_GET['id'])){
      $p_cat_id = $_GET['id'];
      $g_p_c = "SELECT * FROM categories WHERE id='$p_cat_id' LIMIT 0,4";
      $r_p_c=mysqli_query($conn, $g_p_c);
      $row_p_catas=mysqli_fetch_array($r_p_c);
      $p_cat_title=$row_p_catas['cat_name'];
    }
?>

<?php 
	// $sl = "SELECT category_name, COUNT(*) AS count FROM products";
	// $f = mysqli_query($conn, $sl);
	// $nm = mysqli_num_rows($f);
 ?>
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Categories</h4>
			<div class="site-pagination">
				<a href="#">Home</a> /
				<?php 
					$rh = "SELECT * FROM categories";
					$rrn = mysqli_query($conn,$rh);
					$ro = mysqli_fetch_assoc($rrn);
					$p_tit = $ro['cat_name'];
				 ?>
				<a href="#"><?php echo $p_tit; ?></a>
			</div>
		</div>
	</div>
	
		<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h3 class="fw-title">Filter Products</h3>
						<h5 style="font-weight: 100;">Categories</h5>
						<ul class="category-menu">
							<?php 
								$select = "SELECT * FROM categories";
								$runn = mysqli_query($conn, $select);
								$nm = mysqli_num_rows($runn);

								

								while($row=mysqli_fetch_assoc($runn))
								{
									echo "<li><a href='category.php?id=".$row['id']."'>".$row['cat_name']." <span>$nm</span></a></li>";
								}
							 ?>
							
						</ul>
					</div>
					<!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
						<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
							<li><a href="#">Asos<span>(56)</span></a></li>
							<li><a href="#">Bershka<span>(36)</span></a></li>
							<li><a href="#">Missguided<span>(27)</span></a></li>
							<li><a href="#">Zara<span>(19)</span></a></li>
						</ul>
					</div> -->
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php

							if(mysqli_num_rows($particular_product))
							{

							while($row=mysqli_fetch_assoc($particular_product))
							{
								?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<!-- <div class="tag-sale">ON SALE</div> -->
									<a href="product.php?p_id=<?php  echo $row['p_id']; ?>"><img src="admin/img/<?php echo $row['img']; ?>"></a>
									<div class="pi-links">
										<a href="?add_cart=<?php echo $row['p_id']; ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="wishlist.php?wish=<?php echo $row['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>₹<?php echo $row['price']; ?></h6>
									<a href="product.php?p_id=<?php echo $row['p_id'] ?>"><p><?php echo $row['product_name']; ?></p></a>
								</div>
							</div>
						</div>
						<?php 
							}

						}
						else
						{
							echo "<h3 class='text-center' style='margin-left: 330px; margin-top: 100px;'> No Product In a Stock </h3>";
						}
						 ?>
					<div class="text-center w-100 pt-3">
						<?php 
							// $page = $_GET['page'];
							// if($page=="" || $page=="1")
							// {
							// 	$page1=0;
							// }
							// else
							// {
							// 	$page1=($page*5)-5;
							// }
						 ?>
						<?php 
							// $pag = "SELECT * FROM products";
							// $myqry = mysqli_query($conn, $pag);
							// $nming = mysqli_num_rows($myqry);
							// $bh = $nming/5;

							// echo ceil($bh);

							// for($n = 1; $n<=$bh; $n++)
							// {
								?>
								<!-- <a href="category.php?page=<?php echo $n; ?>" class="btn btn-light" style="border-radius: 50%; padding: 19px; margin-left: 3px;  background-color: #F9095E; color: white;"><?php echo $n; ?></a> -->
								<?php
							// }
						 ?>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

<?php require_once("inc/footer.php"); ?>