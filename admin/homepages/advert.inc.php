<?php 

if (isset($_POST['addadvert'])) {

        

        $header = $DBcon->real_escape_string($_POST['header']);

        $body = $DBcon->real_escape_string($_POST['body']);

        $tag = $DBcon->real_escape_string(substr($header, 0, 9).rand(1, 1000000000000));

        $Dateofpost = date('Y').date('m').date('d');

        $poster = $userRow['lastname']." ".$userRow['firstname'];

        //make sure file type is image

        if (preg_match("!image!", $_FILES['avatar']['type'])){

            $fil = $_FILES['avatar']['name'];

            $ext = substr($fil, -3);

            switch ($ext) {
                case 'jpg':
                    $_FILES['avatar']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                    break;
                case 'png':
                    $_FILES['avatar']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                    break;
                case 'gif':
                    $_FILES['avatar']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                    break;
                case 'peg':
                    $_FILES['avatar']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.j' . $ext;
                    break;
                case 'svg':
                    $_FILES['avatar']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                    break;
                default:
                    # code...
                    break;
            }

            $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['avatar']['name']);

            //copy the image to images/ folder

            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){

              

          # code...

        

          $sql = "INSERT INTO `advert` (`image`, `header`, `body`, `Dateofpost`, `Writer`, `current`) VALUES ('$avatar_path', '$header',  '$body', '$Dateofpost', '$poster', CURRENT_TIMESTAMP)";

                

                if ($DBcon->query($sql) === true) {

                   $mssg = "<div class='alert alert-success'>

            <span class='pe-7s-info'></span> &nbsp; successfully Succesfully added !

          </div>";

                }

                else {

                    $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!

        </div>";

                }

              }else{

                $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!

        </div>";

              }

        }else {

            $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; file uplload failed !

        </div>";

        }

            

       

    }

    if(isset($_POST['editadvert'])){

        $header = $DBcon->real_escape_string($_POST['editheader']);

        $body = $DBcon->real_escape_string($_POST['editbody']);

        $id = $DBcon->real_escape_string($_POST['myid']);
        $Dateofpost = date('Y').date('m').date('d');
        $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['editimage']['name']);

        //make sure file type is image

        if($_FILES['editimage']['name'] === '' || $_FILES['editimage']['name'] === null || is_null($_FILES['editimage']['name'])){

            $avatar_path = 0;

            $sql = "UPDATE `advert` SET `header` = '$header', `body` = '$body' WHERE `advert`.`id` = $id"; 

        }

        else{

            if (preg_match("!image!", $_FILES['editimage']['type'])){
                $fil = $_FILES['editimage']['name'];
                $ext = substr($fil, -3);
                switch ($ext) {
                    case 'jpg':
                        $_FILES['editimage']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                        break;
                    case 'png':
                        $_FILES['editimage']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                        break;
                    case 'gif':
                        $_FILES['editimage']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                        break;
                    case 'peg':
                        $_FILES['editimage']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.j' . $ext;
                        break;
                    case 'svg':
                        $_FILES['editimage']['name'] = 'IMG_' . $Dateofpost . '_' . time() . '_UNNKONET.' . $ext;
                        break;
                    default:
                        # code...
                        break;
                }

                //copy the image to images/ folder

                if (copy($_FILES['editimage']['tmp_name'], $avatar_path)){

                    $sql = "UPDATE `advert` SET `header` = '$header', `body` = '$body', `image` = '$avatar_path' WHERE `advert`.`id` = $id"; 

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
    <?php
    if (isset($mssg)) {
        # code...
        echo $mssg;
    }
    
    ?>
    