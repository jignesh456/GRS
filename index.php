<?php 
	include('administrator/connection.php');
	// print_r($conn);
	//process 1
	$exsql = "SELECT max(sr) FROM `complaint`";
	$exresult = mysqli_query($conn, $exsql);
	// print_r($exresult);
	$x = mysqli_fetch_row($exresult);
	$xx = $x[0];
	// echo $xx;
	$xm2 = $xx - 2;
	// echo $xm2;
	//process 2
	$sql = "SELECT `name`,`Area`,`complaint_desc` FROM `complaint` WHERE sr BETWEEN ".$xm2." AND ".$xx;
	$result=mysqli_query($conn, $sql);

	// process 3

  // for total number of compalints
  $qry1 = "SELECT * FROM `complaint`";
  
  $result1 = mysqli_query($conn, $qry1);
  $total_cmp = 0;
   if(mysqli_num_rows($result1) > 0) {
    // echo $total_cmp;
      while ($data = mysqli_fetch_assoc($result1)) {
          $total_cmp = $total_cmp + 1; 
          // echo $total_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $total_cmp;

    //for accepted complaints
    $qry2 = "SELECT * FROM `complaint` WHERE is_accepted = 1";
  
  $result2 = mysqli_query($conn, $qry2);
  $acc_cmp = 0;
   if(mysqli_num_rows($result2) > 0) {
    // echo $acc_cmp;
      while ($data = mysqli_fetch_assoc($result2)) {
          $acc_cmp = $acc_cmp + 1; 
          // echo $acc_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $acc_cmp;
    $unacc_cmp = $total_cmp - $acc_cmp;

     //for rejected complaints
    $qry3 = "SELECT * FROM `complaint` WHERE is_rejected = 1";
  
  $result3 = mysqli_query($conn, $qry3);
  $rej_cmp = 0;
   if(mysqli_num_rows($result3) > 0) {
    // echo $rej_cmp;
      while ($data = mysqli_fetch_assoc($result3)) {
          $rej_cmp = $rej_cmp + 1; 
          // echo $rej_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $rej_cmp;
    $unrej_cmp = $total_cmp - $rej_cmp;

    //for solved complaints
    $qry4 = "SELECT * FROM `complaint` WHERE is_solved = 1";
  
  $result4 = mysqli_query($conn, $qry4);
  $sol_cmp = 0;
   if(mysqli_num_rows($result4) > 0) {
    // echo $sol_cmp;
      while ($data = mysqli_fetch_assoc($result4)) {
          $sol_cmp = $sol_cmp + 1; 
          // echo $sol_cmp;
      }
    }

    //for arrived complaints
    $qry5 = "SELECT * FROM `complaint` WHERE is_solved = 0 AND is_accepted = 0 AND is_rejected = 0";
  
  $result5 = mysqli_query($conn, $qry5);
  $arr_cmp = 0;
   if(mysqli_num_rows($result5) > 0) {
    // echo $arr_cmp;
      while ($data = mysqli_fetch_assoc($result5)) {
          $arr_cmp = $arr_cmp + 1; 
          // echo $arr_cmp;
      }
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
       <!-- GTranslate: https://gtranslate.io/ -->
			<style type="text/css">
			#goog-gt-tt {display:none !important;}
			.goog-te-banner-frame {display:none !important;}
			.goog-te-menu-value:hover {text-decoration:none !important;}
			.goog-te-gadget-icon 
			     {
			     	background-image:url(//gtranslate.net/flags/gt_logo_19x19.gif) !important;background-position:0 0 !important;
			     }
			body{
				  top:0 !important;
				}

			</style>
			
			<script type="text/javascript">
			function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false, includedLanguages: ''}, 'google_translate_element');}
			</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GRS</title>		
        <link rel='shortcut icon' href='administrator/images/favicon.png' type='image/x-icon' />
		<!-- Meta Description -->
        <meta name="description" content="Grievance Redressal System-Gandhinagar">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

        <style type="text/css">
        	.sl-slider h2 {
	        	color: white; 
	        	text-shadow: 5px 5px 10px aqua;
	        	/*box-shadow: 0px 0px 10px 10px;*/
	        	padding: 5px;
	        }
	        @media screen and (min-width: 360px) and (max-width: 768px) {
	        	.sl-slider h2 {
		        	color: white; 
		        	text-shadow: 5px 5px 10px aqua;
		        	/*box-shadow: 0px 0px 10px 5px;*/
		        }
	        }
        </style>

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>



    </head>
	
    <body id="body">
       
		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <script type="text/javascript">
        	alert("This Website is made for Education Purpose Only and does not belongs to Government");
        </script>
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
        	<div class="text-white" style="position: static; background-color: red; color: white; text-align: center;">This Website is made for Education Purpose Only.<br>and does not belongs to Government </div>
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="index.php"><span style="font-size: 50px;"></span><sup><span style="font-size: 22px; margin-left:-94px; color:white;">Grievance Redressal System</span></sup></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#complaint">Complaint</a></li>
                        <li><a href="#service">Services</a></li>
                  
                        <li><a href="#res-comp">Recent Complaints</a></li>
						<li><a href="#social">Social</a></li>
						<li><a href="#contact">Contact</a></li> 
                        <!-- <li><div id="google_translate_element"></div></li> -->

                        <!-- <li><a href="#price">price</a></li> -->
                    </ul>
                    <a href="guj/index.php" class="btn btn-blue" id="google_translate_element" style="margin-right: -70px; margin-left: 10px;"></a>
                </nav>
				<!-- /main nav -->
		    </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
					<?php
	            		if (isset($_GET['com_sub'])) {
	            			// echo '<script type="text/javascript">
	            			// 		alert("Your Compalint ha been successfully submitted.");
	            			// 	</script>';
	            	?>				
						<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

							<div class="bg-img bg-img-1"></div>

							<div class="slide-caption">
	                            <div class="caption-content">
	                                <h2 class="animated fadeInDown">Your complaint has been Successfully submitted</h2>
	                               <!--  <span class="animated fadeInDown">Clean and Professional one page Template</span>
	                                 <a href="#" class="btn btn-blue btn-effect">Join US</a> -->
	                            </div>
	                        </div>
							
						</div>
					<?php
						}
					?>
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Welcome to GRS</h2>
                                <!-- <span class="animated fadeInDown">Clean India Green India</span> -->
                                <!-- <a href="#" class="btn btn-blue btn-effect">Join US</a> -->
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                            	 <h2>Do you have any GRS related Issue?</h2>
                                <span><!-- Clean and Professional one page Template --></span>
                            <!--     <a href="#" class="btn btn-blue btn-effect">Join US</a> -->
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Then Submit your complaints over here</h2>
                                <!-- <span>Clean and Professional one page Template</span> -->
                                <!-- <a href="#" class="btn btn-blue btn-effect">Join US</a>
                             --></div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->

        <!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>City at a Glance</h3>
								<div id="works">
									<div class="work-item">
										<p>Gandhinagar, Gujarat's new capital city and one of the beautiful and greenest city in India, lies on the west bank of the Sabarmati River, about 464 km away from Mumbai, the financial capital of India. Gandhinagar presents the spacious, well-organized look of an architecturally integrated city.</p>
									</div>
									<div class="work-item">
										<p>Thirty sectors, into which the city has been divided, stretch around the central Government complex. Each sector has its own shopping and community center, primary school, health center, governmetn and private housing. Apart from which there is a generous provision for wide open green parks, extensive planting and a large recreational area along the river giving the city a lush green garden-city atmosphere</p>
									</div>
									<div class="work-item">
										<p>Gandhinagar's roads are numbered, and have cross roads named for Gujarati alphabets like "K", "KH", "G", "GH", "CH", "CHH", "J". All roads cross every kilometer, and at every crossing traffic circles decrease the speed of traffic.</p>
									</div>
								</div>
							</div>
						</div> -->
										<div class="sec-title white text-center wow animated fadeInDown">
											<h2>What is GRS?</h2>
										</div>			
						   <div class="message-body col-md-5">
									<!-- <img src="img/member-1.jpg" class="pull-left" alt="member"> -->
					
						       		<p>The project GRS tries to provide the service to citizens of Gandhinagar (the capital city of vibrant gujarat) to share their issues hailing in their city.</p>
						       	</div>
						       	<div class="message-body col-md-5">
						       		<!-- <br> -->
						       		<p>Citizens can share their several issues through the website to GRS team, many times they are pressured to visit the city municipal office for registering the complain, so as of this issues we the team of GRS had made this kind of online system for complaining the citizens issues via our website.</p>
						       	</div>
						       	<div class="message-body col-md-5">
						       		<!-- <br> -->
						       		<p>We the GRS team tries to solve all the grievance and other issues for citizens via providing digital environment. By this, the issues of citizens will be solved very early and easily, there will be more new innovative communications between the citizens and the team for the new ideas of developing the environment of the city.</p>
						       	</div>
						       	<div class="message-body col-md-5">
						       		<!-- <br> -->
						       		<p>For the better responses our team had made the registration website in two languages, English and Gujarati. After doing the registration, our team will connect with them in short time and then after we will try to solve the issue with the help of municipal's team. </p>
						     	</div>
						       	<!-- <a href="#" class="btn btn-border btn-effect pull-right">Read More</a> -->
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
        	<!-- Contact section -->
			<section id="complaint" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Complaint</h2>
							<p>Register Your Complaint Over Here</p>
						</div>
						<div class="col-md-3">
							
						</div>
						<div class="col-md-6 text-center contact-form wow animated">
							<form name="myform" method="post" action="submit.php" name="grs-form" id="grs-form" onsubmit="return validate()">
								<!-- <div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div> -->
				
	
							
							<div class="input-field">
								<input type="text" name="Name" id="Name" class="form-control" placeholder="Name" required />
								<span id="nameloc"></span>
							</div>
							<div class="input-field">
								<input type="text" name="MobileNumber" id="MobileNumber" class="form-control" placeholder="Mobile Number" required />
								<span id="numloc"></span>
							</div>

							<div class="input-field">
								<textarea name="Address" id="Address" class="form-control" placeholder="Address" rows="3" required></textarea>
							</div>

							<div class="input-field">
								<div class="select-wrapper">
									<select name="Area" id="Area" class="form-control" required>
										<option value="No Area" selected>Area</option>
										<option value="Nikol">Nikol</option>
										<option value="Odhav">Odhav</option>
										<option value="Bapunagar">Bapunagar</option>
										<option value="Krishnagar">Krishnagar</option>
										<option value="Viratnagar">Viratnagar</option>
										<option value="Thakkarnagar">Thakkarnagar</option>
										<option value="Dehgam">Dehgam</option>
										<option value="Ambawadi">Ambawadi</option>
										<option value="Amraiwadi">Amraiwadi</option>
										<option value="Chandkheda">Chandkheda</option>
										<option value="Chandlodia">Chandlodia</option>
										<option value="Jamalpur">Jamalpur</option>
										<option value="Kalupur">Kalupur</option>
										<option value="Lal Darwaza">Lal Darwaza</option>
										<option value="Sarkhej">Sarkhej</option>
										<option value="shahibaug">shahibaug</option>
										<option value="Maninagar">Maninagar</option>
										<option value="Sanand">Sanand</option>
										<option value="Naroda">Naroda</option>						
									</select>
								</div>
							</div>
							<div class="input-field">
								<textarea name="Description" id="Description" placeholder="Type Complaint......" class="form-control" rows="4" required></textarea>
							</div>
							<!-- <div class="input-field">
								<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
							</div>
							<div class="input-field">
								<label>But are you a robot?</label>
								<input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
								<input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
							</div> -->
								<!-- <button type="submit" id="submit" >Send</button> -->
								<input type="submit" name="submit" value="Submit" class="btn btn-blue btn-effect">
						</form> 	
						</div>

						<!-- <section id="google-map" class="col-md-6">
							<div id="map-canvas" class="wow animated fadeInUp"></div>
						</section>	 -->	
					</div>
				</div>
			</section>
			<!-- end Contact section -->			
			
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Services</h2>
							<p class="wow animated bounceInRight">Complaints has been resolved as given below</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-globe fa-3x"></i>
								</div>
								<h3>Arrived Complaints</h3>
								<h3>
									<?php
										echo $arr_cmp; 
									?>
								</h3>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-list fa-3x"></i>
								</div>
								<h3>Accepted Complaints</h3>
								<h3>
									<?php
										echo $acc_cmp; 
									?>
								</h3>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-check fa-3x"></i>
								</div>
								<h3>Solved Complaints</h3>
								<h3>
									<?php
										echo $sol_cmp; 
									?>
								</h3>					
							</div>
						</div>	

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-ban fa-3x"></i>
								</div>
								<h3>Rejected Complaints</h3>
								<h3>
									<?php
										echo $rej_cmp; 
									?>
								</h3>
							</div>
						</div>			
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			
			<!-- Testimonial section -->
			<div id="res-comp">
				<section id="testimonials" class="parallax">
					<div class="overlay">
						<div class="container">
							<div class="row">
							
								<div class="sec-title text-center white wow animated fadeInDown">
									<h2>Recent Complaints</h2>
								</div>
								
								<div id="testimonial" class=" wow animated fadeInUp">
									<?php
									try {
										
										// echo mysqli_error($conn); 
										$count = 0 ;

										if ($result == NULL ) {
											throw new Exception("No Complaints Registered", 1);
											
										}
										while ($row = mysqli_fetch_array($result) AND $count < 3) {
												$count = $count + 1;
												$name =  $row['0'];
												$Area = $row['1'];
												$comp = $row['2'];	
									?>
									<div class="testimonial-item text-center">
										<!-- <img src="img/member-1.jpg" alt="Our Clients"> -->
										<div class="clearfix">
											
											<span>
												<?php
													echo $name;
												?>
											</span>
											<br>
											<span>
												<?php
													echo $Area;
												?>
											</span>
											<p>
												<?php
													echo $comp; 	
												?>
											</p>
										</div>
									</div>
									<?php
										}
										mysqli_close($conn);
									} catch (Exception $e) {
										echo "<h3 style ='text-align:center; color:white;'>";
										echo $e->getmessage();
										echo "</h3>";
										mysqli_close($conn);
									}
									?>
									
								</div>
							
							</div>
						</div>
					</div>
				</section>
			</div>
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
								<p>Fill free to join us</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="https://facebook.com/login"><i class="fa fa-facebook fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/login"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://www.instagram.com/accounts/login"><i class="fa fa-instagram fa-2x"></i></a></li>		
							</ul>	
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- not in gbattle -->
			<section id="google-map" style="display: none;">
				<div id="map-canvas" class="wow animated fadeInUp"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3666.6065529519274!2d72.644904!3d23.221005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x132425f5fea32f6f!2sCollector+%26+Jilla+Seva+Sadan+Kacheri!5e0!3m2!1sen!2sin!4v1555830917970!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container" id="contact">
				<div class="row text-center">
					<div class="footer-content col-md-6">
						<div class="wow animated fadeInRight">
							<address class="contact-details">
								<h3 style="color: white;">Contact Us</h3>						
								<p>
								  <p><i class="fa fa-phone"></i>Jignesh Panchal:- +91-8488824650</p>
								 
								  <p><i class="fa fa-envelope"></i>panchaljignesh494@gmail.com</p>
								  
								</p>
							</address>
						</div>
						
						
						<p>Copyright &copy; 2020-2021 Design and Developed By GRS  </p>
					</div>
					<div class="col-md-6">
						<section id="google-map">
							<div id="map-canvas" class="wow animated fadeInUp"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15171890.682642346!2d72.45457522761268!3d23.902984647243166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1557122858164!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						</section>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>

        <script type="text/javascript">
        	function validate(){
        		// for name
        		var name = document.myform.Name.value;
        		var letters = /^[A-Za-z\s]+$/;
			    if(!name.match(letters))
			    {
			    	document.getElementById("nameloc").innerHTML="Please Enter Valid Name";
					return false;		    	
			    }
			    else {
			    	document.getElementById("nameloc").innerHTML="";
			    }
				// for mobile number
				var num=document.myform.MobileNumber.value;
				if (isNaN(num)){
					document.getElementById("numloc").innerHTML="Please Enter Numeric value only";
					return false;
					var phoneno = /^\d{10}$/;
					if(!num.match(phoneno))
					{
					   document.getElementById("numloc").innerHTML="Not a valid Phone Number";
						return false;
					}
					else {
						document.getElementById("numloc").innerHTML="valid Phone Number ";
					}
				}
				else{
				  	var phoneno = /^\d{10}$/;
					if(!num.match(phoneno))
					{
					   document.getElementById("numloc").innerHTML="Not a valid Phone Number";
						return false;
					}
					else {
						document.getElementById("numloc").innerHTML="valid Phone Number ";
					}
				}
			}
        </script>
    </body>
</html>