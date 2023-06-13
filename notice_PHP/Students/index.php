<?php require_once '../Database/config.php';
session_start();
if (!isset($_SESSION['user_login'])) {
  header('Location: login.php');
}
?>
<?php include "Home.php";?>