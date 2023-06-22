<?php
session_start();
error_reporting(0);
session_start();



include('config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="Home.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	
		
	    <title>Notice Portal | Signi-in | Signup</title>

		<style>*,
        *::before,
        *::after {
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
            background: #3b4465;
        }
        
        .forms-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .section-title {
            font-size: 32px;
            letter-spacing: 1px;
            color: #fff;
        }
        
        .forms {
            display: flex;
            align-items: flex-start;
            margin-top: 30px;
        }
        
        .form-wrapper {
            animation: hideLayer .3s ease-out forwards;
        }
        
        .form-wrapper.is-active {
            animation: showLayer .3s ease-in forwards;
        }
        
        @keyframes showLayer {
            50% {
                z-index: 1;
            }
            100% {
                z-index: 1;
            }
        }
        
        @keyframes hideLayer {
            0% {
                z-index: 1;
            }
            49.999% {
                z-index: 1;
            }
        }
        
        .switcher {
            position: relative;
            cursor: pointer;
            display: block;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            text-transform: uppercase;
            font-family: inherit;
            font-size: 16px;
            letter-spacing: .5px;
            color: #fff;
            background-color: #053742;
			font-weight:bolder;
			border-radius:10px;
			padding-left:10px;
			padding-right:10px;
            border: none;
            outline: none;
            transform: translateX(0);
            transition: all .3s ease-out;
        }
        
        .form-wrapper.is-active .switcher-login {
            color: #fff;
            transform: translateX(90px);
        }
        
        .form-wrapper.is-active .switcher-signup {
            color: #fff;
            transform: translateX(-90px);
        }
        
        .underline {
            position: absolute;
            bottom: -5px;
            left: 0;
            overflow: hidden;
            pointer-events: none;
            width: 100%;
            height: 2px;
        }
        
        .underline::before {
            content: '';
            position: absolute;
            top: 0;
            left: inherit;
            display: block;
            width: inherit;
            height: inherit;
            background-color: currentColor;
            transition: transform .2s ease-out;
        }
        
        .switcher-login .underline::before {
            transform: translateX(101%);
        }
        
        .switcher-signup .underline::before {
            transform: translateX(-101%);
        }
        
        .form-wrapper.is-active .underline::before {
            transform: translateX(0);
        }
        
        .form {
            overflow: hidden;
            min-width: 260px;
            margin-top: 50px;
            padding: 30px 25px;
          border-radius: 5px;
            transform-origin: top;
        }
        
        .form-login {
            animation: hideLogin .3s ease-out forwards;
        }
        
        .form-wrapper.is-active .form-login {
            animation: showLogin .3s ease-in forwards;
        }
        
        @keyframes showLogin {
            0% {
                background: #d7e7f1;
                transform: translate(40%, 10px);
            }
            50% {
                transform: translate(0, 0);
            }
            100% {
                background-color: #fff;
                transform: translate(35%, -20px);
            }
        }
        
        @keyframes hideLogin {
            0% {
                background-color: #fff;
                transform: translate(35%, -20px);
            }
            50% {
                transform: translate(0, 0);
            }
            100% {
                background: #023020;
                transform: translate(40%, 10px);
            }
        }
        
        .form-signup {
            animation: hideSignup .3s ease-out forwards;
        }
        
        .form-wrapper.is-active .form-signup {
            animation: showSignup .3s ease-in forwards;
        }
        
        @keyframes showSignup {
            0% {
                background: #023020;
                transform: translate(-40%, 10px) scaleY(.8);
            }
            50% {
                transform: translate(0, 0) scaleY(.8);
            }
            100% {
                background-color: #fff;
                transform: translate(-35%, -20px) scaleY(1);
            }
        }
        
        @keyframes hideSignup {
            0% {
                background-color: #fff;
                transform: translate(-35%, -20px) scaleY(1);
            }
            50% {
                transform: translate(0, 0) scaleY(.8);
            }
            100% {
                background: #023020;
                transform: translate(-40%, 10px) scaleY(.8);
            }
        }
        
        .form fieldset {
            position: relative;
            opacity: 0;
            margin: 0;
            padding: 0;
            border: 0;
            transition: all .3s ease-out;
        }
        
        .form-login fieldset {
            transform: translateX(-50%);
        }
        
        .form-signup fieldset {
            transform: translateX(50%);
        }
        
        .form-wrapper.is-active fieldset {
            opacity: 1;
            transform: translateX(0);
            transition: opacity .4s ease-in, transform .35s ease-in;
        }
        
        .form legend {
            position: absolute;
            overflow: hidden;
            width: 1px;
            height: 1px;
            clip: rect(0 0 0 0);
        }
        
        .input-block {
            margin-bottom: 20px;
        }
        
        .input-block label {
            font-size: 14px;
          color: #a1b4b4;
        }
        
        .input-block input {
            display: block;
            width: 100%;
            margin-top: 8px;
            padding-right: 15px;
            padding-left: 15px;
            font-size: 16px;
            line-height: 40px;
            color: #3b4465;
          background: #eef9fe;
          border: 1px solid #cddbef;
          border-radius: 2px;
        }
        
        .form [type='submit'] {
            opacity: 0;
            display: block;
            min-width: 120px;
            margin: 30px auto 10px;
            font-size: 18px;
            line-height: 40px;
            border-radius: 25px;
            border: none;
            transition: all .3s ease-out;
        }
        
        .form-wrapper.is-active .form [type='submit'] {
            opacity: 1;
            transform: translateX(0);
            transition: all .4s ease-in;
        }
        
        .btn-login {
            color: #fbfdff;
            background: #111827;
            transform: translateX(-30%);
        }
        
        .btn-signup {
            color: #a7e245;
            background: #053742;
            box-shadow: inset 0 0 0 2px #a7e245;
            transform: translateX(30%);
        }
        </style>
		

     
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



	</head>
    <body style="background-image:url('../assets/post-it-notes-gc7bac7122_1920.jpg');backdrop-filter: blur(1px);">
	

    <section class="forms-section">
        
	<h1 class="section-title" style=""><a href="../" style="text-decoration:none; color:green;">Boresha</a>||Login||Signup</h1>
	
	<div class="forms">
			
          <div class="form-wrapper is-active">
		  
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login"method="post">
			<span style="color:red;" >
                <?php
                echo htmlentities($_SESSION['errmsg']);
                ?>
                <?php
                echo htmlentities($_SESSION['errmsg']="");
                ?>
                    </span>
              <fieldset>
                <legend >Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" type="email" placeholder="Enter email" name="email"required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password"placeholder="Enter Password" name="password"required>
                </div>
              </fieldset>
              <button type="submit" name="login" class="btn-login">Login</button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup"role="form" method="post" name="register" onSubmit="return valid();">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="signup-username">Full Names</label>
                  <input id="signup-email" placeholder="Enter full names"type="text" id="fullname" name="fullname" required>
                </div>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" type="email" placeholder="Enter email" onBlur="userAvailability()" name="emailid"required>
                </div>
                <div class="input-block">
                    <label for="signup-email">Contact No</label>
                    <input type="number" id="contactno" placeholder="Enter contact" name="contactno" maxlength="10"required>
                  </div>
                  
                <div class="input-block">
                  <label for="signup-password">Password</label>
                  <input id="signup-password" type="password" placeholder="Enter password"name="password" required>
                </div>
              </fieldset>
              <button type="submit" class="btn-signup" id="submit" name="submit">Sign Up</button>
            </form>
          </div>
        </div>
      </section>


<script>
    const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

    </script>


    
</body>
</html>














