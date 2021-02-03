<?php 
session_start();
require_once('./php/component.php');
require_once('./php/list.php');
require_once('./php/list-c.php');
include('./db/connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./css/home.css"/>
     <link rel="stylesheet" href="./css/index.css"/>
     <link rel="stylesheet" href="./css/search.css"/>
</head>
<body>
<?php include("./header.php");?>  

<div class="about-head">
    <br /><br /><br />
    <h1>Search For Vehicles</h1>
    <h4>Car Listings</h4>
</div>

<br /><br />   

<?php include("./search.php")?>
<?php include("./vehicle.php")?>
 <?php include("./footer.php");?>      
</body>
</html>
          
