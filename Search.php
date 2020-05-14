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
                <div class="col-lg-12 d-none d-lg-block " style="background-image: url(img/find.png) ; background-size: cover; height: 30rem; weight: 30rem; background-color:dark;">
                  <div class="p-5">
                    <form class="user h-100" action="/Findplayer.php" method="get">
                      <div class="form-group row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                          <h1 class="h3 text-gray-900 mb-4 ">Find your player</h1>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user text-gray-900 bg-light" style="background:inherit; " name="pname" id="FindName" autocomplete="off" placeholder=" e.g. Cristiano Ronaldo or  Contract Number Id " required>
                        </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
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
                        <h5 class="modal-title" id="exampleModalLabel">Add player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" name="Add_ID" autocomplete="off" placeholder="ID" required>
                              <label for="inputAddress2">National</label>
                              <input type="text" class="form-control" id="inputAddress2" name="Add_Nat" autocomplete="off" placeholder="Your Country" required>
                              <label for="inputAddress2">Shrit Number</label>
                              <input type="Number" min="1" max="99" class="form-control" id="inputAddress2" autocomplete="off" name="Add_SN" placeholder="13" required>
                              <label for="inputAddress2">Is Captian</label>
                              <input type="Number" min="0" max="1" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Cap" placeholder="0 = false or 1 = true" required>
                              <label for="inputAddress2">Is Substitute</label>
                              <input type="Number" min="0" max="1" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Sub" placeholder="0 = false or 1 = true" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Player Name</label>
                              <input type="text" class="form-control" id="inputPassword4" autocomplete="off" name="Add_Name" placeholder="Name" required>
                              <label for="inputPassword4">Birth Date</label>
                              <input type="date" class="form-control" id="inputPassword4" autocomplete="off" name="Add_Date" required>
                              <label for="inputState">Position</label>
                              <select id="inputState" class="form-control" name="Add_Pos" required>
                                <option value="" selected>Choose Position</option>
                                <option>CF</option>
                                <option>RF</option>
                                <option>LF</option>
                                <option>FW</option>
                                <option>RW</option>
                                <option>LW</option>
                                <option>CAM</option>
                                <option>CM</option>
                                <option>CDM</option>
                                <option>RM</option>
                                <option>LM</option>
                                <option>LB</option>
                                <option>RB</option>
                                <option>CB</option>
                                <option>SW</option>
                                <option>LWB</option>
                                <option>RWB</option>
                                <option>GK</option>
                              </select>
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
                              <input type="text" class="form-control" id="inputAddress2" name="Add_Vita" autocomplete="off" placeholder="Vita of player" required>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Edit_ID" placeholder="ID" required>
                              <label for="inputEmail4">Name</label>
                              <input type="text" class="form-control" id="inputEmail4" autocomplete="off" name="Edit_Name" placeholder="Name" required>
                              <label for="inputAddress2">Is Captian</label>
                              <input type="Number" min="0" max="1" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_Cap" placeholder="0 = false or 1 = true" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress2">Shrit Number</label>
                              <input type="Number" min="1" max="99" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_SN" placeholder="13" required>
                              <label for="inputAddress2">Is Substitute</label>
                              <input type="Number" min="0" max="1" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_Sub" placeholder="0 = false or 1 = true" required>
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
                        <h5 class="modal-title" id="exampleModalLabel">Remove player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Remove_ID" placeholder="ID" required>
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
          <div class="card-body p-0 " style="height: 35rem; weight: 30rem;">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block " style="background-image: url(img/find.png) ; background-size: cover; height: 35rem; weight: 50rem;">
              </div>
              <div class="col-lg-7">
                <div class="p-5 h-100">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Configuration</h1>
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Add player to squad !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success " style="width: 140px; margin-left: 0rem;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Edit</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-danger" style="width: 140px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Delete</button>
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Rate your player !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">Edit</button>

                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Transfer your player !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal6" data-whatever="@fat">Edit</button>

                  </div>

                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Change Contract on player !</h1>
                  </div>
                  <div class="form-group row">
                    <button type="button" class="btn btn-dark btn-user btn-outline-success" style="width: 180px; margin-left: 4rem;" data-toggle="modal" data-target="#exampleModal7" data-whatever="@mdo">Add</button>
                    <button type="button" class="btn btn-dark btn-user btn-outline-warning" style="width: 180px; margin-left: 4.2rem;" data-toggle="modal" data-target="#exampleModal8" data-whatever="@fat">Edit</button>
                  </div>
                </div> <br> <br>

                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rating player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Player ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Add_Rate_ID" placeholder="ID" required>
                              <label for="inputAddress2">Raiting</label>
                              <input type="Number" min="0.0" max="10.0" step=0.01 class="form-control" autocomplete="off" id="inputAddress2" name="Add_Rate" placeholder="5.9" required>
                              <label for="inputAddress2">Man of The Match</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Add_MOTM" placeholder="10" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress2">Goal / Saved Goal</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Goal" placeholder="230" required>
                              <label for="inputAddress2">Assist</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Add_Assist" placeholder="140" required>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Raiting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Player ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Edit_Rate_ID" placeholder="ID" required>
                              <label for="inputAddress2">Raiting</label>
                              <input type="Number" min="0.0" max="10.0" step=0.01 class="form-control" autocomplete="off" id="inputAddress2" name="Edit_Rate" placeholder="5.9" required>
                              <label for="inputAddress2">Man of The Match</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_MOTM" placeholder="10" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress2">Goal / Saved Goal</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_Goal" placeholder="230" required>
                              <label for="inputAddress2">Assist</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Edit_Assist" placeholder="140" required>
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


                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Transfer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Player ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Add_tran_ID" placeholder="ID" required>
                              <label for="inputPos">Former Clubname</label>
                              <select id="inputPos" class="form-control" autocomplete="off" name="Add_tran_Cn" required>
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
                              <label for="inputAddress2">Price ( Value in Euro )</label>
                              <input type="Number" min="0" class="form-control" id="inputAddress2" autocomplete="off" name="Add_tran_Value" placeholder="230" required>
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

                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Transfer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Player ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Edit_tran_ID" placeholder="ID" required>
                              <label for="inputPos">Former Clubname</label>
                              <select id="inputPos" class="form-control" name="Edit_tran_Cn" required>
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
                              <label for="inputAddress2">Price ( Value in Euro )</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Edit_tran_Value" placeholder="230" required>
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

                <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Contract</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Number Contract ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" name="Add_contract_Nid" placeholder="ID" autocomplete="off" required>
                              <label for="inputPos">Former Clubname</label>
                              <select id="inputPos" class="form-control" name="Add_contract_Cn" required>
                                <option value="" selected>Choose Club</option>
                                <?php
                                $temp = $conn->query("SELECT Name from Club");
                                while ($Clubname = $temp->fetch_assoc()) {
                                  echo " <option>" . $Clubname["Name"] . "</option>";
                                }
                                ?>
                              </select>
                              <label for="inputEmail4">Start Date</label>
                              <input type="date" class="form-control" autocomplete="off" id="inputEmail4" name="Add_contract_sd" placeholder="ID" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Player ID</label>
                              <input type="number" min="1" class="form-control" autocomplete="off" id="inputEmail4" name="Add_contract_ID" placeholder="ID" required>
                              <label for="inputAddress2">Salary ( Value in Euro )</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Add_contract_Salary" placeholder="1,000">
                              <label for="inputEmail4">Expire Date</label>
                              <input type="date" class="form-control" id="inputEmail4" name="Add_contract_ed" placeholder="ID" required>
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


                <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Contract</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/IDU_Db.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Number Contract ID</label>
                              <input type="number" min="1" class="form-control" id="inputEmail4" autocomplete="off" name="Edit_contract_Nid" placeholder="ID" required>
                              <label for="inputPos">Former Clubname</label>
                              <select id="inputPos" class="form-control" name="Edit_contract_Cn" required>
                                <option value="" selected>Choose Club</option>
                                <?php
                                $temp = $conn->query("SELECT Name from Club");
                                while ($Clubname = $temp->fetch_assoc()) {
                                  echo " <option>" . $Clubname["Name"] . "</option>";
                                }
                                ?>
                              </select>
                              <label for="inputEmail4">Start Date</label>
                              <input type="date" class="form-control" id="inputEmail4" name="Edit_contract_sd" placeholder="ID" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress2">Salary ( Value in Euro )</label>
                              <input type="Number" min="0" class="form-control" autocomplete="off" id="inputAddress2" name="Edit_contract_Salary" placeholder="1,000">
                              <label for="inputEmail4">Expire Date</label>
                              <input type="date" class="form-control" id="inputEmail4" name="Edit_contract_ed" placeholder="ID" required>
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