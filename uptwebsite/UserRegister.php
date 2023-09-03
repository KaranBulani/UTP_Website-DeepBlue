<html lang="en" dir="ltr">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  width:auto;
  padding-left: 20%;
  padding-right: 20%;
      /* padding: 16px; */
  font-size:20px;
}

/* Clear floats */
.clearfix::after{
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.homepg
{
  background-image: url(homepage.jpg);
  color: white;
}
</style>
<body>

<form action="register_connect.php"  method="post" style="margin-bottom:0%;">
  <div class="homepg">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

  <label for="name"><b>Card Number</b></label>
    <input type="text" placeholder="Enter your name" name="name" required>

    <!-- <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required> -->

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="repassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repassword" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <a href="User.php" > <button type="button" class="cancelbtn">Cancel</button> </a>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  </div>
</form>
