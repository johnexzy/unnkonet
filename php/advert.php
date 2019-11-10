<?php
	$_string = "<div class='list_carousel'>";
	$_string .= "<div class='carousel_nav'>";
	$_string .= "<a class='prev' id='car_prev3' href='#'><span>prev</span></a>";
	$_string .= "<a class='next' id='car_next3' href='#'><span>next</span></a>";
	$_string .= "</div>";
	$_string .= "<div class='clearfix'>";
	$_string .= "</div>";
	$_string .= "<ul id='recent-projects3'>";
	include_once 'config.php';
	$query = "SELECT * FROM `advert`  \n" . " ORDER BY `id` DESC";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$_string .= "<li><form action='adverts/view.php' enctype='multipart/form-data' method='GET'><div class='featured-projects'><div class='featured-projects-image'><a href='views/adverts/view.php?id=$row[id]&getadvertinfo=read+more'><img src='admin/homepages/$row[image]' alt=''  width='300px' height='200px'></a></div><div class='featured-projects-content'><input type='hidden' value='$row[id]' name='id' ><input type='submit' name='getadvertinfo' class='' style='cursor:pointer' value='read more' ><p>$row[header]</p></div></div></form></li>";
	}
	$_string .= "</ul>";
	$_string .= "<div class='clearfix'><br><br>";
	$_string .= "</div>";
	$_string .= "</div>";
	echo $_string;
?>