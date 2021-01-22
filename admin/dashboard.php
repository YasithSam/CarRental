<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>
<link href='https://css.gg/menu-grid-o.css' rel='stylesheet'>
<link href='https://css.gg/community.css' rel='stylesheet'>
<link href='https://css.gg/pentagon-down.css' rel='stylesheet'>
<link href='https://css.gg/user.css' rel='stylesheet'>
<link rel="stylesheet" href="../style.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
        <?php include('../db/connection.php');?> 
        <div class="app-viewport inspect_">
            
            <!-- 
            ---- App Header 
            --->
            
           <?php include ('./common.php');?>
            
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
                            <button class="btn card_btn">Read More</button>
                       
                  </div>    
                </div>

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
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Registered Vehicles</p>
                            <button class="btn card_btn">Read More</button>
                       
                  </div>    
                </div>
                
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
             </div>
            </div> 
            
            <!-- 
            ---- App Sidebar
            --->
            <?php include('./nav.php');?>
        </div>

        <script src="../js/dashboard.js"></script>

</body>
</html>

