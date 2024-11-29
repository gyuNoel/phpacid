<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbase = "student";

  $conn = new mysqli($servername, $username, $password, $dbase);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "connected.";
?>