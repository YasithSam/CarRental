<?php 
include "../db/connection.php";

if (isset($_POST['title']) && isset($_POST['date'])
  && isset($_POST['dateFrom']) && isset($_POST['ow_id']) && isset($_POST['u_id'])&& isset($_POST['dateTo'])) {
    
 
     $o_id = $_POST['ow_id'];
     $u_id = $_POST['u_id'];
     $title = $_POST['title']; 
     $day = $_POST['date'];
     $from= $_POST['dateFrom'];
     $to= $_POST['dateTo'];
     $query="Select id from vehicles where vehicle_title='$title'";
     $result = $con->query($query);
     $row = $result->fetch_assoc();
     $v_id= $row['id'];
     $sql2 = "INSERT INTO booking(car_id, user_id, owner_id,start,end,day) VALUES('$v_id', '$u_id', '$o_id','$from','$to','$day')";
   
     $result2 = mysqli_query($con, $sql2);

     $sql3="update vehicles set status='0' where id=$v_id";
     $result3 = mysqli_query($con, $sql3);
     if ($result2 && $result3) {
          header("Location: ../cars.php");
          echo("success");
          exit();
     }else {
          
          exit();
     }
          
}
else{
    header("Location: ../registration.php?error=unknown error occurred");
}	


?>  