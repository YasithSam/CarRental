<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>
<link href='https://css.gg/menu-grid-o.css' rel='stylesheet'>
<link href='https://css.gg/community.css' rel='stylesheet'>
<link href='https://css.gg/pentagon-down.css' rel='stylesheet'>
<link href='https://css.gg/user.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
        <?php include('../db/connection.php');?> 
        <div class="app-viewport inspect_">
            
            <!-- 
            ---- App Header 
            --->
            
            <div class="app-header">
                <div class="app-branding">
                    <img src="../Assets/4891.jpg" width="50px;" height="50px;">
                    <h1 class="app-brand" style="padding-left: 5px;">Hire Me</h1>
                </div>
                <div class="app-nav">
                    <p>Navigation</p>
                </div>
            </div>
            
            <!-- 
            ---- App Content 
            --->
            <div class="container-fluid">
              <div class="row" style="margin: 100px 10px 0px 5px;">
               
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM users";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Registered Users</p>
                            <button class="btn card_btn">Read More</button>
                       
                  </div>    
                </div>

                <div class="column">
                    <div class="card">
                        <h3>Card 2</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                        <h3>Card 3</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
             </div>
            </div> 
            
            <!-- 
            ---- App Sidebar
            --->
            <div class="app-sidebar">

                <ul class="app-sidebar-menu">
                    <li class="active" id="item" style="padding-left: 25px;">
                        <a href="#dashboard">
                        <span class="gg-menu-grid-o" id="icon"></span>
                        <span class="list-a" style="padding-left: 5px;">Dashboard</span>
                        </a>
                    </li>
                    <li id="item" style="padding-left: 25px;">
                        <a href="#serverlogs">
                        <span class="gg-user" id="icon"></span>
                        <span class="list-a" style="padding-left: 8px;">Users</span>
                    </a>
                    </li>
                    <li id="item">
                        <a href="#payment">
                        <span class="gg-community" id="icon"></span>
                        <span class="list-a">Brands</span>
                    </a>
                    </li>
                    <li id="item">
                        <a href="#customers">
                        <span class="fas fa-car" id="icon"></span>
                        <span class="list-a">Vehicles</span>
                    </a>
                    </li>
                    <li id="item">
                        <a href="#serverlogs">
                        <span class="gg-pentagon-down" id="icon"></span>
                        <span class="list-a">Bookings</span>
                    </a>
                    </li>
                </ul>

            </div>
        </div>

</body>
</html>

