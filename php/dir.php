<?php
$directory = opendir('../');
echo "Files are:<br>\n";
$x = 0;
while ($file = readdir($directory)) {
    if (chown($file, "john")) {
         $x = $x + 1;
    }
    else{}
    echo "$file <br>\n";
}
echo $x;

$sfsf = [];
array_fill_keys([1,2,3], $sfsf);
