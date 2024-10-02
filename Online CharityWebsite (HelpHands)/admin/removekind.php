<?php
require_once '../connection.php';
if(isset($_GET['email'])){
    $emailuser=$_GET['email'];
    $removeuser="delete from donationkind where email='$emailuser'";
    if(mysqli_query($con, $removeuser)){
        header("location:inkinddon.php");
    }
    else{
        echo"error in deleting donation";
    }
}
else{
    echo"couldn't remove donation (donation not found)";
}
?>