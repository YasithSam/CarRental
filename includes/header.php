<?php


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
                        <li><a href="./home.php" class="nav-links">Home</a></li>
                        <li><a href="./cars.php" class="nav-links">VehicleListings</a></li>
                        <li><a href="./aboutus.php" class="nav-links">AboutUs</a></li>
                        <li><a href="./help.php" class="nav-links">Help</a></li>
                        <li><a href="./profile.php" class="nav-links nav-links-btn">MyProfile</a></li>
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
                        <li><a href="./home.php" class="nav-links">Home</a></li>
                        <li><a href="./cars.php" class="nav-links">VehicleListings</a></li>
                        <li><a href="./aboutus.php" class="nav-links">AboutUs</a></li>
                        <li><a href="./help.php" class="nav-links">Help</a></li>
                        <li><a href="./index.php" class="nav-links nav-links-btn">LogIn</a></li>
                    </ul>
                </nav>
    </div>
<?php      
}
?>