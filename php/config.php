<?php
  $hostname = "localhost";
  $username = "id16946045_cnweb";
  $password = "Ye1_wij0PA{LD3Ot";
  $dbname = "id16946045_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
