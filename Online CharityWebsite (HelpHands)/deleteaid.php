<?php
require_once 'connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query1="DELETE FROM aid WHERE id=$id";
    $result1 = mysqli_query($con,$query1);
    if(mysqli_query($con, $query1) === FALSE) die("Could not delete aid");
    else{
        header('location:myapplication.php');
    }
}
else{
    echo'no aid found to delete';
}
?>

