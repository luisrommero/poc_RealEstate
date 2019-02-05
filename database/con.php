<?php

function connectionBD() {
  $servername = "localhost";
  $username = "root";
  $password = "woodstock'94";
  $database = "eos_poc_real_estate";

  // Create connection
  // $conn = new mysqli($servername, $username, $password, $database);
  $con = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  // echo $conn->num_rows;
  return $con;
}
