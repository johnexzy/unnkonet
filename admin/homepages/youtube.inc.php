<?php
    require '../../php/dbconnect.php'; //DB connection

    if (isset($_REQUEST['url'])) {
        $url = $_REQUEST['url'];//get url from query string
        // str_word_count($url, null, "https");
        $checkTable = $DBcon->query("SELECT * FROM `youtube_video`");
        $count = $checkTable->num_rows;
        $updatequery = "UPDATE `youtube_video` SET `url` = '$url' WHERE `youtube_video`.`id` = '1'";
        $insertquery = "INSERT INTO `youtube_video` (`url`) VALUES('$url')";
        $insert = ($count > 0) ? $DBcon->query($updatequery) : $DBcon->query($insertquery) ;

        $msg = ($insert == true) ? "sucess":"error";


        echo $msg;

    }
?>