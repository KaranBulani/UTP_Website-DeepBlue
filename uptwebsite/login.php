<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
html{
  margin: 0;
  padding: 0;
 }
body {
  margin: 0;
   padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}
form {border: 0px solid #f1f1f1;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
img.avatar {
    width: auto;
	  height: auto;
    border-radius: 10%;
}
.container {

  width: 25%;
    padding-left: 35%;
    padding-right: 25%;
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.homepg
{
  /*width: 0;
  padding: 0;*/
	background-image: url(homepage.jpg);
	color: white;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>



<form action="authen_login.php" method="post">

<div class="homepg">
<h2 align="center">Please login to continue</h2>
<!-- <a href="cisu.php" class="button">New User? Sign Up Now!</a> -->

  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit"name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br><br>
  <a href="tremblingfootsteps.php" > <button type="button" class="cancelbtn">Cancel</button> </a>
  </div>
  </div>
</form>


</body>
</html>
