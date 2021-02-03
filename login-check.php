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
        
        if($uname === 'admin' && $pass === 'admin@123'){
			header("Location: admin/dashboard.php");
			$_SESSION['user_name']='admin';
			exit();
		}
        $pass = md5($pass);
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
		$result = mysqli_query($con, $sql);
		$sql2 = "SELECT * FROM driver WHERE user_name='$uname' AND password='$pass'";
        $result2=mysqli_query($con, $sql2);

		if (mysqli_num_rows($result) === 1 || mysqli_num_rows($result2) === 1) {
			$row = mysqli_fetch_assoc($result);
			$row2 = mysqli_fetch_assoc($result2);
            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['role']==='user') {
            	$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['type'] = $row['role'];
            	header("Location: index.php");
		        exit();
			}else if($row2['user_name'] === $uname && $row2['password'] === $pass && $row2['role']==='owner'){
					$_SESSION['user_name'] = $row2['user_name'];				
					$_SESSION['id'] = $row2['id'];
					$_SESSION['type'] = $row2['role'];
					header("Location: index.php");
					exit();
			 }
			 else{
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