<?php require_once '../connection.php';
session_start();
$_SESSION['isloggedin']=0;
session_destroy();
header('location:login.php');
?>

