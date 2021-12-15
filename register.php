<?php require_once("inc/header.php"); ?>
<?php require_once("inc/nav.php"); ?>
<div class="page-top-info">
		<div class="container">
			<h4>Register</h4>
		<div class="site-pagination">
			<a href="index.php">Home</a> /
			<a href="register.php">Register</a>
		</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 my-5">
					<div class="section-title">
						<h3>SIGN UP</h3>
					</div>
					<br><br>
					<form class="contact-form from-group" method="POST">
						<div id="error"></div>
						<div id="success_msg"></div>
						<input type="text" placeholder="Your name" id="name" required>
						<input type="text" placeholder="Your e-mail" id="email" required="">
						<input type="password" placeholder="Password" id="password" required="">
						<input type="password" placeholder="Confirm Password" id="cpassword" required="">
						<button type="button" class="site-btn my-3 btn-block" id="btn_register">Sign Up</button>
						</center>
					</form>
					<p>Already have an account ? <a href="sign-in.php">Sign In Now</a></p>
				</div>
			</div>
		</div>

<?php require_once("inc/footer.php"); ?>