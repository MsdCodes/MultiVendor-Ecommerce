<?php require_once("inc/header.php"); ?>
<?php 
	session_start();
	if(!isset($_SESSION['email']))
	{
		?>
		 <script>window.location= 'sign-in.php';</script>
		<?php
	}
	else
	{
		?>
		 <script>window.location= 'checkout.php';</script>
		<?php
	}

?>
