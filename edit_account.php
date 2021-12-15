<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<?php require_once 'functions/function.php'; ?>

<?php 

	

?>

<div class="page-top-info">
		<div class="container">
			<h4>My Account</h4>
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

						$name = $row_customer['name'];

						

					?>
					<div id="error_msg"></div>
					<div id="success_msg"></div>
					<form class="contact-form" method="POST">
						
						<input type="text" placeholder="change your name" name="nm" value="<?php echo $row_customer['name']; ?>">
						<input type="text" placeholder="change your e-mail" name="mail" value="<?php echo $user_session; ?>">
						<br><br>
						<p style="color: black"><span style="color: red">Notice: </span>Please Login Again After Change Your E-mail And Username !</p>
						<br>
						<button type="submit" name="btn_changes" id="btn_contact" class="site-btn">SAVE CHANGES</button><br><br>

						<h5><a href="delete_account.php?mail=<?php echo $name; ?>" onclick='return onl();' style="color: red"><i class="fa fa-trash"></i>  Delete Your Account</a></h5>

						<br><br><br><br><br><br>
					</form>
					</div>							
				</div>
			</div>
		</div>

<?php 

	if(isset($_POST['btn_changes']))
	{	
		$em = $_SESSION['email'];
		$customer_order = "SELECT * FROM register WHERE email='$em'";
		$run_order = mysqli_query($conn, $customer_order);

		$row_order = mysqli_fetch_array($run_order);

		$cid = $row_order['user_id'];

		$nm = $_POST['nm'];
		$mail = $_POST['mail'];

		$edit = "UPDATE register SET name='$nm', email='$mail' WHERE user_id='$cid'";

		$edi = mysqli_query($conn, $edit);

		if($edi)
		{
			?>
				<script>
					$_SESSION['status'] = "Sucesy";
			$_SESSION['status_code'] = "success";					
				</script>
			<?php
		}
	}
	
?>
<?php 

	

?>
<script>
	function onl()
	{
		return confirm('Do You Want To Delete Your Account ?');
	}
</script>
<?php require_once 'inc/footer.php'; ?>
