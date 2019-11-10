<?php 
    include '../../php/env.php';
    include '../session.php';
    include '../dbconnect.php';
?>
<html lang='en'>
<head>
	<meta charset='utf-8' />
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
            <header><p class='info center' style='cursor:pointer; font-size: 22px;background:rgb(155, 72, 72);border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; '>UPDATE SONG OF THE WEEK</p></header>
            <?php
        if (isset($_POST['UploadNews'])) {
        
        $audioname = $DBcon->real_escape_string($_POST['audioname']);
        $avatar_path = $DBcon->real_escape_string('audios/'.$_FILES['uplaoditem']['name']);
        $poster = $userRow['lastname']." ".$userRow['firstname'];
        //make sure file type is image
        if (preg_match("!audio!", $_FILES['uplaoditem']['type'])){
           
            //copy the image to images/ folder
            if (copy($_FILES['uplaoditem']['tmp_name'], $avatar_path)){
                
          $sql = "UPDATE `audioupload` SET `nameofaudio` = '$audioname', `audiofile` = '$avatar_path', `Writer` = '$poster' WHERE `audioupload`.`id` = 1"; 
           
                 if ($DBcon->query($sql) === true) {
                   $mssg = "<div class='alert alert-success'>
            <span class='pe-7s-info'></span> &nbsp; successfully Succesfully added !
          </div>";
                }
                else {
                    $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; error registering!
        </div>";
                }
            }
            else{
                $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; internal eror!
        </div>";
              }
        }
        else {
            $mssg = "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp; file uplload failed !
        </div>";
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
                    <fieldset style='background:#eee;'><legend style='text-align: center; color:rgb(175, 72, 72); font-size:25px;font-weight:bolder'>CHOOSE AUDIO</legend><label for="audioname">Name of Song:&nbsp; </label><input type="text" id="audioname" name='audioname' style='line-height: 2.3; margin:5px'><br>
                    <input type="file" id="audio" name="uplaoditem" onchange="loadFile(event)"  multiple>
                    <br><br><br><input type='submit' name='UploadNews' class='send-large' style='color:#fff' value='Upload Audio'></fieldset></div>
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
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href='https://www.https://unnkonet.com.ng'>Unnkonet</a> Developed by <a href='https://www.facebook.com/john.oba.10'>Johnexzy</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
	<script src='../assets/js/bootstrap.min.js' type='text/javascript'></script>
    <script>
    $(document).ready(function(){
        
        $(document).on('click', '#getUser', function(e){
            
            e.preventDefault();
            var uid = $(this).data('id');   // it will get id of clicked row
                // load ajax loader
            $.ajax({
                url: 'editnews.php',
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
           var check = confirm('ARE YOU SURE TO DELETE')
           if(!check || check == false || check == 'NO')
           {
               return false
           }
            $.ajax({
                url: 'delnews.php',
                type: 'POST',
                data: 'id='+uid,
                dataType: 'html'
            })
            .done(function(data){
                console.log(data);
                $("#showresult").html(data)		  // hide ajax loader	
            })
            .fail(function(){
              alert('error');
            });
            
        });
        
    });
    $(window).ready(function(){
        $('#close').click(function(){
            $('#view-edit').slideUp(1400)
        })
        $('#openadd').click(function(){
            $('#msg').focus();
        });
    })
    </script>
         <script>
    $(document).ready(function(){
         $('#changeimage').on('click', function(){
          $("#image").click();
          $("#image").on('change', function(){
                $('#showText').hide()
                $("#prev").show();
        })
        });
      })
      
    </script>
    <script>
        var id = document.getElementById.bind(document);
        
        function date(params) {
            
            y = new Date().getFullYear()
            m = Number(new Date().getMonth() + 1)
            d = new Date().getDate()
            if(m.toString().length == 1) m = "0"+m
            if(d.toString().length == 1) d = "0"+d
            datenow = Number(y+""+m+""+d)
            id(params).value = datenow
        }
        
        var loadFile = function(event){
            var reader = new FileReader();
            reader.onload = function() {
            var output = document.getElementById('prev');
           // output.src = reader.result;
            };
        reader.readAsDataURL(event.target.files[0]);

        };
        id('select-image').addEventListener('change', function(event){
            var reader = new FileReader();
            reader.onload = function() {
            var output = id('prev-new');
            output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);

        })
        
    </script>

    <!--  Google Maps Plugin    -->
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'></script>

	<script src='../assets/js/light-bootstrap-dashboard.js?v=1.4.0'></script>
   

</html>
