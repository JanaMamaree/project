<?php
require_once '../connection.php';
      
      session_start();
if(isset($_SESSION['isloggedin'])

&& $_SESSION['isloggedin']==1){
    
$name=$_SESSION['first_name'];
$family=$_SESSION['last_name'];

}else{
    header("location:login.php");
}

?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HelpHands Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logofinal.png" class="mr-2" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/favicon.ico" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
          <div>
              
          </div>
          <div>
              
          </div>
        </ul>
          <?php
        echo "welcome "."$name"." "."$family";
          ?>
        <ul class="navbar-nav navbar-nav-right">
        
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <?php
                if($name=="Jana"&&$family=="Maamari"){
                    ?>
                <img src="../images/JanaMaamari.jpg" alt="profile"/>
                <?php
                }
                if($name=="houssam"&&$family="Kaissar"){
                ?>
                <img src="../images/HoussamKaissar.jpg" alt="profile"/>
                <?php
                }
                ?>
            
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
                <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-info-alt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="admins.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">admins</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-gift menu-icon"></i>
              <span class="menu-title">Donations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="inkinddon.php">In-Kind Donations</a></li>
                <li class="nav-item"> <a class="nav-link" href="incashdon.php">In-Cash Donations</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aidrequests.php">
              <i class="ti-back-right menu-icon"></i>
              <span class="menu-title">Aid Requests</span>
            </a>
               <li class="nav-item">
            <a class="nav-link" href="aidapplications.php">
              <i class="ti-files menu-icon"></i>
              <span class="menu-title">Aid Applications</span>
            </a>
                      <li class="nav-item">
            <a class="nav-link" href="donedon.php">
              <i class="ti-heart menu-icon"></i>
              <span class="menu-title">Successful Donations</span>
            </a>
         
         
        
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">HelpHands Dashboard</h4>
                </div>
                
              </div>
            </div>
          </div> 
            <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Users</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
                        require_once '../connection.php';
                        $query="select * from users";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?>
                      </h3>
                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
                 <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Successful Donations</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
          
                        $query="select * from donedonate";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?>
                      </h3>
                    <i class="ti-heart icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">0.48% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">In-Cash Donations</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
          
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
                               echo "$counter"."000";
                           }
                        ?>
                      </h3>
                    <i class="ti-wallet icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.05% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
                <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">In-Kind Donations</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
          
                        $query="select * from donationkind";
                        $result = mysqli_query($con, $query);

                         if(mysqli_num_rows($result)== 0){
                             echo '0';
                           }  
                           else{
                               $x=mysqli_num_rows($result);
                               echo "$x";
                           }
                        ?>
                      </h3>
                    <i class="ti-support icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">0.54% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            </div>
            <div style="margin-left: 400px" class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Rating</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h6 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
          
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
                        ?>
                      </h6>
                    <i class="ti-star icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  </div>
              </div>
            </div>
            <div  style="margin-left: 400px" class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Best Donator</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
                          
                           <?php
                        require_once '../connection.php';
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
                        ?>
                      </h3>
                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                   </div>
              </div>
            </div>
           </div>

             <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">Purchases</p>
                  <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Status</p>
                      <h3>362</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">New users</p>
                      <h3>187</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Chats</p>
                      <h3>524</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Feedbacks</p>
                      <h3>509</h3>
                    </div> 
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
              </div>
            
          
        
							<div class="card">
                                                            <div class="card-body">
									<h4 class="card-title">Sending Money Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														George Matta
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Sami Hawat
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Nesrin kamel
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Houda AL Amir
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Ahmad hajj
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-4">
										<input type="text" class="form-control todo-list-input mr-2"  placeholder="Add new task">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
									</div>
								</div>
							</div>
            </div>
          
                                           
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © HelpHands.org 2021</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="../index0.php" target="_blank">Donations and aid applications</a> from HelpHands.org</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


