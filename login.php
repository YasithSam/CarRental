<!DOCTYPE html>
<html>
<head>
<style>
body{background-image:url(Assets/b.jpg);
     background-attachment:fixed;
     background-size:cover;
     background-position:center; }
    </style>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css"/>
</head>
<body>
    <div class="header">
        <!--<img class="logo" src="Assets/4891.jpg" alt="CompanyLogo"> -->
        <a href="home.php">Hire<span>Me</span></a>
        <div class="header-right">
        </div>
    </div>
    <form class="form" method="post" name="login" action="login-check.php">
        <h1 class="login-title">Login</h1>
       <label> <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/> </label>    
       <label> <input type="password" class="login-input" name="password" placeholder="Password"/>  </label>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php" style="color:white;">Not a member?</a></p>
        
  </form>
</body>
</html>