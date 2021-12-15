<?php require_once("inc/header.php"); ?>
<?php require_once("functions/function.php"); ?>

<?php require_once("inc/nav.php"); ?>
 
<style>
	
#btn {
  background: transparent;
  box-shadow: 0px 0px 0px transparent;
  border: 0px solid transparent;
  text-shadow: 0px 0px 0px transparent;
  text-align: center;
  color: #F2097C;
}

#btn:hover {
  background: transparent;
  box-shadow: 0px 0px 0px transparent;
  border: 0px solid transparent;
  text-shadow: 0px 0px 0px transparent;
}

#btn:active {
  outline: none;
  border: none;
}

#btn:focus {
  outline: 0;
}
#d{
		width: 94px;
	height: 36px;
	border: 1px solid #ddd;
	padding: 0 15px;
	border-radius: 40px;
	float: left;
}
</style>
 
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="index.php">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php 
					$selling_price = "SELECT * FROM cart WHERE ip_add='1'";
								$run_selling = mysqli_query($conn, $selling_price);
								$nm = mysqli_num_rows($run_selling);

								if($nm>0)
								{

								?>
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<form action="cart.php" method="POST" enctype="multipart/form-data">
							<table>
							<thead>
								<tr>
									<th class="product-th">product</th>
									<th class="quy-th">Quantity</th>
									<th class="total-th">price</th>
									<th class="total-th">Remove</th>
									<th class="total-th">Update</th>
								</tr>
							</thead>
							<tbody>
								<?php
								
							$ip = getRealIpAddr();

								$total = 0;


								$selling_price = "SELECT * FROM cart WHERE ip_add='1'";
								$run_selling = mysqli_query($conn, $selling_price);
								$nm = mysqli_num_rows($run_selling);
								


								while($row = mysqli_fetch_assoc($run_selling))
								{
									
									$pro_id = $row['p_id'];
									$p = $row['id'];
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

								 "₹" . $total;

?>
								<tr>
									<td class='product-col'>
										<img src='admin/img/<?php echo $img; ?>' height='80px' width='100px'>
										<div class='pc-title'>
											<h4><?php echo $prod_title; ?></h4>
											<p>₹<?php echo $p_price; ?></p>
										</div>

									</td>
									<td class='quy-col'>
										<div class='quantity'>
					                       	 
					                       	 	<form method="POST">
					                       	 	<input type="hidden" name="id" value="<?php echo $p ?>">
					                       	 	<input type="hidden" name="mul">
												<input type='text' class="text-center" id="d" name="qty" value='<?php echo $qty; ?>'>
												
											</form>
										<?php

											if(isset($_POST['qtyyy']))
											{
											  if($qty<0)
											  {
											  	?>
											  		<script>
											  			alert('No Available');
											  		</script>
											  	<?php
											  }
											  else{
											  		$que = $_POST['qty'];
												$id = $_POST['id'];

												$ud = "UPDATE cart SET qty='$que' WHERE id='$id'";
												$qryr = mysqli_query($conn, $ud);
												if($qryr)
												{
													header('location:cart.php');
												}
												else
												{
													echo "<script>alert('NO')<script/>";
												}
											  }

											
											}


										 ?>
                    		</div>
									</td>						
									<td class='total-col'><h4>₹<?php $sum = 0; $mul = $qty * $p_price; echo $mul; $sum = $sum + $mul; ?></h4></td>
									<td class='total-col'><a  href='functions/deletecart.php?id=<?php echo $pro_id; ?>'><i class='fa fa-trash' style='font-size: 24px; color: #F2097C;'></a></i></td>

									<td class="total-col"><input type="submit" name="qtyyy" id="btn" value="Update" style="font-size: 21px;"></td>
									<!-- <td><input type="submit"  name="qtyyy" class="total-col" id="btn"><i class="fa fa-refresh" style='font-size: 21px; color: #F2097C;'></i></td> -->
								</tr>
								<?php
								}
						

							}
						
						

							?>	
							</tbody>
						</table>
						</form>
						</div>
						<div class="total-cost">
							<h6>Total <span>₹<?php echo $mul; ?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-12 card-right">
					<!-- <form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form> -->
					<br><br>
					<a href="payment.php" class="site-btn">Proceed to checkout</a>
					
				</div>
				<div class="col-lg-12 card-right">
					<a href="category.php" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
			<?php 
					}
						else
						{
							?>
								<center>
								<img src="assets/img/empty.png" height="150px" alt="Cart Is Empty"><br>
								<h3 class="text-center" style="color: transparent; text-shadow: 0 0 5px rgba(1, 0, 0, 0.5);">Your Cart is Empty</h3>
								</center>
							<?php
						}
						?>
		</div>
	</section>
	<br><br>
<?php require_once("inc/footer.php"); ?>	