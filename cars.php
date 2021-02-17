<?php 
session_start();
require_once('./components/component.php');
require_once('./components/list.php');
require_once('./components/list-c.php');
include('./db/connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./css/cars.css"/>
     <link rel="stylesheet" href="./css/home.css"/>
     <link rel="stylesheet" href="./css/search.css"/>
</head>
<body>
<?php include("./includes/header.php");?>  

<div class="about-head">
    <br /><br /><br />
    <h1>Search For Vehicles</h1>
    <h4>Vehicle Listings</h4>
</div>

<br /><br />   

<?php include("./includes/search.php")?>
<?php include("./includes/vehicle.php")?>
 <?php include("./includes/footer.php");?>      
</body>
</html>
          
