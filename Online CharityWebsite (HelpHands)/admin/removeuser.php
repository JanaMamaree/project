<?php
require_once '../connection.php';
if(isset($_GET['email'])){
    $emailuser=$_GET['email'];
    $removeuser="delete from users where email='$emailuser'";
    if(mysqli_query($con, $removeuser)){
        header("location:users.php");
    }
    else{
        echo"error in deleting user";
    }
}
else{
    echo"couldn't remove user (user not found)";
}
?>