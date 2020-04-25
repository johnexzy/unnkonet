<?php
// require '../php/newsindex.php';
function getStat($user)
{   
    require '../php/dbconnect.php';
    // require '../php/timeline.php';
    $datebefore = strval(date("Y-m-d H:i:s", strtotime("last Sunday")));
    
    $dateAfter = strval(date("Y-m-d H:i:s", strtotime("next Sunday")));
    $stats = 0;
    $query = "SELECT * FROM `news` WHERE `Writer` = '$user' AND `timestamps` >= '$datebefore' AND `timestamps` <= '$dateAfter'";
    $query = $DBcon->query($query);
    $stats += $query->num_rows;

    $query = "SELECT * FROM `entertainment` WHERE `Writer` = '$user' AND `current` >= '$datebefore' AND `current` <= '$dateAfter'";
    $query = $DBcon->query($query);
    $stats += $query->num_rows;

    $query = "SELECT * FROM `showcase` WHERE `Writer` = '$user' AND `timestamps` >= '$datebefore' AND `timestamps` <= '$dateAfter'";
    // $query = "SELECT * FROM `showcase` WHERE `Writer` = '$user'";
    $query = $DBcon->query($query);
    $stats += $query->num_rows;

    $query = "SELECT * FROM `advert` WHERE `Writer` = '$user' AND `current` >= '$datebefore' AND `current` <= '$dateAfter'";
    $query = $DBcon->query($query);
    $stats += $query->num_rows;

    $query = "SELECT * FROM `audioupload` WHERE `Writer` = '$user'";
    $query = $DBcon->query($query);
    $stats += $query->num_rows;

    return $stats;
}
require_once '../php/dbconnect.php';
$response = [];
$names = [];
$statArr = [];
$query = "SELECT * FROM `admin` WHERE `firstname` != 'NULL' AND `lastname` != 'NULL'";
$query = $DBcon->query($query);

while ($row = $query->fetch_assoc()) {
    $name = $row["lastname"] . " " . $row["firstname"];
    // $comments = getCom($tag);
    //     $row += ["comments" => $comments[0], "NumComments" => $comments[1]];
    $names[] = $row["firstname"];
    $statArr[] = getStat($name);
}
$response[0] = $names;
$response[1] = $statArr;
$now = json_encode($response);
echo $now
?>
