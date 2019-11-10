<?php
require_once '../../php/env.php';
require_once '../dbconnect.php';
if (isset($_POST['UploadNews'])) {
        
        
        $avatar_path = $DBcon->real_escape_string('images/'.$_FILES['uplaoditem']['name']);
        //make sure file type is image
        if (preg_match("!audio!", $_FILES['uplaoditem']['type'])){
           
            //copy the image to images/ folder
            if (copy($_FILES['uplaoditem']['tmp_name'], $avatar_path)){
                $mssg = "file pl";
            }
            else{
                $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!
        </div>";
              }
        }
        else {
            $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; file uplload failed !
        </div>";
        }
            
       
    }
?>
<div>
<?php
                if (isset($mssg)) {
                    # code...
                    echo $mssg;
                }
                ?>
<form action="" enctype="multipart/form-data" method="POST">

                            <input type="file" id="image" name="uplaoditem" onchange="loadFile(event)"  multiple>
                            <input type='submit' name='UploadNews' class='send-large' value='ADD'>
 
</form>
</div>