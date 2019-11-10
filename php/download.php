<?php
	include_once 'config.php';
    $query = "SELECT * FROM `audioupload`  ";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	$_string = "<div class='c9'><h1 class='subtitles'>MUSIC OF THE WEEK</h1>";
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$_string .= "$row[nameofaudio]</div>";
		$_string .= "<div class='c3 text-center' style='margin-top:40px;'>";
		$_string .= "<a href='admin/homepages/$row[audiofile]' download>";
		$_string .= "<div class='actionbutton'>";
		$_string .= "<i class='icon-download-alt'></i> DOWNLOAD NOW";
		$_string .= "</div>";
		$_string .= "</a>";
	}
	$_string .= "";
	echo $_string;
?>