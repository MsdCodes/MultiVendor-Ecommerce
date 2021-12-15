<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<?php include 'functions/db-confing.php'; ?>
<style>
	.rount{
	background-color: red;
	border-radius: 340px;
	align-items: center;
}
</style>
<br>
		
			<h3 class="text-center" style="margin-left: 50px;">No Subscription Required ! Free Account</h3>
			<hr><br>
	
		
		<?php 
			if(isset($_POST['seller']))
			{

				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$city = $_POST['city'];
				$shop = $_POST['shop'];
				$pincode = $_POST['pincode'];
				$msg = $_POST['msg'];

				$shop_img = $_FILES['shop_img']['name'];
			      $type = $_FILES['shop_img']['type'];
			      $tmp_name = $_FILES['shop_img']['tmp_name'];
			      $size = $_FILES['shop_img']['size'];

			      $img_ext = explode('.', $shop_img);
			      $img_core_ext = strtolower(end($img_ext));
			      $allow = array('jpg','png','jpeg');
			      $path = "assets/img/shop_image/".$shop_img;
			       move_uploaded_file($tmp_name, $path);

			       $banner = $_FILES['banner']['name'];
			      $type = $_FILES['banner']['type'];
			      $tmp_name = $_FILES['banner']['tmp_name'];
			      $size = $_FILES['banner']['size'];

			     
				$qry = "INSERT INTO seller(name,email,shop,shop_img,password,city,pincode,msg,status) VALUES('$name','$email','$shop','$shop_img','$password','$city','$pincode','$msg','0')";
				$qry_run = mysqli_query($conn, $qry);
				// die($qry);
				if($qry_run)
				{
					?>
						<script>
							alert('Please Wait For The Administrator Approvel');
							window.open('seller.php','_self');
						</script>
					<?php
				
				}
			}

		?>
					<form class="contact-form" method="POST" enctype="multipart/form-data">
						<div class="col-lg-6 contact-info" style="margin-left: 400px;">
					<!-- <h3>Register Here</h3> -->
						

						<input type="text" name="name" placeholder="Your name" required>
						<input type="email" name="email" placeholder="Your e-mail" required>
						<input type="password" name="password" placeholder="Your Password" required>
						<input type="text" name="city" placeholder="city" required>
						<input type="text" name="shop" placeholder="shop name" required>
						<input type="file" name="shop_img" placeholder="shop name" required>
					<!-- 	<label for="files" style="color: red;">* For Banner</label>
						<input type="file" name="banner"> -->
						<input type="number" name="pincode" placeholder="Pincode" required>
						<input type="text" name="msg" placeholder="Message" required>
						<div class="col-lg-12 card-right">
						<button type="submit" name="seller" class="site-btn my-3" >Sign Up</button>
					</div>
					
						<h5 class="text-center m-3">Already Have an account ?  <a href="admin/vendor.php">Login</a></h5>

					</form>
					
					

					</div>

			<?php include 'inc/footer.php'; ?>