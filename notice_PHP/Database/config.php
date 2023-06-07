<?php


$servername ="localhost";
$username ="root";
$pass ="";

//connection to the database 
$conn = new mysqli($servername ,$username, $pass);

//check connection
if($conn->connect_error){

die ("Connection to Notice Database Failled!!" .$conn->connect_error);

}
echo "Connection Is successfull";


?>