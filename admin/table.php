<?php 
    include_once '../php/env.php';
    include 'session.php';
    include 'dbconnect.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin::PRICING</title>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--Main.css additional-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
     <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class='logo'>
                <a href='../index.php' class='simple-text'>
                <img src="../images/logo2.png" width="200px" height="100px">
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="home.php">
                        <i class="pe-7s-graph"></i>
                        <p>Settings</p>
                    </a>
                </li>
                
                <li>
                    <a href="home.php">
                        <i class="pe-7s-home"></i>
                        <p>home page</p>
                    </a>
                </li>
                <li class="active">
                    <a href="table.php">
                        <i class="pe-7s-wallet"></i>
                        <p>Pricing table</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>contact Us</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-id"></i>
                        <p>about us</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-star"></i>
                        <p>Wise sayings</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>News timeline</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-users"></i>
                        <p>Team</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="../index.php" target="_blank">
                        <i class="pe-7s-rocket"></i>
                        <p>Unnkonet</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="table.php">Pricing Table</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <?php
                    
                    if (isset($_POST['UploadNew'])) {
                        $package = $DBcon->real_escape_string($_POST['packagename']);
                        $value = $DBcon->real_escape_string($_POST['numvalue']);
                        $sign = $DBcon->real_escape_string($_POST['signature']);
                        $duration = $DBcon->real_escape_string($_POST['duration']);
                        if ($package == "" || $value == null || $duration == "") {
                            $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; fill up the fields</div>";
                    
                        }else{
                            $sql = "INSERT INTO `pricing` (`packagename`, `value`, `duration`, `signature`, `dateofpost`) VALUES ('$package', '$value',  '$duration', '$sign', CURRENT_TIMESTAMP)";
                                
                            if ($DBcon->query($sql) === true) {
                                    $mssg = "<div class='alert alert-success'><span class='pe-7s-info'></span> &nbsp; successfully Succesfully added !</div>";
                            }
                            else {
                                        $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering</div>";
                            }
                        }
                    }
                       

                ?>
                            <?php
                            if (isset($mssg)) {
                                # code...
                                echo $mssg;
                            }
                            ?>
                            <div id="showresult"></div>
            
                <form action="" enctype="multipart/form-data" method="POST">
                    <div class="carol">
                        <fieldset style='background:#eee;'>
                            <legend style="text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bolder">ADD NEW BILL</legend>
                            <!-- <label for="audioname">Name of Song:&nbsp; </label>
                            <input type="text" id="audioname" name='audioname' style='line-height: 2.3; margin:5px'><br>
                            <input type="file" id="audio" name="uplaoditem" onchange="loadFile(event)"  multiple> -->
                            <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th style="color:#000">Package Name</th>
                                            <th style="color:#000">Value</th>
                                            <th style="color:#000">Signature</th>
                                            <th style="color:#000">Duration</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" name="packagename" class="input-small" value=""> </td>
                                                <td>N<input type="number" name="numvalue" class="input-small-number" value=""> </td>
                                                <td><input type="text" name="signature" class="input-small" value=""> </td>
                                                <td><input type="text" name="duration" class="input-small" value=""> </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
    
                                </div>
                            <input type='submit' name='UploadNew' class='send-large' style='color:#fff;margin-top: 40px' value='SUBMIT'></fieldset>

                        </div>
                </form>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">PRICING TABLE</h4>
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th></th>
                                    	<th>Package Name</th>
                                    	<th>Value</th>
                                    	<th>Duration</th>
                                        <th>Signature</th>
                                        <th></th>
                                    </thead>
                                    <tbody id="showAll">
                                    <?php
                    require_once '../php/config.php';
                    $query = "SELECT * FROM `pricing`  \n" . " ORDER BY `id` DESC";
                    $stmt = $DBcon->prepare( $query );
                    $stmt->execute();
                    $display_string = "";
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        $display_string .= "<tr><form action=''>";
                        $display_string .= "<td><button data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[packagename]'> </td>";
                        $display_string .= "<td>N<input type='number' class='input-small-number' value='$row[value]'></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[duration]'></td>";
                        $display_string .= "<td><input type='text' class='input-small' value='$row[signature]'></td>";
                        $display_string .= "<td><button type='submit' data-id='$row[id]' id='getUser' class='btn btn-sm btn-info' ><i class='pe-7s-pen'></i> OVERWRITE</button></td>";
                        $display_string .= "</form></tr>";
                    }
                    
                    echo $display_string;
                ?>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
        </div>

        <footer class='footer'>
                <div class='container-fluid'>
                    <nav class='pull-left' >
                        <ul>
                            <li>
                                <a href='../user.php'>
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
    <script>
        $(document).ready(function(){
        
        $(document).on('click', '#getUser', function(e){
            
            e.preventDefault();
            var uid = $(this).data('id');   // it will get id of clicked row
                // load ajax loader
           var check = confirm('CONTINUE TO DELETE?')

            $.ajax({
                url: 'edittable.php',
                type: 'POST',
                data: 'id='+uid,
                dataType: 'html'
            })
            .done(function(data){
                console.log(data);
                
                $('#data-content').html(data)
                $('#view-edit').slideDown()		  // hide ajax loader	
            })
            .fail(function(){
              alert('error');
            });
            
        });
        
    });
        $(document).ready(function(){
        
        $(document).on('click', '#delUser', function(e){
            
            e.preventDefault();


            var uid = $(this).data('id');   // it   will get id of clicked row
                // load ajax loader
           var check = confirm('CONTINUE TO DELETE?')
           if(!check || check == false || check == 'NO')
           {
               return false
           }
            $.ajax({
                url: 'deltable.php',
                type: 'POST',
                data: 'id='+uid,
                dataType: 'html'
            })
            .done(function(data){
                demo.Notification('top','right');
                $("#showAll").html(data)		  	
            })
            .fail(function(){
              alert('error');
            });
            
        });
        
    });
    </script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
