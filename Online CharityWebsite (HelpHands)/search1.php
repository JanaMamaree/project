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
?>

<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" />
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

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> 
<style>

* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #2a922a;
  color: white;
  padding: 16px 20px;
  border-radius: 50px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #2a922a;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #2a922a;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #f56200;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="topbar">
<div class="container">
<div class="row"> 
<div class="bar-phone">
<i class="fa fa-phone"></i> <span>Call Us :</span> <strong>+961 70 163 378</strong>
</div>
<div class="bar-mail">
<i class="fa fa-envelope"></i> <span>Mail Us :</span> <strong>helphandsorglb@gmail.com</strong>
</div>
   
<div class="header-social">
<a class="facebook" href="#" title="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i>  </a>
<a class="twitter" href="#" title="twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i>  </a>
<a class="linkedin" href="#" title="linkedin" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i>  </a>
<a class="google" href="#" title="google-plus" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i>  </a>
<a class="youtube" href="#" title="youtube-play" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i>  </a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-default navbar-sticky bootsnav">
<div class="container">
<div class="row"> 
<div class="attr-nav">
    <a class="sponsor-button" href="ApplyForAid.php">apply for aid</a>
<a class="donation" href="donate.php">donate now</a>
 <a  class="sponsor-button" href="logout.php">Logout</a>
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="index.php"><img src="images/logofinal.png" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
<li><a href="index.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="activities.php">Activities</a></li>

<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</nav>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>MY APPLICATION</h1></div>

</div>
</div>
</section>
    <br>
    
    <h2 style="margin-left: 580px">Aid Applications</h2>
    
    <br>
    <p style="margin-left: 550px; color: #f56200">Only confirmed aid applications will be shown to others</p>
     <p style="margin-left: 450px; color: #f56200">When your application is accepted, our team will contact you via email with all details within 24 hours.</p>
   
    <form method="POST" align="center" class="form-inline">
        <input class="form-control mr-sm-2" name="don" type="search" size="50px" placeholder="Search about type of donation" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<?php
require_once 'connection.php';
      if ( isset($_POST['don'])){
          
          $type= $_POST['don'];
$getorders = "select * from aid where email='$email'and donation='$type'";
$result = mysqli_query($con, $getorders);
if(mysqli_num_rows($result)== 0){
   echo "<br> <p align='center' style='font-size:20px'> no aid applications found </p>";
}else{
     

//$return_array = array();
echo '<br/><br/><table class="table">' . "\r\n";
echo "<tr><th scope='col'>ID</th><th scope='col'>Email</th><th scope='col'>Type of donation</th><th scope='col'>Item</th><th scope='col'>Status</th><th scope='col'>Select to delete</th></tr>";


while ($row = mysqli_fetch_assoc($result)) {
?>
<tr><td scope="row"><?=$row['id']?></td><td scope="row"><?=$row['email']?></td><td scope="row"><?=$row['donation']?></td><td scope="row"><?=$row['item']?></td><td scope="row"><?=$row['status']?></td><td scope="row"><a href="deleteaidswal.php?id=<?=$row['id']?>"><button style="background-color: #c1e2b3;" type="button">Delete</button></td></tr>
        
     
  
<?php
}
echo "</table><br><br><br>";
      } 
      }
?>

<br>

    <h2 style="margin-left: 610px">Aid Requests</h2>
    <br>
    <p style="margin-left: 550px; color: #f56200">Only confirmed Aid Requests will be shown to donator.</p>
<?php
      
$getorders2 = "select * from getaid where applicant='$email'";
$result2 = mysqli_query($con, $getorders2);
//$return_array = array();
echo '<br/><br/><table class="table">' . "\r\n";
echo "<tr><th scope='col'>ID</th><th scope='col'>Donator</th><th scope='col'>Applicant</th><th scope='col'>Type of donation</th><th scope='col'>Item</th><th scope='col'>Status</th><th scope='col'>Select to delete</th></tr>";


while ($row2 = mysqli_fetch_assoc($result2)) {
?>
<tr><td scope="row"><?=$row2['id']?></td><td scope="row"><?=$row2['donator']?></td><td scope="row"><?=$row2['applicant']?></td><td scope="row"><?=$row2['donation']?></td><td scope="row"><?=$row2['item']?></td><td scope="row"><?=$row2['status']?></td><td scope="row"><a href="deleteaid1swal.php?id=<?=$row2['id']?>"><button style="background-color: #c1e2b3;" type="button">Delete</button></td></tr>
        
  
<?php
}
echo "</table><br><br><br>";
?>



<br>

<h2 style="margin-left: 570px">Donation Requests</h2>
    <br>
    <p style="margin-left: 590px; color: #f56200">You can not reject an accepted request.</p>
<?php
      
$getorders1 = "select * from getaid where donator='$email'and status in('Confirmed!','Accepted!')";
$result1 = mysqli_query($con, $getorders1);
//$return_array = array();
echo '<br/><br/><table class="table">' . "\r\n";
echo "<tr><th scope='col'>ID</th><th scope='col'>Donator</th><th scope='col'>Applicant</th><th scope='col'>Type of donation</th><th scope='col'>Item</th><th scope='col'>Status</th><th scope='col'>Select your choice</th></tr>";


while ($row1 = mysqli_fetch_assoc($result1)) {
?>
<tr><td scope="row"><?=$row1['id']?></td><td scope="row"><?=$row1['donator']?></td><td scope="row"><?=$row1['applicant']?></td><td scope="row"><?=$row1['donation']?></td><td scope="row"><?=$row1['item']?></td><td scope="row"><?=$row1['status']?></td>
    <td>
        <?php  
                                 if($row1['status']=="Rejected"){
                                  ?>
                                     <button type="button" class="btn btn-sm btn-danger btn-rounded">
                                     Rejected
                                     </button>
                                  
                                  <?php  
                                  }
                                  elseif($row1['status']=="Accepted!"){
                                  ?>
                                     <button type="button" class="btn btn-sm btn-success btn-rounded">
                                     accepted
                                     </button>
                                 
                                  <?php  
                                  }
                                  else{
                                      ?>
                                  <a href="acceptswal.php?id=<?=$row1['id']?>&donator=<?=$row1['donator']?>&donation=<?=$row1['donation']?>&item=<?=$row1['item']?>&applicant=<?=$row1['applicant']?>">
                                    <button type="button" class="btn btn-sm btn-success btn-rounded">Accept</button>
                                  </a>
                                  <a  href="rejectswal.php?id=<?=$row1['id']?>&donator=<?=$row1['donator']?>&donation=<?=$row1['donation']?>&item=<?=$row1['item']?>&applicant=<?=$row1['applicant']?>">
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded">Reject</button>
                                  </a>
                                  <?php
                                  }
                                  ?>                                
                              
    </td>
</tr>
        
  
<?php
}
echo "</table><br><br><br>";
?>
   
    <button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    
<div class="callout">
<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Hearts together. Hands together. This changes everything.</h2><!-- /.callout-title -->
			<br>
			</div>
			</div>

</div>
</div>

<footer class="footer">
		<div class="footer-body">
                <div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">About help hands</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p><h5>Help Hands is a Lebanese charity organization which aims to help as many people as possible</h5>
								<p>Crisis, struggles, high cost of living, and the COVID-19 pandemic in Lebanon were the motive to create an online website devoted for donations of several fields including medical equipment, medicine, clothing and apparel.</p>
								 </p>
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<ul class="list-links">
								<li>
									<a href="index.php">Home</a>
								</li>
								
								<li>
									<a href="about-us.php">About Us</a>
								</li>
								
								<li>
									<a href="activities.php">Activities</a>
								</li>
                			
								<li>
									<a href="gallery.php">Gallery</a>
								</li>
								
								<li>
									<a href="contact.php">Contact Us</a>
								</li>
								
							</ul><!-- /.list-links -->

						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p>Select your newsletters, enter your email address, and click "Go"</p>

							<div class="subscribe">
								<form action="?" method="post">
									<input type="submit" value="Go" class="subscribe-btn">
									
									<div class="subscribe-inner">
										<input type="email" id="mail" name="mail" value="" placeholder="Email Address" class="subscribe-field">
									</div><!-- /.subscribe-inner -->
								</form>
							</div><!-- /.subscribe -->
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p><b>Address:</b> 
								Mhaydthe, Rachaya Al Wadi, Lebanon<br>
								Deddeh Al Koura, Tripoli, Lebanon</p>

							<div class="footer-contacts">
								<p>
									<b>
										<i class="fa fa-phone"></i> Phone:
									</b>
									Phone 01: +961 71 417 321<br>
									Phone 02: +961 70 163 378</p>
								</p>
								
								<p>
									<b>
										<i class="fa fa-envelope-o"></i> Email:
									</b>

									helphandsorglb@gmail.com
								</p>
							</div><!-- /.footer-contacts -->
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
			</div><!-- /.row -->
		</div>
        </div><!-- /.footer-body -->

		<div class="bwt-footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-6 copyright">
<div class="left-text">Copyright &copy; Help Hands 2021. All Rights Reserved</div>
</div>
        </div>
        </div>
        </div>
	</footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/script.js"></script>
</body>
</html>

