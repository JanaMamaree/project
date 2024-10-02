<?php
if ( isset($_POST['Contact-Name'])&&
isset($_POST['Contact-Email'])&&
isset($_POST['subject'])&&
isset($_POST['Contact-Message']))
{
    $contemail= $_POST['Contact-Email'];
    $contname= $_POST['Contact-Name'];
    $sub= $_POST['subject'];
    $message= $_POST['Contact-Message'];
if($contemail==""||$contname==""||$sub==""||$message==""){
    echo '<link rel="shortcut icon" href="images/favicon.ico" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>Help Hands</title>

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> 
            <script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script>
      
         setTimeout(function() {
        swal({
            title: "Error",
            text: "Fix your form!",
            type: "error"
        }, function() {
            window.location = "index.php";
        });
    }, 0);

        </script>';
}
else{
    header('location:mailto:helphandsorglb@gmail.com?subject='.$sub.'&body='.$message.'       ,From: '.$contname);
}
}
?>
