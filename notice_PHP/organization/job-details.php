<?php
include "../Database/config.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobs|Internships</title>

    <!-- Custom fonts for this template-->
    <link href="../Dash_style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Dash_style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="stylejob.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">

	<link href="../job/stylejob.css" rel="stylesheet">
	
	
	<link href="../job/responsive.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<!--navigation bar-->
<?php include "../includes/admin_dash.php";?>
<!--navigation ends here-->
      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Boresha Notice</h1>
                        
                    </div>



		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Job Details</h2>
					<ul>
						<li><a href="jobs.php">Post</a></li>
                        <li> <a href="job-listing.php">Jobs</a></li>
                        <li><a href="apply.php">Apply</a></li>
                        <li><a href="job-details.php">Job Details</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Job Details Area -->
		<section class="job-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="hot-jobs-list">
							<div class="row align-items-center">
								<div class="col-lg-2">
									<div class="hot-jobs-img">
										<img src="assets/images/hot-jobs/hot-jobs-1.png" alt="Image">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="hot-jobs-content">
										<h3>Finance & Accounts</h3>
										<span class="sub-title">Finix loans & funding agency</span>
										<ul>
											<li><span>Vacancy:</span> 01</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="hot-jobs-btn">
										<a href="#" class="default-btn">Apply Now</a>
										<p><span>Deadline: </span>Dec 30, 2020</p>
									</div>
								</div>
							</div>
						</div>

						<div class="job-details-content">
							<h3>Job Description</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur</p>

							<h4>Responsibilities:</h4>

							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aspernatur modi doloribus dolorem quidem! Neque placeat numquam vel magni ipsam, similique eligendi sunt laudantium, nihil alias soluta eos in Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nam eveniet quasi.</p>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
							</ul>

							<h4>Qualifications:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
							</ul>

							<h4>Competencies:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua</li>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
								<li>Aliquyam erat, sed diam voluptua.</li>
							</ul>

							<h4>Experience Requirements:</h4>

							<ul>
								<li>Stet clita kasd gubergren, no sea takimata sanctus</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
								<li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="job-details-sidebar">
							<div class="job-widget">
								<h3>Share This Job</h3>

								<ul class="social-icon">
									<li>
										<a href="#">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-linkedin-square"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
								</ul>
							</div>

							<div class="job-widget">
								<h3>Job Overview</h3>
								
								<ul class="overview">
									<li>
										Published On
										<span>: Oct 01, 2020</span>
									</li>
									<li>
										Vacancy
										<span>: 01</span>
									</li>
									<li>
										Job Type
										<span>: Part Time</span>
									</li>
									<li>
										Experience
										<span>: 3 Year(s)</span>
									</li>
									<li>
										Job Location
										<span>: Alaska(s)</span>
									</li>
									<li>
										Category
										<span>: Finance</span>
									</li>
									<li>
										Gender
										<span>: Both</span>
									</li>
									<li>
										Salary
										<span>: $700.00</span>
									</li>
									<li>
										Application Deu
										<span>: 10.11.2020</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Job Details Area -->

		<!-- Start Subscribe Area -->
		<section class="subscribe-area subscribe-area-about-page">
			<div class="container">
				<div class="subscribe-bg">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="subscribe-content">
								<h2>Find Your Next Great Job Opportunity!</h2>
							</div>
						</div>
	
						<div class="col-lg-6">
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
	
								<button class="default-btn" type="submit">
									<span>Subscribe</span>
								</button>
	
								<div id="validator-newsletter" class="form-result"></div>
								<p>Join The Newsletter 10,000 Users Already!</p>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Subscribe Area -->

		<!-- Start Footer Area -->
		<footer class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget single-bg">
							<a href="index.html" class="logo">
								<img src="assets/images/logo.png" alt="Image">
							</a>

							<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur.</p>

							<ul class="social-icon">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Contact</h3>

							<ul class="address">
								<li>
									<i class="bx bx-phone-call"></i>
									<span>Phone:</span>
									<a href="tel:+1-(514)-7939-357">+1 (514) 7939-357</a>
								</li>
								<li>
									<i class="bx bx-envelope"></i>
									<span>Email:</span>
									<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3d55585151527d57485f54135e5250"><span class="__cf_email__" data-cfemail="98f0fdf4f4f7d8f2edfaf1b6fbf7f5">[email&#160;protected]</span></a>
								</li>
								<li class="location">
									<i class="bx bx-location-plus"></i>
									<span>Address:</span>
									6890 Blvd, The Bronx, NY 1058 New York, USA
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Helpful Resources</h3>

							<ul class="import-link">
								<li>
									<a href="#">Create Account</a>
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
								<li>
									<a href="#">Site Map</a>
								</li>
								<li>
									<a href="#">Terms of Use</a>
								</li>
								<li>
									<a href="#">Privacy Centre</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Job Seekers</h3>

							<ul class="import-link">
								<li>
									<a href="#">Create Account</a>
								</li>
								<li>
									<a href="#">Browse Jobs</a>
								</li>
								<li>
									<a href="#">Upload CV</a>
								</li>
								<li>
									<a href="#">Company Profile</a>
								</li>
								<li>
									<a href="#">International Jobs</a>
								</li>
								<li>
									<a href="#">FAQ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<p>
					© 2021 Jubi Is Proudly Created By
					<a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
	
    <!-- Bootstrap core JavaScript-->
    <script src="../Dash_style/vendor/jquery/jquery.min.js"></script>
    <script src="../Dash_style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Dash_style/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Dash_style/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../Dash_style/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../Dash_style/js/demo/chart-area-demo.js"></script>
    <script src="../Dash_style/js/demo/chart-pie-demo.js"></script>

</body>

</html>