
<?php
require_once '../php/env.php';
require_once 'dbconnect.php';
// if (isset($_POST['update'])) {
//     $myid = _getUserDetails('id');
//     $email = $DBcon->real_escape_string($_POST['email']);
//     $firstname = $DBcon->real_escape_string($_POST['firstname']);
//     $lastname = $DBcon->real_escape_string($_POST['lastname']);
//     $mobile = $DBcon->real_escape_string($_POST['mobile']);
//     $office = $DBcon->real_escape_string($_POST['office']);
//     $avatar_path = 'images/'.$_FILES['img']['name'];
//     //make sure file type is image
//     if (preg_match("!image!", $_FILES['img']['type'])){
//         //copy the image to images/ folder
//         if (copy($_FILES['img']['tmp_name'], $avatar_path)){        
//             //your query if successful upload
//             $sql = "UPDATE `admin` SET `email` = '$email', `firstname` = '$firstname',`lastname` = '$lastname', `mobile` = '$mobile', `office` = '$office', `avatar` = '$avatar_path' WHERE `admin`.`id` = $myid"; 
//             if ($DBcon->query($sql) === true) {
//             //if(true){
                
//                 $mssg = "<div class='alert alert-success'>
//                             <span class='pe-7s-info'></span> &nbsp; 
//                             Updated Successfully
//                         </div>";
//             }
//             else {
//                 $mssg = "<div class'alert alert-danger'>
//                             <span class='pe-7s-info'></span> &nbsp; 
//                             error registering!
//                         </div>";
//             }
//             }else{
//             $mssg = "<div class'alert alert-danger'>
//                         <span class='pe-7s-info'></span> &nbsp; 
//                         error registering!
//                     </div>";
//             }
//     }else {
//         $mssg = "<div class'alert alert-danger'>
//                     <span class='pe-7s-info'></span> &nbsp; 
//                     file uplload failed !
//                 </div>";
//     }
// }


if(isset($_POST['update'])){
    $myid = _getUserDetails('id');
    $email = $DBcon->real_escape_string($_POST['email']);
    $firstname = $DBcon->real_escape_string($_POST['firstname']);
    $lastname = $DBcon->real_escape_string($_POST['lastname']);
    $mobile = $DBcon->real_escape_string($_POST['mobile']);
    $office = $DBcon->real_escape_string($_POST['office']);
    $avatar_path = 'images/'.$_FILES['img']['name'];
    //make sure file type is image
    if($_FILES['img']['name'] === '' || $_FILES['img']['name'] === null || is_null($_FILES['img']['name'])){
        $avatar_path = 0;
        $sql = "UPDATE `admin` SET `email` = '$email', `firstname` = '$firstname', ".
                "`lastname` = '$lastname', `mobile` = '$mobile', `office` = '$office' WHERE `admin`.`id` = $myid"; 
    }
    else{
        if (preg_match("!image!", $_FILES['img']['type'])){
        
            //copy the image to images/ folder
            if (copy($_FILES['img']['tmp_name'], $avatar_path)){
                $sql = "UPDATE `admin` SET `email` = '$email', `firstname` = '$firstname', ".
                        "`lastname` = '$lastname', `mobile` = '$mobile', `office` = '$office',".
                        " `avatar` = '$avatar_path' WHERE `admin`.`id` = $myid"; 
            }else{
                $mssg = "<div class'alert alert-danger'>
                            <span class='pe-7s-info'></span> &nbsp; 
                            image Upload Failed!
                        </div>";
            }
        }else {
            $mssg = "<div class'alert alert-danger'>
                        <span class='pe-7s-info'></span> &nbsp; 
                            File type is not image!
                    </div>";
        }
    }
    if ($DBcon->query($sql) === true) {
        $mssg = "<div class='alert alert-success'>
                    <span class='pe-7s-info'></span> &nbsp; 
                    Updated Succesfully !
                </div>";
        }else {
            $mssg = "<div class'alert alert-danger'>
                        <span class='pe-7s-info'></span> &nbsp; 
                        error in Editing!
                    </div>";
        }
}