<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<?php require_once 'functions/function.php'; ?>

<?php 

	

?>

<div class="page-top-info">
		<div class="container">
			<h4>CHANGE YOUR PASSWORD</h4>
			<div class="site-pagination">
			</div>
		</div>
	</div>

	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Hello Mr. <?php echo $_SESSION['email']; ?></h3>

					<?php 	

						$user_session = $_SESSION['email'];

						$get_customer_info = "SELECT * FROM register WHERE email='$user_session'";

						$run_customers = mysqli_query($conn, $get_customer_info);

						$row_customer = mysqli_fetch_array($run_customers);

						if(isset($_POST['pass_change']))
						{

						$new_pass = $_POST['new_pass'];

						$update = "UPDATE register SET password='$new_pass' WHERE email='$user_session'";
						$nf = mysqli_query($conn, $update);

					
					}
						

					?>
					<div id="error_msg"></div>
					<div id="success_msg"></div>
					<form class="contact-form" method="POST">
						<input type="text" placeholder="user email" name="current" value="<?php echo $user_session ?>" disabled>
						<input type="text" placeholder="New Password" name="new_pass" required>
						<br><br>
						<button type="submit" id="btn_contact" name="pass_change" class="site-btn">CHANGE PASSWORD</button><br><br>
						<br><br><br><br><br><br>
					</form>
					</div>
				</div>
			</div>
		</div>


<?php require_once 'inc/footer.php'; ?>
