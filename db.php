<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=mysqli_login", "root", "");
        if ($_GET) {
            $header = $_GET['header'];
            $msg = $_GET['msg'];
            $avatar_path = 'images/'.$_FILES['avatar']['name'];
            if (preg_match("!image!", $_FILES['avatar']['type'])) {
                if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
            $insert = $conn->prepare("INSERT INTO showcase (header, msg, avatar_path) values(:header, :msg, :image)");
            $insert->bindParam(':header', $header);
            $insert->bindParam(':msg', $msg);
            $insert->bindParam(':image', $avatar_path);
            $insert->execute(); 
            $out = 'succesful';
            echo $out;
                }
            }
        }else
        {
            echo "error";
        }
    }
    catch(PDOException $e){
        echo "error" .$e->getMessage();
    }
    
?>