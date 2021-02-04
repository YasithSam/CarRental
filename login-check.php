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
		
		$sql3 = "SELECT * FROM admins WHERE user_name='$uname' AND password='$pass'";
		$result3 = mysqli_query($con, $sql3);
		$row3 = mysqli_fetch_assoc($result3);
        if($row3['user_name'] === $uname && $row3['password']==$pass){
			$_SESSION['user_name']=$row3['user_name'];
			$_SESSION['type']='admin';
			header("Location: admin/dashboard.php");
			exit();
		}
      
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
            	header("Location: home.php");
		        exit();
			}else if($row2['user_name'] === $uname && $row2['password'] === $pass && $row2['role']==='owner'){
					$_SESSION['user_name'] = $row2['user_name'];				
					$_SESSION['id'] = $row2['id'];
					$_SESSION['type'] = $row2['role'];
					header("Location: home.php");
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