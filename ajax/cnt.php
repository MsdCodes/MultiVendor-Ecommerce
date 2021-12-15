<?php require_once 'conf.php';
	  require_once 'func.php'; 

	if(isset($_SERVER['REQUEST_METHOD'])=='POST')
	{
		$name = safe_value($conn, $_POST['Name']);
		$email = safe_value($conn, $_POST['Email']);
		$subject = safe_value($conn, $_POST['Subject']);
		$message = safe_value($conn, $_POST['Message']);

		$qry = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";

		$run = mysqli_query($conn, $qry);

		if($run)
		{
			echo "Thanks for the contact us :)";
		}

	}

?>