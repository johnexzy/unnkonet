<?php
$directory = opendir('../');
echo "Files are:<br>\n";
$x = 0;
while ($file = readdir($directory)) {
    echo "$file <br>\n";
}
// echo $x;

// $sfsf = [];
// array_fill_keys([1,2,3], $sfsf);
