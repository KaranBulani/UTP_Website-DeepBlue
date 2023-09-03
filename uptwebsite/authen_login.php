<?php
session_start();
require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['password'])){

// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM register WHERE email='$username' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
$_SESSION['user'] = $username;
header('Location:AdminView.php');
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";


}else{
	header('Location:login.php');
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";

}
}
?>
