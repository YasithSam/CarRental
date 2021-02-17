<?php
  include('./components/verticalC.php');
  include('./db/connection.php');
  session_start();

?>


<!DOCTYPE html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="./css/home.css">
	<link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" href="./css/dashboard.css"/>
	<link rel="stylesheet" href="./css/verticalList.css">
    
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
<?php include('./includes/header.php');?>

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
  <div class="container-fluid">
              <div class="row" style="margin: 50px 10px 0px 5px;">
               
                <div class="column">
                  <div class="serviceBox">
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=1";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                             
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Cars</p>
                       
                  </div>    
                </div>

                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=2";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Vans</p>
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=3";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Motor-Bikes</p>
                            
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=4";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Tuk Tuk</p>
                           
                       
                  </div>    
                </div>
             </div>
</div> 
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
		<p class="footer-company-name">Hire me © 2021</p> <br />
	
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



</script>
