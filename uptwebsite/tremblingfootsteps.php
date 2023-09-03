<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: sans-serif;
    margin: 0;
}

/* Style the header */
.header {

    padding: 30px;
    text-align: center;
	background-image: url(headerkliye.jpg) ;
	background-size:100% 100%;
    color: black;


}

/* Increase the font size of the h1 element */
.header h1 {
    font-size: 40px;
}




.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 27px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 27px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;

    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
	color: black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;

}

.dropdown:hover .dropdown-content {
    display: block;
}
/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}


/* Column container */
.row {
    display: flex;
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    flex: 30%;
	background-image: url(column.jpg);
    background-repeat: repeat-y;
	padding: 20px;
	color: white;
}

/* Main column */
.main {
    flex: 70%;
    background-image: url(mainkliye.jpg);
    padding: 20px;
}



div.relative {
    position: relative;
    left: 450px;
	bottom: 20px;

}

div.ex1 {
    background-color: black;
    width: 100%;
    height: 25%;
    overflow: scroll;
}

.vertical-menu {
    width: 100%;
	color: white;
}

.vertical-menu a {
    background-color: #333;
    color: white;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
       background-color: #ddd;
       color: black;
}

.vertical-menu a.active {
    background-color: black;
    color: white;
}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.container {
    position: relative;
}

.bottomleft {
    position: absolute;
    bottom: 8px;
    left: 16px;
    font-size: 53px;
	color: white;
}


.image{
position: relative;
	left: 10px;
	bottom: 70px;
border-radius: 50%;
width: 60px;
height: 60px;
}
</style>
</head>

<body>
<div class="header">

  <h1>Developing India !</h1>
  <h3>"Become a civilized citizen today." </h3>

</div>

<div class="navbar">
   <div class="dropdown">

    <button class="dropbtn">menu
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

      <a href="#">join sic</a>
	  <a href="#">contribute</a>
	  <a href="#">contact us</a>
    </div>
	</div>

	<div class="dropdown">
	<button class="dropbtn">authors
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">somesh sidhwani</a>
      <a href="#">karan bulani</a>

    </div>
	</div>
	<a href="#">about us</a>
	<a href="User.php" class="right">User</a>
	<a href="login.php" class="right">sign in</a>

  </div>




<div class="row">
  <div class="side">
		<div class="ex1">
      <h3 align="center">you make us proud</h3>

	  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="1.jpg" style="width:100%" height="270px">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="2.jpg" style="width:100%" height="270px">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="3.jpg" style="width:100%" height="270px">

</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="4.jpg" style="width:100%" height="270px">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<br>

<p> Here are some of the proud citizens of our nation.
More than 1500 responsible citizens of India have registered themselves for the Smart Toilets movement of India. <br>
When are you going to enroll? </p>

</div>




</div>

  <div class="main">
      <h2>SMART TOILETS</h2>

	<div class="container">
	<a href ="#"> <img src= "b1.jpg" width= "100%" height = "550px"> </a>
	<div class="bottomleft">RFID ENABLED PUBLIC TOILETS</div>
	</div>

	<div class="container">
	<a href ="#"> <img src= "b5.jpg" width= "100%" height = "550px"> </a>
	<div class="bottomleft">SMART INDIA BETTER INDIA</div>
	</div>

	<div class="container">
	<a href ="#"> <img src= "b4.jpg" width= "100%" height = "550px"> </a>
	<div class="bottomleft">SMART INDIA BETTER INDIA</div>
	</div>













  </div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<a href="#"><img src="facebook.jpg" class="image" ></a>
<a href="#"><img src="twitter.png" class="image"></a>
<a href="#"><img src="instagram.png" class="image" ></a>




</body>

</html>
