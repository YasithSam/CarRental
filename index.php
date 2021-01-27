<?php
  include('./php/verticalC.php');
  include('./functions.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="./css/index.css">
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

</style>
</head>
<body>
<?php include('./header.php');?>
<!--
<div class=body>
    <img class="bg" src="Assets/2440.jpg">
</div>
-->

<div class="slider">
    <div class="slide">
    	<img src="Assets/night.jpg" />
	</div>

    <div class="slide">
        <img src="Assets/night.jpg" />
	</div>

    <div class="slide">
        <img src="Assets/night.jpg" />
	</div>

  	<div class="slide">
        <img src="Assets/night.jpg" />
	</div>

  	<div class="slide">
        <img src="Assets/night.jpg" />
    </div>

      <!-- buttons -->
      <a class="prev">&#10094;</a>
      <a class="next">&#10095;</a>
</div>


<br /><br /><br />
<div class="description">
    <h1> <span>Find the Best</span> CarForYou</h1>
    <p> Find the perfect car for your ride from our amazing collection. 
        There's a car for every need, be it a wedding, airport drop or a family trip, 
        we have you covered. Ring us today to reserve your vehicle..</p>
	<ul class="cards">	
	<?php    
			$sql = "SELECT vehicle_title,vehicles_overview,vimage1 FROM vehicles order by rating DESC limit 3";
			$result = $con->query($sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
						verticalC($row['vehicle_title'],$row['vehicles_overview'],$row['vimage1']);
				}
			}
			else{
				echo "<h5>No Vehicles</h5>";
			
			}
		
		?>	
</div>
<div class="background">
  <div class="transbox">
	<p>What We Have</p>
  </div>
  <?php include('./php/brandsList.php')?>
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
const images = document.querySelectorAll(".slide"),
  next = document.querySelector(".next"),
  prev = document.querySelector(".prev");

let current = 0;

function changeImage() {
  images.forEach(img => {
    img.classList.remove("show");
    img.style.display = "none";
  });

  images[current].classList.add("show");
  images[current].style.display = "block";
}

// Calling first time
changeImage();

next.addEventListener("click", function() {
  current++;

  if (current > images.length - 1) {
    current = 0;
  } else if (current < 0) {
    current = images.length - 1;
  }

  changeImage();
});
prev.addEventListener("click", function() {
  current--;

  if (current > images.length - 1) {
    current = 0;
  } else if (current < 0) {
    current = images.length - 1;
  }

  changeImage();
});

// Auto change in 5 seconds

setInterval(() => {
  next.click();
}, 5000);

</script>




