<?php

	$conn = mysqli_connect("localhost","root","","shopfair");

	if(!$conn)
	{
		header("Location:404.php");
	}

 ?>