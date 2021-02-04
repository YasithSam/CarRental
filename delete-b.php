<?php
    session_start();
    require('./db/connection.php');
    $id=$_POST['del'];
    $sql3="update vehicles set status='0' where id=$v_id";
    $result3 = mysqli_query($con, $sql3);
    $query = "DELETE FROM booking WHERE id=$id"; 
    $result = mysqli_query($con,$query);
    echo"Successfully deleted record";
    header("Location: profile.php");
  
?>