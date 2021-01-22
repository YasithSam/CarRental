<?php 
session_start();
require_once('./php/component.php');
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./style.css"/>
     <link rel="stylesheet" href="./css/home.css"/>
</head>
<body>
<div class="row">
 <?php    
  component();
  component();
  component();
  ?>	
</div>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>