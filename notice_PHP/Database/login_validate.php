<?php require_once 'config.php'; 
	session_start();
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];

		$photo = explode('.', $_FILES['photo']['name']);
		$photo= end($photo);
		$photo_name= $username.'.'.$photo;

		$input_error = array();
		if (empty($name)) {
			$input_error['name'] = "The Name Filed is Required";
		}
		if (empty($email)) {
			$input_error['email'] = "The Email Filed is Required";
		}
		if (empty($username)) {
			$input_error['username'] = "The UserName Filed is Required";
		}
		if (empty($password)) {
			$input_error['password'] = "The Password Filed is Required";
		}
		if (empty($photo)) {
			$input_error['photo'] = "The Photo Filed is Required";
		}

		if (!empty($password)) {
			if ($c_password!==$password) {
				$input_error['notmatch']="You Typed Wrong Password!";
			}
		}

		if (count($input_error)==0) {
			$check_email= mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email';");

			if (mysqli_num_rows($check_email)==0) {
				$check_username= mysqli_query($conn,"SELECT * FROM `users` WHERE `username`='$username';");
				if (mysqli_num_rows($check_username)==0) {
					if (strlen($username)>7) {
						if (strlen($password)>7) {
								$password = sha1(md5($password));
							$query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password','$photo_name','inactive');";
									$result = mysqli_query($db_con,$query);
								if ($result) {
									move_uploaded_file($_FILES['photo']['tmp_name'], './image/'.$photo_name);
									header('Location: login.php?insert=sucess');
								}else{
									header('Location: register.php?insert=error');
								}
						}else{
							$passlan="This password more than 8 charset";
						}
					}else{
						$usernamelan= 'This username more than 8 charset';
					}
				}else{
					$username_error="This username already exists!";
				}
			}else{
				$email_error= "This email already exists";
			}
			
		}
		
	}

?>