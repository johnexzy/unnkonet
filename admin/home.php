<?php 
    include_once '../php/env.php';
    include 'session.php';
    function maxValue($table){
        require '../php/config.php';
        $query = "SELECT * FROM $table";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        $x = 0;
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $x += 1;
        }
        return $x;
    }
    function _getSongName(){
        require '../php/config.php';
        $query = "SELECT * FROM audioupload";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        $x = "";
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

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

    <title>ADMIN::HOME</title>

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
                
                <li class='active'>
                    <a href='#'>
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
            <div class='container-fluid aliceblue'>
            <font size="6"><i class="pe-7s-home">&nbsp;</i>Welcome to Admin Dashboard. </font><hr>
                <header>
                    <p class='info center' style='background:rgba(155, 72, 72);border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 22px'>EDIT COMPONENTS OF HOME PAGE</p>
                </header>
                <!-- Each section represents a section in the home page. -->
                    <a href="homepages/carouseledit.php">
                        <section class='plainbox' title='A home-page slider'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-monitor'>&nbsp;</span>
                                    CAROUSEL
                                </b>
                            </p>
                            <p class='records'><?php echo(maxValue("showcase"));?> Active slides</p>
                        </section>
                    </a>
                    <a href="homepages/newsupdate.php">
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' > 
                                <b>
                                    <span class='pe-7s-radio'>&nbsp;</span>
                                    news update
                                </b>
                            </p>
                            <p class='records'><i class='pe-7s-notebook'>&nbsp;</i> <?php echo(maxValue("news"));?> Posts</p>
                        </section>
                    </a>
                    <a href="homepages/advert.php">
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-browser'>&nbsp;</span>
                                    Advert showcase
                                </b>
                            </p>
                            <p class='records'><?php echo(maxValue("advert"));?> Active</p>
                        </section>
                    </a>
                    <a href="homepages/entertainment.php">
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-joy'>&nbsp;</span>
                                    entertainment
                                </b>
                            </p>
                            <p class='records'><?php echo(maxValue("entertainment"));?> Active</p>
                        </section>
                    </a>
                    <a href="table.php">
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-display2'>&nbsp;</span>
                                    Pricing
                                </b>
                            </p>
                            <p class='records'><?php echo(maxValue("pricing"));?> Active Billings</p>
                        </section>
                    </a>
                    <!-- <a href=""> -->
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-gift'>&nbsp;</span>
                                    Birthdays
                                </b>
                            </p>
                            <p class='records'><?php echo(maxValue("birthday"));?> signed</p>
                        </section>
                    <!-- </a> -->
                    <a href="homepages/song_of_the_week.php">
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-music'>&nbsp;</span>
                                    song of the week
                                </b>
                            </p><p class='records'><?php echo(maxValue("audioupload"));?> Active song</p>
                            <p class='records'><i class='pe-7s-music'></i> <?php echo(_getSongName());?></p>
                        </section>
                    </a> 
                        <section class='plainbox' title='click to edit'>
                            <p align='center' class='textplain' >
                                <b>
                                    <span class='pe-7s-play'>&nbsp;</span>
                                    Video
                                </b>
                            </p>
                        </section>
                     
                   
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
    <script src='assets/js/jquery.3.2.1.min.js' type='text/javascript'></script>
    <script src='assets/js/bootstrap.min.js' type='text/javascript'></script>

    <!--  Charts Plugin -->
    <script src='assets/js/chartist.min.js'></script>

    <!--  Notifications Plugin    -->
    <script src='assets/js/bootstrap-notify.js'></script>

    <!--  Google Maps Plugin    -->
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'></script>

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
