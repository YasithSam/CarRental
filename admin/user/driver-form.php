<!DOCTYPE html>
<html>
<head>
    
    <title>Add New Driver</title>
    <link rel="stylesheet" href="../../css/edit.css" />
</head>
    <body>

    <div>
    <form class="form" method="post" action="./driver-add.php">
        <h1 class="login-title">Register A New Driver</h1>
        <input type="text" class="login-input" name="name" placeholder="User Name" required />
        <input type="number" class="login-input" name="phone" placeholder="Contact Number">
        <input type="text" class="login-input" name="city" placeholder="City">
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" required/>
        <input type="submit" id="button" value="Register" class="login-button">
        <p class="link"><a href="login.php" style="color:white">Click to Login</a></p>
    </form>
    </div>
            
     
  
    </body>
</html>