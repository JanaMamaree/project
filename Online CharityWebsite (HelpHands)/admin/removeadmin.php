<?php
require_once '../connection.php';
if(isset($_GET['id'])){
    $emailuser=$_GET['id'];
    $removeuser="delete from admins where id='$emailuser'";
    if(mysqli_query($con, $removeuser)){
        header("location:admins.php");
    }
    else{
        echo"error in deleting admin";
    }
}
else{
    echo"couldn't remove admin (admin not found)";
}
?>