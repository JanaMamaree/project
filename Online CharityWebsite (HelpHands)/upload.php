<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
session_start();
if(isset($_SESSION['isloggedin'])

&& $_SESSION['isloggedin']==1){
    
$email=$_SESSION['email'];

}
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && isset($_POST['city'])&&
isset($_POST['street'])&&
isset($_POST['donation'])&&
isset($_POST['item']))

       

{


$city= $_POST['city'];
$street= $_POST['street'];
$donation= $_POST['donation'];

$item= $_POST['item'];
    
 // Allow certain file formats
 $allowTypes = array('jpg','png','jpeg','gif','pdf');
 if(in_array($fileType, $allowTypes)){
 // Upload file to server
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
 // Insert image file name into database
 $insert = $db->query("INSERT into donationkind (email, city, street, donation, item, file_name, uploaded_on) VALUES ('$email','$city','$street','$donation','$item','".$fileName."', NOW())");
 if($insert){
     header("location:swalTrue.php");
 }else{
header("location:swalFalse.php");
 }
 }else{
 header("location:swalFalse.php");
 }
 }else{
 header("location:swalFalse.php");
 }
}else{
header("location:swalFalse.php");
}



?>
