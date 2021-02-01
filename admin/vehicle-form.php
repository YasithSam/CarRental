<?php 

include "../db/connection.php";
session_start();


if (isset($_POST['title']) && isset($_POST['brand'])
  && isset($_POST['city']) && isset($_POST['price'])) {
    
   
     $image = $_FILES['image']['name'];
     $target = "../images/".basename($image);
     $title = $_POST['title'];
     $brand = $_POST['brand']; 
     $city = $_POST['city'];
     $price= $_POST['price'];
     $overview= $_POST['overview'];
     //$avatar_path = $con->real_escape_string('../images/'.$_FILES['avatar']['name']);
     $sql2="Select id from Brand where name='$brand';";
     //$result2 = mysqli_query($con,$sql2);
     //$rowb=mysqli_fetch_assoc($result2);
     //$brand_id=$rowb['id'];
            
        //copy image to images/ folder 
        
            $query = "INSERT INTO vehicles(vehicle_title,vehicles_overview,price_per_km,city,vimage1) VALUES('$title', '$overview','$price','$city','$image')";
            $result = mysqli_query($con,$query);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
              $msg = "Image uploaded successfully";
              echo"<h1>$result</h1>";
            }else{
              $msg = "Failed to upload image";
            }
            
            
        
    
}
else{
    header("Location: fuck.php");
    exit();
}




