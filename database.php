<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Something went wrong;".$conn->connect_error);
}
  echo"";
?>




