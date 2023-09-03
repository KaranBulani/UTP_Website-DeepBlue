<html>
<head>
<meta http-equiv="refresh" content="7">
</head>
<body>
<style>
#incentive-logs_table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#incentive-logs_table td, #incentive-logs_table th {
    border: 1px solid #ddd;
    padding: 8px;
}

#incentive-logs_table tr:nth-child(even){background-color: #f2f2f2;}

#incentive-logs_table tr:hover {background-color: #ddd;}

#incentive-logs_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: gray;
    color: white;
}
</style>

<?php
    //Connect to database and create table
    include 'navbar.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
        echo "<a href='install.php'>If first time running click here to install database</a>";
    }
?>


<div id="cards" class="cards">

<?php
    $sql = "SELECT * FROM `incentive_logs` WHERE date IS NOT NULL ORDER BY time DESC ";
  //$sql = "SELECT * FROM incentive_logs WHERE date IS NOT NULL ORDER BY timestamp DESC";
    $result=mysqli_query($conn, $sql);

    if ($result)
    {
      // echo "string";

      // Fetch one and one row
      echo "<TABLE id='incentive-logs_table'>";
      echo "<TR><TH>Card No.</TH><TH>Incentive</TH><TH>Time Stamp</TH><TH>Time</TH></TR>";
      while ($row=mysqli_fetch_row($result))
      {
        echo "<TR>";
        echo "<TD>".$row[0]."</TD>";
        echo "<TD>".$row[1]."</TD>";
        echo "<TD>".$row[2]."</TD>";
        echo "<TD>".$row[3]."</TD>";
        //echo "<TD>".$row[4]."</TD>";
        //echo "<TD>".$row[5]."</TD>";
        echo "</TR>";
      }
      echo "</TABLE>";
      // Free result set
      mysqli_free_result($result);
    }

    mysqli_close($conn);
?>
</body>
</html>
