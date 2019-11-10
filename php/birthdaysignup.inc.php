<?php
include 'env.php';
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	

    $FULLNAME = strip_tags($_POST['fullname']);
    $month = strip_tags($_POST['month']);
    $bdate = strip_tags($_POST['date']);
    $phone = strip_tags($_POST['phone']);


    $FULLNAME = $DBcon->real_escape_string($FULLNAME);
    $month = $DBcon->real_escape_string($month);
    $bdate = $DBcon->real_escape_string($bdate);
	$phone = $DBcon->real_escape_string($phone);
	$bday = $bdate."/".$month;
    $avatar_path = $DBcon->real_escape_string('birthday/'.$_FILES['avatar']['name']);
	
	if (preg_match("!image!", $_FILES['avatar']['type'])) {
		if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
			$check_name = $DBcon->query("SELECT FULLNAME FROM BIRTHDAY WHERE FULLNAME='$FULLNAME'");
			$count=$check_name->num_rows;
	
			if ($count==0) {
		
				$query = "INSERT INTO BIRTHDAY (FULLNAME, bmonth, bdate, bday, phone, avatar) "
                        . "VALUES ('$FULLNAME', '$month', '$bdate', '$bday', '$phone', '$avatar_path') ";
                if ($DBcon->query($query)) {
					$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered for BIRTHDAY WISHES/UPDATES!
                    </div>
                    <script type='text/javascript'>alert('YOU HAVE SUCCESSFULLY REGISTERED YOUR BIRTHDAY UPDATE')</script>";
				}else {
					$msg = "<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> &nbsp; error registering!
				</div>";
				}
		
			}else {
		
				$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry this name is already in use !
				</div>";
			
			}
			$DBcon->close();
	
		}else{
			$msg = "<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> &nbsp; file uplload failed !
				</div>";
		}
	}else{
			$msg = "<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please only upload GIF, JPG, JPEG, or PNG images!
				</div>";
		}
	
	}
?>
