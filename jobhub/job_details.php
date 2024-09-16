<?php
require_once 'connect.php';
session_start();

/*if(!isset($_SESSION['email'])){
header("Location: sign_in.php");
//header("Location: index.php");
}*/
$user_first_name = $_SESSION['name'];
if(!empty($user_first_name)){

?>

<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="assets/css/boxicon.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Title CSS -->
        <title>Jobhub - Job Board & Portal HTML Template</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">  
    </head>

    <body>
        
        <!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->

        <!-- Navbar Area Start -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <?php require_once "includes/top_menu.php" ?>
        </div>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg6">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Job Details</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Job Details</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Job Details Section Start -->
        <section class="job-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="job-details-text">
                                    <div class="job-card">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="company-logo">
                                                    <img src="assets/img/company-logo/1.png" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="job-info">
                                                    <h3>Web Designer, Graphic Designer, UI/UX Designer</h3>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bx-location-plus'></i>
                                                            Wellesley Rd, London
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-filter-alt' ></i>
                                                            Accountancy
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-briefcase' ></i>
                                                            Freelance
                                                        </li>
                                                    </ul>
                                                    
                                                    <span>
                                                        <i class='bx bx-paper-plane' ></i>
                                                        Apply Before: June 01,2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details-text">
                                        <h3>Description</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,but also the leap into essentially unchanged.</p>

                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    
                                    <div class="details-text">
                                        <h3>Requirements</h3>
                                       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Work experience
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Skills (soft skills and/or technical skills)
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                WPersonal qualities and attributes.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Support software roll-outs to production.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Guide and mentor junior engineers. Serve as team lead if appropriate.

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-text">
                                        <h3>Job Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Company</span></td>
                                                            <td>Tourt Design LTD</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Location</span></td>
                                                            <td>Wellesley Rd, London</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Job Type</span></td>
                                                            <td>Full Time</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Email</span></td>
                                                            <td><a href="mailto:hello@company.com">hello@company.com</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Experince</span></td>
                                                            <td>2 Years</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Language</span></td>
                                                            <td>English</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Salary</span></td>
                                                            <td>$10,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Website</span></td>
                                                            <td><a href="#">www.company.com</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-btn">
                                        <a href="#" class="default-btn">
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="job-sidebar">
                            <h3>Posted By</h3>
                            <div class="posted-by">
                                <img src="assets/img/client-1.png" alt="client image">
                                <h4>John Doe</h4>
                                <span>CEO of Tourt Design LTD</span>
                            </div>
                        </div>

                        <div class="job-sidebar">
                            <h3>Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27991517034!2d-74.25987556253516!3d40.697670063539654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1588772651198!5m2!1sen!2sbd" frameborder="0"></iframe>
                        </div>

                        <div class="job-sidebar">
                            <h3>Keywords</h3>
                            <ul>
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">Data Sceince</a>
                                </li>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                                <li>
                                    <a href="#">Content Writter</a>
                                </li>
                                <li>
                                    <a href="#">Finance</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Education</a>
                                </li>
                                <li>
                                    <a href="#">Graphics</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                            </ul>
                        </div>

                        <div class="job-sidebar social-share">
                            <h3>Share In</h3>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Details Section End -->

        <!-- Job Section End -->   
        <section class="job-style-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Jobs You May Be Interested In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/1.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Web Designer, Graphic Designer, UI/UX Designer </a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Graphics Designer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $35000-$38000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                9 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/2.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Website Developer & Software Developer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $3000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Garden Road, UK
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                5 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/3.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Application Developer & Web Designer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                App Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $3000-$4000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                State City, USA
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                8 days ago
                                            </li>
                                        </ul>

                                        <span>Part-Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/4.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Frontend & Backend Developer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $5000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Drive Post NY 676
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                1 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/5.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">IT Department & Manager</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Manager
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $35000-$38000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                7 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Section End -->
    
        <!-- Subscribe Section Start -->
        <section class="subscribe-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Get New Job Notifications</h2>
                            <p>Subscribe & get all related jobs notification</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
    
                            <button class="default-btn sub-btn" type="submit">
                                Subscribe
                            </button>
    
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
		<footer class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.php">
									<img src="assets/img/logo.png" alt="logo">
								</a>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna. Sed eiusmod tempor incididunt ut.</p>

							<div class="footer-social">
								<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-60">
							<h3>For Candidate</h3>
							<ul>
								<li>
									<a href="job-grid.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Browse Jobs
									</a>
								</li>
								<li>
									<a href="account.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Account
									</a>
								</li>
								<li>
									<a href="catagories.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Browse Categories
									</a>
								</li>
								<li>
									<a href="resume.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Resume
									</a>
								</li>
								<li>
									<a href="job-list.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Job List
									</a>
								</li>
								<li>
									<a href="sign-up.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Sign Up
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-60">
							<h3>Quick Links</h3>
							<ul>
								<li>
									<a href="index.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Home
									</a>
								</li>
								<li>
									<a href="about.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										About
									</a>
								</li>
								<li>
									<a href="faq.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										FAQ
									</a>
								</li>
								<li>
									<a href="pricing.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Pricing
									</a>
								</li>
								<li>
									<a href="privacy.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Privacy
									</a>
								</li>
								<li>
									<a href="contact.php">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Contact
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget footer-info">
							<h3>Information</h3>
							<ul>
								<li>
									<span>
										<i class='bx bxs-phone'></i>
										Phone:
									</span>
									<a href="tel:882569756">
										+101 984 754
									</a>
								</li>

								<li>
									<span>
										<i class='bx bxs-envelope'></i>
										Email:
									</span>
									<a href="mailto:info@jovie.com">
										info@jovie.com
									</a>
								</li>

								<li>
									<span>
										<i class='bx bx-location-plus'></i>
										Address:
									</span>
									123, Denver, USA
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <div class="copyright-text text-center">
            <p>© Jovie is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrp</a></p>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- Back To Top End -->

		<!-- jQuery first, then Bootstrap JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Subscriber Form JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Velidation JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact Form -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Meanmenu JS -->
		<script src="assets/js/meanmenu.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
  	</body>
</html>

<?php
}else{
    header('location:sign_in.php');
}

?>