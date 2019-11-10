<?php
	require_once '../../php/config.php';
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "DELETE FROM `showcase` WHERE `showcase`.`id` = :id";
        $stmt = $DBcon->prepare( $query );
		if($stmt->execute(array(':id'=>$id))){
			$query = "SELECT * FROM `showcase`  \n" . " ORDER BY `id` DESC";
			$stmt = $DBcon->prepare( $query );
			$stmt->execute();
			$display_string = "<div>";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				$display_string .= "<hr>";
				$display_string .= "<button data-id='$row[id]' id='getUser' class='btn btn-sm btn-info' ><i class='pe-7s-pen'></i> EDIT</button><span>&nbsp;|&nbsp;<button data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button>";
				$display_string .= "<div class='carol'>";
				$display_string .= "<div class='header'>";
				$display_string .= "$row[header]";
				$display_string .= "</div>";
				$display_string .= "<div class='msg'>";
				$display_string .= substr("$row[msg]", 0, 120)."<b>...</b>";
				$display_string .= "</div>";
				$display_string .= "<img class='rowimage' src='$row[image]'>";
				$display_string .= "</div>";
			}
			$display_string .= "</div>";
			echo $display_string;
		}  
	} 