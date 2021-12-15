<?php

	session_start();
	session_destroy();
	?>
		<script>
			alert('You are logged out');
		</script>
	<?php
	echo "<script> window.open('index.php','_self'); </script>";

?>