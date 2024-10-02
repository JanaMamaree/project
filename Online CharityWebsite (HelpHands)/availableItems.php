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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>Help Hands</title>


  <link rel="shortcut icon" href="images/favicon.ico" />

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link href="css/owl.theme.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
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
<div class="col-sm-6"><h1>AVAILABLE ITEMS</h1></div>
</div>
</div>
</section>

    <br>
    <form method="POST" align="center" class="form-inline" action="search2.php">
        <input class="form-control mr-sm-2" name="don" type="search" size="50px" placeholder="Search about type of donation" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
        <br>
<p style="margin-left: 330px; color: #f56200">Only first selection will be taken into consideration, you can select something else after 1 week.</p>
  <?php
require_once 'connection.php';
$getallkind = "select * from donationkind";
$result = mysqli_query($con, $getallkind);
echo '<section id="about-sec">
<div class="container">
<div class="row text-center">
<div id="owl-demo" class="owl-carousel owl-theme">';

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    
          
<div class="item">
<div class="sponser-box">
    <img style="width: 300px; height: 150px" src="<?php echo 'uploads/'.$row["file_name"]; ?>" alt="" />
<h4 scope="row"><?=$row['item']?></h4>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Email:</div> 
<div scope="row" style="margin-left: 20px"><?=$row['email']?></div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">City:</div> 
<div scope="row" style="margin-left: 20px"><?=$row['city']?></div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Street:</div> 
<div scope="row" style="margin-left: 20px"><?=$row['street']?></div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Type of donation:</div> 
<div scope="row" style="margin-left: 20px"><?=$row['donation']?></div>
</div>
<a href="getnowswal.php?id=<?=$row['id']?>&email=<?=$row['email']?>&donation=<?=$row['donation']?>&item=<?=$row['item']?>" class="btn1">Get now</a>
</div>
</div>
 <?php
}
 ?>
</div>

</div>
</div>
</section>




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
<script src="js/owl.carousel.js"></script>
 <script>
          $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
	  navigation : true,
      navigationText:["",""],
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
          </script>
          <script src="js/script.js"></script>
</body>
</html>