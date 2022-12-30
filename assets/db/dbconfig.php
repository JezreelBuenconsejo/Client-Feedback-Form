<?php
	define('ROOT_URL', '');
	define('DB_HOST', 'containers-us-west-125.railway.app:5732');
	define('DB_USER', 'root');
	define('DB_PASS', 'm1Nh8CUdnqJoRO70lHFv');
	define('DB_NAME', 'railway');
    // Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
		
	}
?>