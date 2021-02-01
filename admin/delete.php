<?php
    session_start();
    require('../db/connection.php');
    $id=$_POST['del'];
    $query = "DELETE FROM user WHERE id=$id"; 
    $result = mysqli_query($con,$query);
    echo"Successfully deleted record";
  
?>