<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="AdminView.php">Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

          <ul class="nav navbar-nav">
            <li><a href="RegisterUser.php">Register</a></li>
            <li><a href="cisu.php">Register Admin</a></li>
            <li><a href="view.php">See Activity</a></li>
            <!-- <li><a href="EditUser.php">Edit</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
            <!-- <li><a href="#">Link</a></li> -->
          </ul>

        <!-- /.navbar-collapse -->


      </div><!-- /.container-fluid -->
    </nav>


  </body>
</html>
