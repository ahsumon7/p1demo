




<?php 
$result="";
if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='abdulhannansumon70@gmail.com';
$mail->Password='*isam78805577';
$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('abdulhannansumon70@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);
$mail->isHTML(true);
$mail->Subject='Form Submission:' .$_POST['subject'];
$mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h3>';
if(!$mail->send()){
$result = "Something went worng. Please try again.";
}
else {
    $result="Thanks" .$_POST['name']. " for contacting us. We'll get back to you soon!";
  }
}
?>







<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from frenify.com/envato/marketify/html/beny/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 17:23:58 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Abdul Hannan Sumon</title>
<link rel="shortcut icon" type="image/png" href="icon/icon.jpg"

<!-- STYLES -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body>

<!-- WRAPPER ALL -->
<div class="beny_tm_wrapper_all">
	
	<!-- PRELOADER -->
	<div class="beny_tm_preloader">
		<div class="spinner_wrap">
			<div class="spinner"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	<div id="beny_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>
	
    <!-- CONTENT -->
	<div class="beny_tm_content">
		<div class="beny_tm_leftpart_wrap">
			<div class="leftpart_inner">
				<div class="author_image_wrap">
					<img src="img/about/S1.jpg" alt="" />
				</div>
				<div class="author_name">
					<h3>Abdul Hannan Sumon</h3>
				</div>
				<div class="author_job">
					<h3>Software Enginner</h3>
				</div>
				<div class="menu_list_wrap">
					<ul class="anchor_nav">
						<li><a href="#home"> Home</a></li>
						<li><a href="#about"> About</a></li>
						<li><a href="#services">Interest</a></li>
						<li><a href="#portfolio"> Portfolio</a></li>
						
						<li><a href="#contact"> Contact</a></li>
					</ul>
				</div>
				<div class="leftpart_bottom">
					<div class="social_wrap">
						<ul>
							<li><a href="https://www.facebook.com/AbdulHannanSumon07" target="_blank"><i class="xcon-facebook"></i></a></li>
							<li><a href="https://twitter.com/ah_sumon70" target="_blank"><i class="xcon-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/abdul-hannan-sumon-80a46a152/" target="_blank"><i class="xcon-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/ahsumon07/" target="_blank"><i class="xcon-instagram"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="beny_tm_rightpart">
			
			<!-- HERO -->
			<div class="beny_tm_section" id="home">
				<div class="beny_tm_hero_header">
					<div class="beny_tm_universal_box_wrap">
						<div class="bg_wrap">
							<div class="overlay_image hero jarallax" data-speed="0"></div>
							<div class="overlay_video"></div>
							<div class="overlay_color hero"></div>
						</div>
						<div class="content hero">
							<div class="container hero">
								<div class="beny_tm_hero_title">
								
									<div class="name">Here I'm <span>Sumon</span></div>
									<div class="beny_tm_hero_share">
										<ul>
											<li><a href="https://www.facebook.com/AbdulHannanSumon07" target="_blank"><i class="xcon-facebook"></i></a></li>
											<li><a href="https://twitter.com/ah_sumon70" target="_blank"><i class="xcon-twitter"></i></a></li>
											<li><a href="https://www.linkedin.com/in/abdul-hannan-sumon-80a46a152/" target="_blank"><i class="xcon-linkedin"></i></a></li>
											<li><a href="https://www.instagram.com/ahsumon07/" target="_blank"><i class="xcon-instagram"></i></a></li>
											
										</ul>
									</div>
								</div>
								<div class="beny_tm_arrow_wrap bounce anchor">
									<a href="#about"><i class="xcon-angle-double-down"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HERO -->

			<!-- ABOUT -->
			<div class="beny_tm_section" id="about">
				<div class="container">
					<div class="beny_tm_about_wrap">
						<div class="author_wrap">
							<div class="leftbox">
								<div class="image_wrap">
									<img src="img/about/sam.PNG" alt="" />
								</div>
							</div>
							<div class="rightbox">
								<div class="beny_tm_main_title_holder about">
									<h3>About Me</h3>
								</div>
								<div class="subtitle"><p>Software Engineer </p></div>
								<div class="definition">
									<p>Hi! My name is <strong>Abdul Hannan Sumon</strong>. I am a Software Engineerooking forward to challenging position in the software development sector and the ability to communicate effectively in a team environment and a strong willingness to learn with potential opportunities for advancement that allow me to use and improve my skills and abilities in a friendly and growth-oriented environment.</p>
								</div>
								<div class="about_short_contact_wrap">
									<ul>
										<li>
											<span><label>Birthday:</label> 30.05.1994</span>
										</li>
										<li>
											<span><label>Age:</label> 26</span>
										</li>
										<li>
											<span><label>City:</label> Dhaka, Bangladesh</span>
										</li>
										<li>
											<span><label>Education:</label> BSc. in <b>CSE</b> </span>
										</li>
										<li>
											<span><label>Website:</label> www.mywebsite.com</span>
										</li>
										<li>
											<span><label>Mail:</label> abdulhannansumon70&#64;gmail.com</span>
										</li>
										<li>
											<span><label>Phone:</label> +8801515636357</span>
										</li>
										<li>
											<span><label>Facebook:</label> AbdulHannanSumon07</span>
										</li>
									</ul>
								</div>
								<div class="buttons_wrap">
									<ul>
										<li>
											<a class="download" href="https://drive.google.com/file/d/1spHZuIdvNxN41BbRnK-zuH6tIcWQ8u_D/view?usp=sharing" target= "_blank"><span>Download CV</span></a>
										</li>
										<li class="anchor">
											<a href="#contact"><span>Send Message</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /ABOUT -->

			<!-- SKILLS -->
			<div class="beny_tm_section">
				<div class="beny_tm_skills_wrap">
					<div class="container">
						<div class="inner_wrap">
							<div class="leftbox">
								<h3>Skills i learned from my educational institute & myself.</h3>
								
								<p>I am confident in my abilities like <b>JAVA,</b> <b> HTML,</b> <b> CSS,</b> <b> PHP,</b><b> C,</b> <b> C++,</b> <b> MySQL,</b><b> IoT</b>    that I seek to work for a successful company that has strong leadership and vision and that recognizes and rewards performers and because of that I can learn so many new things that makes me a successful personand by this i can benifit my working company.</p>
							</div>
							<div class="rightbox">
								<div class="progress_bar_wrap_total">
									<div class="beny_tm_progress_wrap" data-size="small" data-round="c" data-strip="off">
										<div class="beny_tm_progress" data-value="85" data-color="#000">
											<span><span class="label">HTML - <span class="experience">1 years of experience</span></span><span class="number">85%</span></span>
											<div class="beny_tm_bar_bg"><div class="beny_tm_bar_wrap"><div class="beny_tm_bar"></div></div></div>
										</div>
										<div class="beny_tm_progress" data-value="75" data-color="#000">
											<span><span class="label">CSS - <span class="experience">1 year of experience</span></span><span class="number">75%</span></span>
											<div class="beny_tm_bar_bg"><div class="beny_tm_bar_wrap"><div class="beny_tm_bar"></div></div></div>
										</div>
										<div class="beny_tm_progress" data-value="70" data-color="#000">
											<span><span class="label">PHP - <span class="experience">1 year of experience</span></span><span class="number">70%</span></span>
											<div class="beny_tm_bar_bg"><div class="beny_tm_bar_wrap"><div class="beny_tm_bar"></div></div></div>
										</div>
										<div class="beny_tm_progress" data-value="80" data-color="#000">
											<span><span class="label">JAVA - <span class="experience">2 years of experience</span></span><span class="number">80%</span></span>
											<div class="beny_tm_bar_bg"><div class="beny_tm_bar_wrap"><div class="beny_tm_bar"></div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /SKILLS -->

			<!-- SERVICES -->
			<div class="beny_tm_section" id="services">
				<div class="beny_tm_service_wrapper_all" data-bg="white" data-style="first" data-animation="bottom">
					<div class="beny_tm_first_style">
						<div class="beny_tm_main_title_holder">
							<h3>Personal Interests</h3>
							<span>If I have to choose between you and me - I like me better</span>
						</div>
						<div class="container">
							<div class="beny_tm_services_wrap">
								<ul class="beny_tm_miniboxes">
									<li class="wow fadeInUp beny_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.2s">
										<div class="inner">
											<div class="detail_wrap">
												<div class="image">
													<img class="svg" src="img/svg/photography.svg" alt="" >
												</div>
												<span>Photography</span>

                                                <p>Recording events and capturing memories and enjoying this.Photography for me- If your pictures aren’t good enough, you’re not close enough.</p>
											</div>
											<div class="overlay_color"></div>
										</div>
									</li>
									<li class="wow fadeInUp beny_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.4s">
										<div class="inner">
											<div class="detail_wrap">
												<div class="image">
													<img class="svg" src="img/svg/games.svg" alt="" >
												</div>
												<span>Gaming</span>
												<p>Gamers always believe that an epic win is possible and that it's always worth trying and trying now.</p>
											</div>
											<div class="overlay_color"></div>
										</div>
									</li>
									<li class="wow fadeInUp beny_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.6s">
										<div class="inner">
											<div class="detail_wrap">
												<div class="image">
													<img class="svg" src="img/svg/travel1.svg" alt="" >
												</div>
												<span>Traveling</span>
												<p>To spend time with friends. A gap year or world trip can be described as the best time of your life which help to discover new cultures</p>
											</div>
											<div class="overlay_color"></div>
										</div>
									</li>
									<li class="wow fadeInUp beny_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.8s">
										<div class="inner">
											<div class="detail_wrap">
												<div class="image">
													<img class="svg" src="img/svg/sports3.svg" alt="" >
												</div>
												<span>Sports</span>
												<p>Sports learn me  teamwork and sportsmanship.<br>
												Cricket and Football makes me crazy and relaxed me from all the tension<br>
												
												</p>
											</div>
											<div class="overlay_color"></div>
										</div>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

					
				

				</div>
			</div>
			<!-- /SERVICES -->
			
			
			
			
		<!-- PORTFOLIO -->
		
			<div class="beny_tm_section" id="portfolio">
				<div class="beny_tm_news_wrap">
					<div class="container">
						<div class="beny_tm_main_title_holder news">
							<h3>My Projects</h3>
							<span>Check out all the project</span>
						</div>
						<div class="beny_tm_list_wrap blog_list" data-column="3" data-space="30">
							<ul class="total">
								<li class="wow fadeInUp" data-wow-duration="1.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/s3.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">IoT - Smart Farming</a></h3>
											</div>
											
											
											<div class="definition">
												<p>In this embedded system for Smart Farming using the soil sensors, the values and result are shown in LCD display and  android application ...</p>
											</div>
											<div class="full_def">
												<p>In this project we use programming language <b>C++ , Aurdino </b><br>
												In this embedded system for automatic Smart Farming using the soil sensors. The concept of Smart Agriculture is becoming a reality as it evolves from conceptual models for the development of crop at different stages. Previously the agriculture is the cultivation of the plants which is used to sustain and enhance human life. Now a days the Smart Agriculture has come into the picture globally. Agriculture is the main occupation in Bangladesh and it plays a vital role in our country. Fertilizers are the most vital factors for the crop production. The measurement of soil nutrients is greatly required for better plant growth. Because using too much of fertilizers may lead to the inferior quality of the crop production. Determining the amount of nutrients in the soil is the key function. PH value is also one of the most important and informative soil parameter to detect the soil fertility and it is measured to identify the soil fertility. In the proposed system, it determines the crops which are suitable for the particular soil type. It will analyze moisture content, temperature and humidity in soil at real time and it will also suggest the crops based on determined PH of soil. This system is proposed to help the farmers to increase the production and the suggestions are shown in LCD display and in an android application..</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
												    <li> <a href="https://github.com/ahsumon7" target="_blank">Github</a></li>
													<li><a href="">Project Link </a></li>
													<li><a href="https://drive.google.com/file/d/1Bg-BfHUOzrpE5D7ZJmcStPmgd_0RjhjV/view?usp=sharing" target="_blank">Project report </a></li>
													<li><a href="https://sites.google.com/view/iotsmartproject/home?fbclid=IwAR1Dq21QFZB29vZAniQ8Ho5iRs2MaXGqaXkn0uSt2peGmgxEEhqmHIHUzlw" target="_blank">Project Site </a></li>
													<li><a href="https://www.youtube.com/watch?v=4NyppbdKwcs&feature=youtu.be&fbclid=IwAR0ZgtOfKpU1VkijrzZBAOx6AADp7OEu9wvaqnUrRadIhFCajfmIk1dseBQ" target="_blank">Project demo video </a></li>
												</ul>
												
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</li>
								<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/m2.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">Online Medicine Shop</a></h3>
											</div>
											<div class="definition">
												<p>In this web based project a user can oder medicine from online by a web page and admin control the web page and the products...</p> 
											</div>
											<div class="full_def">
												<p>An online pharmacy, internet pharmacy, or mail-order pharmacy is a pharmacy that operates over the internet and sends the orders to customers through mail or shipping companies. Online pharmacies might include: Pharmacy benefit manager – A large administrator of corporate prescription drug plans.<br>
												In this project we use  <b>HTML, CSS, MySQL,PHP,JavaScript, Bootstrap.</b><br>
												Here use only medical products.Such as baby products,medicines,beautyies products which user can get products by ordering.This is online medicine shop by which we can buy medicines.Here we use two user. One is admin and other is User.
												User only pick product which they need and ordered and they confirm order. He also can also send message in admin pannel.Here also admin registration panel.New admin user can registration by a admin
												
												The admin can add products what he need and also update product price and quantities.Admin also can delete product which he don't need.Admin recive product order and clearness for send.
												
												</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
													<li> <a href="https://github.com/ahsumon7" target="_blank">Github</a></li>
													<li><a href="https://github.com/ahsumon7/Online-Medicine-Shop-" target="_blank">Project Link </a></li>
												
												</ul>
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</li>
								
								
								
								
								<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/s1.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">Solar System</a></h3>
											</div>
											<div class="definition">
												<p>It is a desktop based application in which the solar system shows how the planets move around the sun. It mainly a animation based project....</p>
											</div>
											<div class="full_def">
												<p>
												
												Skill Used:<b> C++ (OpenGL)</b> <br> <br>
												The Solar System is the gravitationally bound system of the Sun and the objects that orbit it, either directly or indirectly. Of the objects that orbit the Sun directly, the largest are the eight planets, with the remainder being smaller objects, the dwarf planets and small Solar System bodies.<br>
												It's a animation project where all planets are roatating along the sun with individual velosity.
												
												
												</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
													<li><a href="https://github.com/ahsumon7" target="_blank">Github</a></li>
                                                    <li><a href="https://github.com/ahsumon7/Solar-System-" target="_blank">Project link </a></li>
													
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
									
									
									
								</li>
								
                            </ul>
                        </div>
								
								
								
								<div class="beny_tm_list_wrap blog_list" data-column="3" data-space="30">
							<ul class="total">
								<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/uno2.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">IoT - Smoke Detector</a></h3>
											</div>
											<div class="definition">
												<p>IoT based Smoke Detector is a device which can detect smoke by sensors and giving the alarm for the fire in a real time ....</p>
											</div>
											<div class="full_def">
												<p>
												In this project we use programming language <b> C++ , Aurdino</b> <br>
												A smoke detector is a device that senses smoke, typically as an indicator of fire. Commercial security devices issue a signal to a fire alarm control panel as part of a fire alarm system, while household smoke detectors, also known as smoke alarms, generally issue a local audible or visual alarm from the detector itself or from a number of detectors if there are multiple smoke detectors interlinked.<br>
								
											
												 Smoke/gas detector contains many usefulness.It can help us in the above sectors. In today's world firing incident is a common phenomenon. Most of the time people are widely injured by these occurance. One of the most effective way to save ourselves is to have a smoke detector alarm in our houses as well as where we spend a lot of time during working hours. When we are asleep, busy or in a different part of the house, our work place or our school and university from where the fire is it can warn us of a fire through a buzzer tone. A smoke detector alarm provide life-saving warnings to allow all of us to get out of the incident before we are trapped by fire or smoke. So we can say that we all should have at least one smoke detector alarm in our important places to avoid an instances.

												
												</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
													<li><a href="https://github.com/ahsumon7" target="_blank">Github</a></li>
                                                    <li><a href="https://github.com/ahsumon7/Smoke-Detector" target="_blank">Project Link </a></li>
													<li><a href="https://drive.google.com/file/d/1H-ybhUs8DQz7bShLKFTwuI7_7Jre2vej/view?usp=sharing" target="_blank">Project Report</a></li>
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</li>
								
								<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/b1.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">Diu Bus Stop </a></h3>
											</div>
											<div class="definition">
												<p>In This graphical animation project a bus goes towoards DIU campus. In this time it have to operate though keys by stating the journey...</p>
											</div>
											<div class="full_def">
												<p>Skill Used:<b> C++ (OpenGL)</b> <br> <br>
												In this animated project a bus travelling though road and it's destiny is about DIU camups. When it reaches campus the rider come down from bus and entered the campus.
												.</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
														<li><a href="https://github.com/ahsumon7" target="_blank">Github</a></li>
                                                    <li><a href="https://github.com/ahsumon7/bus-stop" target="_blank">Project link </a></li>
												</ul>
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</li>
								
								<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
									<div class="inner_list">
										<div class="image_wrap">
											<img class="small" src="img/blog/500x350.jpg" alt="" />
											<img class="big" src="img/blog/1170x450.jpg" alt="" />
											<div class="news_image" data-url="img/blog/c1.jpg"></div>
											<a class="link_news" href="index.html"></a>
										</div>
										<div class="definitions_wrap">
											
											<div class="title_holder">
												<h3><a href="index.html">Currency Coverter</a></h3>
											</div>
											<div class="definition">
												<p>In This Project I use NetBeans framework to convert bangladeshi currency  to another. It helps to know the currency values of other countries...</p>
											</div>
											<div class="full_def">
												<p>In this project we use programming language <b> JAVA</b> and framework<b> NetBeans</b> <br>
												A currency converter is software code that is designed to convert one currency into another in order to check its corresponding value. It is based on current market or bank exchange rates. 
												<br>
												We Updated the currency values from internet and set it by the conditions on the project.
												</p>
											</div>
											<div class="beny_tm_popup_share_wrap">
												<ul>
                                                    <li><a href="https://github.com/ahsumon7" target="_blank"> Github</a></li>
                                                    <li><a href="https://github.com/ahsumon7/Currency-Converter" target="_blank">Project link </a></li>
												</ul>
											</div>
											<div class="read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</li>
								
								
							</ul>
						</div>
					</div>
                </div>
            </div>

			
			<!-- /PORTFOLIO -->

			<!-- TESTIMONIALS -->
			<div class="beny_tm_section" id="testimonials">
				<div class="beny_tm_testimonials_wrapper_all">
					<div class="beny_tm_universal_box_wrap">
						<div class="bg_wrap">
							<div class="overlay_image testimonial jarallax" data-speed="0"></div>
							<div class="overlay_color testimonial"></div>
						</div>
						<div class="content testimonial">
							<div class="beny_tm_testimonial_wrap">
								<div class="container">
									<div class="carousel_wrap">
										<ul class="owl-carousel">
											<li class="item">
												<div class="inner">
													<div class="quotebox_wrap">
														<i class="xcon-quote-left"></i>
													</div>
													<div class="definitions_wrap">
														<p>“Design is not just what it looks like and feels like. Design is how it works.”</p>
													</div>
													<div class="name_holder">
														<p> Steve Jobs, co-founder of apple inc</p>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="inner">
													<div class="quotebox_wrap">
														<i class="xcon-quote-left"></i>
													</div>
													<div class="definitions_wrap">
														<p>“Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.”</p>
													</div>
													<div class="name_holder">
														<p>Bill Gates, co-founder of Microsoft Corporation</p>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="inner">
													<div class="quotebox_wrap">
														<i class="xcon-quote-left"></i>
													</div>
													<div class="definitions_wrap">
														<p>“If you're changing the world, you're working on important things. You're excited to get up in the morning.”</p>
													</div>
													<div class="name_holder">
														<p>Larry Page, co-founder of google.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /TESTIMONIALS -->

			<!-- NEWS -->
			
			
			
			<!-- /NEWS -->

			<!-- CONTACT -->
			
			
		
			<div class="beny_tm_section" id="contact">
			    <div class="beny_tm_contact_wrap_all">
			        <div class="beny_tm_main_title_holder contact">
			            <h3>Get in Touch</h3>
			            <span>Any question? Reach out to me and I will get back to you shortly.</span>
			        </div>
			        <div class="beny_tm_contact_wrap">
			            <div class="main_input_wrap">

			                
			                <h5 class="text-center text-success"> <?=$result; ?></h5>
			                <form action="" method="post" id="form-box" class="p-2">
			                    <div class="form-group input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text"><i class="fas fa-user"></i></span>
			                        </div>
			                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
			                    </div>
			                    <div class="form-group input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
			                        </div>
			                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
			                    </div>
			                    <div class="form-group input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text"><i class="fas fa-at"></i></span>
			                        </div>
			                        <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
			                    </div>
			                    <div class="form-group input-group">
			                        <div class="input-group-prepend">
			                            <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
			                        </div>
			                        <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
			                    </div>
			                    <div class="form-group">
			                        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block " value="Send">
			                    </div>
			                </form>



			            </div>
			        </div>
			    </div>
			</div>
			<!-- /CONTACT -->

			<!-- FOOTER -->
			<div class="beny_tm_footer_total_wrap">
				<div class="beny_tm_address_holder_wrap">
					<div class="container">
						<div class="inner_wrap">
						
						
						
							<ul>
								<li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
									
									
									<div class="image_holder">
										<img class="svg" src="img/fotter/phone1.png" alt="" />
									</div>
									<p>+88 01515636357</p>
								</li>
								<li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
									<div class="image_holder">
										<img class="svg" src="img/fotter/gmail.png" alt="" />
									</div>
									<p><a href="#">abdulhannansumon70@gmail.com</a></p>
								</li>
								<li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
									<div class="image_holder">
										<img class="svg" src="img/fotter/loc3.png" alt="" />
									</div>
									<p>Dhaka,Bangladesh</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="beny_tm_footer_wrap">
					<p class="wow fadeIn"  data-wow-duration="1.2s">&copy; Copyright 2020. Designed by <a href="#">Abdul Hannan Sumon</a></p>
				</div>
			</div>
			<!-- /FOOTER -->
		</div>
	</div>
	<!-- /CONTENT -->
 	
 	 <a class="beny_tm_totop" href="#"><i class="xcon-angle-up"></i></a> 
 	 
</div>
<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<!-- /SCRIPTS -->

</body>

<!-- Mirrored from frenify.com/envato/marketify/html/beny/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 17:24:38 GMT -->
</html>


