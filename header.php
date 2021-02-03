<?php
include ('./db/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){

 ?>


    <div class="nav-container">
                <nav class="navbar">
                    <h1 id="navbar-logo">Hire Me</h1>
                    <div class="menu-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="./index.php" class="nav-links">Home</a></li>
                        <li><a href="./home.php" class="nav-links">Car Listings</a></li>
                        <li><a href="./aboutus.php" class="nav-links">About Us</a></li>
                        <li><a href="./login.php" class="nav-links nav-links-btn">Log In</a></li>
                        <li><a href="./profile.php" class="nav-links nav-links-btn">My Profile</a></li>
                    </ul>
                </nav>
    </div>  

<?php
}else{
?>
    <div class="nav-container">
                <nav class="navbar">
                    <h1 id="navbar-logo">Hire Me</h1>
                    <div class="menu-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="./index.php" class="nav-links">Home</a></li>
                        <li><a href="./home.php" class="nav-links">Car Listings</a></li>
                        <li><a href="./aboutus.php" class="nav-links">About Us</a></li>
                        <li><a href="./login.php" class="nav-links nav-links-btn">Log In</a></li>
                    </ul>
                </nav>
    </div>
<?php      
}
?>