<?php

include './php/config.php'; //database connection
include './php/newsindex.php'; //get all news from database
include './php/youtube.php';
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<meta name="viewport" content="width=device-width"/>
		<meta name="title" content="UNN KONET">
		<meta name="description" content="The No. 1 Student Website. Taking you round the den and beyond.">
		<meta name="keywords" content="unnkonet, unnkonett, unnkonet.com, unnkonet.com.ng, unnconnect, unn connect, unn, unncampus, campus, unec, connect, campuses, unnkonet.cf, unnkonnet, birthday, cjlee, John, John Oba,">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
		<meta name="revisit-after" content="1 days">
		<meta name="author" content="JOHN OBA">

		<title>UNN KONET</title>
		<!--
			======= FAVICON IMAGE
		-->
		<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('sw.js').
			then((registration)=>{
				console.log('registered')
		console.log('registration in progress');
			}, (err)=>{
				console.log(err)
			})

		}
		</script>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
//   (adsbygoogle = window.adsbygoogle || []).push({
//     google_ad_client: "ca-pub-4292927418184836",
//     enable_page_level_ads: true
//   });

</script>
<style>
	.showpanel{
		display:none;
	}
</style>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<!-- <script src="js/jquery-1.9.0.min.js"></script> -->
		<!-- STYLES & JQUERY
		==================================================-->
		<script src="https://code.jquery.com/jquery-1.9.0.min.js"

		  integrity="sha256-f6DVw/U4x2+HjgEqw5BZf67Kq/5vudRZuRkljnbF344="

		  crossorigin="anonymous"></script>

		<link rel="manifest" href="manifest.json">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/icons.css"/>
		<link rel="stylesheet" type="text/css" href="css/slider2.css"/>
		<link rel="stylesheet" type="text/css" href="css/face.css">
		<link rel="stylesheet" type="text/css" href="css/skinkonetred.css"/><!-- change skin color -->
		<link rel="stylesheet" type="text/css" href="css/text.css">
	</head>
	<body>
		<div style="display:none">
			<div class="fixedtop" >
				<a href="index.php">
					<img src="images/logo - Copy.png" width="212px" height="60px" class="logo" alt="">
				</a>

			</div>

		</div>

		<div class="fixed">
			<div id="showPanel" style="border-top-left-radius:6px;margin-left:-4px;width:50px;height:29px;color:#000;background:#7f7f3c6b; font-size:23px;cursor:pointer;border-bottom:1px solid #fff"><i class="icon-bullhorn" ></i></div>
			<ul class="social-links showpanel" id="leftlink" style="margin-top:15px;">

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

		<!-- TOP LOGO & MENU

		================================================== -->



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

			<div class="mainbody">

				<div class="grid">

					<div class="row space-bot" style="height: 150px;" id="headerfile">

						<!--Logo-->

						<div class="c2" style="width: 300px; height: 100px">

							<a href="index.php">

								<img src="images/logo2.png"  class="logo" alt="">

							</a>

						</div>





						<!--Menu-->

						<div class="c8 right">

							<nav id="topNav">

								<ul id="responsivemenu">

									<li class="active"><a href="index.php">HOME<span class="showmobile"></span></a></li>

									<li>

										<a target='_blank' href="pricing.php">PRICING TABLE</a>

									</li>

									<li>

										<a href="about.html">ABOUT US</a>

									</li>

									<li>

										<a href="contact.html">CONTACT US</a>

									</li>

									<li class="last">

										<a target='_blank' href="team.php">TEAM</a>

									</li>

									<li class="">

										<a href="index.php"><i class="icon-plus homeicon"></i></a>

									<!-- + icon -->

										<ul style="display: none;">

											<li><a target='_blank' href="gallery.html">GALLERY</a></li>

											<li><a href="birthdaysignup.php">YOUR BIRTHDAY</a></li>

											<li><a target='_blank' href="GPA_CALC.html">GP CALCULATOR</a></li>

											

											<li><a target='_blank' href="timeline.php">NEWS TIMELINE</a></li>

											<li><a href="faq.html">PRIVACY POLICY</a></li>

										</ul>

									</li>

								</ul>

								<br>

							</nav>

						</div>

					</div>

				</div>

				<div class="undermenuarea c12" style="padding-top: 0px" >

					<?php

include './php/showcase.php';

?>

				</div>

			<!-- UNDER SLIDER - BLACK AREA

			================================================== -->



			<!-- START content area

			================================================== -->

				<div class="grid">

					<div class="row space-bot" >

								<!--INTRO-->

						<div class="c12">

							<div class="royalcontent"><br>

								<h1 class="royalheader">WELCOME TO UNN KONET</h1>

								<p class="title" style="text-transform: uppercase;">News, Entertainment, Adverts, Gists, Sports, Get to know what happening around You</p>

							</div>

						</div>

					</div>



							<!--Box 1-->

					<div class="row space-top">

						<div class="c12 space-top">

							<h1 class="maintitle ">

								<span>NEWS UPDATE</span>

							</h1>

						</div>

					</div>

					<div class="row space-bot">

						<div class="c12">

							<?php echo (getData("NEWS")) ?>

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

							<?php echo (getData("SPORTS")) ?>

						</div>

					</div><div class="row space-top">

						<div class="c12 space-top">

							<h1 class="maintitle ">

								<span>TECH UPDATEs</span>

							</h1>

						</div>

					</div>

					<div class="row space-bot">

						<div class="c12">

							<?php echo (getData("TECH")) ?>

						</div>

					</div>

					<div class="c5"></div>

					<!-- SHOWCASE

					================================================== -->



					<div class="row space-top">

						<div class="c12 space-top">

							<h1 class="maintitle ">

							<span>ADVERT SHOWCASE </span>

							</h1>

						</div>

					</div>

					<div class="row space-bot">

						<div class="c12">

							<?php include './php/advert.php';?>

						</div>

					</div>

					<div class="row space-top">

						<div class="c12 space-top">

							<h1 class="maintitle ">

							<span>ENTERTAINMENT SHOWCASE </span>

							</h1>

						</div>

					</div>

					<div class="row space-bot">

						<div class="c12">

							<?php include './php/entertainment.php';?>

						</div>



					</div>

<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"

     style="display:block"

     data-ad-format="fluid"

     data-ad-layout-key="-7u+eo+1+3-3"

     data-ad-client="ca-pub-4292927418184836"

     data-ad-slot="5625769534"></ins>

<script>

     (adsbygoogle = window.adsbygoogle || []).push({});

</script> -->

					<div class="row">

						<div class="c12">

							<h1 class="maintitle text-center" >

								<span><i class="icon-calendar">&nbsp;</i> BIRTHDAY SHOUT OUT</span>

							</h1>

							<ul id="bday">

								<?php

include './php/birthday.php';

?>



							</ul>



						</div>

					</div> <a href="birthdaysignup.php"><div style='text-align:center; margin:30px 0 30px 0'><div class='actionbutton'> Let's Celebrate with you. Add Your birthday</div></div></a>

				</div>

				<!-- CALL TO ACTION

				================================================== -->

				<div class="row space-bot">

					<div class="c12">

						<div class="wrapaction">

							<?php include './php/download.php';?>

						</div>

					</div>

				</div>

		</div>



<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<ins class="adsbygoogle"

     style="display:block"

     data-ad-client="ca-pub-4292927418184836"

     data-ad-slot="3814511332"

     data-ad-format="auto"

     data-full-width-responsive="true"></ins>

<script>

    //  (adsbygoogle = window.adsbygoogle || []).push({});

</script> -->

		</div><!-- end grid -->

		<!-- FOOTER

		================================================== -->

			<div id="wrapfooter">

				<div class="grid">

						<div class="row" id="footer">

						<h2 class="title"><i class="icon-desktop"></i> YOUTUBE</h2>
						 <iframe id="youtubelink" name="youtube" style="border-radius: 10px" width="100%" height="480" src="<?php echo (_getUrl()) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						 <h2 class="title"><i class="icon-twitter"></i> TWITTER</h2>
						 <a class="twitter-timeline" data-theme="dark" data-width="95%" data-height="400" data-chrome="noscrollbar" href="https://twitter.com/unnkonet?ref_src=twsrc%5Etfw">Tweets by unnkonet</a>
						 <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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

								<dd>E-mail: <a target='_blank' href="more.html">unnkonet@gmail.com</a></dd>

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

								<li><a target='_blank' href="about.html">About</a></li>

								<li><a href="faq.html">Privacy Policy</a></li>

								<li><a target='_blank' href="contact.html">Contact</a></li>

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



		<script src="js/date.js"></script>

		<script src="js/modernizr-latest.js"></script>



		<!-- menu & scroll to top -->

		<script src="js/main.js"></script>



		<!-- cycle -->

		<script src="js/jquery.cycle.js"></script>



		<!-- carousel items -->

                <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

		<!-- flexslider -->

		<script src="js/jquery.flexslider-min.js"></script>



		<!-- CALL flexslder -->

		<script>

		// Can also be used with $(document).ready()

		$(window).load(function() {

		$('.flexslider').flexslider({

		animation: "slide",

		start: function(slider){

          $('.loading').hide();

        }

		});

		});

		</script>

		<!-- twitter -->

		<script src="js/jquery.tweet.js"></script>



		<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->





		<script type="text/javascript">

			$(window).load(function(){

						$('#recent-projects2').carouFredSel({

							responsive: true,

							width: '100%',

							auto: true,

							circular	: true,

							infinite	: false,

							prev : {

								button		: "#car_prev2",

								key			: "left",

									},

							next : {

								button		: "#car_next2",

								key			: "right",

										},

							swipe: {

								onMouse: true,

								onTouch: true

								},

							scroll : 1200,

							items: {

								visible: {

									min: 1,

									max: 2

								}

							}

						});

					});

			</script>

			<script type="text/javascript">

				$(window).load(function(){

							$('#recent-projects3').carouFredSel({

								responsive: true,

								width: '100%',

								auto: true,

								circular	: true,

								infinite	: false,

								prev : {

									button		: "#car_prev3",

									key			: "left",

										},

								next : {

									button		: "#car_next3",

									key			: "right",

											},

								swipe: {

									onMouse: true,

									onTouch: true

									},

								scroll : 900,

								items: {

									visible: {

										min: 1,

										max: 2

									}

								}

							});

						});

				</script>

		<!-- Call opacity on hover images from carousel-->

		<script type="text/javascript">

		$(document).ready(function(){

		    $("img.imgOpa").hover(function() {

		      $(this).stop().animate({opacity: "0.6"}, 'slow');

		    },

		    function() {

		      $(this).stop().animate({opacity: "1.0"}, 'slow');

		    });

		  });

		</script>

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
			$("#showPanel").click(function(){
				$("#leftlink").toggleClass('showpanel')
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

