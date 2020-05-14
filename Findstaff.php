<?php
require 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FootBall - Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.zmin.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"> </script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }

        p {
            font-size: 16px;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-color: #1abc9c;
            /* Green */
            color: #ffffff;
        }

        .bg-2 {
            background-color: #474e5d;
            /* Dark Blue */
            color: #ffffff;
        }

        .bg-3 {
            background-color: #ffffff;
            /* White */
            color: #555555;
        }

        .bg-4 {
            background-color: #2f2f2f;
            /* Black Gray */
            color: #fff;
        }

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
    </style>
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
                    echo $name["Name"]
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
                <?php
                if (isset($_GET['Check_Name']) || ($_GET['Check_App'])) {
                    $CheckN = $_GET['Check_Name'];
                    $CheckA = $_GET['Check_App'];
                    $temp = $conn->prepare("SELECT * from staff where Name = ? AND Appointment = ? ");
                    $temp->bind_param("ss", $CheckN, $CheckA);
                    $temp->execute();
                    $temp1 = $temp->get_result();
                    $staff = $temp1->fetch_assoc();
                    if ($temp1->num_rows == 0) {
                ?>
                        <script>
                            Swal.fire({
                                type: 'error',
                                title: 'ไม่พบข้อมูลในระบบ',
                                text: 'โปรดตรวจสอบข้อมูลอีกครั้ง!',


                            }).then(function() {
                                window.history.back();
                            })
                        </script>
                <?php
                        return 0;
                    } else {
                        goto C;
                    }
                }
                ?>
                <!-- First Container -->
                <?php C: ?>
                <div class="container-fluid bg-gray-100 text-center ">
                    <h3 class="margin text-gray-800">
                        <?php echo $staff["Name"]; ?>
                    </h3>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-flag"></i> Appointment <i class="fas fa-flag"></i> </br>
                                <?php echo $staff["Appointment"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-flag"></i> National <i class="fas fa-flag"></i> </br>
                                <?php echo $staff["National"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-home"></i> Clubname <i class="fas fa-home"></i> </br>
                                <?php echo $staff["Clubname"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-trophy"></i> Trophy <i class="fas fa-trophy"></i> </br>
                                <?php echo $staff["Trophy"]; ?>
                            </div>

                            </br>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4 text-center">
                            <img src="img/img-Staff/<?php echo $staff["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="display:inline" alt="PLAYER" width="500rem">
                            <h5 class="text-gray-600">
                                <?php echo $staff["Vita"]; ?>
                            </h5>

                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-shoe-prints"></i> ID <i class="fas fa-shoe-prints"></i></i>
                                </br>
                                <?php
                                echo $staff["ID"];
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                            <i class="fab fa-kickstarter"></i> Matches <i class="fab fa-kickstarter"></i>
                                </br>
                                <?php
                                echo $staff["Matches"];
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-money-check-alt"></i> Salary <i class="fas fa-money-check-alt"></i>

                                </br>
                                <?php
                                echo $staff["Salary"] . " Euro";
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-baby-carriage"></i></i> Age <i class="fas fa-baby-carriage"></i></i>
                                </br>
                                <?php
                                date_default_timezone_set('Asia/Bangkok');;
                                $date = date('Y', strtotime($staff["BOD"]));
                                $date1 = date('Y', time());
                                echo $date1 - $date;
                                ?>
                            </div>
                            </br>
                        </div>
                    </div>
                </div>
                    <!-- Third Container (Grid) -->
                    <div class="container-fluid bg-2 text-center">
                        <h3 class="margin">Another Staff</h3><br>
                        <div class="row">
                            <?php
                            $temp = $conn->query("SELECT Count(ID) as max from staff");
                            $max = $temp->fetch_assoc();

                            $RandomID = rand(1, $max["max"]);
                            while ($RandomID == $staff["ID"]) {
                                $RandomID = rand(1,  $max["max"]);
                            }
                            $temp = $conn->query("SELECT staff.Name,staff.Appointment,staff.vita from staff WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>
                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #fff" href="/Findstaff.php?Check_Name=<?php echo $Random_player["Name"] ?>&Check_App=<?php echo $Random_player["Appointment"]?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>

                                    <img src="img/img-Staff/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
                                    <?php
                                    echo "<p>$Random_player[vita]</p>"
                                    ?>
                            </div>
                            <?php
                            $RandomID = rand(1, $max["max"]);
                            while ($RandomID == $staff["ID"]) {
                                $RandomID = rand(1,  $max["max"]);
                            }
                            $temp = $conn->query("SELECT staff.Name,staff.Appointment,staff.vita from staff WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>
                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #fff" href="/Findstaff.php?Check_Name=<?php echo $Random_player["Name"] ?>&Check_App=<?php echo $Random_player["Appointment"]?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>
                                    <img src="img/img-Staff/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
                                    <?php
                                    echo "<p>$Random_player[vita]</p>"
                                    ?>
                            </div>
                            <?php
                            $RandomID = rand(1, $max["max"]);
                            while ($RandomID == $staff["ID"]) {
                                $RandomID = rand(1,  $max["max"]);
                            }
                            $temp = $conn->query("SELECT staff.Name,staff.Appointment,staff.vita from staff WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>

                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #fff" href="/Findstaff.php?Check_Name=<?php echo $Random_player["Name"] ?>&Check_App=<?php echo $Random_player["Appointment"]?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>
                                    <img src="img/img-Staff/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
                                    <?php
                                    echo "<p>$Random_player[vita]</p>"
                                    ?>
                            </div>


                        </div>
                    </div>

                
            </div>
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
    </div>
</body>

</html>