<?php
	$nowd = date('d') ;
	$nowm = date('m') ;
	$datetoday = ($nowd."/".$nowm);
	include_once 'config.php';
    $query = "SELECT * FROM `birthday`";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	$string = "DATE : ".$datetoday;
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		if($datetoday == "$row[bday]"){
			$string .= "<li><div class='c5' style='margin:0 20px 10px 0;".
						"background: url(images/birthday/1.jpg);".
						"background-size:100% 400px; min-height:400px;".
						" background-repeat:no-repeat'><img src='$row[avatar]'".
						" class='' style='width:44%; height:148px; position:relative;".
						" left:52%; top:173px; border-bottom-right-radius:20px; border-bottom-left-radius:20px' alt=''><i style=' position: relative;".
						" color:blue; left:10%; z-index:1000; top:200px;".
						" font-family: Arial;font-size:20px;'>".
						"$row[FULLNAME]</i></div></li>";
		}
	}
	echo $string;
?>