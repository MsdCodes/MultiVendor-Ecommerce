<?php 
	
	require_once 'functions/db-confing.php';
	require_once 'functions/function.php';
	session_start();
	if(isset($_GET['mail']))
	{
		$mail = $_SESSION['email'];
		$q = "DELETE FROM register WHERE email='$mail'";
		$run = mysqli_query($conn, $q);

		if($run)
		{
			session_destroy();
			?>
				<script>
					alert('Account deleted Successfully');
				</script>
			<?php
			header('location: index.php');
		}
		else
		{
			echo "<script> alert('Failed Bhai ! Sorry'); </script>";
		}
	}
	else
	{
		?>
			<script>
				alert('an error');
			</script>
		<?php
	}
	

	

?>