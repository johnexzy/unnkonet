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

	<title>ADMIN::entertainment</title>


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
                                <li><a href='carouseledit.php'>ADD CAROUSEL</a></li>
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
           <!-- ------------------------------------------------------------------------- -->
           <div class='content'>
            
                <?php include 'ent.inc.php'?>

                <div id="showresult"></div>
                

                    <!-- FORM WRITE -->
                    <form action="" enctype="multipart/form-data" method="POST"><section id="access" style="margin:-30px -18px 20px -17px; ">
                                    
                                    <ul id="panelPane" class="panelPane">
                                        <li  id="link" class="panelList">Create Text Link</li>
                                        <li class="panelList" id="underline"><u>U</u></li>
                                        <li class="panelList" id="italics"><i>I</i></li>
                                        <li class="panelList" id="bold"><b>B</b></li>
                                        <li class="panelList" id="size">fontsize</li>
                                        <li class="panelList" id="color">Color</li>
                                        <li class="panelList" id="imgins">Insert Image by Link</li>
                                        <li class="panelList" id="vidins">Insert Video by Link</li>
                                        
                                    </ul><div id="Panel">
                                       <div id="linkPanel">
                                            <p style="text-align:center; color:blue">CREATE LINKED TEXT</p>
                                            <label for="link">PASTE LINK HERE</label><textarea name="link" id="linkname" placeholder="e.g https://unnkonet.com.ng"></textarea><br>
                                            <label for="text">Show link as:</label><input type="text" id="linktext" name="text" placeholder="e.g. click Here">
                                            <button type="button" id="addlink">&plus; ADD</button>
                                        </div>
                                        <div id="vidPanel">
                                            <p style="text-align:center; color:blue">ADD VIDEO</p>
                                            <label for="link">PASTE LINK HERE(copy the correct video link.)</label><textarea name="link" id="vidlink" placeholder="e.g https://unnkonet.com.ng/admin/uploads/exapmle.mp4"></textarea><br>
                                            <input type="checkbox" id="linktext" name="text" checked><label for="text"> Show Control</label>
                                            <button type="button" id="addvid">&plus; ADD</button>
                                        </div> 
                                    </div>
                                </section><div style="border:1px solid; margin-bottom:10px; border-radius:5px" id="disptext"></div>
                        <div class="carol-large">
                                
                            <div >
                                <span style="color:red; font-size:14px">*</span>
                                <textarea class="header-large" id='msg' placeholder="Your headline here" name='header' maxlength='' required></textarea>
                            </div>
                            <div>
                            <span style="color:red; font-size:14px">*</span>
                                <textarea class="msg-large" placeholder='Write Your Post here' name='body' id="textarea" required></textarea>
                            </div>
                            <span style="color:red; float:right; font-size:14px">*</span>
                            <div id="changeimage" style='cursor:pointer'>
                            
                                <div class="rowimage-small" id='showText' >
                                <h6 class="showText" style="font-size: 16px; font-family: Arial, serif;text-align:center " >
                                    <span style="color: #a11111; font-size:14px"></span>CHOOSE PHOTO
                                    <span style="display:block; margin-top:60px; font-size:23px; "><i class="pe-7s-cloud-upload" style="font-weight:700"></i></span>
                                </h6>
                                </div>
                                
                                <img class='rowimage-small' id="prev" style='display:none;'>
                            </div>

                            <input type="hidden"  name="Dateofpost" id='dateofpost'>
                            <input type="file" id="image" accept="image/*" name="avatar" onchange="loadFile(event)" style='display:none; ' required>
                            <button type='submit' name='UploadNews' class='send-large'><i class="pe-7s-paper-plane" style="font-weight:700"></i> &nbsp;POST</button>
                        </div>
                </form>
                <script type="text/javascript" src="../assets/js/textfield.js"></script>
                </form>
                <div id="showdelres">
                    <?php
include_once '../../php/config.php';
$query = "SELECT * FROM `entertainment`  \n" . " ORDER BY `id` DESC";
$stmt = $DBcon->prepare($query);
$stmt->execute();
$display_string = "<div>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $display_string .= "<hr>";
    $display_string .= "<button data-id='$row[id]' id='getUser' class='btn btn-sm btn-info' >"
        . "<i class='pe-7s-pen'></i> EDIT</button>" .
        "&nbsp;|&nbsp;<button data-id='$row[id]' id='delUser' class='btn btn-sm btn-info' >" .
        "<i class='pe-7s-trash'></i> DELETE</button>&nbsp;|&nbsp;" .
        "<a href='../../views/entertainments/view.php?id=$row[id]&getentertainmentinfo=read+more' target='_blank'><button class='btn btn-sm btn-info' style='float:right'><i class='pe-7s-look'></i> VIEW POST</button></a>";
    $display_string .= "<div class='carol'>";
    $display_string .= "<div class='header'>";
    $display_string .= "$row[header]";
    $display_string .= "</div>";
    $display_string .= "<div class='msg'>";
    $display_string .= substr("$row[body]", 0, 70);
    $display_string .= "</div>";
    $display_string .= "<img class='rowimage' src='$row[image]'>";
    $display_string .= "</div>";

}
$display_string .= "</div>";

$display_string .= "<p id='openadd' class='info center' style='cursor:pointer; font-size: 22px;background:grey;border: 1px solid;border-radius: 2px;color: aliceblue; width: 100%;text-align: center;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; '>ADD MORE SLIDERS</p>";
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
                                <button type="submit" class="btn btn-default" name="editentertainment" >Submit</button>
                                <button type="button" class="btn btn-default" id="close">Close</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal -->

		   </div>
           <!-- ------------------------------------------------------------------------- -->
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
                url: 'editentertainment.php',
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
                url: 'delentertainment.php',
                type: 'POST',
                data: 'id='+uid,
                dataType: 'html'
            })
            .done(function(data){
                console.log(data);
                $('#showdelres').html(data);
                demo.Notification('top','right');
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
