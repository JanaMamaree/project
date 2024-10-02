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
<!DOCTYPE html>
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
            
            <!-- start of table-->
          <?php
                      require_once '../connection.php';        
                      $getaidapplications="select * from admins";
                      $result = mysqli_query($con, $getaidapplications);
                      if(mysqli_num_rows($result)== 0){
                        echo '<div class="col-lg-12 grid-margin stretch-card">
                           <div class="card">
                            <div class="card-body">
                             <h4 class="card-title">Admins</h4>
                             <p class="card-description">
                              
                             </p>
                          <div class="table-responsive">
                          <br> <p align="center" style="font-size:20px"> no admins found </p>
                          <table class="table table-striped table-hover">
                          '
                          . ' <tr>
                                <td>
                                <a href="addadmin.php">
                                    <button type="button" class="ti-import"></button>
                                  </a>
                                </td>
                                <td>
                                    <p> Add Admin</p>
                                </td>
                            </tr></table></div></div></div></div>';
                      }
                      else{
                          echo'
                          <div class="col-lg-12 grid-margin stretch-card">
                           <div class="card">
                            <div class="card-body">
                             <h4 class="card-title">Admins</h4>
                             <p class="card-description">
                              
                             </p>
                          <div class="table-responsive">
                          <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            First Name
                          </th>
                          <th>
                            Last Name
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Password
                          </th>
                        </tr>
                      </thead>
                      <tbody>';
                          while($row = mysqli_fetch_assoc($result)){
                          ?>
                          
                            <tr>
                              <td class="py-1">
                                  <?=$row['id']?>
                              </td>
                              <td>
                                  <?=$row['first']?>
                              </td>
                              <td>
                                  <?=$row['last']?>
                              </td>
                              <td>
                                  <?=$row['phone']?>
                              </td> 
                              <td>
                                  <?=$row['email']?>
                              </td>
                              <td>
                                  <?=$row['password']?>
                              </td>
                              <td>
                
                                  <a href="removeadmin.php?id=<?=$row['id']?>">
                                    <button type="button" class="btn btn-outline-danger btn-fw btn-rounded">Remove</button>
                                  </a>
                                                                 
                              </td>    
                            </tr>
                            
                      <?php  
                        }
                        ?>
                        <tr>
                                <td>
                                <a href="addadmin.php">
                                    <button type="button" class="ti-import"></button>
                                  </a>
                                </td>
                                <td>
                                    <p> Add Admin</p>
                                </td>
                            </tr>
                            <?php
                        echo'</tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>';
                    }
                        ?>
            <!-- end of table-->
          
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