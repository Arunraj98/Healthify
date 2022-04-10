<?php
	session_start();
	include('db_connect/db.php');	
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_HSP_ID']);
	unset($_SESSION['SESS_DOC_ID']);
	unset($_SESSION['SESS_LAB_ID']);
	unset($_SESSION['SESS_PHAR_ID']);
	unset($_SESSION['SESS_DISTR_ID']);
	unset($_SESSION['SESS_PANCHTH_ID']);
	unset($_SESSION['SESS_INSCMP_ID']);
	unset($_SESSION['SESS_PATIENT_ID']);
	unset($_SESSION['SESS_CERT_ID']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HEALTHIFY</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <script src='assets/js/jquery.min.js'></script>
</head>
<body>
<!-- Gallery4 block -->
<section class="w3l-banner-slider">
    <div class="top-header-header-hny">

        <header id="headers4-block">
            <div class="wrapper-full">
                <div class="top-header-strip">

                    <div class="d-grid grid-columns-auto">
                        <div class="left-grid text-left">

                            <ul class="social-hny-icons">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-vk"></span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                        <div class="quick-links text-right">
                            <ul>
                                <li>
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                    <a href="tel:9809793056">+9809793056 </a>
                                </li>
                                <li>
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                    <a href="mailto:healthify@gmail.com">Need help? Contact us via email</a></li>
                                <li>
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                    Marutharoad, Palakkad
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="d-grid nav-mobile-block header-align">
                    <div class="logo">
                        <h1 class="hny-logo">
                        	<a class="brand-logo" href="index.php">
                            	<label class="spl-ap">H</label>EALTHIFY<span class="fa  fa-hospita-o logo-icon" aria-hidden="true"></span>
                             </a>
                        </h1>                      
                    </div>
                    <input type="checkbox" id="nav" />
                    <label class="nav" for="nav"></label>
                    <nav>
                        <label for="drop" class="toggle nav-height"><span class="fa fa-bars"
                                aria-hidden="true"></span></label>
                        <input type="checkbox" id="drop">
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="hospital.php">Hospital</a></li>     
                            <li><a href="doctor.php">Doctor</a></li>
                            <li><a href="diseases.php">Diseases</a></li>
                            <li><a href="certificate.php">Certificate</a></li>
                            <li><a href="login.php">Sign In</a></li>
                            <li><a href="people.php">People</a></li>                                                 
                        </ul>
                    </nav>

                </div>
                <div class="d-grid nav-mobile-block header-align">
                </div>
            </div>
        </header>
        <div id="gallery4-block" class="banner-top-slider">
            <!-- main-slider -->
            <div class="main-slider">

                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <input type="radio" name="slides" id="slides_2" />
                    <input type="radio" name="slides" id="slides_3" />
                    <input type="radio" name="slides" id="slides_4" />
                    <ul>
                        <li>
                            <div class="slider-info banner-vv">
                                <div class="banner-info wrapper">
                                    <h6>Always Be Healthy</h6>
                                    <h3 class="banner-text">Hospital Care.</h3>
                                    <div class="read-more-button">
                                        <a class="read-more btn" href="login.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info  banner-vv banner-top1">
                                <div class="banner-info wrapper">
                                    <h6>Use power carefully</h6>
                                    <h3 class="banner-text">Doctors Care.</h3>
                                    <div class="read-more-button">
                                        <a class="read-more btn" href="login.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info banner-vv banner-top2">
                                <div class="banner-info wrapper">
                                    <h6>Use power carefully</h6>
                                    <h3 class="banner-text">Patient Care.</h3>
                                    <div class="read-more-button">
                                        <a class="read-more btn" href="login.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info banner-vv banner-top3">
                                <div class="banner-info wrapper">
                                    <h6>Use power carefully</h6>
                                    <h3 class="banner-text">Government Care.</h3>
                                    <div class="read-more-button">
                                        <a class="read-more btn" href="login.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                    </div>
                    <div class="navigation">
                        <div class="page-buttons">
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                            <label for="slides_4"></label>
                        </div>
                    </div>
                    <!--featured-grids -->
                    <div class="features-6-grids-info wrapper">
                        <div class="features-6-grids text-left">
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-leanpub" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Hospital</a></h5>
                                <p>We ensure maximum health at minimum cost.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-podcast" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Doctors</a></h5>
                                <p>Our only motto is your health.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-microphone" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Patients</a></h5>
                                <p>You aren't our patient you are our family.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Care For Mob</a></h5>
                                <p>Our commitment is to care for you and make sure of your good health.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/featured-grids -->


        </div>
        <!-- /main-slider -->
    </div>
    </div>
</section>
<!-- /main-slider -->

        <section class="content-6">
       <!-- /content-6-section -->
         <div class="content-6-mian">
				<div class="wrapper">
						<div class="content-info-in">
								<div class="content-gd">
										<h4>More than medicine. It's personal</h4>
								</div>
								<div class="content-gd">
										<p>We take health care personally. Because excellence in health care is about more than just medicine, technology, tests and treatments. It is about really caring for people with dignity and respect. That's what we do. We are dedicated to providing the best care to meet the needs of people – for our community, for our patients -- for you.</p>
								</div>
								<div class="content-gd">
										<p>From routine care to the most complex procedures, we are advancing the frontiers of medicine and innovation while training the next generation of medical professionals.</p>
								</div>
								
						</div>
					
					</div>
				</div>
		</section>
      <!-- //content-6-section -->
 	

<div class="w3l-counter-top-6">
		<!-- counter-6-inf block -->
		<section id="counter-6-inf-block" class="counter-main">
		<div class="wrapper-full-gd">
			<div class="d-grid align-counter-6-inf-cols">
				<div class="counter-6-inf-left">
					<h4>How can we prevent Covid 19</h4>
				
				</div>
				<div class="counter-6-inf-right">
						<div class="specification">
								<div class="specification-icon">
										<span class="fa fa-users"></span>
								</div>
								<div class="specification-info">	
									<h6><a href="login.php">Individuals</a></h6>
									<p>Maintain a safe distance from others (at least 1 metre), even if they don't appear to be sick.</p>
								</div>
						
						</div>
						<div class="specification">
								<div class="specification-icon">
										<span class="fa fa-object-group"></span>
								</div>
								<div class="specification-info">	
									<h6><a href="login.php">Community</a></h6>
									<p> Wear a mask in public, especially indoors or when physical distancing is not possible.</p>
								</div>
						
						</div>
						<div class="specification">
								<div class="specification-icon">
										<span class="fa fa-american-sign-language-interpreting"></span>
								</div>
								<div class="specification-info">	
									<h6><a href="login.php">Relationships</a></h6>
									<p>Get vaccinated when it's your turn. Follow local guidance about vaccination.</p>
								</div>
						
						</div>
						<div class="specification last-one">
								<div class="specification-icon">
										<span class="fa fa-snowflake-o"></span>
								</div>
								<div class="specification-info">	
									<h6><a href="login.php">Society</a></h6>
									<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
								</div>
						
						</div>

				</div>
			</div>
		</div>
	</section>
<section class="w3l-photo-with-content-66-main">
	<div class="photo-with-content-sec">
		<!--/photo-with-content-66-main-->
		<div class="photo-with-content-66">
				<div class="content-photo-66">
					<div class="content-photo-img">
						<img src="assets/images/banner4.jpg" class="img-responsive" alt="/">
						<div class="content-photo-66-text-info">
                            <h3 class="hny-title two">We Support always</h3>
                            <h4>Safety is a human right</h4>
						</div>
					</div>
				</div>
		</div>
		<!--//photo-with-content-66-main-->
		<div class="conuter-66-info">
				<div class="wrapper">
				<div class="counter-grids-info">
					<div class="counter-gd">
						<label>TRUST US</label>
						<h4>What We done</h4>
					</div>
					<div class="counter-gd">
						<h6>100 +</h6>
						<p>Hospitals</p>
					</div>
					<div class="counter-gd">
						<h6>400 +</h6>
						<p>Doctors</p>
					</div>
					<div class="counter-gd">
						<h6>880 +</h6>
						<p>Users</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-stories-main">
	<!--featured-grids -->
	<div class="story-inner-6 text-left">
		<div class="wrapper">
			<div class="d-grid story-6-grids text-left">
				<div class="story-gd">
					<h3 class="hny-title">Find the care you need — from specialty treatment to everyday needs.</h3>
					<p>As a caregiver, you are an important part of the health care team. You can provide information about the person's health choices to team members. By doing this, you will help the doctors and nurses give better care.</p>

					<div class="story-info-content">
						<div class="story-info">
							<h5><span class="fa fa-long-arrow-right" aria-hidden="true"></span> <a
									href="login.php">	
									A Passion for Healing</a>
							</h5>
						</div>
						<div class="story-info">
							<h5><span class="fa fa-long-arrow-right" aria-hidden="true"></span> <a
									href="login.php">	
									Always Caring. Always Here</a>
							</h5>
						</div>
						<div class="story-info">
							<h5><span class="fa fa-long-arrow-right" aria-hidden="true"></span> <a
									href="login.php">Accurate and friendly support</a>
							</h5>
						</div>
						<div class="story-info">
							<h5><span class="fa fa-long-arrow-right" aria-hidden="true"></span> <a
									href="login.php">Believe in Us</a>
							</h5>
						</div>
					</div>
					<div class="read-buttons">
						<a class="read-more2 btn" href="login.php">About Us</a>
						<a class="read-more2 active btn" href="login.php">Contact Us</a>
					</div>
				</div>
				<div class="story-gd">
					<img src="assets/images/story.jpg" class="img-responsive" alt="/">
				</div>


			</div>
		</div>
	</div>
	</div>
	<!--/featured-grids -->
</section>
<section class="w3l-donate-6">
		<div class="donate-layout">
			<div class="wrapper">
				<div class="donate-content-info">
							<span class="sub-title">Read Us</span>
							<h3 class="hny-title two">Building a Healthy Community One Individual at a Time.</h3>
							<p>The health of a community is dependent not only upon the genetics of its residents, but also upon the environment within which those individuals live. A person's health is a product of their environment. As such, a healthy community is one in which all residents have access to a quality education, safe and healthy homes, adequate employment, transportation, physical activity, and nutrition, in addition to quality health care. Unhealthy communities lead to chronic disease, such as cancers, diabetes, and heart disease..</p>

							<a href="index.php" class="read-more btn">More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="w3l-blog-grids-6">
		<!-- /blog-grids -->
		<div class="grids-layout">
			<div class="wrapper">
            	<h3 class="hny-title text-center"><span class="sub-title">What They Say?</span>Our Hospitals</h3>
				<div class="grid grid-column-2">
					<div class="column">
						<div class="gd-innf">
							<a href="login.php"><img class="img-responsive" src="assets/images/g1.jpg" alt="hny"></a>
							<ul class="admin-list">
								<li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span>by
										Admin</a></li>
								<li><a href="login.php"><span class="fa fa-heart-o" aria-hidden="true"></span>6
										Likes</a></li>
								<li><a href="login.php"><span class="fa fa-commenting-o" aria-hidden="true"></span>9
										Comments</a></li>
							</ul>
	
							<h4> <a href="login.php" class="vv-link">Changing lives.</a></h4>
	
						</div>
					</div>
					<div class="column">
						<div class="gd-innf">
							<a href="login.php"><img class="img-responsive" src="assets/images/g2.jpg" alt="hny"></a>
							<ul class="admin-list">
								<li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span>by
										Admin</a></li>
								<li><a href="login.php"><span class="fa fa-heart-o" aria-hidden="true"></span>6
										Likes</a></li>
								<li><a href="login.php"><span class="fa fa-commenting-o" aria-hidden="true"></span>9
										Comments</a></li>
							</ul>
	
							<h4> <a href="login.php" class="vv-link">Compassion. Innovation. Trust</a></h4>
	
						</div>
					</div>
	
					<div class="column">
						<div class="gd-innf">
							<a href="login.php"><img class="img-responsive" src="assets/images/g3.jpg" alt="hny"></a>
							<ul class="admin-list">
								<li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span>by
										Admin</a></li>
								<li><a href="about.php"><span class="fa fa-heart-o" aria-hidden="true"></span>9
										Likes</a></li>
								<li><a href="login.php"><span class="fa fa-commenting-o" aria-hidden="true"></span>7
										Comments</a></li>
							</ul>
							<h4> <a href="login.php" class="vv-link">Enhancing Life. Excelling in Care.</a></h4>
	
	
						</div>
					</div>
				</div>
			</div>
	
		</div>
		<!-- //blog-grids -->
	</section>
<section class="w3l-get-add-team">
	<!--featured-grids -->
	<div class="get-6-content">
		<div class="wrapper">
			<div class="get-grids">
				<div class="get-left">
					<span class="fa fa-user-o" aria-hidden="true"></span>
					<div class="get-left-inf">
						<h3 class="hny-title two">New here? Tap to login!</h3>
						<h6>Feel free to contact us </h6>
					</div>
				</div>
				<div class="get-right">
					<div class="read-more-button">
						<a class="read-more btn" href="login.php">Login Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--/featured-grids -->
</section>
<section class="w3l-customers-main">
	<!--/customers -->
	<div class="customers-6-content">
		<div class="wrapper">
			<h3 class="hny-title text-center"><span class="sub-title">What  They Say?</span>Doctors</h3>
			<div class="customer">
				<div class="card">
					<img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
					<div class="card-body">
						<p class="card-text">A more holistic concept of health recognizes the influence of the social, economic, psychological and environmental well-being of the community on people's health.</p>
						<a href="#link" class="customer-link">
							<h3 class="card-title">Dr Afsal</h3>
						</a>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
					<div class="card-body">
						<p class="card-text">Health is a state of complete physical, mental and social wellbeing and not merely the absence of disease or infirmity. </p>
						<a href="#link" class="customer-link">
							<h3 class="card-title">Dr DeviPriya</h3>
						</a>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
					<div class="card-body">
						<p class="card-text">"The aim of medicine is to prevent disease and prolong life, the ideal of medicine is to eliminate the need of a physician."</p>
						<a href="#link" class="customer-link">
							<h3 class="card-title">Dr Shirin Ayerin</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//customers -->
</section>
<section class="w3l-footer-22-main">
		<!-- footer-22 -->
		<div class="footer">
			<div class="wrapper-full">
				<div class="text-txt">
					<div class="right-side">
						
						<div class="sub-columns">
							<div class="sub-one-left">
								<h6>About </h6>
								<p>Healthify is the innovation that creates a portal to the patients, doctors,Hospital,and Authorities to work togother for better living.</p>
	
							</div>
							<div class="sub-two-right">
								<h6>Quick links</h6>
								<div class="footer-hny-ul">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="login.php">People</a></li>
								</ul>								
							   </div>
							</div>
							<div class="sub-one-left">
								<h6>Contact </h6>
								<div class="column2">
									<div class="href1"><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="mailto:healthify@gmail.com">healthify@gmail.com</a>
									</div>
									<div class="href2"><span class="fa fa-phone" aria-hidden="true"></span><a href="tel:9809793056">9809793056</a>
									</div>
									<div>
										<p class="contact-para"><span class="fa fa-map-marker" aria-hidden="true"></span>Marutharoad, Palakkad</p>
									</div>
								</div>
							</div>
							<div class="sub-one-left">
								<h6>Subscribe to our Newsletter </h6>
								<form action="#" method="post" class="footer-newsletter">
									<div class="">
										<input type="email" name="email" class="form-input" placeholder="Enter your email.." />
									</div>
									<button type="submit" class="btn">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			<div class="below-section">
				<div class="wrapper-full">
					<div class="copyright-footer">
					<div class="columns">
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a></li>
						</ul>
					</div>
					<div class="columns copy-right text-right">
						<p>© 2021 HEALTHIFY. All rights reserved </p>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- //titels-5 -->
		 <!-- move top -->
		 <button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-long-arrow-up"></span>
		</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};
	
			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}
	
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->
</section>
	</body>
</html>