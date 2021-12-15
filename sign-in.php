<?php require_once("inc/header.php"); ?>
<?php require_once("inc/nav.php"); ?>
<?php require_once("functions/function.php"); ?>
	<div class="page-top-info">
		<div class="container">
			<h4>Sign In</h4>
		<div class="site-pagination">
			<a href="index.php">Home</a> /
			<a href="sign-in.php">Sign In</a>
		</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<?php login(); ?>
				<div class="col-lg-6 my-5">
					<div class="section-title">
						<h3>SIGN IN</h3>
					</div>
					<br><br>
						<div class="error"></div>
						<div class="success_msg"></div>
					<form class="contact-form form-group" method="POST">
					
						<input type="email" placeholder="Your Email" name="email">
						<input type="password" placeholder="Your Password" name="password">
						<button type="submit" name="btn_login" class="site-btn my-3 btn-block">Sign In</button>
						</center>
					</form>
					<p>Not have an account ? <a href="register.php"><b>Sign Up Free</b></a></p>
				</div>
			</div>
		</div>

<?php require_once("inc/footer.php"); ?>