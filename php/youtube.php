<?php
    function _getUrl(){
        require 'dbconnect.php';
        $query = $DBcon->query("SELECT url FROM `youtube_video`");
        $row = $query->fetch_array();
        return $row[0];
    }
    // echo(_getUrl())
?>