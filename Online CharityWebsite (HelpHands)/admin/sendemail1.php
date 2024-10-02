<?php
if ( isset($_GET['id']))
{
    $id= $_GET['id'];
    
    
    header('location:mailto:'.$id.'?subject=Thanks message&body= Hello from HelpHands! Thank you for making money donation to our organization. Your help makes us happy. Best Regards');

}
?>