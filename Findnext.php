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
                    $temp = $conn->query("SELECT Name from club  WHERE Alias Like \"The Sky Blues\" ");
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
                if (isset($_GET['pname'])) {
                    if (is_numeric($_GET['pname'])) {
                        //     echo "Yes";
                        $P_id = $_GET['pname'];
                        $temp = $conn->prepare("SELECT player.*,club.League,contract.`Salary(Euro)`
                    from player LEFT JOIN club on player.Clubname = club.name 
                    LEFT JOIN contract on player.Id = contract.Player_id Where contract.Player_id = ?");
                        $temp->bind_param("s", $P_id);
                        $temp->execute();
                        $temp1 = $temp->get_result();
                        $player = $temp1->fetch_assoc();
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
                    } else {
                        $P_name = $_GET['pname'];
                        $temp = $conn->prepare("SELECT player.*,club.League,contract.`Salary(Euro)`
                    from player LEFT JOIN club on player.Clubname = club.name 
                    LEFT JOIN contract on player.Id = contract.Player_id Where player.Name Like ?");
                        $temp->bind_param("s", $P_name);
                        $temp->execute();
                        $temp1 = $temp->get_result();
                        $player = $temp1->fetch_assoc();
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
                }
                ?>
                <!-- First Container -->
                <?php C: ?>
                <div class="container-fluid bg-gray-100 text-center ">
                    <h3 class="margin text-gray-800">
                        <?php echo $player["Name"]; ?>
                    </h3>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-flag"></i> National <i class="fas fa-flag"></i> </br>
                                <?php echo $player["National"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-home"></i> Clubname <i class="fas fa-home"></i> </br>
                                <?php echo $player["Clubname"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-warehouse"></i> League <i class="fas fa-warehouse"></i></i> </br>
                                <?php echo $player["League"]; ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-tshirt"></i> Shirt Number <i class="fas fa-tshirt"></i> </br>
                                <?php echo $player["SN"]; ?>
                            </div>
                            </br>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4 text-center">
                            <img src="img/img-players/<?php echo $player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="display:inline" alt="PLAYER" width="500rem">
                            <h5 class="text-gray-600">
                                <?php echo $player["vita"]; ?>
                            </h5>

                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-baby-carriage"></i></i> Age <i class="fas fa-baby-carriage"></i></i>
                                </br>
                                <?php
                                date_default_timezone_set('Asia/Bangkok');;
                                $date = date('Y', strtotime($player["Bdate"]));
                                $date1 = date('Y', time());
                                echo $date1 - $date
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-shoe-prints"></i> Position <i class="fas fa-shoe-prints"></i></i>
                                </br>
                                <?php
                                echo $player["Position"]
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-calendar-check"></i> JoinDate / ExpireDate <i class="fas fa-calendar-check"></i> </br>
                                <?php
                                $temp3 = $player["Id"];
                                $temp2 = $conn->query("SELECT Start_date,Expire_date from contract where Player_id = $temp3");
                                $first_date = $temp2->fetch_assoc();
                                $date = date('d-m-Y', strtotime($first_date["Start_date"]));
                                $date1 = date('d-m-Y', strtotime($first_date["Expire_date"]));
                                echo $date . " / " . $date1;
                                ?>
                            </div>
                            </br>
                            <div class="h5 mb-0 font-weight-bold text-gray-600  alert alert-dark border border-success " role="alert">
                                <i class="fas fa-dollar-sign"></i> Salary <i class="fas fa-dollar-sign"></i> </br>
                                <?php
                                echo number_format($player["Salary(Euro)"]) . " Euro";
                                ?>
                            </div>
                            </br>
                        </div>
                    </div>
                </div>
                    <!-- Second Container -->
                    <?php
                    $temp2 = $conn->query("SELECT * from result where Player_id = $player[Id] ");
                    $Result = $temp2->fetch_assoc();
                    ?>
                    <div class="container-fluid bg-2 text-center">
                        <h3 class="margin">
                            <?php
                            echo "Rating" . " " . $Result["rating"];
                            ?>
                        </h3>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?php echo $Result["rating"] * 10 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="h5 mb-0 font-weight-bold ">
                                    <i class="fas fa-signal"></i>
                                    <?php
                                    if ($player["Position"] == "Gk") {
                                        echo "Saved Goal";
                                    } else {
                                        echo "Goal";
                                    }
                                    ?>
                                    <i class="fas fa-signal"></i>
                                    </br>
                                    <?php
                                    echo $Result["Goal"];
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="h5 mb-0 font-weight-bold  ">
                                    <i class="fas fa-medal"></i> Man of The Match <i class="fas fa-medal"></i> </br>
                                    <?php
                                    echo $Result["MOTM"];
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="h5 mb-0 font-weight-bold   ">
                                    <i class="fas fa-hands-helping"></i> Assist <i class="fas fa-hands-helping"></i>
                                    </br>
                                    <?php
                                    echo $Result["assist"];
                                    ?>
                                </div>
                            </div>
                        </div>
                        <p class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-search"></span>
                        </p>
                    </div>

                    <!-- Third Container (Grid) -->
                    <div class="container-fluid bg-3 text-center">
                        <h3 class="margin">Teammates</h3><br>
                        <div class="row">
                            <?php
                            $temp = $conn->query("SELECT Count(Id) as max from player");
                            $max = $temp->fetch_assoc();

                            $RandomID = rand(1, $max["max"]);
                            while ($RandomID == $player["Id"]) {
                                $RandomID = rand(1,  $max["max"]);
                            }
                            $temp = $conn->query("SELECT player.vita , player.Name from player WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>
                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #000" href="/Findplayer.php?pid=&pname=<?php echo $Random_player["Name"] ?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>

                                    <img src="img/img-players/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
                                    <?php
                                    echo "<p>$Random_player[vita]</p>"
                                    ?>
                            </div>
                            <?php
                            $RandomID = rand(1,$max["max"]);
                            while ($RandomID == $player["Id"]) {
                                $RandomID = rand(1, $max["max"]);
                            }
                            $temp = $conn->query("SELECT player.vita , player.Name from player WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>

                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #000" href="/Findplayer.php?pid=&pname=<?php echo $Random_player["Name"] ?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>
                                    <img src="img/img-players/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
                                    <?php
                                    echo "<p>$Random_player[vita]</p>"
                                    ?>
                            </div>
                            <?php

                            $RandomID = rand(1, $max["max"]);
                            while ($RandomID == $player["Id"]) {
                                $RandomID = rand(1, $max["max"]);
                            }
                            $temp = $conn->query("SELECT player.vita , player.Name from player WHERE Id = $RandomID");
                            $Random_player = $temp->fetch_assoc();
                            ?>

                            <div class="col-sm-4">
                                <h3 class="text-gray-600">
                                    <a class="align-items-center justify-content-center nav-link" style="color : #000" href="/Findplayer.php?pid=&pname=<?php echo $Random_player["Name"] ?>"><?php echo $Random_player["Name"] ?> </a>
                                    </h2>
                                    <img src="img/img-players/<?php echo $Random_player["Name"] ?>.png" class="img-fluid px-3 px-sm-4 mt-3 mb-4  img-circle " style="width:25rem;" alt="Image">
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
    
</body>

</html>