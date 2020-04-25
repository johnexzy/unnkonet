<?php
require_once '../../php/dbconnect.php';
// $cat = $_REQUEST['category'];
$cat = "NEWS";
$query = "SELECT * FROM `news` WHERE `category` = '$cat' ORDER BY `id` DESC";
$query = $DBcon->query($query);
$response = array();
$comments = array();
function getCom($tagname)
{
    require '../../php/dbconnect.php';
    $comms = array();
    $commsvalue = array();
    $query = "SELECT * FROM `comment` WHERE `tag` = '$tagname' ORDER BY `id` DESC";
    $querycom = $DBcon->query($query);
    $numcomm = 0;

    //return $querycom;
    while ($rowcom = $querycom->fetch_assoc()) {
        $numcomm += 1;
        $comms[] = $rowcom;
    }
     $commsvalue[] = $comms;
     $commsvalue[] = $numcomm;
     return $commsvalue;
}
while ($row = $query->fetch_assoc()) {
    $tag = $row["tag"];
    $comments = getCom($tag);
    $row += ["comments" => $comments[0], "NumComments" => $comments[1]];
    $response[] = $row;
}
$now = json_encode($response);
echo $now
?>
