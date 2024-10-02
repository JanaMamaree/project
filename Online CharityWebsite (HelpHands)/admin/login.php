<?php

require_once '../connection.php';

if (  isset($_POST['first']) &&
isset($_POST['last'])&&
isset($_POST['pass']))
       

{



$first= $_POST['first'];

$last= $_POST['last'];
$pass= $_POST['pass'];




$query = "SELECT first,last, password FROM admins WHERE first='$first' AND last='$last' AND password='$pass'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)== 0){
    if($first==""||$last==""||$password==""){
        header('location:login.php');
    }
  
    else{header('location:login.php');
    }
}
else {
   
  
    session_start();

$_SESSION['isloggedin']=1;

$_SESSION['first_name']=$first;
$_SESSION['last_name']=$last;


header('location:index.php');
    }

}


?>
<head>
 
  <title>HelpHands Admin</title>

  <link rel="shortcut icon" href="images/favicon.ico" />
</head>
<body align="center" style="margin-top: 200px; background-image: url('../images/favicon.ico');">
    <form method="POST">
        
        <h1>Admins login</h1>
        <input  type="text" name="first" style="width: 553px; height: 45px; border-color: #c0c0c0; font-weight: bold; padding-left: 5px; border-radius: 10px; border-color: #2a992a; background-color: lightsteelblue" aria-required="true" aria-invalid="false" size="46" placeholder="First Name" id="email"  onblur="checkemail();"/><br><br>
        
        
        
        
        <input  type="text" name="last" style="width: 553px; height: 45px; border-color: #c0c0c0; font-weight: bold; padding-left: 5px;border-radius: 10px; border-color: #2a992a; background-color: lightsteelblue" aria-required="true" aria-invalid="false" size="40"placeholder="Last Name" id="firstpass"  onblur="check_pass_strength();"/><br><br>
        
        <input  type="password" name="pass" style="width: 553px; height: 45px; border-color: #c0c0c0; font-weight: bold; padding-left: 5px;border-radius: 10px; border-color: #2a992a; background-color: lightsteelblue" aria-required="true" aria-invalid="false" size="40"placeholder="Password" id="firstpass"  onblur="check_pass_strength();"/><br><br>
        
        <div class="col-xs-12 submit-button">
            <input type="submit" style="background: blue;
    border-radius: 10px;
    color: #fff;
    display: inline-block;

    padding: 10px 20px;
	font-weight:bold;
	text-transform:uppercase;" value="log in" />
        </div>
    
        
        </form>
</body>