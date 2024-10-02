<?php
require_once '../connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $confirmaid="update aid set status='Confirmed!' where id='$id'";
    if(mysqli_query($con, $confirmaid)){
        header("location:aidapplications.php");
    }
    else{
        echo"error in confirmation aid";
    }
}
else{
    echo"couldn't confirm aid (not found)";
}
?>