<?php
require_once 'connection.php';
      
      session_start();
if(isset($_SESSION['isloggedin'])

&& $_SESSION['isloggedin']==1){
    
$email=$_SESSION['email'];
$name=$_SESSION['xyz'];
$last=$_SESSION['zyx'];
$phone=$_SESSION['phone'];
}else{
    header("location:index0.php");
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
<div class="col-sm-6"><h1>ACTIVITIES</h1></div>

</div>
</div>
</section>

    
<section id="about-sec">
<div class="container">
<div class="row text-left">

<div class="act-box clearfix">

<div class="act-pad">
<h4>Available items</h4>
<p style="font-weight: bold">In this section, you will see the available items that you may need.</p>
<p style="font-weight: bold">if you are in need for specific item, you can search here before applying for aid</p>

<a href="availableItems.php" style="margin-left: 800px; border: solid;border: 2px solid #2a992a;
    border-radius: 3px;
    color: #2a992a;
    display: inline-block;
    font-weight:600;
    text-transform:uppercase;
    padding: 10px 30px;">See</a>
<div class="clearfix"></div>
</div>
    <hr style="width: 1120px; height: 0px">
    <div class="act-pad">
<h4>Donate to who's in need</h4>
<p style="font-weight: bold">In this section, you will see some people who applied to get aid.</p>
<p style="font-weight: bold"> If you have the item, and you are able to help, please don't hesitate to give it to them</p>

<a href="availablePeople.php" style="margin-left: 800px; border: solid;border: 2px solid #2a992a;
    border-radius: 3px;
    color: #2a992a;
    display: inline-block;
    font-weight:600;
    text-transform:uppercase;
    padding: 10px 30px;">See</a>
<div class="clearfix"></div>
</div>
    <hr style="width: 1120px; height: 0px">
     <div class="act-pad">
<h4>View my application</h4>
<p style="font-weight: bold">In this section, you will see your previous aid applications that you submitted,</p>
<p style="font-weight: bold">also you can view their status if they are pending or confirmed. </p>

<a href="myApplication.php" style="margin-left: 800px; border: solid;border: 2px solid #2a992a;
    border-radius: 3px;
    color: #2a992a;
    display: inline-block;
    font-weight:600;
    text-transform:uppercase;
    padding: 10px 30px;">See</a>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</section>

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