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
</head>

<body id="page-top">
  <?php
  if (isset($_POST["Add_Staffid"])) {
    $que = "INSERT INTO `staff`(`ID`, `Appointment`, `BOD`, `Clubname`, `Name`, `Salary`, `Trophy`, `National`, `Vita`, `Matches`) 
    VALUES ('" . $_POST["Add_Staffid"] . "','" . $_POST["Add_App"] . "','" . $_POST["Add_Staffdate"] . "','" . $_POST["Add_Cn"] . "'
    ,'" . $_POST["Add_Staffname"] . "','" . $_POST["Add_Salary"] . "','" . $_POST["Add_Trophy"] . "','" . $_POST["Add_Staffnat"] . "','" . $_POST["Add_Staffvita"] . "','" . $_POST["Add_Matches"] . "')";
    $Addstaff = $conn->query($que);
    if ($Addstaff) {
  ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูล ID ในระบบสตาฟซ้ำ ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>
      <?php
    }
  } else if (isset($_POST["Edit_Staffid"])) {
    $temp = $conn->prepare("SELECT ID from staff WHERE ID = ?");
    $temp->bind_param("i", $_POST["Edit_Staffid"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `staff` SET
      `Appointment`='" . $_POST["Edit_App"] . "',
      `BOD`='" . $_POST["Edit_Staffdate"] . "',
      `Salary`='" . $_POST["Edit_Salary"] . "',
      `Trophy`='" . $_POST["Edit_Trophy"] . "',
      `Matches`='" . $_POST["Edit_Matches"] . "'
      WHERE ID = '" . $_POST["Edit_Staffid"] . "'";
      $Editstaff = $conn->query($que);
      if ($Editstaff) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({
            type: 'error',
            title: 'แก้ไขข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php

      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบสตาฟ ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (isset($_POST["Remove_Staffid"])) {
    $temp = $conn->prepare("SELECT ID from staff where ID = ?");
    $temp->bind_param("i", $_POST["Remove_Staffid"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "DELETE FROM `staff` WHERE ID = '" . $_POST["Remove_Staffid"] . "' ";
      $RemoveStaff = $conn->query($que);
      if ($RemoveStaff) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({

            type: 'error',
            title: 'แก้ไขข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบสตาฟ ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง!',

        }).then(function() {
          window.history.back();
        })
      </script>


    <?php
    }
  } else if (isset($_POST["Add_Statename"])) {
    $que = "INSERT INTO `state`(`Name`, `capacity`, `Tog`, `Clubname`, `history`) 
    VALUES ('" . $_POST["Add_Statename"] . "',
    '" . $_POST["Add_Statecapacity"] . "',
    '" . $_POST["Add_TOG"] . "',
    '" . $_POST["Add_StateCn"] . "',
    '" . $_POST["Add_Statehistory"] . "')
    ";
    $AddState = $conn->query($que);
    if ($AddState) {
    ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูลชื่อในระบบของสนามซ้ำ ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>
      <?php
    }
  } else if (isset($_POST["Edit_Statename"])) {
    $temp = $conn->prepare("SELECT Name from State where Name = ?");
    $temp->bind_param("s", $_POST["Edit_Statename"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `state` SET
      `capacity`='" . $_POST["Edit_Statecapacity"] . "',
      `Tog`='" . $_POST["Edit_TOG"] . "',
      `Clubname`='" . $_POST["Edit_StateCn"] . "',
      `history`='" . $_POST["Edit_Statehistory"] . "'
       WHERE Name = '" . $_POST["Edit_Statename"] . "'";
      $EditState = $conn->query($que);
      if ($EditState) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({
            type: 'error',
            title: 'แก้ไขข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลชื่อในระบบสนาม ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

      <?php
    }
  } else if (isset($_POST["Remove_Statename"])) {
    $temp = $conn->prepare("SELECT Name from state where Name = ?");
    $temp->bind_param("s", $_POST["Remove_Statename"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "DELETE FROM `state` WHERE Name = '" . $_POST["Remove_Statename"] . "'";
      $RemoveState = $conn->query($que);
      if ($RemoveState) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({

            type: 'error',
            title: 'ลบข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลชื่อในระบบสนาม',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


    <?php
    }
  } else if (isset($_POST["Add_nameofclub"])) {
    $que = "INSERT INTO `club`(`Name`, `Alias`, `Location`, `League`, `In_sponser`, `In_ticket`, `In_copyr`, 
    `In_award`, `In_playerout`, `Ex_player`, `Ex_staff`, `Ex_state`, `Ex_playerin`, `Ex_misscell`)
     VALUES ('" . $_POST["Add_nameofclub"] . "','" . $_POST["Add_Alias"] . "','" . $_POST["Add_Location"] . "','" . $_POST["Add_League"] . "','" . $_POST["Add_ins"] . "','" . $_POST["Add_int"] . "',
     '" . $_POST["Add_incr"] . "','" . $_POST["Add_ina"] . "','" . $_POST["Add_inpo"] . "','" . $_POST["Add_exp"] . "','" . $_POST["Add_exs"] . "','" . $_POST["Add_exst"] . "','" . $_POST["Add_expi"] . "','" . $_POST["Add_exm"] . "')";
    $AddClub = $conn->query($que);
    if ($AddClub) {
    ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูลชื่อซ่ำกันในระบบสโมสร',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (isset($_POST["Edit_nameofclub"])) {
    $temp = $conn->prepare("SELECT Name from club where Name = ?");
    $temp->bind_param("s", $_POST["Edit_nameofclub"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `club` SET 
    `League`='" . $_POST["Edit_League"] . "',
    `In_sponser`='" . $_POST["Edit_ins"] . "',
    `In_ticket`='" . $_POST["Edit_int"] . "',
    `In_copyr`='" . $_POST["Edit_incr"] . "',
    `In_award`='" . $_POST["Edit_ina"] . "',
    `In_playerout`='" . $_POST["Edit_inpo"] . "',
    `Ex_player`='" . $_POST["Edit_exp"] . "',
    `Ex_staff`='" . $_POST["Edit_exs"] . "',
    `Ex_state`='" . $_POST["Edit_exst"] . "',
    `Ex_playerin`='" . $_POST["Edit_expi"] . "',
    `Ex_misscell`='" . $_POST["Edit_exm"] . "' 
    WHERE Name = '" . $_POST["Edit_nameofclub"] . "' ";
      $Editclub = $conn->query($que);
      if ($Editclub) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
        echo $conn->error;
      ?>
        <script>
          Swal.fire({
            type: 'error',
            title: 'แก้ไขข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลชื่อในระบบสโมสร',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

      <?php
    }
  } else if (isset($_POST["Remove_nameofclub"])) {
    $temp = $conn->prepare("SELECT Name from club where Name = ?");
    $temp->bind_param("s", $_POST["Remove_nameofclub"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "DELETE FROM `club` WHERE Name = '" . $_POST["Remove_nameofclub"] . "' ";
      $RemoveClub = $conn->query($que);
      if ($RemoveClub) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({

            type: 'error',
            title: 'ลบข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลชื่อในระบบสโมสร',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

    <?php
    }
  } else if (isset($_POST["Add_Formation"])) {
    $que = "INSERT INTO `formation`(`Clubname`, `Formation`) VALUES ('" . $_POST["Add_Formation_Cn"] . "','" . $_POST["Add_Formation"] . "')";
    $AddFor = $conn->query($que);
    if ($AddFor) {
    ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูลซ้ำกันในระบบการเล่น',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (isset($_POST["Remove_Formation"])) {
    $temp = $conn->prepare("SELECT * from formation Where Formation = ? && Clubname = ?");
    $temp->bind_param("ss", $_POST["Remove_Formation"], $_POST["Remove_Formation_Cn"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "DELETE FROM `formation` WHERE Formation = '".$_POST["Remove_Formation"]."' && Clubname = '".$_POST["Remove_Formation_Cn"]."'";
      $RemoveFor = $conn->query($que);
      if ($RemoveFor) {
      ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      } else {
      ?>
        <script>
          Swal.fire({

            type: 'warning',
            title: 'ลบข้อมูลในฐานข้อมูลไม่สำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลของรูปแบบการเล่นที่ตรงกับสโมสร',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

  <?php
    }
  } else if (isset($_POST["Add_Edate"])){
    $que = "INSERT INTO `eventdate`(`Edate`, `Clubname`, `vita`) 
    VALUES ('".$_POST["Add_Edate"]."','".$_POST["Add_Edatecn"]."','".$_POST["Add_Edatevita"]."')";
    $AddEdate = $conn->query($que);
    if($AddEdate){
      ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    }
    else{
      ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูลซ้ำกันในระบบกิจกรรม',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (Isset($_POST["Remove_Edate"])){
    $temp = $conn->prepare("SELECT * from eventdate WHERE Edate = ?");
    $temp->bind_param("s",$_POST["Remove_Edate"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if($temp1 -> num_rows > 0){
      $que = "DELETE FROM `eventdate` WHERE Edate = '".$_POST["Remove_Edate"]."'";
      $RemoveEdate = $conn->query($que);
      if($RemoveEdate){
        ?>
        <script>
          Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
            text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

          }).then(function() {
            window.history.back();
          })
        </script>
      <?php
      }
      else{
        ?>
        <script>
          Swal.fire({
            type: 'error',
            title: 'ไม่พบข้อมูลของวันที่ตรงกับกิจกรรม',
            text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',
  
          }).then(function() {
            window.history.back();
          })
        </script>
  
    <?php
      }
    }
    else{
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลของวันที่ตรงกับกิจกรรม',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

  <?php
    }
  } else if (isset ($_POST["Add_Add"])){
    $que = "INSERT INTO `contact`(`Address`, `Clubname`) VALUES ('".$_POST["Add_Add"]."','".$_POST["Add_Addcn"]."')";
    $AddAdd = $conn->query($que);
    if($AddAdd){
      ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'เพิ่มข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    }
    else{
      ?>
      <script>
        Swal.fire({
          type: 'warning',
          title: 'พบข้อมูลซ้ำกันในระบบกิจกรรม',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (isset($_POST["Remove_Add"])){
    $temp = $conn->prepare("SELECT * from contact where Address = ? && Clubname = ?");
    $temp->bind_param("ss",$_POST["Remove_Add"],$_POST["Remove_Addcn"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $temp2 = $temp1->fetch_assoc();
    if($temp1->num_rows > 0){
    $que = "DELETE FROM `contact` WHERE Address = '".$_POST["Remove_Add"]."' && Clubname = '".$_POST["Remove_Addcn"]."' ";
    $RemoveAdd = $conn->query($que);
    if($RemoveAdd){
      ?>
      <script>
        Swal.fire({
          type: 'success',
          title: 'ลบข้อมูลในฐานข้อมูลสำเร็จ',
          text: 'กดปุ่มโอเคอีกครั้งเพื่อกลับหน้าเดิม!',

        }).then(function() {
          window.history.back();
        })
      </script>
    <?php
    }
    else{
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลของสถานที่',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

  <?php
    }
    }
    else{
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูลของสถานที่',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>

  <?php
    }
  }
  ?>
</body>

</html>