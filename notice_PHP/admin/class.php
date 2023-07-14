<?php
 include "../Database/config.php";

 session_start();
 $fac_name = "";
 $fac_description = "";

 $errors = array(); 

// REGISTER USER
if (isset($_POST['submit_faculty'])) {
    // receive all input values from the form
    $fac_name = $_POST['fac_name'];
    $fac_description = $_POST['fac_description'];

    $user_check_query = "SELECT * FROM faculty WHERE fac_name='$fac_name' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['fac_name'] === $fac_name) {
      array_push($errors, "Faculty already exists");
    }
  }
  if (count($errors) == 0) {
        $query = "INSERT INTO faculty (fac_name, fac_description) 
                  VALUES('$fac_name', '$fac_description')";
       if(!mysqli_query($con, $query)){

        echo 'not inserted';
       }
       else{
	 echo '<script type="text/javascript">
     alert("New Faculty Added!");
        location="class.php";
          </script>';
       }
    }
      
  }
  


 

?>




<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
		  <p><?php echo '<script>
                alert("The Faculty Already Exist Try another one!"); 

          </script>';?></p>
		<?php endforeach ?>
	</div>
  <?php  endif ?>
  <!--Insertion code for the faculty information ends here-->

  <!--Insertion code for the lecture Hall starts here-->


  <?php
$fac_name = "";
$fac_description = "";

$errors = array(); 

// REGISTER USER
if (isset($_POST['submit_faculty'])) {
   // receive all input values from the form
   $fac_name = $_POST['fac_name'];
   $fac_description = $_POST['fac_description'];

   $user_check_query = "SELECT * FROM faculty WHERE fac_name='$fac_name' LIMIT 1";
 $result = mysqli_query($con, $user_check_query);
 $user = mysqli_fetch_assoc($result);
 
 if ($user) { // if user exists
   if ($user['fac_name'] === $fac_name) {
     array_push($errors, "Faculty already exists");
   }
 }
 if (count($errors) == 0) {
       $query = "INSERT INTO faculty (fac_name, fac_description) 
                 VALUES('$fac_name', '$fac_description')";
      if(!mysqli_query($con, $query)){

       echo 'not inserted';
      }
      else{
    echo '<script type="text/javascript">
    alert("New Faculty Added!");
       location="class.php";
         </script>';
      }
   }
     
 }
 



?>




  <?php  if (count($errorsh) > 0) : ?>
	<div class="error">
		<?php foreach ($errorshl as $error) : ?>
		  <p><?php echo '<script>
                alert("The Faculty Already Exist Try another one!"); 

          </script>';?></p>
		<?php endforeach ?>
	</div>
  <?php  endif ?>


<!--Insertion code for the lecture Hall ends here-->





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage classes</title>

    <!-- Custom fonts for this template-->
    <link href="../Dash_style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Dash_style/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/class.css">

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
                        <h1 class="h3 mb-0 text-gray-800">Manage Classes</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>




                    <!-- Content Row -->


Welcome
<h3><?php echo ($_SESSION['name']);?></h3>
<div style="background-color:tomato;">
<hr>
</div>
<!--managing class container starts here-->
<div class="container style">
    <hr>
    
<!--first row starts here -->
<h5>Here you will Assign Fuculty</h5><br>
<div class="row">
  
    <br>     

    <form action="" method="post">
<label for="">Faculty Name</label><br>
<input type="text" name="fac_name" value="<?php echo $fac_name;?>" required><br>
<label for="">Faculty Description</label><br>

<input type="text" name="fac_description" value="<?php echo $fac_description;?>"><br><br>
<button id="submit" name="submit_faculty" class="btn btn-primary">Add Faculty</button>

    </form>


</div>
<hr>
<h5>Here you will Assign Lecture Hall:</h5>
<!--Second row starts here -->
<div class="row">

<form action="" method="post">
<label for="">Hall Name:</label><br>
<input type="text" name="hall" value="<?php echo $hall;?>" required><br>
<label for="">Building:</label><br>
<label for=""></label>
<input type="text" name="building" value="<?php echo $building;?>"><br><br>
<button id="submit" name="submit_hall" class="btn btn-primary">Add Hall</button>

    </form>




</div>
<hr>
<!--third row starts here -->
<div class="row">
<h5>Here you will Assign Lecture Hall</h5>




</div>




</div>
<!--managing class content ends here-->











</div>
                   
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

