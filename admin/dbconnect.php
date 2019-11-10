<?php
	 $DBhost = $sever;
	 $DBuser = $username;
	 $DBpass = $dbpass;
	 $DBname = $database;
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
?>