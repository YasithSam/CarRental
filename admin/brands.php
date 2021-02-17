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
              <h1 style="margin: 30px 0px 20px 10px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Vehcile Types</h1>
              <hr class="hr-1">
              <div class="row" style="margin: 50px 10px 0px 5px;">
               
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=1";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Cars</p>
                       
                  </div>    
                </div>

                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=2";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Vans</p>
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=3";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Motor-Bikes</p>
                            
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=4";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Tuk Tuk</p>
                           
                       
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

