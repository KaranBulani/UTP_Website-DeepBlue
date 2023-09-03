<?php

    $dataPoints = array();
    /*
        array("y" => 3373.64, "label" => "Germany" ),
        array("y" => 2435.94, "label" => "France" ),
        array("y" => 1842.55, "label" => "China" ),
        array("y" => 1828.55, "label" => "Russia" ),
        array("y" => 1039.99, "label" => "Switzerland" ),
        array("y" => 765.215, "label" => "Japan" ),
        array("y" => 612.453, "label" => "Netherlands" )
    );
    */
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
$sql="SELECT card_no,SUM(daily_incentives) as'total_incentives' FROM `incentive_logs` group by card_no";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result))
{
    array_push($dataPoints, array("y" =>$row['total_incentives'] , "label" => $row['card_no']));
}

    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "Total Incentives"
        },
        axisY: {
            title: "Incentives Given"
        },
		axisX:{
		title: "User Card Numbers"},
        data: [{
            type: "column",
            yValueFormatString: "#,##0.## ",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();

    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 90%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>
