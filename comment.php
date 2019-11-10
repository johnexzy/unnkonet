<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=mysqli_login", "root", "");
        if ($_GET) {
            $names = $_GET['names'];
            $comments = $_GET['comments'];
            $tag = $_GET['tag'];
            $insert = $conn->prepare("INSERT INTO comment (tag, names, comments) values(:tag, :names, :comments)");
            $insert->bindParam(':tag', $tag);
            $insert->bindParam(':names', $names);
            $insert->bindParam(':comments', $comments);
            $insert->execute(); 
            $msg = 'succesful';
            echo $msg;
           
        }else
        {
            echo "error";
        }
    }
    catch(PDOException $e){
        echo "error" .$e->getMessage();
    }
    
?>