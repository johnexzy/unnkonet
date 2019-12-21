<?php
	include('./php/timeline.php');
	get_required_files()
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<meta name="viewport" content="width=device-width"/>
			<title>Timeline </title>
			<!--
				======= FAVICON IMAGE
			-->
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
			<!-- STYLES & JQUERY 
			================================================== -->
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<link rel="stylesheet" type="text/css" href="css/icons.css"/>
			<link rel="stylesheet" type="text/css" href="css/skinkonetred.css"/><!-- Change skin color here -->
			<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
			<link rel="stylesheet" type="text/css" href="css/text.css">
			<link rel="stylesheet" type="text/css" href="css/slider2.css"/>
			<script src="js/jquerymig.js"></script>
		<!-- STYLES & JQUERY 
		================================================== 
		<script src="https://code.jquery.com/jquery-1.9.0.min.js"
		  integrity="sha256-f6DVw/U4x2+HjgEqw5BZf67Kq/5vudRZuRkljnbF344="
		  crossorigin="anonymous"></script>
		-->			
			
			
		</head>
		<body>
			<div>
				<div class="fixedtop">
					<a href="index.php">
						<img src="images/logo - Copy.png" width="212px" height="60px" class="logo" alt="">
					</a>
				</div>
			</div>
			<div class="fixed">
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
			<div class="boxedtheme">
				<div class="mainsub">
					<div class="subcase">
						<div class="bg">
						</div>
					</div>
					<ul id="submenu" style="">

					<li class="active"  color="black"><a href="index.php"><i class="icon-home"></i> HOME</a></li>
					<li><a href="pricing.php"><i class="icon-credit-card">&nbsp;</i> PRICING TAble</a></li>
					<li title="birthdaysignup" ><a target='_blank' href="birthdaysignup.php"><i class="icon-calendar">&nbsp;</i> birthday signup</a></li>
					<li title="GPCALC" ><a target='_blank' href="GPA_CALC.html"><i class="icon-star">&nbsp;</i> GP CAlculator</a></li>
					<li class="last" title="Home" ><a href="team.php"><i class="icon-group">&nbsp;</i> Team</a></li>
					<li><a href="timeline.php" ><i class="icon-group">&nbsp;</i> Timeline</a></li>
					
		
					<li title="about us" ><a target='_blank' href="about.html"><i class="icon-info-sign">&nbsp;</i> about us</a></li>

					<li title="Privacy Policy" class=""><a href="faq.html"><i class="icon-legal">&nbsp;</i> F.A.Q</a></li>

					<li title="Contact Us" ><a target='_blank' href="contact.html"><i class="icon-phone">&nbsp;</i> contact Us</a></li>

				</ul>
				</div>
				<div class="openmenu right">
					<span class="bar" id="span1" style="top:10px"></span>
					<span class="bar" id="span2" style="top:17px"></span>
					<span class="bar" id="span3" style="top: 24px"></span>
				</div>
				<!-- TOP LOGO & MENU
				================================================== -->
				<div class="mainbody">
					<div class="grid">
						<div class="row space-bot">
							<!--Logo-->
							<div class="c4">
								<a href="index.php">
									<img src="images/logo.png" class="logo" alt="">
								</a>
							</div>
							<!--Menu-->
							<div class="c8">
								<nav id="topNav">
									<ul id="responsivemenu">
										<li><a href="index.php">HOME<span class="showmobile">Home</span></a></li>
										<li><a href="pricing.php">PRICING TAble</a>
										
										</li>
										<li><a href="about.html">about us</a>
										
										</li>
										<li><a href="contact.html">contact Us</a></li>				
										<li ><a href="team.php">Team</a></li>
										<li class="last"><a href="index.php"><i class="icon-plus homeicon"></i></a>
										
											<ul style="display: none;">
												<li><a href="gallery.html">Gallery</a></li>
												
												<li><a href="timeline.php">Timeline</a></li>
												<li><a href="faq.html">Privacy Policy</a></li>
											</ul>
										</li>
									</ul><br>
								</nav>
							</div>
						</div>
					</div>
					<!-- HEADER
					================================================== -->
					<div class="undermenuarea">
						<div class="boxedshadow">
						</div>
						<div class="grid">
							<div class="row">
								<div class="c8">
									<h1 class="titlehead">Timeline</h1>
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
									<span>NEWS / UPDATES / HISTORY / ARCHIVES</span>
									</h1>
									<div id="timelineContainer">
										
										<br class="clear">
											

												<div class="row space-bot">

													<div class="c12">

														<?php echo(getData("NEWS")) ?>

													</div>

												</div>

												<div class="row space-top">

													<div class="c12 space-top">

														<h1 class="maintitle ">

															<span>SPorts UPDATE</span>

														</h1>

													</div>

												</div>

												<div class="row space-bot">

													<div class="c12">

														<?php echo(getData("SPORTS")) ?>

													</div>

												</div>
												<div class="row space-top">

													<div class="c12 space-top">

														<h1 class="maintitle ">

															<span>TECH UPDATEs</span>

														</h1>

													</div>

												</div>

												<div class="row space-bot">

													<div class="c12">

														<?php echo(getData("TECH")) ?>

													</div>

												</div>

												<div class="c5"></div>
										
										<br class="clear">
									</div>
								</div>
							</div>
					</div><!-- end grid -->
					<!-- FOOTER
					================================================== -->
					<div id="wrapfooter">
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
											   Developed by  Johnexzy </span>
										   </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- JAVASCRIPTS
		================================================== -->
		<!-- date -->
		<script src="js/date.js"></script>
		<script src="js/modernizr-latest.js"></script>

		<!-- menu & scroll to top -->
		<script src="js/main.js"></script>

		<!-- twitter -->
		<script src="js/jquery.tweet.js"></script>

		<!-- cycle -->
		<script src="js/jquery.cycle.js"></script>
		<!--Side Menu Jquery -->
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

		<!-- call timeline script -->
		<script src="js/timeline.js"></script>

		</body>
	</html>