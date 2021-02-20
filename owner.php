<!DOCTYPE html>
<head>
<style>
body{background-image:url(Assets/b.jpg);
     background-attachment:fixed;
     background-size:cover;
     background-position:center; }
    </style>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="./css/index.css"/>
</head>
<body>
    <form class="form" method="post" action="./driver/owner-check.php">
        <h1 class="login-title">Register As A Driver</h1>
        <input type="text" class="login-input" name="name" placeholder="User Name" required />
        <input type="number" class="login-input" name="phone" placeholder="Contact Number">
        <input type="text" class="login-input" name="city" placeholder="City">
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" required/>
        <input type="submit" id="button" value="Register" class="login-button">
        <p class="link"><a href="index.php" style="color:white">Click to Login</a></p>
    </form>
    <script src="./js/validation.js"></script>
</body>
</html>