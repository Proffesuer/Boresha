<?php
 include "../Database/config.php";

 session_start();
 $hall = "";
 $building = "";

 $errors = array(); 

// Registration for the new lec_hall starts here
if (isset($_POST['submit_hall'])) {
    // receive all input values from the form
    $hall = $_POST['hall'];
    $building = $_POST['building'];

    $user_check_query = "SELECT * FROM lec_hall WHERE hall='$hall' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['hall'] === $hall) {
      array_push($errors, "Lecture Hall already exists");
    }
  }
  if (count($errors) == 0) {
        $query = "INSERT INTO lec_hall (hall, building) 
                  VALUES('$hall', '$building')";
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
                alert("The lecture Hall Already Exist Try another one!"); 

          </script>';?></p>
		<?php endforeach ?>
	</div>
  <?php  endif ?>
  <!--Insertion code for the lec_hall information ends here-->
