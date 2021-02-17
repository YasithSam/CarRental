<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>

<link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/users.css"/>


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
            
            <div class="datatable-container">
                    <!-- ======= Header tools ======= -->
                    <h1 style="margin: 20px 0px 10px 20px;"> Vehicle Details</h1>
                    <hr>
                    <div class="header-tools">
                        <div class="search">
                        <button class="btn card_btn" onclick="location.href='./vehicle/addVehicle.php'" >Add New Vehicle</button>
                        </div>
                       
                    </div>

                    <!-- ======= Table ======= -->
                    <table class="datatable">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Type</th>
                            <th>Capacity</th>
                            <th>Rating</th>
                            <th>Price per km</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php
                                $count=1;
                                $sql = "SELECT vehicles.id,vehicles.vehicle_title,Brand.name,vehicles.seats,vehicles.rating,vehicles.price_per_km,vehicles.city FROM vehicles,Brand where Brand.id=vehicles_brand";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_assoc($result)) 
                                { ?>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["vehicle_title"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["seats"]; ?></td>
                                    <td><?php echo $row["rating"]; ?></td>
                                    <td><?php echo $row["price_per_km"]; ?></td>
                                    <td><?php echo $row["city"]; ?></td>
                                    
                                    <td>
                                    <a href="./vehicle/edit-vehicle.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                    </td>
                                    <td>
                                    <a href="./vehicle/delete-vehicle.php?id=<?php echo $row["id"];?>">Delete</a>
                                    </td>
                                    </tr>
                            <?php $count++; } ?>
                            
                        
                     
                       </tbody>
                    </table>

                   
          
            </div>
            <!-- 
            ---- App Sidebar
            --->
            <?php include('../includes/nav.php');?>
        </div>


</body>
<?php
}
else
{
  header('Location: ../index.php');
}
?>
</html>

