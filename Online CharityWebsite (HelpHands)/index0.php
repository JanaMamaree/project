<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head >
	<script src="https://kit.fontawesome.com/fce11e3f91.js" crossorigin="anonymous"></script>
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
<link rel="stylesheet" href="css/swipebox.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
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
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="index0.php"><img src="images/logofinal.png" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
    <li><a href="login.php">Login</a></li>
    <li><a href="index0.php">Home</a></li>
    <li><a href="about-us0.php">About Us</a></li>
    <li><a href="gallery0.php">Gallery</a></li>
    <li><a href="contact0.php">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</nav>

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                        <h2 data-animation="animated bounceInDown"><span>Your Healing Begins With Charity</span></h2>
                        <h3 data-animation="animated bounceInDown">We are promoting the greatest good for the greatest number of people</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us0.php">READ MORE</a></h4>             
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                        <h2 data-animation="animated bounceInDown"><span>More charity More better life</span></h2>
                        <h3 data-animation="animated bounceInDown">We are promoting the greatest good for the greatest number of people</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us0.php">READ MORE</a></h4>             
             </div>
            <!-- Item 3 -->
            <div class="item slide3">
                        <h2 data-animation="animated bounceInDown"><span>Together For a better future</span></h2>
                        <h3 data-animation="animated bounceInDown">We are promoting the greatest good for the greatest number of people</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us0.php">READ MORE</a></h4>             
             </div>
            <!-- Item 4 -->
            <div class="item slide4">
                        <h2 data-animation="animated bounceInDown"><span>Give your hand to people in need</span></h2>
                        <h3 data-animation="animated bounceInDown">We are promoting the greatest good for the greatest number of people</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us0.php">READ MORE</a></h4>             
             </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>ABOUT HELP HANDS</h1>
<hr>
<h5>Help Hands is a Lebanese charity organization which aims to help as many people as possible</h5>
<p>Crisis, struggles, high cost of living, and the COVID-19 pandemic in Lebanon were the motive to create an online website devoted for donations of several fields including medical equipment, medicine, clothing and apparel.</p>
<p>Let's stand together in order to help those in need so we can fight and get out into a better future. Help Hands offers the oppurtunity for you to donate what you don't need to others that are in need, or to apply for aid. Our team connects donators with the appropriate needy. </p>
<div class="text-center">
<a href="about-us0.php" class="btn2">Read More</a>
</div>
</div>
</div>
</section>

<section id="activities-sec">
<div class="container">
<div class="row text-center">
<h1>WHAT WE DO?</h1>
<hr>
<div class="text-left"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-stethoscope"></i></div>
<div class="grid-content-wrapper"><h4>provide medical equipment</h4><p>You can provide medical equipment for people in need such as medical kits, wheel chairs, blood-glucose meter, inhalers, stethoscopes and many ohters.</p>

</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fas fa-pills"></i></div>
<div class="grid-content-wrapper"><h4>provide medicine</h4><p>Donating medicine includes pills, capsules, injections, tablets, syrups for various conditions.</p>

</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fas fa-tshirt"></i></div>
<div class="grid-content-wrapper"><h4>provide clothing</h4><p>Apparel may include shirts, pants, sweaters, sneakers, casual shoes, face masks, gloves, hats, socks.</p>

</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-money"></i></div>
<div class="grid-content-wrapper"><h4>Donate money</h4><p>As a donator, you can donate a certain amount of money by contact us via email and send location. The money will be used to fund and help provide more equipment and appliances.</p>

</div>
</div>
</div>
</div>
</div>
</section>

    
<section id="video-sec">
    <div style="margin-right: 400px" class="container">
<div class="row text-center">
    <h1 style="margin-left: 200px">How active we are?</h1>
    <hr style="margin-left: 600px">
<div class="text-left"> 
<div class="col-md-6 clearfix top-off">
</div>
<div class="col-md-6 clearfix top-off">
    
<div class="media">
<div class="media-image">
    <img src="images/user.jpg" class="attachment-full size-full" alt="user">																							</div>
<div class="media-text">
<h5>USERS</h5>
<p><?php
                        require_once 'connection.php';
                        $query="select * from users";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?></p>
</div>
</div>

    <div class="media">
<div class="media-image">
    <img src="images/successdon.jpg" class="attachment-full size-full" alt="user">																							</div>
<div class="media-text">
<h5>SUCCESSFUL DONATIONS</h5>
<p><?php
          
                        $query="select * from donedonate";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?></p>
</div>
</div>
    
    <div class="media">
<div class="media-image">
    <img src="images/masari.jpg" class="attachment-full size-full" alt="masari">																							</div>
<div class="media-text">
<h5>IN-CASH DONATIONS</h5>
<p><?php
          
                        $query="select amount from donationcash";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $counter=0;
                               while($row = mysqli_fetch_assoc($result)){
                               $counter+= $row['amount'];
                               
                               }
                               echo "$counter"."000 LBP";
                           }
                        ?></p>
</div>
</div>
    
    <div class="media">
<div class="media-image">
    <img src="images/inkind.jpg" class="attachment-full size-full" alt="inkind">																							</div>
<div class="media-text">
<h5>IN-KIND DONATIONS</h5>
<p><?php
          
                        $query="select * from donationkind";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?></p>
</div>
</div>
    
    <div class="media">
<div class="media-image">
    <img src="images/rate.jpg" class="attachment-full size-full" alt="inkind">																							</div>
<div class="media-text">
<h5>RATING</h5>
<p><?php
          
                        $query="select * from rating";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  else{
                               $counter=0;
                               $sum=0;
                               while($row = mysqli_fetch_assoc($result)){
                                   $counter++;
                                $sum+= $row['rate'];
                                
                               }
                               $average=$sum/$counter;
                               $averagefinal= number_format($average, 2, '.', '');
                               echo "$averagefinal"." stars from "."$counter"." reviews";
                           }
                        ?></p>
</div>
</div>
<div class="media">
<div class="media-image">
    <img src="images/R.png" class="attachment-full size-full" alt="user">																							</div>
<div class="media-text">
<h5>DONATOR OF WEEK</h5>
<p><?php
                        require_once 'connection.php';
                        $queryy="select * from users";
                        $resultt = mysqli_query($con, $queryy);
                        $maxdonator="";
                        $maxdonation=0;
                        while($roww = mysqli_fetch_assoc($resultt)){
                          $queryy1="select * from donedonate where donator='".$roww['email']."'";
                          $resultt1=mysqli_query($con, $queryy1);
                          $countt=0;
                          while($roww1= mysqli_fetch_assoc($resultt1)){
                              $countt++;
                          }
                          if($countt>$maxdonation){
                            $maxdonation=$countt;
                            $maxdonator="".$roww['name']." ".$roww['last']."";
                          }
                        }
                        echo"$maxdonator: $maxdonation donations";
                        ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>     
    
    
<section id="gallery-sec">
<div class="container">
<div class="row text-center">
<h1>OUR GALLERY</h1>
<hr>
<ul class="clearfix">

<li>
<a href="images/gg3.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="images/gg3.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/lyrica.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/lyrica.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/metformin.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/metformin.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/novolog.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/novolog.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/ramipril.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/ramipril.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/statin.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/statin.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="images/gg8.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="images/gg8.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
    <a href="images/gg2.jpg" class="swipebox" title="My Caption">
        <div class="image"><img src="images/gg2.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>

</ul>
<div class="text-center">
<a href="gallery0.php" class="btn1">View More</a>
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
									<a href="index0.php">Home</a>
								</li>
								
								<li>
									<a href="about-us0.php">About Us</a>
								</li>
								
								
                			
								<li>
									<a href="gallery0.php">Gallery</a>
								</li>
								
								<li>
									<a href="contact0.php">Contact Us</a>
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

