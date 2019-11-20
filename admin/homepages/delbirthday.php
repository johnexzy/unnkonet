<?php
	require_once '../../php/config.php';
	if (isset($_REQUEST['id'])) {
		
		$id = intval($_REQUEST['id']);
		$query = "DELETE FROM `birthday` WHERE `birthday`.`id` = :id";
        $stmt = $DBcon->prepare( $query );
        
        if ($stmt->execute(array(':id'=>$id))) {
            $query = "SELECT * FROM `birthday`  \n" . " ORDER BY `id` DESC";
                    $stmt = $DBcon->prepare( $query );
                    $stmt->execute();
                    $display_string = "";
                    while($row=$stmt->fetch(PDO::FETCH_BOTH)){
                        $display_string .= "<tr><form action=''>";
                        $display_string .= "<td><button data-id='$row[0]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[1]' disabled> </td>";
                        $display_string .= "<td><input type='text' class='input-small' value='". FormMonth($row[3])."' disabled></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[2]' disabled></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[5]' disabled></td>";
                        //$display_string .= "<td><button type='submit' data-id='$row[0]' id='getUser' class='btn btn-sm btn-info' ><i class='pe-7s-pen'></i> OVERWRITE</button></td>";
                        $display_string .= "</form></tr>";
                    }

                    echo $display_string;
        }
	}