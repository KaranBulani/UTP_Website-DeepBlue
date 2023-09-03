<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminView</title>

</head>
  <body>
    <div class="container">

      <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="sqlchart1.php" allowfullscreen></iframe>
        </div>


      <a class="btn btn-primary" href="view_incentive_logs.php" >view_incentive_logs</a>
      <a class="btn btn-primary" href="view_incentive_table.php" >view_incentive_table</a>
      <a class="btn btn-primary" href="view_registered_admins.php">view_registered_admins</a>
      <a class="btn btn-primary" href="view_registered_users.php">view_registered_users</a>
    </div>



  </body>
</html>
