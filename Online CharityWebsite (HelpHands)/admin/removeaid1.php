<?php
require_once '../connection.php';
if(isset($_GET['id'])){
    $emailuser=$_GET['id'];
    $removeuser="delete from getaid where id='$emailuser'";
    if(mysqli_query($con, $removeuser)){
        header("location:aidrequests.php");
    }
    else{
        echo"error in deleting donation";
    }
}
else{
    echo"couldn't remove donation (donation not found)";
}
?>