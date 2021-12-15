<?php 
	include 'conf.php';
	if($_GET['id'])
	{
		$id = $_GET['id'];

		$sql = "DELETE FROM cart WHERE msg_id='$id'";
		if($conn->query($sql)===TRUE)
		{
			echo "DONE";
		}
		else
		{
			echo "FILE";
		}
	}

?>