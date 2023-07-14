
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

    <title>Assignments</title>

    <!-- Custom fonts for this template-->
    <link href="../Dash_style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Dash_style/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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
                        <a href="#" class="d-none d-sm-inline-block submit" style="text-decoration:none;border-radius:5px;"><i
                                class="fas fa-book fa-sm text-white-50"></i> Assignment List</a>
                    </div>



                    
                    <!-- Content Row -->

<hr>

  Admin ...<?php echo ($_SESSION['name']);?>
  <div class="line">

  <hr>
  </div>


<div class="container">
    <!--Assignment form starts here-->


    <div class="assign">

<!--Homework submision Header starts here-->


<div class="header">

<h1>  <i class="fas fa-book fa-sm text-white-50"></i>
         Assignment <br>Board</h1>


</div>

<!--homework header ends here-->
<!--instructions starts here-->
<div class="instruction">
<p>Hello <?php echo ($_SESSION['name']);?> , Welcome to Assignment board on Boresha notice system.To create a new assignment for 
your class fill in the below form and upload the the assignment file for your students.
Note: The assignment will be visisble to the students who are only subscribed to your class.
</p>

</div>
<!--instructions ends here-->
<div class="form">
<form action="" method="post" class="">
<!--first row starts here-->
<div class="row row1">

<div class="col-md-4">
<lable>Faculty:</lable><br>
<input name="faculty" style="text">
</div>

<div class="col-md-4">
<lable>Course:</lable><br>
<input name="faculty" style="text">

</div>
<div class="col-md-4">

<lable>Course Unit:</lable><br>
<input name="faculty" style="text">

</div>
</div>

<lable>Marks:</lable><br>
<input name="marks" style="text" required placeholder="Enter the marks">

<br>
<lable>Date:</lable>
<div class="row">
    <div class="col-md-4">
    <lable>Date Given:</lable><br>
<input name="faculty" class="date"type="date">
    </div>

    <div class="col-md-4">
    <lable>submision Date:</lable><br>
<input name="subdate" class="date"type="date">
    </div>
    <div class="col-md-4">
    <lable>Submission Time:</lable><br>
<input name="subdate" class="Time"type="time">
    </div>


</div>
<div class="row">
<div class="col-md-7">
<lable>Upload your assignment here*</lable><br>
<input name="upload" required class="upload"type="file" style="color:red"data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif">

</div>
<div class="col-md-5">

<lable>Link your Assignment(optional)</lable><br>
<input name="link" class="link" style="link"placeholder=" Link materials for assignment">


</div>


</div>




</div>





<lable>Additional comments or instruction:</lable><br>
<input name="comment"class="addit" required style="text"placeholder="Write More instructions to the students on the assignment you are giving"><br>

<button type="submit" id="submit" class="button" name="submit">Submit</button>






</form>



</div>


</div>
 <!--Assignment form ends here-->




</div>
<div class="line">
    <hr>
</div>

<!--assignment list starts here-->

<!--assignment list starts here-->
<div class="container">
<div class="lists">
    <h4 class="head">My Assignments:</h4>
<hr>



</div>
</div>


<!--assignment list ends here-->

<!--assignment list ends here-->


                   
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

