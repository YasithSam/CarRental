<?php 
include "./functions.php";

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
     echo "<h1>sql2</h2>";
     $result2 = mysqli_query($con, $sql2);
     if ($result2) {
          header("Location: ./home.php");
          echo("success");
          exit();
     }else {
          
          exit();
     }
          
}
else{
    header("Location: registration.php?error=unknown error occurred");
}	


?>  