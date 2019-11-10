<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("location: index.php");
    }else{
        //$uid = $_SESSION['admin'];
    }
    require_once 'user.inc.php';
    function _getUserDetails($col){
        require '../php/config.php';
        $query = "SELECT * FROM admin";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            if($_SESSION['admin'] == "$row[id]"){
                $userdata = "$row[$col]";
            }
        }
         return $userdata;
    }
    
    
?>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <link rel='icon' type='image/png' href='../favicon.ico'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />

    <title>ADMIN::Accounts</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name='viewport' content='width=device-width' />


    <!-- Bootstrap core CSS     -->
    <link href='assets/css/bootstrap.min.css' rel='stylesheet' />

    <!-- Animation library for notifications   -->
    <link href='assets/css/animate.min.css' rel='stylesheet'/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href='assets/css/light-bootstrap-dashboard.css?v=1.4.0' rel='stylesheet'/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->



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
                <li class='active'>
                    <a href='#'>
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
                <li>
                    <a href='typography.html'>
                        <i class='pe-7s-map-marker'></i>
                        <p>contact Us</p>
                    </a>
                </li>
                <li>
                    <a href='icons.html'>
                        <i class='pe-7s-id'></i>
                        <p>about us</p>
                    </a>
                </li>
                <li>
                    <a href='maps.html'>
                        <i class='pe-7s-star'></i>
                        <p>Wise sayings</p>
                    </a>
                </li>
                <li>
                    <a href='notifications.html'>
                        <i class='pe-7s-bell'></i>
                        <p>News timeline</p>
                    </a>
                </li>
                <li>
                    <a href='notifications.html'>
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
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class='separator hidden-lg'></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
        <?php
        if (isset($mssg)) {
            # code...
            echo $mssg;
        }

        ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">UPDATE YOUR DATA</h4>
                            </div>
                            <div class="content">
                                <form action="" enctype="multipart/form-data" method="POST">  
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="../images/bg/1.png" alt="..."/>
                                    </div>
                                        <div class="author" id="changeimage">
                                             <a href="#">
                                                 <img class="avatar border-gray" id="prev" src="<?php echo(_getUserDetails('avatar')) ?>" alt="..." style="width: 150px; height: 150px"/>
                                            </a>
                                            <div ><i style="font-size: 40px; font-weight: bold; cursor: pointer " class="pe-7s-camera" title="Change Your Profile"></i></div>
                                        </div>
                                    <input type="file" id="image" name="img" accept="image/*" onchange="loadFile(event)" style='display:none; ' multiple>

                                </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="UNNKONET">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username (read-only)</label>
                                                <input type="text" class="form-control" placeholder="Username" disabled value="<?php echo(_getUserDetails('name')) ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo(_getUserDetails('email')) ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?php echo(_getUserDetails('firstname')) ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="<?php echo(_getUserDetails('lastname')) ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile No.</label>
                                                <input type="text" name="mobile" class="form-control" placeholder="e.g +2349032295527" value="<?php echo(_getUserDetails('mobile')) ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Office in Charge</label>
                                                <input type="text" name="office" class="form-control" placeholder="e.g C.E.O" value="<?php echo(_getUserDetails('office')) ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href='https://www.https://unnkonet.com.ng'>Unnkonet</a> Developed by <a href='https://www.facebook.com/john.oba.10'>Johnexzy</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script>
        $(document).ready(function(){
            $('#changeimage').on('click', function(){
            $("#image").click();
            $("#image").on('change', function(){
                //$('#showText').hide();
                //$("#prev").show();
            });
            });
        });
    </script>
    <script type="text/javascript">
        var id = document.querySelector.bind(document);
        var loadFile = function(event){
            var reader = new FileReader();
            reader.onload = function() {
                var output = id('#prev');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        id('#select-image').addEventListener('change', function(event){
            var reader = new FileReader();
            reader.onload = function() {
                var output = id('#prev-new');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
