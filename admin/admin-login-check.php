<?php
include "../functions.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: home.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: home.php?error=Password is required");
	    exit();
	}else{
		       
		$sql = "SELECT * FROM admins WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	header("Location: dashboard.php");
		        exit();
            }else{
                header("Location: admin-login.php?error=Invalid passowrd");
                echo("Incorrect Password");
		        exit();
			}
		}
		else{
            header("Location: admin-login.php?error=The username is taken try another");
            echo("Incorrect Username or passowrd");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>