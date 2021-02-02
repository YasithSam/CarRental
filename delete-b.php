<?php
    session_start();
    require('./db/connection.php');
    $id=$_POST['del'];
    $query = "DELETE FROM booking WHERE id=$id"; 
    $result = mysqli_query($con,$query);
    echo"Successfully deleted record";
    header("Location: profile.php");
  
?>