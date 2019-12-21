<?php
include_once '../php/env.php';
include 'session.php';
function maxValue($table)
{
    require '../php/config.php';
    $query = "SELECT * FROM $table";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $x = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $x += 1;
    }
    return $x;
}
function _getSongName()
{
    require '../php/config.php';
    $query = "SELECT * FROM audioupload";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $x = "";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $x .= "$row[nameofaudio]";
    }
    return $x;
}

?>

<html lang='en'>
<head>
    <meta charset='utf-8' />
    <link rel='icon' type='image/png' href='../favicon.ico'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />

    <title>ADMIN::MEDIA</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name='viewport' content='width=device-width' />


    <!-- Bootstrap core CSS     -->
    <link href='assets/css/bootstrap.min.css' rel='stylesheet' />

    <!-- Animation library for notifications   -->
    <link href='assets/css/animate.min.css' rel='stylesheet'/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href='assets/css/light-bootstrap-dashboard.css?v=1.4.0' rel='stylesheet'/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href='assets/css/demo.css' rel='stylesheet' />
    <link rel='stylesheet' href='assets/css/style.css'>

    <!--     Fonts and icons     -->
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href='assets/css/pe-icon-7-stroke.css' rel='stylesheet' />

</head>
<body>

<div class='wrapper'>
    <div class='sidebar' data-color='blue' data-image='assets/img/sidebar-5.jpg'>

    <!--

        Tip 1: you can change the color of the sidebar using: data-color='blue | azure | green | orange | red | purple'
        Tip 2: you can also add an image using data-image tag

    -->

        <div class='sidebar-wrapper'>
            <div class='logo'>
                    <a href='../index.php' class='simple-text'>
                    <img src="../images/logo2.png" width="200px" height="100px">
                    </a>
            </div>
            <ul class='nav'>
                <li>
                    <a href='user.php'>
                        <i class='pe-7s-graph'></i>
                        <p>Settings</p>
                    </a>
                </li>

                <li>
                    <a href='home.php'>
                        <i class='pe-7s-home'></i>
                        <p>home page</p>
                    </a>
                </li>
                <li>
                    <a href='table.php'>
                        <i class='pe-7s-wallet'></i>
                        <p>Pricing table</p>
                    </a>
                </li>
                <li class='active'>
                    <a href='media.php'>
                        <i class='pe-7s-album'></i>
                        <p>MEDIA</p>
                    </a>
                </li>
                <li class="disabled">
                    <a href='#'>
                        <i class='pe-7s-id'></i>
                        <p>about us</p>
                    </a>
                </li>
        
                <li>
                    <a href='../team.php'>
                        <i class='pe-7s-users'></i>
                        <p>Team</p>
                    </a>
                </li>
                <li class='active'>
                    <a href='https://unnkonet.com.ng' target='_blank'>
                        <i class='pe-7s-rocket'></i>
                        <p>Unnkonet</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class='main-panel'>
        <nav class='navbar navbar-default navbar-fixed'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navigation-example-2'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='#'>Dashboard</a>
                </div>
                <div class='collapse navbar-collapse'>
                    <ul class='nav navbar-nav navbar-left'>
                        <li>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                <i class='fa fa-dashboard'></i>
                                <p class='hidden-lg hidden-md'>Dashboard</p>
                            </a>
                        </li>
                        </ul>

                    <ul class='nav navbar-nav navbar-right'>
                        <li>
                           <a href='user.php'>
                               <p><i class='pe-7s-users'>&nbsp;</i><?php echo $userRow['name'] ?></p>
                            </a>
                        </li>
                        <li class='dropdown'>
                              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                    <p>
										Quick Links
										<b class='caret'></b>
									</p>

                              </a>
                              <ul class='dropdown-menu'>
                                <li><a href='carouseledit.php'>ADD CAROUSEL</a></li>
                                <li><a href='newsupdate.php'>ADD NEWS</a></li>
                                <li><a href='advert.php'>ADD ADVERT</a></li>
                                <li><a href='entertainment.php'>ENTERTAINMENT</a></li>
                                <li><a href='song_of_the_week.php'>SONG OF THE WEEK</a></li>
                                <li><a href='../table.php'>SHOW PRICING</a></li>
                                <li><a href='../team.php'>TEAM PAGE</a></li>
                                <li class='divider'></li>
                                <li><a href='https://unnkonet.com.ng'>UNNKONET</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href='logout.php'>
                                <p> Log out</p>
                            </a>
                        </li>
                        <li class='separator hidden-lg'></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class='content'>
        <?php
require_once "../php/dbconnect.php";
if (isset($_POST['Upload'])) {    
    extract($_POST);
    //make sure file type is image
    $extensions = array("jpeg", "jpg", "png", "gif", "mp4", "mpeg4","mkv", "aac", "pdf", "3gp", "ico", "webm", "mp3", "aud", "wav");
    foreach ($_FILES['uploaditem']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['uploaditem']['name'][$key];
        $file_tmp =$_FILES['uploaditem']['tmp_name'][$key];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if(in_array($file_ext, $extensions)){
            if (!file_exists("uploads/".$file_name)) {
                
                $query = "INSERT INTO `uploads` (`url`) VALUES ('$file_name')";
                if($DBcon->query($query) == true){
                    move_uploaded_file($file_tmp, "uploads/".$file_name);
                    echo "<div class='alert alert-success'> &nbsp; Succesfully added ".$file_name."!
                  </div>";
                }else{
                    echo "<div class='alert alert-danger'><br>
                    Internal Error Occured </div>";
                }
            }else{
                echo "<br><div class='alert alert-danger'><b>".$file_name."<b> Alreday exist. it was skipped</div>";
                
            }
        }
        else{
            echo "<br><div class='alert alert-danger'><b>This filetype '".$file_ext."'<b> is not supported yet. contact developer</div>";
        }
    }
    $DBcon->close();
}
?>
        <h3 class="h2" style="text-align:center">
    UPLOAD WIZARD
    </h3>
        <section style="width:96%; border:2px dashed; border-radius:23px;margin: auto; padding-bottom:30px">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card" id="touch" style="background:#88888875; width:45%; height:200px; margin:60px auto; text-align:center;box-shadow:1px 1px 9px 2px;border-radius:20px">
                <p>CLICK HERE TO UPLOAD IMAGES</p>
                    <i class="pe-7s-cloud-upload" style="margin-top:50px; font-size:24px;color:blue; font-weight:700"></i>
                </div>
                <input type="file" name="uploaditem[]" id="upload" multiple />
                <input type="submit" value="UPLOAD" class="send-large" name="Upload">
            </form>

        </section>
        <hr>
        <div style="text-align:center">
        <b style="font-size:24px;">ALL UPLOADS</b> <br>
        </div><input type='text' id='copyUrl'>
        <br>
        
        <center><b style="color:blue; text-decoration:underline; text-transform: uppercase">Click on the red text to copy video link</b></center>
        <section>
            <?php
            require "../php/config.php";
            $query = "SELECT * FROM `uploads`  \n" . " ORDER BY `id` DESC";
            $stmt = $DBcon->prepare($query);
            $stmt->execute();
            $display_res = "<div class=''>";
            $images = '<hr>
                        <b style="font-size:20px;"><i class="pe-7s-photo"></i>IMAGES</b> <br>
                    ';
            $audio = '<hr>
                     <b style="font-size:20px;"><i class="pe-7s-headphones"></i>AUDIOS</b> <br>';
            $vid = '<hr>
                    <b style="font-size:20px;"><i class="pe-7s-video"></i>VIDEOS</b> <br>';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if (strrchr($row["url"], ".") == ".mp4" 
                || strrchr($row["url"], ".") == ".mkv"
                || strrchr($row["url"], ".") == ".3gp"
                || strrchr($row["url"], ".") == ".webm") {
                    $vid .= "
                                    
                                    <div style='display:inline; width:100%; border:1px solid; text-align:center'>
                                        
                                        <b style='display:block' id='vidUrlpanel'>url: <span style='color:red; background-color:white' id='vidUrl' >http://".$_SERVER['SERVER_NAME']."/www/version/admin/uploads/".$row['url']."</span></b>
                                        <center>
                                        <video src='uploads/$row[url]' style='width:300px;height:350px; margin:5px auto; display:inline; border:2px solid'  controls></video>
                                        </center>
                                    </div><hr>
                                    
                                    ";
                } else if(strrchr($row["url"], ".") == ".png" 
                                    || strrchr($row["url"], ".") == ".jpg" 
                                    || strrchr($row["url"], ".") == ".jpeg"
                                    || strrchr($row["url"], ".") == ".gif"
                                    ||  strrchr($row["url"], ".") == ".ico"){
                    $images .= "

                                        <img src='uploads/$row[url]' style='width:250px; height:250px; margin:5px; display:inline; border:2px solid'>

                                    ";
                }
                else if(strrchr($row["url"], ".") == ".mp3" 
                                    || strrchr($row["url"], ".") == ".3gpp" 
                                    || strrchr($row["url"], ".") == ".wav"
                                    || strrchr($row["url"], ".") == ".aud"
                                    || strrchr($row["url"], ".") == ".aac"
                                    ){
                    $audio .= "

                                        <audio src='uploads/$row[url]' style='width:43%px;margin:5px; display:inline; border:1px solid' controls></audio>

                                    ";
                }
            }
            $display_res .= $vid.$images.$audio;
            echo $display_res;
            ?>
        </section>
        </div>


        <footer class='footer'>
            <div class='container-fluid'>
                <nav class='pull-left'>
                    <ul>
                        <li>
                            <a href='https://unnkonet.com.ng'>
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class='copyright pull-right'>
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href='https://unnkonet.com.ng'>Unnkonet</a> Developed by <a href='https://www.facebook.com/john.oba.10'>Johnexzy</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    
    <script src='assets/js/jquery.3.2.1.min.js' type='text/javascript'></script>
    <script src='assets/js/bootstrap.min.js' type='text/javascript'></script>
    <script src="assets/js/imgselect.js"></script>
    <!--  Charts Plugin -->
    <script src='assets/js/chartist.min.js'></script>

    <!--  Notifications Plugin    -->
    <script src='assets/js/bootstrap-notify.js'></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src='assets/js/light-bootstrap-dashboard.js?v=1.4.0'></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src='assets/js/demo.js'></script>

    <script type='text/javascript'>
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: 'Welcome to <b>Unnkonet admin Dashboard</b> - make yourself comfortable..'

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>
