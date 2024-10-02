<?php
if ( isset($_GET['id'])&&
isset($_GET['donator'])&&
isset($_GET['applicant'])&&
isset($_GET['donation'])&&
isset($_GET['item']))
{
    $id= $_GET['id'];
    $donator= $_GET['donator'];
    $a= $_GET['applicant'];
    $t= $_GET['donation'];
    $i= $_GET['item'];
    
    header('location:mailto:'.$donator.'?cc='.$a.'&subject=Succussful donation&body= Hello from HelpHands! The donation application has been accepted and verified by our'
            . ' team. The application is about '.$t.', and the item is '.$i. '. You can connect with each other via email with code='.$id);

}
?>