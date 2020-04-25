<?php
require '../../php/config.php';
$cat = $_REQUEST['category'];
//$cat = "NEWS";
$query = "SELECT * FROM `news` WHERE `category` = '$cat' ORDER BY `id` DESC";
$stmt = $DBcon->prepare($query);
$stmt->execute();
$response = array();
$comments = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $querycomment = "SELECT * FROM `comment` WHERE `tag` = '$row[tag]' ORDER BY `id` DESC";
    $st = $DBcon->prepare($querycomment);
    $st->execute();
    while ($corow = $st->fetch(PDO::FETCH_ASSOC)) {
        $comments[] = $corow;
    }
    $row += ["comments" => $comments];
    $response[] = $row;

}
echo (json_encode($response));
