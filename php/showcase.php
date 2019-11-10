<?php
		$query = "SELECT * FROM `showcase`  \n" . " ORDER BY `id` DESC";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute();
		$display_string =  "<div class='flexslider Main'><p style='text-align:center; ' class='loading'><img src='images/loader.gif' height='50px' width='50px'></p>";
		$display_string .= "<ul class='slides addon'>";
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			$display_string .= "<li class='face'>";
			$display_string .= "<form action='view.php' enctype='multipart/form-data' method='GET'>";
			$display_string .= "<div class='c5 face-head'>";
			$display_string .= "<h2>$row[header]</h2><br><br>";
			$display_string .= "<p>".substr("$row[msg]", 0, 58)."...</p><br> <br>";
			$display_string .= "<input type='hidden' value='$row[id]' name='id' >";
			$display_string .= "<input type='submit' name='getpage' class='face-link' style='' value='read more' >";
			$display_string .= "</div>";
			$display_string .= "<div class='face-img'>";
			$display_string .= "<a href='view.php?id=$row[id]&getpage=read+more'><img style='border-radius:20px' src='admin/homepages/$row[image]'></a>";
			$display_string .= "</div>";
			$display_string .= "</form>";
			$display_string .= "</li>";
		}
		$display_string .= "</ul>";
		$display_string .= "</div>";
		echo $display_string;
?>