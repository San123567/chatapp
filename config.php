<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

 $conn = mysqli_connect("HOST", "USERNAME", "PASSWORD", "DATABASE_NAME");
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
