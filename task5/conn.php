<?php

$con = mysqli_connect("localhost","root","demoroot","studentsDB");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
