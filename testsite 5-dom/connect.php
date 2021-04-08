<?php
$username = "root";  // enter your username for mysql
$password = "";  // enter your password for mysql
$servername = "localhost";      // this is usually "localhost" unless your database resides on a different server

//$dbh = mysqli_pconnect($MyHostname , $MyUsername, $MyPassword) or die("cannot connect");

$conn = new mysqli($servername, $username, $password,"data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

//$selected = mysql_select_db("data",$dbh) or die("cannot connect") ; //Enter your database name here 
?>
