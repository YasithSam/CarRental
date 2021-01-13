<?php
  require ('./functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./style.css" ></link>
	<link rel="stylesheet" href="./css/login.css" ></link>
</head>
<body>
	<div class="box">
		<div class="form sign-in">
		  <h2>Sign In</h2>
		  <label>
			<span>Email Address</span>
			<input type="email" name="email">
		  </label>
		  <label>
			<span>Password</span>
			<input type="password" name="password">
		  </label>
		  <button class="submit" type="button">Sign In</button>
		  <p class="forgot-pass">Forgot Password ?</p>
	
		</div>
	
		<div class="sub-cont">
		  <div class="img">
			<div class="img-text m-up">
			  <h2>New here?</h2>
			  <p>Sign up and be a member!</p>
			</div>
			<div class="img-text m-in">
			  <h2>One of us?</h2>
			  <p>If you already has an account, sign in.</p>
			</div>
			<div class="img-btn">
			  <span class="m-up">Sign Up</span>
			  <span class="m-in">Sign In</span>
			</div>
		  </div>
		  <div class="form sign-up">
			<h2>Sign Up</h2>
			<label>
			  <span>Name</span>
			  <input type="text">
			</label>
			<label>
			  <span>Email</span>
			  <input type="email">
			</label>
			<label>
				<span>Contact</span>
				<input type="number">
			</label>
			<label>
				<span>Date of Birth</span>
				<input type="date">
			</label>
			<label>
				<span>City</span>
				<input type="text">
			</label>
			<label>
			  <span>Password</span>
			  <input type="password">
			</label>
			<label>
			  <span>Confirm Password</span>
			  <input type="password">
			</label>
			<button type="button" class="submit">Sign Up Now</button>
		  </div>
		</div>
	  </div>
	<script type="text/javascript" src="./js/login.js"></script>

</body>
</html>