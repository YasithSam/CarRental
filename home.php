<?php 
session_start();
require_once('./php/component.php');
require_once('./php/list.php');
require_once('./php/list-c.php');
include('./db/connection.php');
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./css/home.css"/>
     <link rel="stylesheet" href="./css/index.css"/>
     
<style>
.column {
  height: 100%;
  float: left;
}

.c20 {
	width: 30%;
	
}

.c80 {
     width: 70%;
     margin-top: 100px;	
}


</style>
</head>
<body>
<?php include("./header.php");?>  

<div class="about-head">
    <br /><br /><br />
    <h1>Search For Vehicles</h1>
    <h4>Car Listings</h4>
</div>

<br /><br />   

     <!-- <h4> Filter Cabs</h4>
     <h5> Vehicle types </h5>

     <!-- <?php
     //    $sql2="SELECT name from Brand";
     //    $result=$con->query($sql2);
     //    if(mysqli_num_rows($result)>0){
     //         while($row=mysqli_fetch_assoc($result)){
     //           componentl($row['name']);
     //         } 
     //    }

     ?> -->
     <!-- <h5> City </h5>
     <?php
     //    $sql2="SELECT city from vehicles";
     //    $result=$con->query($sql2);
     //    if(mysqli_num_rows($result)>0){
     //         while($row=mysqli_fetch_assoc($result)){
     //           componentc($row['city']);
     //         } 
     //    } -->

     ?> -->
<div class="column c20"> 
   <div class="row">  
     <form class="widget">
  
          <h3> Filter Vehicles</h3>
          
          <div class="select">
               <select aria-label="Select menu example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>
          </div>
          <div class="select">
               <select aria-label="Select menu example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>
          </div>
          <div class="select">
               <select aria-label="Select menu example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>

          </div>
     
          <input type="submit" id="button" value="Search" class="login-button">
  
     </form>
   </div>

</div>   
<div class="column c80">
  <div class="column">
     <?php    
          $sql = "SELECT vehicles.vehicle_title,Brand.name,vehicles.vehicles_overview,vehicles.price_per_km,vehicles.city,vehicles.vimage1 FROM vehicles,Brand where Brand.id=vehicles_brand";
          $result = $con->query($sql);
          if(mysqli_num_rows($result)>0){
               while ($row = mysqli_fetch_assoc($result)){
                    component($row['vehicle_title'],$row['name'],$row['vehicles_overview'],$row['price_per_km'],$row['city'],$row['vimage1']);
               }
          }
          else{
               echo "<h5>No Vehicles</h5>";
          
         }
     
     ?>	
   </div>
</div>  
    
 <?php include("./footer.php");?>      
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
?>