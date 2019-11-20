<?php

if (isset($_POST['UploadNews'])) {    
        $header = $DBcon->real_escape_string($_POST['header']);
        $msg = $DBcon->real_escape_string($_POST['msg']);
        $tag = $DBcon->real_escape_string(substr($header, 0, 9));
        $Dateofpost = date('Y').date('m').date('d');
        $category = $DBcon->real_escape_string($_POST['category']);
        $poster = $userRow['lastname']." ".$userRow['firstname'];
        //make sure file type is image
        if (preg_match("!image!", $_FILES['uplaoditem']['type'])){
            $fil = $_FILES['uplaoditem']['name'];
            $ext = substr($fil, -3);
            switch ($ext) {
                case 'jpg':
                    $_FILES['uplaoditem']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                    break;
                case 'png':
                    $_FILES['uplaoditem']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                    break;
                case 'gif':
                    $_FILES['uplaoditem']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.'.$ext;
                    break;
                case 'peg':
                    $_FILES['uplaoditem']['name'] = 'IMG_'.$Dateofpost.'_'.time().'_UN.j'.$ext;
                    break;
                default:
                    # code...
                    break;
            }
            $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['uplaoditem']['name']); 
            //copy the image to images/ folder
            if (copy($_FILES['uplaoditem']['tmp_name'], $avatar_path)){
              
          # code...
        
          $sql = "INSERT INTO `news` (`headline`, `uploads`, `body`, `tag`, `Dateofpost`, `category`, `Writer`) VALUES ('$header', '$avatar_path', '$msg', '$tag', '$Dateofpost', '$category', '$poster')";
                
                if ($DBcon->query($sql) === true) {
                   $mssg = "<div class='alert alert-success'>
            <span class='pe-7s-info'></span> &nbsp; successfully Succesfully added !
          </div>";
                }
                else {
                    $mssg = "<div class='alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!
        </div>";
                }
              }else{
                $mssg = "<div class='alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!
        </div>";
              }
        }else {
            $mssg = "<div class='alert alert-danger'><span class='pe-7s-info'></span> &nbsp; file uplload failed !
        </div>";
        }
            
       
    }
    if(isset($_POST['editnews'])){
        $header = $DBcon->real_escape_string($_POST['editheadline']);
        $body = $DBcon->real_escape_string($_POST['editbody']);
        $id = $_POST['myid'];
        $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['editupload']['name']);
        //make sure file type is image
        if($_FILES['editupload']['name'] === ''){
            $avatar_path = 0;
            $sql = "UPDATE `news` SET `headline` = '$header', `body` = '$body' WHERE `news`.`id` = '$id'";
        }
        else{
            if (preg_match("!image!", $_FILES['editupload']['type'])){
            
                //copy the image to images/ folder
                if (copy($_FILES['editupload']['tmp_name'], $avatar_path)){
                    $sql = "UPDATE `news` SET `headline` = '$header', `body` = '$body', `uploads` = '$avatar_path' WHERE `news`.`id` = $id"; 
                }else{
                    $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; image Upload Failed!</div>";
                }
            }else {
                $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; File type is not image!</div>";
            }
        }
        if ($DBcon->query($sql) === true) {
            $mssg = "<div class='alert alert-success'><span class='pe-7s-info'></span> &nbsp; Succesfully Updated !</div>";
            }else {
                $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error in Editing!</div>";
            }
    }
?>