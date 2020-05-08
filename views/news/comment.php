<?php
    try{
        include_once "../../php/config.php";
        if ($_GET) {
            $names = $_GET['names'];
            $comments = $_GET['comments'];
            $tag = $_GET['tag'];
            $insert = $DBcon->prepare("INSERT INTO comment (tag, names, comments) values(:tag, :names, :comments)");
            $insert->bindParam(':tag', $tag);
            $insert->bindParam(':names', $names);
            $insert->bindParam(':comments', $comments);
            $insert->execute(); 
            $msg = 'succesful';
            
           
        }else
        {
            echo "error";
        }
    }
    catch(PDOException $e){
        echo "error" .$e->getMessage();
    }
    
?>