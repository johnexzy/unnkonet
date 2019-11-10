<?php
	include "env.php";
	$DBcon = new PDO("mysql:host=$sever;dbname=$database", $username, $dbpass);
	//echo "connected";
?>