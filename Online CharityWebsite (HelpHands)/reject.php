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
    

              $query1="update getaid set status='Rejected!' where id='$id'";
       
             if(mysqli_query($con, $query1) === FALSE) die("Could not reject");
    
           else{  
       

             header('location:myApplication.php');
             }
        
        
      } 

else{
    echo'no aid found to accept';
}


?>