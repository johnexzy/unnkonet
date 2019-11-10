<?php
	function getData($cat, $Currentid=0)
	{
		include "config.php";
		$DBhost = $sever;
		$DBuser = $username;
		$DBpass = $dbpass;
		$DBname = $database;

		$DBconn = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
		if ($DBconn->connect_errno) {
			die("ERROR : -> ".$DBconn->connect_error);
		}
		$nowd = date('d') ;
		$nowm = date('m') ;
		$nowy = date('Y') ;
		$datetoday = ($nowy.$nowm.$nowd) * 1;
		$query = "SELECT * FROM news WHERE category = '$cat' \n" . " ORDER BY `id` DESC";
		$stmt = $DBcon->prepare( $query);
		$stmt->execute();
		$len = 0;
		$showupdate = "<div class='nopadding noborder' style='font-size:20px; padding:20px'>" ;
		while($row=$stmt->fetch(PDO::FETCH_BOTH)){ //FETCH_BOTH indexes both the Colunmn name and Column Number
			$len += 1;
			if($len == 9){
				break;
			}
			if ($row[0] == $Currentid) {
				continue;
			}
			$showupdate .= "<p><i class='icon-external-link'></i>&nbsp;<a href='http://localhost/www/myapp/views/news/view.php?id=$row[id]' style='width:100%; background:#3b5598; color:#fbfbfb;font-family:cursive' id='news'>$row[headline]</a></p>";

		}
		$showupdate .= "<div class='newscale link' style='font-size:15px'><i class='icon-external-link'></i>&nbsp;<a href='timeline.php'>view more news</a></div>";
		$showupdate .= "</div>";
		return $showupdate;
	}
	// echo(getData("NEWS"));
	// echo(getData("SPORTS"));
	// echo(getData("CAMPUS"));
?>
