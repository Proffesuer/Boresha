
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

    <title>Upload|Download|Assignment</title>

    <!-- Custom fonts for this template-->
    <link href="../Dash_style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Dash_style/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/style.css" class="">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<!--navigation bar-->
<?php include "../includes/student_dash.php";?>
<!--navigation ends here-->
      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Boresha Notice</h1>
                        <a href="submit.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Submit Assignment</a>
                    </div>



                    
                    <!-- Content Row -->

<hr>
Welcome
<?php echo htmlentities($_SESSION['name']);?>
<div class="line">
<hr>
</div>
<!--header starts here-->
<div class="header">

<h1>  <i class="fas fa-book fa-sm text-white-50"></i>
         MyAssignments <br>Board</h1>


</div>
<!--header ends here-->
<!--assignment board starts here-->
<br><br>
<div class="assignment">
    <?php




echo "<span class='container'>";

echo "<h4>Unit Assignment</h4>";
echo "<a style='text-decoration:none;margin-left:70%;'href='submit.php'>Submit</a>";
echo "<span>";
echo "<p class='para'>";
echo   "<h6>Descriptions</h6>";

echo "<h6>Date Given:</h6>";
echo "<h6>Submission Date:</h6>";
echo "<h6>Marks:</h6>";
echo "<h6>Unit Code:</h6>";
echo "<h6>Unit Name:</h6>";
echo "<h6>Lecturer's name:</h6>";
echo "<h6>Download Assignment:</h6>";

echo "</p>";



?>
</div>

<!--assignment board ends here-->



                   
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

