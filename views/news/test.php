<?php
 $stat = 0;
$x = 3;
$y = 9;
$z = 10;
 $stat = ($x > $y) ? $x : (($y > $z) ? $x : (($x == $y) ? $z : (($z == $y) ? $z : $y)));
$res = [];
$ee = false;
$res += [
    "hed" => "head",
    "bdy" => "body",
];
if (!isset($res["tail"])) {
    echo "john";
    if (!$ee) {
        echo $ee;
    }
}
echo $res["hedd"];