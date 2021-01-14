<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="./css/login.css"/>
</head>
<body>
    <form class="form" method="post" action="registration-check.php">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="User Name" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required/>
        <input type="date" class="login-input" name="dob" placeholder="Date of Birth">
        <input type="number" class="login-input" name="phone" placeholder="Contact Number">
        <input type="text" class="login-input" name="city" placeholder="City">
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" required/>
        <input type="submit" id="button" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>

</body>
</html>