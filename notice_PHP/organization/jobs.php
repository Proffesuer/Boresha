
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

    <title>Create|Jobs|Internships</title>

    <!-- Custom fonts for this template-->
    <link href="../Dash_style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Dash_style/css/sb-admin-2.min.css" rel="stylesheet">
	
	<link href="../job/stylejob.css" rel="stylesheet">
	
	
	<link href="../job/responsive.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<!--navigation bar-->
<?php include "../includes/organization_dash.php";?>
<!--navigation ends here-->
      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>



                    
                    <!-- Content Row -->


Welcome
<?php echo htmlentities($_SESSION['name']);?>



</header>
		



		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Post a Job</h2>
					<ul>
						<li>
							<a href="index.php">
								Home 
							</a>
						</li>
						<li><a href="jobs.php?page=post?a?job">Post</a></li>
                        <li> <a href="job-listing.php?page=check?on-jobs-list">Jobs</a></li>

                        <li><a href="job-details.php?page=check-details">Job Details</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Candidates Job Information Area -->
		<section class="job-information-area ptb-100">
			<div class="container">
				<div class="job-information">
					<h3>Job Information</h3>

					<form>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Job title*</label>
									<input class="form-control" type="text" name="title">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Category*</label>
									<select>
										<option value="1">UX/UI Designer</option>
										<option value="2">Web Developer</option>
										<option value="3">Web Designer</option>
										<option value="4">Software Developer</option>
										<option value="5">SEO</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Job Types*</label>
									<select>
										<option value="1">Full Time</option>
										<option value="2">Part Time</option>
										<option value="3">Contract</option>
										<option value="4">Internship</option>
										<option value="5">Office</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Application Deadline</label>
									<div class="input-group date" id="datetimepicker">
										<input type="text" class="form-control" placeholder="12/11/2020">
										<span class="input-group-addon"></span>
										<i class="bx bx-calendar"></i>
									</div>	
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Salary Currency</label>
									<select>
										<option value="1">Default</option>
										<option value="2">20000 To 30000</option>
										<option value="3">40000 To 50000</option>
										<option value="4">60000 To 70000</option>
										<option value="5">80000 To 90000</option>
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label>Job Description*</label>
									<textarea name="message" class="form-control" rows="5"></textarea>
								</div>
							</div>
						</div>

						<h3>Company Information</h3>

						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Company Name</label>
									<input class="form-control" type="text" name="Company">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Company Website</label>
									<input class="form-control" type="text" name="Website">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Company Industry</label>
									<input class="form-control" type="text" name="Industry">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Facebook Page (Link)</label>
									<input class="form-control" type="text" name="Link">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Linkedin Page (Link)</label>
									<input class="form-control" type="text" name="Link">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Twitter Page (Link)</label>
									<input class="form-control" type="text" name="Link">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Instagram Page (Link)</label>
									<input class="form-control" type="text" name="Link">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label>Company Description*</label>
									<textarea name="message" class="form-control" rows="5"></textarea>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="choose-img">
									<p>Logo (Optional)</p>
									<label for="img">Select image:</label>
  									<input type="file" id="img" name="img" accept="image/*">
									<p>Maximum file size: 2 MB</p>
								</div>
							</div>
						</div>

						<h3>Recruiter Information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" name="Name">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group checkboxs">
									<input type="checkbox" id="chb2">
									<p>
										By clicking checkbox, you agree to our <a href="terms-conditions.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
									</p>
								</div>
							</div>

							<div class="col-lg-12">
								<button class="default-btn">
									Post a Job
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Candidates Job Information Area -->

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

	

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<p>
					© 2021 Boresha Is Proudly Created By
					<a href="https://Bennavisoftsolution.com/" target="_blank">Bennavi Softsolution</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		








                   
            <!-- End of Main Content -->

           <!-- Footer starts here-->
            <?php include "../includes/footer.php"?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../includes/logout.php">Logout</a>
                </div>
            </div>
        </div>
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

