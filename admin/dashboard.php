<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>
<link rel="stylesheet" href="../css/style.css"/>


<?php 
include('../db/connection.php');
session_start();

if (isset($_SESSION['user_name']) && $_SESSION['type'] ==='admin') {

?> 
<body>
        
        <div class="app-viewport inspect_">
            
            <!-- 
            ---- App Header 
            --->
            
           <?php include ('../includes/common.php');?>
            
            <!-- 
            ---- App Content 
            --->
            <div class="container-fluid">
              <h1 style="margin: 30px 0px 20px 10px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Admin Panel</h1>
              <hr class="hr-1">
              <div class="row" style="margin: 50px 10px 0px 5px;">
               
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM users";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Registered Users</p>
                            <button class="btn card_btn" onclick="location.href='./users.php'">Read More</button>
                       
                  </div>    
                </div>

                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM Brand";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Vehicle Types</p>
                            <button class="btn card_btn" onclick="location.href='./brands.php'">Read More</button>
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Registered Vehicles</p>
                            <button class="btn card_btn" onclick="location.href='./vehicles.php'">Read More</button>
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM booking";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Bookings</p>
                            <button class="btn card_btn" onclick="location.href='./bookings.php'">Read More</button>
                       
                  </div>    
                </div>
             </div>
            </div> 
            
            <!-- 
            ---- App Sidebar
            --->
            <?php include('../includes/nav.php');?>
        </div>

       

</body>
</html>
<?php
}
else{
  header("Location: ../index.php");
}

