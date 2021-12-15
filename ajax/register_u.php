<?php require_once 'conf.php';
	  require_once 'func.php'; 

	if(isset($_SERVER['REQUEST_METHOD'])=='POST')
	{

		$name = safe_value($conn, $_POST['Name']);
		$email = safe_value($conn, $_POST['Email']);
		$password = safe_value($conn, $_POST['Password']);
		
		$qry = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn, $qry);

		if(mysqli_num_rows($result))
		{
			echo "Email Has Exists";
		}
		else
		{
			
			$qry = "INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";

			$run = mysqli_query($conn, $qry);

			if($run)
			{
				echo "You have Registered Successfully.. Now You can Login <a href='sign-in.php'>Sign-In Now</a>";
			}
		}

		

	}

?>