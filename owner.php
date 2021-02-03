<!DOCTYPE html>
<html>
<head>
<style>
body{background-image:url(background.jpg);
     background-attachment:fixed;
     background-size:cover;
     background-position:center; }
    </style>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="./css/login.css"/>
</head>
<body>
    <form class="form" method="post" action="owner-check.php">
        <h1 class="login-title" style="color: black;">Register As A Driver</h1>
        <input type="text" class="login-input" name="name" placeholder="User Name" required />
        <input type="number" class="login-input" name="phone" placeholder="Contact Number">
        <input type="text" class="login-input" name="city" placeholder="City">
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" required/>
        <input type="submit" id="button" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>

</body>
</html>