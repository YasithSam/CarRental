<?php
session_start();
require_once('./components/component.php');
require_once('./components/list.php');
require_once('./components/list-c.php');
include('./db/connection.php');
$brand=$_REQUEST['brand'];

$city=$_REQUEST['city'];
$status=$_REQUEST['status'];


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  
    ?>
   <!DOCTYPE html>
   <html>
   <head>
       <title>HOME</title>
        <link rel="stylesheet" href="./css/home.css"/>
        <link rel="stylesheet" href="./css/cars.css"/>
        <link rel="stylesheet" href="./css/search.css"/>
   </head>
   <body>
   <?php include("./includes/header.php");?>  
   
   <div class="about-head">
       <br /><br /><br />
       <h1>Search For Vehicles</h1>
       <h4>Car Listings</h4>
   </div>
   
   <br /><br />   
   
<?php include("./includes/search.php")?>
<div class="column c80">
   <div class="column">
     <?php          
          
          $sql = "SELECT vehicles.vehicle_title,vehicles.owner_id,vehicles.id,Brand.name,vehicles.seats,vehicles.rating,vehicles.status,vehicles.price_per_km,vehicles.city,vehicles.vimage1 FROM vehicles,Brand where Brand.id=vehicles_brand and Brand.name='$brand' and vehicles.city='$city'";
          $result = $con->query($sql);
          if(mysqli_num_rows($result)>0){
               while ($row = mysqli_fetch_assoc($result)){
                    component($row['owner_id'],$row['id'],$row['vehicle_title'],$row['name'],$row['seats'],$row['rating'],$row['status'],$row['price_per_km'],$row['city'],$row['vimage1']);
               }
          }
          else{
               echo "<h5>No Vehicles</h5>";
          
         }
     



         
     ?>	
   </div>
</div>  
       
    <?php include("./includes/footer.php");?>      
   </body>
   </html>
   
<?php 
}else{
        header("Location: index.php");
        exit();
}
?>