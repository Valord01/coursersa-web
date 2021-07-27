<?php
    // Connect to MySQL
//    include("connect.php");

$username = "root";  // enter your username for mysql
$password = "";  // enter your password for mysql
$servername = "http://13546e9c679c.ngrok.io"; 


$conn = new mysqli($servername, $username, $password,"data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

    // Prepare the SQL statement
      date_default_timezone_set('Europe/Athens');
     $dateS = date('m/d/Y h:i:s', time());
    echo $dateS;
    //$SQL = "INSERT INTO data.datate (temparature,date,humidity,pressure) VALUES ('".$_GET["temp"]."','$dateS','".$_GET["hum"]."','".$_GET["pr"]."')";     
    $conn->query("INSERT INTO data.datate (temparature,date,humidity,pressure) VALUES ('".$_GET["temp"]."','$dateS','".$_GET["hum"]."','".$_GET["pr"]."')");
    // Execute SQL statement
    //mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: index.php");
?>

