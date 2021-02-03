<?php 
include "./functions.php";

  if (isset($_POST['email']) && isset($_POST['password'])
  && isset($_POST['name']) && isset($_POST['confirm_password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $uname = validate($_POST['name']);
     $pass = validate($_POST['password']); 
     $re_pass = validate($_POST['confirm_password']);
     $email= validate($_POST['email']);
     $dob= validate($_POST['dob']);
     $contact= validate($_POST['phone']);
     $city= validate($_POST['city']);

     
     if($pass !== $re_pass){
        header("Location: registration.php?error=The confirmation password  does not match");
	    exit();
	}
     $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, email,contact_no,dob,city,role) VALUES('$uname', '$pass', '$email','$contact','$dob','$city','user')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
                header("Location: registration.php");
                echo("success");
                
	         exit();
           }else {
	           	header("Location: registration.php?error=unknown error occurred");
		        exit();
           }
		}


    }else{
        header("Location: registration.php");
        exit();
    }


?>  