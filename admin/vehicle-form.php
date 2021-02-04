<?php 
 include "../db/connection.php";
 session_start();

 $targetDir = "../images/";
 $fileName = basename($_FILES["file"]["name"]);
 $targetFilePath = $targetDir . $fileName;
 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if (isset($_POST['title']) && isset($_POST['brand'])
   && isset($_POST['city']) && isset($_POST['price'])) {
     function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $allowTypes = array('jpg','png','jpeg');
      $title = validate($_POST['title']);
      $brand = validate($_POST['brand']); 
      $city = validate($_POST['city']);
      $price= validate($_POST['price']);
      $seat= validate($_POST['seats']);
      //$avatar_path = $con->real_escape_string('../images/'.$_FILES['avatar']['name']);
      $sql2="Select id from Brand where name='$brand';";
      $result2 = mysqli_query($con,$sql2);
      $rowb=mysqli_fetch_assoc($result2);
      $brand_id=$rowb['id'];

         //copy image to images/ folder 
         if(in_array($fileType, $allowTypes)){
           if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
             $sql = "INSERT INTO vehicles(owner_id,vehicle_title,vehicles_brand,seats,price_per_km,city,vimage1) VALUES ('6','$title', '$brand_id', '$seat','$price','$city','$fileName')";
             $result = mysqli_query($con, $sql);      
             if ($result){        
                 header("Location: vehicles.php");
             }
             else{
                 header("Location: addVehicle.php");
                 exit();
             }
           } 

         }  


 }
 else{
     header("Location: vehicles.php");
     exit();
 }




