<?php
  include('./php/verticalC.php');
  include('./functions.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="./css/home.css">
	<link rel="stylesheet" href="./style.css"/>
	<link rel="stylesheet" href="./css/dashboard.css"/>
	<link rel="stylesheet" href="./css/verticalList.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div.background {
  background-image: url('./Assets/night.jpg');
  border: 2px solid black;
  height: 500px;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  font-size: 32px;
  color: #000000;
  margin-left: 40%;
  
}
.serviceBox{
	border-radius: 600px;
	background-color: red;
	opacity: 0.8;
}
.serviceBox .count{
   color: yellow;
}
.serviceBox .title{
  color: white;
}
body { 
    padding: 0;
    margin: 0;
}

</style>
</head>
<body>
<?php include('./header.php');?>
<!--
<div class=body>
    <img class="bg" src="Assets/2440.jpg">
</div>
-->

<div class="slideshow-container" style="width: 100%;">
  <div class="mySlides" style="width: 100%;">
      <img src="Assets/1.jpg" style="width: 100%;">
    <div class="text" style="text-align:left; margin-bottom:180px; margin-left:10px; font-size:30px;" ><i><b> "Clean cars. Flexible bookings.
      <br>Socially distant rental counters.
      <br>We’re working with our partners to
      <br> keep you safe and in the driving seat."</i></b></div>
  </div>
  <div class="mySlides" style="width: 100%; height:600px">
    
    <img src="Assets/2.jpg" style="width: 100%; height:600px;">
    <div class="text" style="text-align:right; margin-bottom:250px; margin-right:50px; font-size:30px;" ><i><b> "Business Vans for Corporate Needs, 
      <br>We have wide range of vehicles for:
      <br> Business Vans such as Nissan caravan, 
      <br>Toyata hiace, Vellfire & Alphard Executive lounge"</i></b></div>
  </div>
  <div class="mySlides" style="width: 100%;">
    
      <img src="Assets/3.jpg" style="width: 100%; height:600px"> 
      <div class="text" style="text-align:left; margin-bottom:400px; font-size:30px;" ><i><b> "Enjoy the efficient and specialized 
        <br>services of HireMe Rent a Car;
        <br>Sri Lanka's leading rent-a-car company."</i></b></div>
  </div>
</div>
<br />

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<br /><br /><br />
<div class="description">
  <h1> <span>Find the Best</span> CarForYou</h1>
  <p> Find the perfect car for your ride from our amazing collection. 
      There's a car for every need, be it a wedding, airport drop or a family trip, 
      we have you covered. Ring us today to reserve your vehicle..
  </p>
</div>
<div>
  <ul class="cards">
   <?php    
			$sql = "SELECT vehicle_title,rating,price_per_km,vimage1 FROM vehicles order by rating DESC limit 3";
			$result = $con->query($sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
						verticalC($row['vehicle_title'],$row['rating'],$row['price_per_km'],$row['vimage1']);
				}
			}
			else{
				echo "<h5>No Vehicles</h5>";
			
      }
    ?>   
  </ul>  
</div>
<div class="background">
  <div class="transbox">
	<p>What We Have</p>
  </div>
  <?php include('./php/brandsList.php')?>
</div> 


<div class="slideshow-containers">
    <br />
    <p class="head-container">User Feedbacks.</p>
  
  <div class="slide">
    <q>The booking and quote was completed with ease using the online application.</q>
    <p class="author">- Lisse Whliworth -</p>
  </div>

  <div class="slide">
    <q>Always fair and fast. Recommend it to everone.</q>
    <p class="author">- Fred jhonson -</p>
    </div>

  <div class="slide">
    <q>Always good service and greate price. Love the app!</q>
    <p class="author">- Graham Liewellyn-Berry -</p>
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<div class="dot-container">
  <span class="f_dot" onclick="currentSlide(1)"></span> 
  <span class="f_dot" onclick="currentSlide(2)"></span> 
  <span class="f_dot" onclick="currentSlide(3)"></span> 
</div>

<!-- Footer -->

<footer class="footer-distributed">
	<div class="footer-left">
		<h3>Hire<span>Me</span></h3>
        <p class="footer-links">
			<a href="#">Home</a>
			·
			<a href="#">Car Listing</a>
			·
			<a href="aboutus.php">About</a>
			·
			<a href="#">Contact</a>
		</p>
		<p class="footer-company-name">Hire me © 2015</p> <br />
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-google"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-yahoo"></i></a>
		</div>
	</div>

	<div class="footer-right">
		<p>Contact Us</p>
		<form action="#" method="post">
			<input type="text" name="email" placeholder="Email">
			<textarea name="message" placeholder="Message"></textarea>
			<button>Send</button>
		</form>

	</div>

</footer>

</body>
</html>


<script>

/* Slider script*/
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
    dots[i].className = dots[i].className.replace(" active_dot", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active_dot";
  setTimeout(showSlides, 7000); // Change image every 7 seconds
}


/*Lower slider*/
var slideIndex = 1;
showSlide(slideIndex);

function plusSlides(n) {
  showSlide(slideIndex += n);
}

function currentSlide(n) {
  showSlide(slideIndex = n);
}

function showSlide(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("f_dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
