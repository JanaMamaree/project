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

if(isset($_GET['donator'])&& isset($_GET['donation'])&& isset($_GET['item'])&& isset($_GET['id'])&& isset($_GET['applicant'])){
    $email1=$_GET['donator'];
    $type=$_GET['donation'];
    $item=$_GET['item'];
    $id=$_GET['id'];
    $a=$_GET['applicant'];
    
    $query1="update getaid set status='Accepted!' where id='$id'";
       
       if(mysqli_query($con, $query1) === FALSE) die("Could not accept");
    
      else{ 
          $query2="DELETE FROM donationkind WHERE email='$email1' and donation='$type' and item='$item'";
    if(mysqli_query($con, $query2) === FALSE) die("Could not delete aid");
     else{  
         $query3="insert into donedonate(donator, applicant,donation,item) values('$email1','$a','$type' ,'$item')";
    if(mysqli_query($con, $query3) === FALSE) die("Could not add donate");

        header('location:myApplication.php');
     }
      } 
}
else{
    echo'no aid found to accept';
}


?>
