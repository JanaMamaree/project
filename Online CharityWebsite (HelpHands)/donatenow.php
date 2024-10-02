<?php
require_once 'connection.php';
      
      session_start();
if(isset($_SESSION['isloggedin'])

&& $_SESSION['isloggedin']==1){
    
$email=$_SESSION['email'];
$name=$_SESSION['xyz'];
$last=$_SESSION['zyx'];
$phone=$_SESSION['phone'];
}

if(isset($_GET['email'])&& isset($_GET['donation'])&& isset($_GET['item'])&& isset($_GET['id'])){
    $email1=$_GET['email'];
    $type=$_GET['donation'];
    $item=$_GET['item'];
    $id=$_GET['id'];
    
    $query1="insert into donedonate(donator, applicant, donation, item) values ('$email','$email1','$type','$item')";
   
    if(mysqli_query($con, $query1) === FALSE) die("Could not donate");
    else{
        $query2="update aid set status='Accepted!' where id='$id'";
       
       if(mysqli_query($con, $query2) === FALSE) die("Could not donate");
        header('location:availablePeople.php');
       
    }
}
else{
    echo'no aid found to donate';
}


?>