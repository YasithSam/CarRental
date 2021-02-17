<?php
    session_start();
    require('../../db/connection.php');
    $id=$_REQUEST['id']; 
    $query = "DELETE FROM driver WHERE id=$id"; 
    $query2 = "DELETE FROM vehicles WHERE owner_id=$id";
    $query3 = "DELETE FROM booking WHERE owner_id=$id";
    $result3 = mysqli_query($con,$query3); 
    $result2 = mysqli_query($con,$query2);
    $result = mysqli_query($con,$query);
    header("Location: ../drivers.php");
    
  
?>