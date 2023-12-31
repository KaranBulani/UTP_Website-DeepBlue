<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="7">
</head>
<body>
<style>
#register_user_table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#register_user_table td, #register_user_table th {
    border: 1px solid #ddd;
    padding: 8px;
}

#register_user_table tr:nth-child(even){background-color: #f2f2f2;}

#register_user_table tr:hover {background-color: #ddd;}

#register_user_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: gray;
    color: white;
}
</style>

<?php
    include 'navbar.php';
    //Connect to database and create table
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
    $sql = "SELECT * FROM registeruser ORDER BY full_name ASC";
    if ($result=mysqli_query($conn,$sql))
    {
      // Fetch one and one row
      echo "<TABLE id='register_user_table'>";
      echo "<TR><TH>Full Name</TH><TH>Mobile No</TH><TH>Address</TH><TH>Card No</TH><TH>Ardhar No</TH></TR>";
      while ($row=mysqli_fetch_row($result))
      {
        echo "<TR>";
        echo "<TD>".$row[0]."</TD>";
        echo "<TD>".$row[1]."</TD>";
        echo "<TD>".$row[2]."</TD>";
        echo "<TD>".$row[3]."</TD>";
        echo "<TD>".$row[4]."</TD>";
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
