<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<?php require_once 'functions/function.php'; ?>

	<section class="contact-section">
				<div class="container">
						<div class="row">
							<div class="col-lg-12 contact-info">
								<h3>Your Order History</h3>
								<?php view_order();  ?>
									
									<br>

								 <table class="table table-hover d">
				                      <thead>
				                        <tr>
				                          <th>Order No.</th>
				                          <th>Due Amount</th>
				                          <th>Invoice No.</th>
				                          <th>Products</th>				                          
				                          <th>Payment Date</th>
				                          <th>Paid/Unpaid</th>
				                          <th>Status</th>
				                          <th>Action</th>
				                        </tr>
				                      </thead>
				                      <?php 
				                      $em = $_SESSION['email'];

												$customer_order = "SELECT * FROM register WHERE email='$em'";
												$run_order = mysqli_query($conn, $customer_order);

												$row_order = mysqli_fetch_array($run_order);
				                      			$cid = $row_order['user_id'];
												$get = "SELECT * FROM orders WHERE customer_id='$cid'";
												$run = mysqli_query($conn,$get);
												$i=0;
												while ($row_now = mysqli_fetch_array($run)) {
													$order_id = $row_now['order_id'];
													$due_amout = $row_now['due_amount'];
													$invoice_no = $row_now['invoice_no'];
													$product = $row_now['total_products'];
													$date = $row_now['order_date'];
													$o_status = $row_now['order_status'];
													$i++;
													if($o_status=='Pending')
													{
														$o_status='<p style="color: red;">Unpaid</p>';
													}
													else
													{
														$o_status='<p style="color: green;">Paid</p>';
													}

													?>

													<tr>
								                      	<td><?php echo $i ?></td>
								                      	<td>₹<?php echo $due_amout ?></td>
								                      	<td><?php echo $invoice_no ?></td>
								                      	<td>x <?php echo $product ?></td>
								                      	<td><?php echo $date ?></td>
								                      	<td style='color: Red'><?php echo $o_status ?></td>
								                      	<?php 
								                      		if($row_now['order_status']=='Complete')
								                      		{
								                      			?>
								                      				<td><a href='/' onclick="return false;" style='color: #C76969'>Complete</a></td></td>
								                      			<?php
								                      		}
								                      		else
								                      		{
								                      			?>
								                      			<td><a href='confirm_payment.php?order_id=<?php  echo $order_id ?>' style='color: red'>Pay Now</a></td></td>
								                      			<?php
								                      		}
								                      	 ?>
								                      
								                      		<?php 
								                      		if($row_now['order_status']=='Complete')
								                      		{
								                      			?>
								                      				<td class='total-col'><a  href='functions/delorder.php?order_id=<?php echo $order_id; ?>'><i class='fa fa-trash' style='font-size: 24px; margin-left: 12px; color: #CF5B97;'></a></i></td>
								                      			<?php
								                      		}
								                      		else
								                      		{
								                      			?>
								                      			<td class='total-col'><a  href="#" onclick="return false;"><i class='fa fa-trash' style='font-size: 24px; margin-left: 12px; color: red;'></a></i></td>
								                      			<?php
								                      		}
								                      	 ?>
								                      
					                     			 </tr>

													<?php
												}
									?>
				                  </table>
				                  <br><br><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div> -->
	</section>
        

<?php require_once 'inc/footer.php'; ?>