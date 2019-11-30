<?php
$directory = opendir('../');
echo "Files are:<br>\n";
while ($file = readdir($directory)) {
    if (is_dir($file)) {
        continue;
    }echo "$file <br>\n";
}