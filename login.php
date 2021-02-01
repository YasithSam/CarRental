<!DOCTYPE html>
<html>
<head>
<style>
body{background-image:url(b.jpg);
     background-attachment:fixed;
     background-size:cover;
     background-position:center; }
    </style>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css"/>
</head>
<body>
    <form class="form" method="post" name="login" action="login-check.php">
        <h1 class="login-title">Login</h1>
       <label> <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/> </label>    
       <label> <input type="password" class="login-input" name="password" placeholder="Password"/>  </label>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Not a member?</a></p>
  </form>
</body>
</html>