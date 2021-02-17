<?php 
include "../db/connection.php";

  if (isset($_POST['password'])
  && isset($_POST['name']) && isset($_POST['city'])&& isset($_POST['phone'])&& isset($_POST['confirm_password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $uname = validate($_POST['name']);
     $pass = validate($_POST['password']); 
     $re_pass = validate($_POST['confirm_password']);
     $contact= validate($_POST['phone']);
     $city= validate($_POST['city']);

     
     if($pass !== $re_pass){
        header("Location: ../owner.php?error=The confirmation password  does not match");
	    exit();
	}
     $pass = md5($pass);

	    $sql = "SELECT * FROM driver WHERE user_name='$uname' ";
        $sql2 = "SELECT * FROM user WHERE user_name='$uname' ";
		$result = mysqli_query($con, $sql);
        $result2 = mysqli_query($con, $sql2);

		if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2)>0) {
			header("Location: ../owner.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO driver(user_name, password,city,contact_no,role) VALUES('$uname', '$pass','$city','$contact','owner')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
                $sql_query="Select * from driver order by id desc limit 1;";
                $result2 = mysqli_query($con,$sql_query);
                $row2 = mysqli_fetch_assoc($result2);
                $x=$row2['id'];
                header("Location: ./owner-vehicle.php?id=$x");
                echo("success");
                exit();
                
	        
           }else {
	           	header("Location: ../owner.php?error=unknown error occurred");
		        exit();
           }
		}


    }else{
        header("Location: ../owner.php");
        exit();
    }


?>  