<?php
    require_once '../../php/dbconnect.php';
    $cat = $_REQUEST['category'];
    $query = "SELECT * FROM `news` WHERE `category` = '$cat' ORDER BY `id` DESC";
    // $stmt = $DBcon->prepare( $query );
    // $stmt->execute();
    // $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $query = $DBcon->query($query);
    $response = array();
    while($row=$query->fetch_assoc()){
        $response[] = $row;
    }
    $now = json_encode($response);
    // if($now) echo $now;
    // else {
    //     "Failed";
    // }
    echo $now
?>