<?php
    session_start();
    require('../db/connection.php');
    $id=$_REQUEST['id'];
    $query = "DELETE FROM vehicles WHERE id='".$id."'"; 
    $result = mysqli_query($con,$query);
    //header("Location: vehicles.php");
  
?>