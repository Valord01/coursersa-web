<?php 
    // Start MySQL Connection
    $username = "root";  // enter your username for mysql
$password = "";  // enter your password for mysql
$servername = "localhost";      // this is usually "localhost" unless your database resides on a different server

//$dbh = mysqli_pconnect($MyHostname , $MyUsername, $MyPassword) or die("cannot connect");

$conn = new mysqli($servername, $username, $password,"data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


?>

<html>
<head>
    <title>Raspberry Pi Weather Log</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

    <body>
        <h1>Raspberry Pi Weather Log</h1>


    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Temperature</td>
            <td class="table_titles">Humidity</td>
            <td class="table_titles">Pressure</td>
          </tr>
<?php

    
    // Retrieve all records and display them
  //  $result = mysqli_query("SELECT * FROM data ORDER BY id DESC");
    //$result=  $conn->query("SELECT * FROM data ORDER BY id DESC");
    // Used for row color toggle
    $result = $conn->query("SELECT * FROM datate ORDER BY id DESC");
    $oddrow = true;

    // process every record
    while( $row = $result->fetch_array() )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["date"].'</td>';
        echo '   <td'.$css_class.'>'.$row["temparature"].'</td>';
        echo '   <td'.$css_class.'>'.$row["humidity"].'</td>';
        echo '   <td'.$css_class.'>'.$row["pressure"].'</td>';
        echo '</tr>';
    }
?>
    </table>
    </body>
</html>