<?php

if (isset($_POST['addslide'])) {
    $header = $DBcon->real_escape_string($_POST['header']);
    $msg = $DBcon->real_escape_string($_POST['msg']);
    $tag = $DBcon->real_escape_string(substr($header, 0, 8));
    $Dateofpost = date('Y').date('m').date('d');
    $poster = $userRow['lastname']." ".$userRow['firstname'];

    //make sure file type is image
    if (preg_match("!image!", $_FILES['avatar']['type'])){
        $fil = $_FILES['avatar']['name'];
        $ext = substr($fil, -3);
        switch ($ext) {
            case 'jpg':
                $_FILES['avatar']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                break;
            case 'png':
                $_FILES['avatar']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                break;
            case 'gif':
                $_FILES['avatar']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                break;
            case 'peg':
                $_FILES['avatar']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.j'.$ext;
                break;
            default:
                # code...
                break;
        }
        $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['avatar']['name']); 
        //copy the image to images/ folder
        if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){        
            $sql = "INSERT INTO `showcase` (`header`, `msg`, `image`, `tag`, `Writer`, Dateofpost) "
                    . "VALUES ('$header', '$msg', '$avatar_path', '$tag', '$poster', '$Dateofpost') ";
            if ($DBcon->query($sql) === true) {
                $mssg = "<div class='alert alert-success'>
                            <span class='pe-7s-info'></span> &nbsp; 
                            successfully Succesfully added !
                        </div>";
            }
            else {
                $mssg = "<div class'alert alert-danger'>
                            <span class='pe-7s-info'></span> &nbsp; 
                            error registering!
                        </div>";
            }
            }else{
            $mssg = "<div class'alert alert-danger'>
                        <span class='pe-7s-info'></span> &nbsp; 
                        error registering!
                    </div>";
            }
    }else {
        $mssg = "<div class'alert alert-danger'>
                    <span class='pe-7s-info'></span> &nbsp; 
                    file uplload failed !
                </div>";
    }
}
if(isset($_POST['editslide'])){
    $header = $DBcon->real_escape_string($_POST['editheader']);
    $msg = $DBcon->real_escape_string($_POST['editmsg']);
    $id = $_POST['myid'];
    $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['editavatar']['name']);
    //make sure file type is image
    if($_FILES['editavatar']['name'] === ''){
        $avatar_path = 0;
        $sql = "UPDATE `showcase` SET `header` = '$header', `msg` = '$msg' WHERE `showcase`.`id` = '$id'";
    }
    else{
        if (preg_match("!image!", $_FILES['editavatar']['type'])){
        
            //copy the image to images/ folder
            if (copy($_FILES['editavatar']['tmp_name'], $avatar_path)){
                $sql = "UPDATE `showcase` SET `header` = '$header',".
                        "`msg` = '$msg', `image` = '$avatar_path' WHERE `showcase`.`id` = $id"; 
            }else{
                $mssg = "<div class'alert alert-danger'>".
                            "<span class='pe-7s-info'></span> &nbsp;".
                             "image Upload Failed!".
                        "</div>";
            }
        }else {
            $mssg = "<div class'alert alert-danger'>".
                        "<span class='pe-7s-info'></span> &nbsp; ".
                        "File type is not image!".
                    "</div>";
        }
    }
    if ($DBcon->query($sql) === true) {
        $mssg = "<div class='alert alert-success'>".
                    "<span class='pe-7s-info'></span> &nbsp; ".
                    "Succesfully Updated !".
                "</div>";
    }else {
        $mssg = "<div class'alert alert-danger'>".
                    "<span class='pe-7s-info'></span> &nbsp; ".
                    "error in Editing!".
                "</div>";
    }
}

$DBcon->close();
 

?>



