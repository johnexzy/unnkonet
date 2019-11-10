<?php
	require_once './php/config.php';
	if (isset($_GET['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "SELECT * FROM showcase WHERE id=:id";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
		?>
        <!DOCTYPE HTML>
        <html>
        <head><meta name="viewport" content="width=device-width"/>
        <title>UNN KONET::<?php echo $header ?></title>
        <!--
        	======= FAVICON IMAGE
        -->
        <script>
		
        if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('sw.js').
			then((registration)=>{
				console.log('registered')
		console.log('registration');
			}, (err)=>{
				console.log(err)
			})
			
		}
        
		</script>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- STYLES & JQUERY 
        ================================================== -->
        <script src="js/jquery-1.9.0.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.9.0.min.js"
          integrity="sha256-f6DVw/U4x2+HjgEqw5BZf67Kq/5vudRZuRkljnbF344="
          crossorigin="anonymous"></script> -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/icons.css"/>
        <link rel="stylesheet" type="text/css" href="css/slider2.css"/>
        <link rel="stylesheet" type="text/css" href="css/face.css">	
        <link rel="stylesheet" type="text/css" href="css/skinkonetred.css"/><!-- change skin color -->
        <link rel="stylesheet" type="text/css" href="css/text.css">
        <script src="ajaxajax.js"></script>	
        </head>
        <body>
        <div class="boxedtheme">
        <!-- TOP LOGO & MENU
        ================================================== -->
        <div class="mainsub">
        		
        	<div class="subcase">
        		<div class="bg">
        		</div>
        	</div>

        	<ul id="submenu" style="">
                <li class="active"  color="black"><a href="index.php"><i class="icon-home"></i> HOME</a></li>
                <li><a href="vanilla/"><i class="icon-group">&nbsp;</i> Forum</a>		
                <li><a href="pricing.php"><i class="icon-credit-card">&nbsp;</i> PRICING TAble</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-calendar">&nbsp;</i> birthday signup</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-tags">&nbsp;</i> news timeline</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-star">&nbsp;</i> GP CAlculator</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-lightbulb">&nbsp;</i> Wise sayings</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-picture">&nbsp;</i> Gallery</a></li>
                <li class="last" title="Home" ><a href="team.php"><i class="icon-group">&nbsp;</i> Team</a></li>
                <li title="about us" ><a href="about.html"><i class="icon-info-sign">&nbsp;</i> about us</a></li>
                <li title="Privacy Policy" class=""><a href="faq.html"><i class="icon-legal">&nbsp;</i> F.A.Q</a></li>
                <li title="Contact Us" ><a href="contact.html"><i class="icon-phone">&nbsp;</i> contact Us</a></li>
            </ul>
        </div>
        <div class="openmenu right">
        		<span class="bar" id="span1"></span>
        		<span class="bar" id="span2" style="top:12px"></span>
        		<span class="bar" id="span3" style="top: 19px"></span>
        	</div>
        <div class="mainbody">
        <div class="grid">
        	<div class="row space-bot" style="height: 150px;">
        		<!--Logo-->
        		<div class="c4" style="width: 200px; height: 100px">
        			<a href="index.php">
        			<img src="images/logo.png" class="logo" alt="">
        			</a>
        		</div>
        	
        	
        		<!--Menu-->
        		<div class="c8 right">
        			<nav id="topNav">
        			<ul id="responsivemenu">
        				<li class="active"><a href="index.php">HOME<span class="showmobile"></span></a></li>
        				<li><a href="pricing.php">PRICING TABLE</a>
        				
        				</li>
        				<li><a href="about.html">ABOUT US</a>
        				
        				</li>
        				<li><a href="contact.html">CONTACT US</a></li>				
        				<li class="last"><a href="team.php">TEAM</a></li>
        				<li class=""><a href="index.php"><i class="icon-plus homeicon"></i></a>
        				
        					<ul style="display: none;">
        						<li><a href="gallery.html">GALLERY</a></li>
        						<li><a href="birthdaysignup.html">YOUR BIRTHDAY</a></li>
        						<li><a href="GPA_CALC.html">GP CALCULATOR</a></li>
        						<li><a href="testimonials.html">WISE SAYINGS</a></li>
        						<li><a href="timeline.php">NEWS TIMELINE</a></li>
        						<li><a href="faq.html">PRIVACY POLICY</a></li>
        					</ul>
        					</li>
        			</ul><br>
        			</nav>
        		</div>
        	</div>
        </div>
        <div class="undermenuarea" style="">
        <div class="boxedshadow">
        	</div>
        	<div class="grid">
        		<div class="row">
        			<div class="c8">
        				<h1 class="titlehead"><?php echo $header ?></h1>
        			</div>
        			<div class="c4">
        				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now +2347035995114</h1>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- CONTENT
        ================================================== -->
        <div class="grid">
        		<div class="shadowundertop">
        		</div>
        		<div class="row">
        			<div class="c12">
        				<h1 class="maintitle ">
        				<span><?php echo $header ?> </span>
        				</h1>
        			</div>
        		</div>
        		<div class="row">
        		    <div class="c6">
        				<div class="flexslider">
        					<ul class="slides">
        						<li>
        						<img src="admin/homepages/<?php echo $image ?>" alt="">
        						</li>
        						
        					</ul>
        				</div>
        			</div><!-- end slider area -->
        			
        			<!-- begin description area -->
        			<div class="c6" style='border:1px solid rgba(112, 122, 222, 0.3)'>
        				<p>
        					 <?php echo $msg ?>
        				</p>
        					<i>Year</i> : 2019<br>
        					<i>Category</i> : Advertising
        			</div><!-- end description area -->
        				
        			<!-- begin slider area -->
        				
                </div>
        			<div class="right"><a href="index.php"><button class="small" >Goto Home</button></a></div>
                
        </div><!-- end grid -->

        <!-- FOOTER
        ================================================== --><div id="wrapfooter">
        	<div class="grid">
                    <div class="row" id="footer">
                        <!-- to top button  -->
                        <p class="back-top floatright">
                            <a href="#top"><span></span></a>
                        </p>
                        <!-- 1st column -->
                        <div class="c3">
                            <img src="images/logo-footer.png" style="padding-top: 70px;" alt="">
                            
                        </div>
                        <!-- 2nd column -->
                        <div class="c3">
                            <div class="footer-widget">
                                <h2 class="footer_main--column_title">Welcome to <br> UNN KONET</h2>
                                <p>Yes! We are University's No1 Students' Website.</p>
                            </div>
                        </div>			
                        <!-- 3rd column -->
                        <div class="c3">
                            <h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
                            <hr class="footerstress">
                            <dl>
                                <dt>University of Nigeria, Nsukka</dt>
                                <dd><span>Telephone:</span>+2347035995114</dd>
                                <dd>E-mail: <a href="more.html">unnkonet@gmail.com</a></dd>
                            </dl>
                        <!-- 4th column -->
                        
                            <ul class="social-links" style="margin-top:15px;">
                                    <li class="twitter-link smallrightmargin">
                                    <a href="https://twitter.com/unnkonet" class="twitter rotate has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
                                    </li>
                                    <li class="facebook-link smallrightmargin">
                                    <a href="https://facebook.com/unnkonet" class="facebook rotate has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
                                    </li>
                                    <li class="instagram-link smallrightmargin">
                                    <a href="https://instagram.com/unnkonet" class="instagram rotate has-tip" target="_blank" title="Follow Us on Instagram">Instagram</a>
                                    </li>
                                    <li class="youtube-link smallrightmargin">
                                    <a href="https://www.youtube.com/channel/UCH3bu1DWOfsusn0H1-XKcLA?view_as=subscriber" class="youtube rotate has-tip" target="_blank" title="Subscribe To Our Youtube Channel">Youtube</a>
                                    </li>
                                    <li class="whatsapp-link smallrightmargin">
                                    <a href="https://api.whatsapp.com/send?phone=2347035995114&text=Hello%20Welcome%20to%20UNN%20KONET%20Your%20name%20and%20Department%20is%20" class="whatsapp rotate has-tip" target="_blank" title="Message Us on Whatsapp">whatsapp</a>
                                    </li>
                                </ul>
                        </div>
                        <!-- 4th column -->
                        <div class="c3">
                            <h2 class="title"><i class="icon-link"></i> Links</h2>
                            <hr class="footerstress">
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="faq.html">Privacy Policy</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="team.php">Team</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="index.php">Home</a></li>
                            </ul>
                        </div>
                        <!-- end 4th column -->
                        
                    </div>
                </div>
            </div>
            <!-- copyright area -->
            <div class="copyright">
                    <div class="grid">
                        <div class="row">
                                <div class="c6">
                                        <div id="copyright">Copyright &copy; 2018 UNN KONET. All Rights Reserved.</div>
                                   </div>
                                   <div class="c6">
                                       <span class="right">
                                       Developed by Johnexy </span>
                                   </div>
                    </div>
                </div>
            </div>
            
            </div>
            <!-- JAVASCRIPTS
            ================================================== -->
            <!-- CORE JQUERY -->
            
              
            <!-- all -->
            <script src="js/birth.js"></script>
            <script src="js/date.js"></script> <script src="js/modernizr-latest.js"></script>
            
            <!-- menu & scroll to top -->
            <script src="js/main.js"></script>
            
            <!-- flexslider -->
            <script src="js/jquery.flexslider-min.js"></script>
            
            <!-- CALL flexslder -->
            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
            $('.flexslider').flexslider({
            animation: "slide"
            });
            });
            </script>
            <!-- twitter -->
            <script src="js/jquery.tweet.js"></script>
            
            <!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
           
            <script type="text/javascript">
                $(document).ready(function (){
                    $('.openmenu').click(function(){
                        $('.mainsub').toggleClass('opened')
                        $('#span1').toggleClass('top')
                        $('#span2').toggleClass('middle')
                        $('#span3').toggleClass('bottom')
                        $('.mainbody').toggleClass('dark')
            
                    })
                    $('.dark').click(function(){
                        $('.mainsub').toggleClass('opened')
                        $('#span1').toggleClass('top')
                        $('#span2').toggleClass('middle')
                        $('#span3').toggleClass('bottom')
                        $('.mainbody').toggleClass('dark')
                        $(this).css('cursor', 'pointer')
                    })
                })
            </script>
            <script type="text/javascript"> 
                $(document).ready(function () {
                     // ---- FAQs ---------------------------------------------------------------------------------------------------------------
                      $('.faqs dd').hide(); // Hide all DDs inside .faqs
            
                      $('.faqs dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){ // Add class "hover" on dt when hover
                      $(this).next().slideToggle('normal');
                      $(this).addClass('mosaiclink')
                       // Toggle dd when the respective dt is clicked
                      
                      $(this).find("span").toggleClass('icon-angle-down');
                          $(this).find("span").toggleClass('icon-angle-up')
                          
                      }).css('font-size', '20px')
                       
              });
            </script>
            </body>
            </html>
            <?php
    }
?>