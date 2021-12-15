<?php require_once("inc/header.php"); ?>
<?php require_once("inc/nav.php"); ?>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Contact</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Contact</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 contact-info">
					<h3>Get in touch</h3>
					<p>Lathi Road, Amreli</p>
					<p>+91 63524 39633</p>
					<p>sanjaymakwana1183@.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					<div id="error_msg"></div>
					<div id="success_msg"></div>
					<form class="contact-form" method="POST">
						<input type="text" placeholder="Your name" id="name">
						<input type="text" placeholder="Your e-mail" id="email">
						<input type="text" placeholder="Subject" id="subject">
						<textarea placeholder="Message" id="message"></textarea>
						<button type="button" id="btn_contact" class="site-btn my-3">SEND NOW</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
	
<?php require_once("inc/footer.php"); ?>