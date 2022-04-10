<?php
	include('db_connect/db.php');	
	$location=$_POST['location'];	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Secure Care</title>
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
                                    <a href="tel:+45 123 456 78">+45 123 456 78 </a>
                                </li>
                                <li>
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                    <a href="mailto:info@example.com">Need help? Contact us via email</a></li>
                                <li>
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                    Kanjikode Palakkad
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="d-grid nav-mobile-block header-align">
                    <div class="logo">
                        <h1 class="hny-logo">
                        	<a class="brand-logo" href="index.php">
                            	<label class="spl-ap">S</label>
                        		ecure Care<span class="fa  fa-hospital-o logo-icon" aria-hidden="true"></span>
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
                                    <h6>Use power carefully</h6>
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
                                <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-podcast" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Doctors</a></h5>
                                <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-microphone" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Patients</a></h5>
                                <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere.</p>

                            </div>
                            <div class="features-6-grid">
                                <div class="feature-images">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </div>
                                <h5><a href="login.php">Care For Mob</a></h5>
                                <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere.</p>
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

       

<div class="w3l-counter-top-6">
	
<section class="w3l-blog-grids-6">
		<!-- /blog-grids -->
		<div class="grids-layout">
			<div class="wrapper">
            	<h3 class="hny-title text-center"><span class="sub-title">What They Say?</span>Our Hospitals</h3>
				<div class="grid grid-column-2">
					<?php
					$result = $db->prepare("select * from hospital where location like'%".$location."%' and stat='active'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++)
					{
					?>
                    <div class="column">
						<div class="gd-innf">
							<a href="login.php"><img class="img-responsive" src="admin/hospital_photo/<?php echo $row["photo1"];?>" alt="hny"></a>
							<ul class="admin-list">
								<li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span><?php echo $row["hname"];?></a></li>
								<li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span><?php echo $row["seplty"];?></a></li>
                                <li><a href="login.php"><span class="fa fa-user" aria-hidden="true"></span><?php echo $row["cntn1"];?></a></li>
							</ul>
	
							<h4> <a href="login.php" class="vv-link"><?php echo $row["seplty"];?></a></h4>
	
						</div>
					</div>
					<?php
					}
					?>
				
				</div>
			</div>
	
		</div>
		<!-- //blog-grids -->
	</section>
</div>

<section class="w3l-footer-22-main">
		<!-- footer-22 -->
		<div class="footer">
			<div class="wrapper-full">
				<div class="text-txt">
					<div class="right-side">
						
						<div class="sub-columns">
							<div class="sub-one-left">
								<h6>About </h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia dicta magni ea at, culpa atque, rerum dolorum voluptas alias qui temporibus ex expedita obcaecati vel asperiores totam distinctio nobis impedit minus.</p>
	
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
									<div class="href1"><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a>
									</div>
									<div class="href2"><span class="fa fa-phone" aria-hidden="true"></span><a href="tel:+44-000-888-999">+44-000-888-999</a>
									</div>
									<div>
										<p class="contact-para"><span class="fa fa-map-marker" aria-hidden="true"></span>Kanjikode, Palakkad</p>
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
						<p>© 2021 Secure Care. All rights reserved </p>
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