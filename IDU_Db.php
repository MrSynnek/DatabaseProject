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
  if (isset($_POST["Add_ID"])) {

    if (isset($_POST["Add_Sub"])) {
      if ($_POST["Add_Sub"] == 1) {
        $_POST["Add_Sub"] = 'Y';
      } else {
        $_POST["Add_Sub"] = 'N';
      }
    }
    if (isset($_POST["Add_Cap"])) {
      if ($_POST["Add_Cap"] == 1) {
        $_POST["Add_Cap"] = 'Y';
      } else {
        $_POST["Add_Cap"] = 'N';
      }
    }
    $que = "INSERT INTO `player`(`Id`, `Name`, `Bdate`, `National`, `SN`, `Position`, `IsCaptian`, `Clubname`, `substitute`, `vita`) 
        VALUES 
        ('" . $_POST["Add_ID"] . "',
        '" . $_POST["Add_Name"] . "',
        '" . $_POST["Add_Date"] . "',
        '" . $_POST["Add_Nat"] . "',
        '" . $_POST["Add_SN"] . "',
        '" . $_POST["Add_Pos"] . "',
        '" . $_POST["Add_Cap"] . "',
        '" . $_POST["Add_Cn"] . "',
        '" . $_POST["Add_Sub"] . "',
        '" . $_POST["Add_Vita"] . "')";
    $Addqu = $conn->query($que);
    if ($Addqu) {

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
          title: 'พบข้อมูล ID ในระบบผู้เล่นซ้ำ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือแก้ไขข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  }
  //EDIT ZONE
  else if (isset($_POST["Edit_ID"])) {
    /*

    if (isset($_POST["Edit_Cap"])) {
      if ($_POST["Edit_Cap"] == 1) {
        $_POST["Edit_Cap"] = 'Y';
      } else {
        $_POST["Edit_Cap"] = 'N';
      }
    }
    if (isset($_POST["Edit_Sub"])) {
      if ($_POST["Edit_Sub"] == 1) {
        $_POST["Edit_Sub"] = 'Y';
      } else {
        $_POST["Edit_Sub"] = 'N';
      }
    }
    /*check Num no need*/
    $temp = $conn->prepare("SELECT Id from player where Id = ?");
    $temp->bind_param("i", $_POST["Edit_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $quename = "SELECT Name from player where Id = '".$_POST["Edit_ID"]."'";
      $temp = $conn->query($quename);
      $name = $temp->fetch_assoc();
      if($_POST["Edit_Name"] == ''){
        $_POST["Edit_Name"] = $name["Name"];
      }
      $que = "UPDATE `player` SET 
       `Name`='" . $_POST["Edit_Name"] . "',
  `SN`='" . $_POST["Edit_SN"] . "',
  `IsCaptian`='" . $_POST["Edit_Cap"] . "',
  `substitute`='" . $_POST["Edit_Sub"] . "'
  WHERE Id = '" . $_POST["Edit_ID"] . "' ";
      $Editqu = $conn->query($que);
      if ($Editqu) {
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
          title: 'ไม่พบข้อมูล ID ในระบบผู้เล่น ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


    <?php
    }
  } else if (isset($_POST["Remove_ID"])) {
    //remove ondelete cascade gonna delete transfer contract result too;
    $temp = $conn->prepare("SELECT Id from player where Id = ?");
    $temp->bind_param("i", $_POST["Remove_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "DELETE FROM `player` WHERE Id = '" . $_POST["Remove_ID"] . "'";
      $Removequ = $conn->query($que);
    if ($Removequ) {
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
    }else{
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบผู้เล่น ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php

    }
  } else if (isset($_POST["Add_Rate_ID"])) {
    $temp = $conn->prepare("SELECT Id from player where Id = ?");
    $temp->bind_param("i", $_POST["Add_Rate_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "INSERT INTO `result`(`Player_id`, `rating`, `MOTM`, `Goal`, `assist`) 
  VALUES ('" . $_POST["Add_Rate_ID"] . "','" . $_POST["Add_Rate"] . "','"
        . $_POST["Add_MOTM"] . "','" . $_POST["Add_Goal"] . "',
  '" . $_POST["Add_Assist"] . "') ";
      $Addrat = $conn->query($que);
      if ($Addrat) {
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
            title: 'พบข้อมูล ID ในระบบผลงานผู้เล่น ซ้ำ ',
            text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ แก้ไขข้อมูล!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
        //  echo "มี ID ของ raiting แล้ว หากจะแก้ไขกรุณากดปุมแก้ไข";
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบผู้เล่น ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    }
  } else if (isset($_POST["Edit_Rate_ID"])) {
    $temp = $conn->prepare("SELECT Player_id from result where Player_id = ?");
    $temp->bind_param("i", $_POST["Edit_Rate_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `result` SET 
    `rating`='" . $_POST["Edit_Rate"] . "',
    `MOTM`='" . $_POST["Edit_MOTM"] . "',
    `Goal`='" . $_POST["Edit_Goal"] . "',
    `assist`='" . $_POST["Edit_Assist"] . "'
    WHERE Player_id = '" . $_POST["Edit_Rate_ID"] . "' ";
      $Editrat = $conn->query($que);
      if ($Editrat) {
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
          title: 'ไม่พบข้อมูล ID ในระบบผลงานผู้เล่น',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
      // echo "ไม่มี ID อยู่ใน Raiting โปรดกรอก ID raiting ใน Add";
    }
  } else if (isset($_POST["Add_contract_Nid"])) {
    $temp = $conn->prepare("SELECT Id from player where Id = ?");
    $temp->bind_param("i", $_POST["Add_contract_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "INSERT INTO `contract`(`Number`, `Player_id`, `Clubname`, `Start_date`
    , `Expire_date`, `Salary(Euro)`) 
    VALUES ('" . $_POST["Add_contract_Nid"] . "','" . $_POST["Add_contract_ID"] . "'
    ,'" . $_POST["Add_contract_Cn"] . "','" . $_POST["Add_contract_sd"] . "'
    ,'" . $_POST["Add_contract_ed"] . "','" . $_POST["Add_contract_Salary"] . "')";
      $Addcontract = $conn->query($que);
      if ($Addcontract) {
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
            title: 'พบข้อมูล Number ID / Player ID ในระบบสัญญาซ้ำ',
            text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ แก้ไขข้อมูล!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
        //    echo " Duplicate Number ID in contract";
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบผู้เล่น ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
    //  echo " no id in player";
    }
  } else if (isset($_POST["Edit_contract_Nid"])) {
    $temp = $conn->prepare("SELECT Number from contract where Number = ?");
    $temp->bind_param("i", $_POST["Edit_contract_Nid"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `contract` SET `Clubname`='" . $_POST["Edit_contract_Cn"] . "',`Start_date`='" . $_POST["Edit_contract_sd"] . "',
   `Expire_date`='" . $_POST["Edit_contract_ed"] . "',`Salary(Euro)`='" . $_POST["Edit_contract_Salary"] . "'
    WHERE Number = '" . $_POST["Edit_contract_Nid"] . "'";
      $Editcontract = $conn->query($que);
      if ($Editcontract) {
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
        //echo "Can't query sucessful ... something went wrong";
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล Number ID ในระบบสัญญา',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
      //echo " NO Number Id contract in player";
    }
  } else if (isset($_POST["Add_tran_ID"])) {
    $temp = $conn->prepare("SELECT Id from player where Id = ?");
    $temp->bind_param("i", $_POST["Add_tran_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "INSERT INTO `transfer`(`Player_id`, `Clubname`, `Value`) 
  VALUES ('" . $_POST["Add_tran_ID"] . "','" . $_POST["Add_tran_Cn"] . "','" . $_POST["Add_tran_Value"] . "')";
      $Addtran = $conn->query($que);
      if ($Addtran) {
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
            title: 'พบข้อมูล ID ในระบบการซื้อขายซ้ำ',
            text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ แก้ไขข้อมูล!',

          }).then(function() {
            window.history.back();
          })
        </script>


      <?php
       // echo "Player Id in transfer duplicate";
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบผู้เล่น ',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
      //echo "NO ID in player";
    }
  } else if (isset($_POST["Edit_tran_ID"])) {
    $temp = $conn->prepare("SELECT Player_id from transfer where Player_id = ?");
    $temp->bind_param("i", $_POST["Edit_tran_ID"]);
    $temp->execute();
    $temp1 = $temp->get_result();
    $queryid = $temp1->fetch_assoc();
    if ($temp1->num_rows > 0) {
      $que = "UPDATE `transfer` SET 
    `Clubname`='" . $_POST["Edit_tran_Cn"] . "',
    `Value`='" . $_POST["Edit_tran_Value"] . "'
     WHERE Player_id = '" . $_POST["Edit_tran_ID"] . "' ";
      $Edittran = $conn->query($que);
      if ($Edittran) {
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
        //echo "Can't query sucessful ... something went wrong";
      }
    } else {
      ?>
      <script>
        Swal.fire({
          type: 'error',
          title: 'ไม่พบข้อมูล ID ในระบบซื้อขาย',
          text: 'โปรดตรวจสอบข้อมูลอีกครั้ง หรือ เพิ่มข้อมูล!',

        }).then(function() {
          window.history.back();
        })
      </script>


      <?php
     // echo " NO Player_id in transfer";
    }
  }
  ?>
</body>

</html>