<?php require_once 'conf.php';
	  require_once 'func.php'; 

	if(isset($_SERVER['REQUEST_METHOD'])=='POST')
	{

		$email = safe_value($conn, $_POST['Email']);
		$password = safe_value($conn, $_POST['Password']);
		
		$qry = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn, $qry);

		if($row=mysqli_fetch_assoc($result))
		{
			$desh = password_verify($password,$row['password']);
			if($desh==false)
			{
				echo "Wrong Password";
			}
			elseif($desh==true)
			{
				?>
				<script>
					window.open('cart.php');
				</script>
				<?php
			}
		}
		// else
		// {
		// 	$hash = password_hash($password, PASSWORD_DEFAULT);

		// 	$qry = "INSERT INTO register(name,email,password) VALUES('$name','$email','$hash')";

		// 	$run = mysqli_query($conn, $qry);

		// 	if($run)
		// 	{
		// 		echo "You have Registered Successfully.. Now You can Login <a href='sign-in.php'>Sign-In Now</a>";
		// 	}
		// }

		

	}

?>