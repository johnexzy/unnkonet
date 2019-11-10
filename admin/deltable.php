<?php
	require_once '../php/config.php';
	if (isset($_REQUEST['id'])) {
		
		$id = intval($_REQUEST['id']);
		$query = "DELETE FROM `pricing` WHERE `pricing`.`id` = :id";
        $stmt = $DBcon->prepare( $query );
        
        if ($stmt->execute(array(':id'=>$id))) {
            $query = "SELECT * FROM `pricing`  \n" . " ORDER BY `id` DESC";
                    $stmt = $DBcon->prepare( $query );
                    $stmt->execute();
                    $display_string = "";
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        $display_string .= "<tr>";
                        $display_string .= "<td><button type='submit' data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[packagename]'> </td>";
                        $display_string .= "<td>N<input type='number' class='input-small-number' value='$row[value]'></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[duration]'></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[signature]'></td>";
                        $display_string .= "<td> <button>OVERRIDE</button> </td>";
                        $display_string .= "</tr>";
                    }
                    
                    echo $display_string;
        }
	}