<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mysqli_login";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (! $conn) {
    die('could not connect: '.mysql_error());
}
mysql_select_db($dbname);

$age = $_GET['age'];
$sex = $_GET['sex'];
$wpm = $_GET['wpm'];

$age = mysql_real_escape_string($age);
$sex = mysql_real_escape_string($sex);
$wpm = mysql_real_escape_string($wpm);

$query = "SELECT * FROM ajax_example WHERE sex = '$sex'";

if (is_numeric($age)) {
   $query .= " AND wpm <= $age"; 
}
    

if (is_numeric($wpm)){
    $query .= " AND wpm <= $wpm";
} 
    
mysqlyy();

$qry_result = mysql_query($query) or die(mysql_error());

$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>Age</th>";
$display_string .= "<th>Sex</th>";
$display_string .= "<th>WPM</th>";
$display_string .= "</tr>";

while($row = mysql_fetch_array($qry_result)){
    $display_string .= "<tr>";
    $display_string .= "<td>$row[name]</td>";
    $display_string .= "<td>$row[age]</td>";
    $display_string .= "<td>$row[sex]</td>";
    $display_string .= "<td>$row[wpm]</td>";
    $display_string .= "</tr>";
}

echo "Query:" .$query . "<br>";
$display_string .= "</table>";

echo $display_string;
?>