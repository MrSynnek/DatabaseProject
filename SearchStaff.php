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


<body id="page-top" class="bg-white">

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
        <!-- End of Sidebar -->

        <div class="container ">

          <div class="card o-hidden border-0 shadow-lg my-5 ">
            <div class="card-body p-0 " style="height: 30rem; weight: 30rem;">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12 d-none d-lg-block " style="background-image: url(img/findstaff.png) ; background-size: cover; height: 30rem; weight: 30rem; background-color:dark;">
                  <div class="p-5">
                    <form class="user h-100" action="/Findstaff.php" method="get">
                      <div class="form-group row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                          <h1 class="h3 text-gray-900 mb-4 ">Find Staff info</h1>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user text-gray-900 bg-light" style="background:inherit; " name="Check_Name" id="FindName" placeholder=" e.g. Pep Guardiola " required>
                        </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
                          <select id="inputState" class="form-control" name="Check_App" required>
                            <option value="" selected>Appointment... </option>
                            <?php
                            $que = "SELECT DISTINCT Appointment from staff";
                            $App = $conn->query($que);
                            while ($Appoint = $App->fetch_assoc()) {
                              echo "<option>" . $Appoint["Appointment"] . "</option>";
                            }
                            ?>
                          </select>
                        </div>
                        <div class="col-sm-2 mb-3 mb-sm-0">
                          <button type="submit" class="btn btn-primary btn-user btn-block" style="width: 150px; ">Find <i class="fas fa-search"></i></button>
                        </div>
                      </div>
                  </div>
                  <br> <br>
                  </form>
                </div>



                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db_staff.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Add_Staffid" placeholder="ID" required>
                              <label for="inputAddress2">National</label>
                              <input type="text" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Staffnat" placeholder="Your Country" required>
                              <label for="inputAddress2">Salary</label>
                              <input type="Number" min="1" class="form-control" autocomplete="off" id="inputAddress2" name="Add_Salary" placeholder="25,000" required>
                              <label for="inputAddress2">Matches</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Add_Matches" placeholder="670" required>
                              <label for="inputAddress2">Trophy</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Add_Trophy" placeholder="5" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Staff Name</label>
                              <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Add_Staffname" placeholder="Name" required>
                              <label for="inputD">Appointment</label>
                              <select id="inputD" class="form-control" name="Add_App" required>
                                <option value="" selected> Choose Appointment </option>
                                <?php
                                $temp = $conn->query("SELECT DISTINCT Appointment from staff");
                                while ($Appointment = $temp->fetch_assoc()) {
                                  echo "<option>" . $Appointment["Appointment"] . "</option>";
                                }
                                ?>
                              </select>
                              <label for="inputPassword4">Birth Date</label>
                              <input type="date" class="form-control" id="inputPassword4" name="Add_Staffdate" required>
                              <label for="inputPos">Clubname</label>
                              <select id="inputPos" class="form-control" name="Add_Cn" required>
                                <option value="" selected>Choose Club</option>
                                <?php
                                $temp = $conn->query("SELECT Name from Club");
                                while ($Clubname = $temp->fetch_assoc()) {
                                  echo " <option>" . $Clubname["Name"] . "</option>";
                                }
                                ?>
                              </select>
                              <label for="inputAddress2">Vita</label>
                              <input type="text" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Staffvita" placeholder="Vita of player" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck" required>
                              <label class="form-check-label" for="gridCheck">
                                Input are all corrects!
                              </label>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db_staff.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Edit_Staffid" placeholder="ID" required>
                              <label for="inputAddress2">Salary</label>
                              <input type="Number" min="1" class="form-control" autocomplete="off" id="inputAddress2" name="Edit_Salary" placeholder="25,000" required>
                              <label for="inputAddress2">Matches</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Edit_Matches" placeholder="670" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputD">Appointment</label>
                              <select id="inputD" class="form-control" name="Edit_App" required>
                                <option value="" selected> Choose Appointment </option>
                                <?php
                                $temp = $conn->query("SELECT DISTINCT Appointment from staff");
                                while ($Appointment = $temp->fetch_assoc()) {
                                  echo "<option>" . $Appointment["Appointment"] . "</option>";
                                }
                                ?>
                              </select>
                              <label for="inputPassword4">Birth Date</label>
                              <input type="date" class="form-control" id="inputPassword4" name="Edit_Staffdate" required>
                              <label for="inputAddress2">Trophy</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Edit_Trophy" placeholder="5" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck" required>
                              <label class="form-check-label" for="gridCheck">
                                Input are all corrects!
                              </label>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Remove Staff</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db_staff.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Remove_Staffid" placeholder="ID" required>
                            </div>
                            <div class="form-group col-md-6">

                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck" required>
                              <label class="form-check-label" for="gridCheck">
                                Input are all corrects!
                              </label>
                            </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Remove</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container ">

        <div class="card o-hidden border-0 shadow-lg my-5 ">
          <div class="card-body p-0 " style="height: 37rem; weight: 30rem;">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block " style="background-image: url(img/findstaff.png) ; background-size: cover; height: 37rem; weight: 50rem;">
              </div>
              <div class="col-lg-7">
                <div class="p-5 h-100">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Configuration</h1>
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Add Staff to squad !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success " style="width: 140px; margin-left: 0rem;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Edit</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Delete</button>
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Add State to squad !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 140px; margin-left: 0rem;" data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal6" data-whatever="@mdo">Edit</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal7" data-whatever="@fat">Remove</button>
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Add Club,Formation,Event,Contact </h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 140px; margin-left: 0rem;" data-toggle="modal" data-target="#exampleModal8" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal9" data-whatever="@mdo">Edit</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal10" data-whatever="@fat">Remove</button>
                  </div>

                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">Remove</button>
                  </div>

                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal11" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal12" data-whatever="@fat">Remove</button>
                  </div>

                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal13" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal14" data-whatever="@fat">Remove</button>
                  </div>

                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Formation</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPos">Clubname</label>
                                <select id="inputPos" class="form-control" name="Add_Formation_Cn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputAddress2">Formation</label>
                                <input type="text" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Add_Formation" placeholder="4-3-3" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Remove Formation</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPos">Clubname</label>
                                <select id="inputPos" class="form-control" name="Remove_Formation_Cn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Formation </label>
                                <input type="text" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Remove_Formation" placeholder="4-4-3" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add State</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">State Name</label>
                                <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Add_Statename" placeholder="Name" required>

                                <label for="inputPos">Type of Glass</label>
                                <select id="inputPos" class="form-control" name="Add_TOG" required>
                                  <option value="" selected>Choose type</option>
                                  <?php
                                  $temp = $conn->query("SELECT DISTINCT TOG from state");
                                  while ($TOG = $temp->fetch_assoc()) {
                                    echo " <option>" . $TOG["TOG"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Capacity</label>
                                <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Add_Statecapacity" placeholder="30,000" required>


                                <label for="inputPos">Clubname</label>
                                <select id="inputPos" class="form-control" name="Add_StateCn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <label for="FormControlTextarea1"> History</label>
                            <textarea class="form-control" id="FormControlTextarea1" rows="3" name="Add_Statehistory" autocomplete="off" placeholder="History of State (Below than 1,000 words)" required></textarea>

                            </br>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit State</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">State Name</label>
                                <input type="text" class="form-control" id="inputPassword4" name="Edit_Statename" autocomplete="off" placeholder="Name" required>

                                <label for="inputPos">Type of Glass</label>
                                <select id="inputPos" class="form-control" name="Edit_TOG" required>
                                  <option value="" selected>Choose type</option>
                                  <?php
                                  $temp = $conn->query("SELECT DISTINCT TOG from state");
                                  while ($TOG = $temp->fetch_assoc()) {
                                    echo " <option>" . $TOG["TOG"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Capacity</label>
                                <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Edit_Statecapacity" placeholder="30,000" required>

                                <label for="inputPos">Clubname</label>
                                <select id="inputPos" class="form-control" name="Edit_StateCn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <label for="FormControlTextarea1"> History</label>
                            <textarea class="form-control" id="FormControlTextarea1" rows="3" name="Edit_Statehistory" autocomplete="off" placeholder="History of State (Below than 1,000 words)" required></textarea>

                            </br>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Remove State</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">State Name</label>
                                <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Remove_Statename" placeholder="Name" required>
                              </div>
                              <div class="form-group col-md-6">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Club</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Club Name</label>
                                <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Add_nameofclub" placeholder="Name" required>
                                <label for="inputPos">Alias</label>
                                <input type="text" class="form-control" id="inputPos" autocomplete="off" name="Add_Alias" placeholder="Alias Name" required>
                                <label for="inputPos">Incoming Sponsor</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_ins" placeholder="300000" required>
                                <label for="inputPos">Incoming Ticket</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_int" placeholder="300000" required>
                                <label for="inputPos">Incoming CopyRight</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_incr" placeholder="300000" required>
                                <label for="inputPos">Incoming Award</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_ina" placeholder="300000" required>
                                <label for="inputPos">Incoming Playerout</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_inpo" placeholder="300000" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Location</label>
                                <input type="text" class="form-control" id="inputEmail4" autocomplete="off" name="Add_Location" placeholder="London" required>
                                <label for="inputPos">League</label>
                                <input type="text" class="form-control" id="inputPos" autocomplete="off" name="Add_League" placeholder="La Liga" required>
                                <label for="inputPos">Expense Player</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_exp" placeholder="300000" required>
                                <label for="inputPos">Expense Staff</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_exs" placeholder="300000" required>
                                <label for="inputPos">Expense State</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_exst" placeholder="300000" required>
                                <label for="inputPos">Expense Misscell</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_exm" placeholder="300000" required>
                                <label for="inputPos">Expense PlayerIn</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Add_expi" placeholder="300000" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Club</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Club Name</label>
                                <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Edit_nameofclub" placeholder="Name" required>
                                <label for="inputPos">Incoming Sponsor</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_ins" placeholder="300000" required>
                                <label for="inputPos">Incoming Ticket</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_int" placeholder="300000" required>
                                <label for="inputPos">Incoming CopyRight</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_incr" placeholder="300000" required>
                                <label for="inputPos">Incoming Award</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_ina" placeholder="300000" required>
                                <label for="inputPos">Incoming Playerout</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_inpo" placeholder="300000" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPos">League</label>
                                <input type="text" class="form-control" id="inputPos" autocomplete="off" name="Edit_League" placeholder="La Liga" required>
                                <label for="inputPos">Expense Player</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_exp" placeholder="300000" required>
                                <label for="inputPos">Expense Staff</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_exs" placeholder="300000" required>
                                <label for="inputPos">Expense State</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_exst" placeholder="300000" required>
                                <label for="inputPos">Expense Misscell</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_exm" placeholder="300000" required>
                                <label for="inputPos">Expense PlayerIn</label>
                                <input type="Number" min="1" class="form-control" autocomplete="off" id="inputPos" name="Edit_expi" placeholder="300000" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Remove Club</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Club Name</label>
                                <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Remove_nameofclub" placeholder="Name" required>
                              </div>
                              <div class="form-group col-md-6">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Event Date</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Event Date</label>
                                <input type="Date" class="form-control" id="inputEmail4" name="Add_Edate" placeholder="London" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Clubname</label>
                                <select id="inputPos" class="form-control" name="Add_Edatecn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <label for="FormControlTextarea1"> Vita</label>
                            <textarea class="form-control" id="FormControlTextarea1" rows="3" name="Add_Edatevita" autocomplete="off" placeholder="History of State (Below than 255 words)" required></textarea>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Remove Event Date</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Event Date</label>
                                <input type="Date" class="form-control" id="inputEmail4" name="Remove_Edate" placeholder="London" required>
                              </div>
                              <div class="form-group col-md-6">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">

                                <label for="FormControlTextarea1">Add Address</label>
                                <textarea class="form-control" id="FormControlTextarea1" rows="1" name="Add_Add" autocomplete="off" placeholder="Address (Below than 255 words)" required></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Clubname</label>
                                <select id="inputPos" class="form-control" name="Add_Addcn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Remove Address</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/IDU_Db_staff.php" method="POST" id="State">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="FormControlTextarea1">Address</label>
                                <textarea class="form-control" id="FormControlTextarea1" rows="1" name="Remove_Add" autocomplete="off" placeholder="Address (Below than 255 words)" required></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Clubname</label>
                                <select id="inputPos" class="form-control" name="Remove_Addcn" required>
                                  <option value="" selected>Choose Club</option>
                                  <?php
                                  $temp = $conn->query("SELECT Name from Club");
                                  while ($Clubname = $temp->fetch_assoc()) {
                                    echo " <option>" . $Clubname["Name"] . "</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                  Input are all corrects!
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>










                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Scroll to Top Button-->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto text-gray-600">
        <span>Copyright &copy; FootBall Management 2020</span>
      </div>
    </div>
  </footer>
  <div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>