<?php
require_once '../connection.php';
if(isset($_GET['id'])){
    $emailuser=$_GET['id'];
    $removeuser="delete from aid where id='$emailuser'";
    if(mysqli_query($con, $removeuser)){
        header("location:aidapplications.php");
    }
    else{
        echo"error in deleting donation";
    }
}
else{
    echo"couldn't remove donation (donation not found)";
}
?>