<?php
    session_start();
    require('../../db/connection.php');
    $id=$_REQUEST['id']; 
    $query = "DELETE FROM users WHERE id=$id"; 
    $query2 = "DELETE FROM booking WHERE owner_id=$id"; 
    $result2 = mysqli_query($con,$query2);
    $result = mysqli_query($con,$query);
    header("Location: ../users.php");
 

    
  
?>