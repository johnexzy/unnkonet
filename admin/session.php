<?php
session_start();

include_once 'dbconnect.php';

if (!isset($_SESSION['admin'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM admin WHERE id=".$_SESSION['admin']);
$userRow=$query->fetch_array();
$DBcon->close();

?>