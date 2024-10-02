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

if(isset($_GET['donator'])&& isset($_GET['donation'])&& isset($_GET['item'])&& isset($_GET['id'])){
    $email1=$_GET['donator'];
    $type=$_GET['donation'];
    $item=$_GET['item'];
    $id=$_GET['id'];
    
    $query1="insert into getaid(donator, applicant, donation, item, status, uploaded_on) values ('$email1','$email','$type','$item','Pending...',NOW())";
   
    if(mysqli_query($con, $query1) === FALSE) die("Could not donate");
    else{
        
        header('location:availableItems.php');
       
    }
}
else{
    echo'no aid found to donate';
}


?>

