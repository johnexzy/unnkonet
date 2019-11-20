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

	<title>Admin::News Update</title>

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
                <li>
                    <a href='../user.php'>
                        <i class='pe-7s-graph'></i>
                        <p>Settings</p>
                    </a>
                </li>
                
                <li class='active'>
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
                           <a href=''>
                               <p>Account</p>
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
            <header><p class='info center' style='cursor:pointer; font-size: 22px;background:rgb(155, 72, 72);border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; '>ADD NEWS</p></header>
                <?php 
                    require('newsdb.ini.php');
                ?>
                <?php
                if (isset($mssg)) {
                    # code...
                    echo $mssg;
                }
                ?>
                <div id="showresult"></div>
                <div id="disptext"></div>
                <form action="" enctype="multipart/form-data" method="POST">
                        <div class="carol-large">
                            <div >
                            <section id="access" style=" border:2px dashed">
                                    <div id="Panel">
                                        <div id="linkPanel">
                                            <label for="link">PASTE LINK HERE</label><textarea name="link" id="linkname" placeholder="e.g https://unnkonet.com.ng"></textarea><br>
                                            <label for="text">Show link as:</label><input type="text" id="linktext" name="text" placeholder="e.g. click Here">
                                            <button type="button" id="addlink">&plus; ADD</button>
                                        </div>
                                    </div>
                                    <input type="button" value="Create Text Link" id="link">|
                                    <input type="button" value="Underline" id="underline">|
                                    <input type="button" value="italics" id="italics">|
                                    <input type="button" value="fontsize" id="size">|
                                    <input type="button" value="bold" id="bold">|
                                    <input type="button" value="Color" id="color">
                                    <input type="button" value="Insert Image by Link" id="imgins">
                                </section>
                                <textarea class="header-large" id='msg' placeholder="Your headline here" name='header' maxlength='' required></textarea>
                            </div>
                            <div>
                                <textarea class="msg-large" placeholder='Write Your Post here' name='msg' id="textarea" required></textarea>
                            </div>
                            <select name='category' class='select'required>
                                <option value='NEWS' selected>SELECT NEWS CATEGORY</option>
                                <option value='NEWS'>JUST NEWS</option>
                                <option value='NEWS'>CAMPUS NEWS</option>
                                <option value='NEWS'>INTERNATIONAL NEWS</option>
                                <option value='SPORTS'>SPORTS NEWS</option>
                                <option value='TECH'>TECH NEWS</option>

                            </select>
                            <div id="changeimage" style='cursor:pointer'>
                                <div class="rowimage-small" id='showText' >
                                    <h4 style="" class="imgshow">
                                        <i class="pe-7s-cloud-upload" style='color:gold;font-weight:bolder; font-size:30px'>
                                        </i>
                                        <b size="3" style="">click here to <br> UPLOAD IMAGE <br> </b>
                                    </h4>
                                </div>
                                <img class='rowimage-small' id="prev" style='display:none;'>
                            </div>
                            
                            <input type="hidden"  name="Dateofpost" id='dateofpost'>
                            <input type="file" id="image" accept="image/*" name="uplaoditem" onchange="loadFile(event)" style='display:none; ' multiple>
                            <input type='submit' name='UploadNews' class='send-large' value='CREATE'>
                        </div>
                </form>
                <script type="text/javascript" src="../assets/js/textfield.js"></script>
                <header><p class='info center' style='background:grey;border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 22px'>EDIT SLIDERS</p></header>
                <div id='showdelres'>
                    <?php
                        require_once '../../php/config.php';
                        $query = "SELECT * FROM `news`  \n" . " ORDER BY `id` DESC";
                        $stmt = $DBcon->prepare( $query );
                        $stmt->execute();
                        $display_string = "<div>";
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            $display_string .= "<hr>";
                            $display_string .= "<button data-id='$row[id]' id='getUser' class='btn btn-sm btn-info' ><i class='pe-7s-pen'></i> EDIT</button><span>&nbsp;|&nbsp;<button data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' ><i class='pe-7s-trash'></i> DELETE</button>";
                            $display_string .= "<div class='carol-large'>";
                            $display_string .= "<textarea class='header-large' readonly>";
                            $display_string .= "$row[headline]";
                            $display_string .= "</textarea>";
                            $display_string .= "<textarea class='msg-large-display' readonly>";
                            $display_string .= "$row[body]";
                            $display_string .= "</textarea>";
                            $display_string .= "<label class='select'>CATEGORY:</label> $row[category]";
                            $display_string .= "<img class='rowimage-small' src='$row[uploads]' alt='no upload'>";
                            $display_string .= "</div>";
                        }
                        $display_string .= "</div>";
                
                        $display_string .="<p id='openadd' class='info center' style='cursor:pointer; font-size: 22px;background:grey;border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; '>ADD MORE SLIDERS</p>";
                        echo $display_string;
                    ?>
                </div>
                <div id="view-edit" class="dropper" style="display:none">
                    <div class="dropper-content">
                    <div class="modal-header"> 
                            <h4 class="modal-title">
                            	<i class="pe-7s-tools"></i> EDIT
                            </h4> 
                       </div>
                       <form action="" enctype="multipart/form-data" method="POST">
                            <div id="data-content">
                            
                            </div>
                        
                            <div class="modal-footer"> 
                                <button type="subimt" class="btn btn-default" name="editnews" >Submit</button>  
                                <button type="button" class="btn btn-default" id="close">Close</button>  
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal -->
               
		   </div>
        </div>	
        


        <footer class='footer'>
            <div class='container-fluid'>
                <nav class='pull-left' >
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
                $("#showdelres").html(data);
                demo.Notification('top','right');	  // hide ajax loader	
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
            var output = id('prev');
            output.src = reader.result;
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

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>
   

</html>
