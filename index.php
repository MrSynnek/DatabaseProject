<?php
require 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FootBall - Management</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="text-center">
            <img class="img-fluid" style="width: 5rem;" src="img/Logo.png" alt="">
          </div>
        <div class="sidebar-brand-text mx-3">
        <?php
                    $temp = $conn->query("SELECT Name from club  WHERE Name = 'Manchester City' ");
                    $name = $temp->fetch_assoc();
                    $NOC = $name["Name"];
                    echo $NOC;
                    ?>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <!-- Add color by ME-->
          <span> Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading ">
        Management - Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Clubs</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Players Rate:</h6>
            <a class="collapse-item" href="Search.php">Player</a>
            <a class="collapse-item" href="SearchStaff.php">Staff</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <!--- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Support team</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Club Activity:</h6>
            <a class="collapse-item" href="utilities-color.html">Store</a>
            <a class="collapse-item" href="utilities-border.html">Schedule</a>
            <a class="collapse-item" href="utilities-animation.html">Line-up</a>
            <a class="collapse-item" href="utilities-other.html">Contact</a>
          </div>
        </div>
      </li>
      --->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!--<div class="sidebar-heading">
        Addons
      </div>
    -->
      <!-- Nav Item - Pages Collapse Menu -->
      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
    -->
      <!-- Nav Item - Charts -->
      <!--<li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
    -->
      <!-- Nav Item - Tables -->
      <!--<li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800 ">Club Overview</h1>

          </div>
          <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselCaptions" data-slide-to="1"></li>
              <li data-target="#carouselCaptions" data-slide-to="2"></li>
              <li data-target="#carouselCaptions" data-slide-to="3"></li>
              <li data-target="#carouselCaptions" data-slide-to="4"></li>
              <li data-target="#carouselCaptions" data-slide-to="5"></li>
              <li data-target="#carouselCaptions" data-slide-to="6"></li>
              
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="img/img-stadium/State-3.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img-stadium/State-1.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
                <img src="img/img-stadium/State-2.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
                <img src="img/img-stadium/State-4.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
                <img src="img/img-stadium/HL.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
                <img src="img/img-stadium/HL-1.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-100">Moments you shouldn't miss!</h5>
                  <p class="text-gray-100">come to be our fan now !</p>
                </div>
                <img src="img/img-stadium/HL-2.jpg" class="d-block w-100" style="height: 50rem;" alt="...">
              </div>



            </div>
            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon text-gray-800" style="filter: 100%" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </br>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Earning
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        $
                        <?php
                        $temp = $conn->query("SELECT SUM(In_sponser + In_ticket + In_copyr + In_award + In_playerout) as Earn from  club  WHERE Name = 'Manchester City'");
                        $Earning = $temp->fetch_assoc();
                        echo number_format($Earning["Earn"]);
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Expense</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                        $temp = $conn->query("SELECT SUM(Ex_player + Ex_staff + Ex_state + Ex_playerin + Ex_misscell) as Expen from  club  WHERE Name = 'Manchester City'");
                        $Expense = $temp->fetch_assoc();
                        echo number_format($Expense["Expen"]);
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Stadium </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php
                            $temp = $conn->query("SELECT Name from  state WHERE Clubname Like '$NOC'  && Capacity > 20000");
                            $state = $temp->fetch_assoc();
                            echo $state["Name"];
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Amount</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $temp = $conn->query("SELECT Count(player.Id) as max_ID from player");
                        $temp_staff = $conn->query("SELECT Count(staff.Id) as max_staff from staff");
                        $Amount = $temp->fetch_assoc();
                        $Amount_staff = $temp_staff->fetch_assoc();
                        $Amount_All = $Amount + $Amount_staff;
                        echo number_format($Amount_All["max_ID"] + $Amount_All["max_staff"]);
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Winning stats on 2020 </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sponsor</h6>
                </div>
                <!-- Card Body -->
                <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Sponsor/cisco-logo.png" class="d-block w-100 ml-auto mr-auto mt-auto mb-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Sponsor/Puma.png" class="d-block w-100 ml-auto mr-auto mt-auto mb-auto " alt="...">
                    </div>
                    <div class="carousel-item">

                      <img src="img/Sponsor/EA SPORT.png" class="d-block  ml-auto mr-auto mt-auto mb-auto" style="width: 65%" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
              <?php
              $temp = $conn->query("SELECT * from club  WHERE Name = 'Manchester City' ");
              $Income = $temp->fetch_assoc();
              ?>
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Money Tracking (Revenue)</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Sponsor<span class="float-right">
                      <?php
                      echo number_format($Income["In_sponser"]);
                      ?></span>
                  </h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: <?php echo number_format($Income["In_sponser"] / $Earning["Earn"] * 100) ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h4 class="small font-weight-bold">Ticket <span class="float-right">
                      <?php
                      echo number_format($Income["In_ticket"]);
                      ?></span>
                  </h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: <?php echo number_format($Income["In_ticket"] / $Earning["Earn"] * 100) ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Copyright <span class="float-right">
                      <?php
                      echo number_format($Income["In_copyr"]);
                      ?>
                    </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:  <?php echo number_format($Income["In_copyr"] / $Earning["Earn"] * 100) ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold"> Award <span class="float-right">
                      <?php
                      echo number_format($Income["In_award"]);
                      ?>
                    </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo number_format($Income["In_award"] / $Earning["Earn"] * 100) ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sold Player.<span class="float-right">
                      <?php
                      echo number_format($Income["In_playerout"]);
                      ?>
                    </span></h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo number_format($Income["In_playerout"] / $Earning["Earn"] * 100) ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-6 mb-4">
              <?php
              $temp = $conn->query("SELECT * from club WHERE Name = 'Manchester City'");
              $Payout = $temp->fetch_assoc();
              ?>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Money Tracking (Expense) </h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold"> Player's Salary <span class="float-right">
                      <?php
                      echo number_format($Payout["Ex_player"]);
                      ?>
                    </span>
                  </h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: <?php echo number_format($Payout["Ex_player"] / $Expense["Expen"] * 100) ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Staff's Salary <span class="float-right">
                      <?php
                      echo number_format($Payout["Ex_staff"]);
                      ?>
                    </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:<?php echo number_format($Payout["Ex_staff"] / $Expense["Expen"] * 100) ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Salary Employee <span class="float-right">
                      <?php
                      echo number_format($Payout["Ex_state"]);
                      ?>
                    </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo number_format($Payout["Ex_state"] / $Expense["Expen"] * 100) ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Transfer player <span class="float-right">
                      <?php
                      echo number_format($Payout["Ex_playerin"]);
                      ?>
                    </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo number_format($Payout["Ex_playerin"] / $Expense["Expen"] * 100) ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">ETC.<span class="float-right">
                      <?php
                      echo number_format($Payout["Ex_misscell"]);
                      ?>
                    </span></h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:<?php echo number_format($Payout["Ex_misscell"] / $Expense["Expen"] * 100) ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <?php
           /* $temp = $conn->query("SELECT `Name`,`Appointment` from staff where Appointment Like \"%Manager\"  ");
            while ($Coach = $temp->fetch_assoc()) {
              echo "<div class=\"col-lg-4 mb-4\">";
              echo "<div class=\"card shadow mb-4\" style=\"width: 25rem;\">";
              echo "<div class=\"card-header py-3\">";
              echo "<h6 class=\"m-0 font-weight-bold text-primary\">Important Employee</h6>";
              echo "</div>";
              echo "<div class=\"card-body\">";
              echo  "<div class=\"text-center\">";
              echo " <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" src=\"img/img-Staff/$Coach[Name].png\" >";
              echo "</div>";
              echo "<h3>";
              echo $Coach["Appointment"];
              echo "</h3>";
              echo "<p>";
              echo $Coach["Name"];
              echo " </p>";
              echo "</div>";

              echo " </div>";
              echo "</div>";
            }*/
            ?>
          </div>

          <!-- Approach -->
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="img/img-shop/longshirt.png" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-800">Check our Store !</h5>
                  <p class="text-gray-600">Don't miss an exclusive clothes from our team.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img-shop/shortshirt.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-800">Offical clothes 2020</h5>
                  <p class="text-gray-600">This season will be the greatest season for us.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-gray-800">with Exclusive Model</h5>
                  <p class="text-gray-600">You can't find anywhere pre-order now.</p>
                </div>
                <img src="img/img-shop/model.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-iconb text-gray-800" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-iconb" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto text-gray-600">
            <span>Copyright &copy; FootBall Management 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>