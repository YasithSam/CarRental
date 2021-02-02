<?php
    session_start();
    require('../db/connection.php');
    $id=$_POST['del'];
    $query = "DELETE FROM users WHERE id=$id"; 
    $query2 = "DELETE FROM booking WHERE id=$id"; 
    $result = mysqli_query($con,$query);
    $result2 = mysqli_query($con,$query2);

    
  
?>