<?php
    require 'timeline.php';
    $test = new checkDate();
    // $testdate = new checkDate();
    require 'dbconnect.php';
    $query = $DBcon->query("SELECT * FROM news");
    while ($row=$query->fetch_assoc()) {
        if ($row["timestamps"] == NULL) {
            $id = $row["id"];
            $Dateofpost = $row["Dateofpost"];
            $year = $test->getYear($Dateofpost);
            $month = $test->getMonth($Dateofpost);
            $day = $test->getDay($Dateofpost);
            $stamp = "$year-$month-$day 00:00:00";
            //$date = date_create();
            //$setd = date_timestamp_set($date, $stamp);
            if($DBcon->query("UPDATE `news` SET `timestamps` = '$stamp' WHERE `news`.`id` = '$id'")){
                echo "succes \n";
            }
            else {
                echo "wrong \n";
            }
        }
    }
    //echo(strtotime("now"));
    // echo (date("Y-m-d H:i:s", strtotime("next Sunday")));
?>