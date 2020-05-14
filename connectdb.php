<?php
  session_start();

  //php chode
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "football_management";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
    die("Database can't connect");
  }
 // echo "connect";
?>