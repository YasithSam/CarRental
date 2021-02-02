<?php
include "./functions.php";
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
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
                header("Location: login.php?error=The username is taken try another");
                echo("Incorrect Password");
		        exit();
			}
		}else{
            header("Location: login.php?error=The username is taken try another");
            echo("Incorrect Username or passowrd");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>