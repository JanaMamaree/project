<?php
require_once '../connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $rejectaid="update aid set status='Rejected' where id='$id'";
    if(mysqli_query($con, $rejectaid)){
        header("location:aidapplications.php");
    }
    else{
        echo"error in rejecting aid";
    }
}
else{
    echo"couldn't reject aid (not found)";
}
?>