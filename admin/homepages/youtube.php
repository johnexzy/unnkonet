<?php 
    include '../../php/env.php';
    include '../session.php';
    include '../dbconnect.php';
?>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width">
	<link rel='icon' type='image/x-icon' href='../../favicon.ico'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />

	<title>Admin::Song</title>

    <!-- Bootstrap core CSS     -->
    <link href='../assets/css/bootstrap.min.css' rel='stylesheet' />

    <!-- Animation library for notifications   -->
    <link href='../assets/css/animate.min.css' rel='stylesheet'/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href='../assets/css/light-bootstrap-dashboard.css?v=1.4.0' rel='stylesheet'/>


    <!--     Fonts and icons     -->
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href='../assets/css/pe-icon-7-stroke.css' rel='stylesheet' />
    <link rel='stylesheet' href='../assets/css/style.css'>
    <script src='../assets/js/jquery.3.2.1.min.js' type='text/javascript'></script>

</head>
<body onload="date('dateofpost')">

<div class='wrapper'>
    <div class='sidebar' data-color='blue' data-image='../assets/img/sidebar-5.jpg'>

    <!--

        Tip 1: you can change the color of the sidebar using: data-color='blue | azure | green | orange | red | purple'
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class='sidebar-wrapper'>
            <div class='logo'>
                <a href='https://unnkonet.com.ng' class='simple-text'>
                   <img src="../../images/logo2.png" width="200px" height="100px">
                </a>
            </div>
            <ul class='nav'>
                <li class='active'>
                    <a href='../user.php'>
                        <i class='pe-7s-graph'></i>
                        <p>Settings</p>
                    </a>
                </li>
                
                <li>
                    <a href='../home.php'>
                        <i class='pe-7s-home'></i>
                        <p>home page</p>
                    </a>
                </li>
                <li>
                    <a href='../table.php'>
                        <i class='pe-7s-wallet'></i>
                        <p>Pricing table</p>
                    </a>
                </li>
                <li>
                    <a href='../typography.html'>
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
				<li class='active-pro'>
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
                           <a href='../user.php'>
                               <p><i class='pe-7s-tools'>&nbsp;</i>Account</p>
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
                                <li><a href='newsupdate.php'>ADD NEWS</a></li>
                                <li><a href='advert.php'>ADD ADVERT</a></li>
                                <li><a href='entertainment.php'>ENTERTAINMENT</a></li>
                                <li><a href='carouseledit.php'>ADD CAROUSEL</a></li>
                                <li><a href='../table.php'>SHOW PRICING</a></li>
                                <li><a href='../team.php'>TEAM PAGE</a></li>
                                <li class='divider'></li>
                                <li><a href='https://unnkonet.com.ng'>UNNKONET</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href='../logout.php'>
                                <p>Log out</p>
                            </a>
                        </li>
						<li class='separator hidden-lg'></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class='content'>
            <div class='container-fluid'>
            <header><p class='info center' style='font-size: 22px;border: 1px solid;border-radius: 2px;color: #000; width: 100%;text-align: center;font-family: Arial, sans-serif; '>UPDATE SONG OF THE WEEK</p></header>
            

                

                <form action="" enctype="multipart/form-data" method="POST">
                    <fieldset style='background:#eee; padding:20px'>
                        <legend style='text-align: center; color:#000; font-size:25px;font-weight:bolder'>PASTE YOUTUBE EMBED CODE HERE</legend>
                        <div id="showresult"></div>
                        <label for="audioname">PASTE EMBED CODE: </label>
                        <input type="text" id="url" name='url' style='line-height: 2.3; margin:5px; width:300px'><br>
                        <!-- <input type="file" accept="audio/*" id="audio" name="uplaoditem" onchange="loadFile(event)"  multiple> -->
                        <br>
                        Your CODE should look like this:<br><textarea style="width:100%; height:95px" readonly><iframe  width="100%" height="480" src="https://www.youtube.com/embed/Pj7GLbd18mw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </textarea>
                        <br><br>
                        <input type='submit' class='send-large' id='embed' style='color:#fff' value='Embed Video'>
                    </fieldset>
                </form>

                
               <div class="alert-warning">
                   <section><b>Note:</b> clicking upload will overide the existing media.</section>
               </div>
		   </div>
        </div>	
        


        <footer class='footer'>
            <div class='container-fluid'>
                <nav class='pull-left' >
                    <ul>
                        <li>
                            <a href='../../index.php'>
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
    <script src="../assets/js/youtubeAjax.js"></script>
	<script src='../assets/js/bootstrap.min.js' type='text/javascript'></script>


	<script src='../assets/js/light-bootstrap-dashboard.js?v=1.4.0'></script>
   

</html>
