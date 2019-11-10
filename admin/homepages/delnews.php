<?php
	require_once '../../php/config.php';
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "DELETE FROM `news` WHERE `news`.`id` = :id";
        $stmt = $DBcon->prepare( $query );
        if($stmt->execute(array(':id'=>$id))){
			$query = "SELECT * FROM `news`  \n" . " ORDER BY `id` DESC";
			$stmt = $DBcon->prepare( $query );
			$stmt->execute();
			$display_string = "<div>";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				$display_string .= "<hr>";
				$display_string .= "<button data-id='$row[id]' id='getUser' class='btn btn-sm btn-info' ><i class='pe-7s-pen'></i> EDIT</button><span>&nbsp;|&nbsp;<button data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button>";
				$display_string .= "<div class='carol-large'>";
				$display_string .= "<textarea class='header-large' readonly>";
				$display_string .= "$row[headline]";
				$display_string .= "</textarea>";
				$display_string .= "<textarea class='msg-large-display' readonly>";
				$display_string .= "$row[body]";
				$display_string .= "</textarea>";
				$display_string .= "<img class='rowimage-small' src='$row[uploads]' alt='no upload'>";
				$display_string .= "</div>";
			}
			$display_string .= "</div>";
		}
        echo $display_string;
	}