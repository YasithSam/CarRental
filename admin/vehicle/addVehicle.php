<?php
 include('../../db/connection.php');
 session_start();

 if (isset($_SESSION['user_name']) && $_SESSION['type'] ==='admin') {
  
?>
  
<html>
  <head>
  <link rel="stylesheet" href="../../css/addVehicle.css" type="text/css">
  </head>
</html>
<body>
 
   <div class="module">
     <h1>Add New Vehicle</h1>
     <form class="form" action="../vehicle-form.php" method="post" enctype="multipart/form-data">
       
       <input type="text" placeholder="Vehicle Title" name="title" required />
       <select aria-label="Select menu example" name="brand" required>
                <?php  

                     $sql = "SELECT name FROM Brand";
                     $result = $con->query($sql);
                     while ($row = mysqli_fetch_assoc($result)){ 
                          ?>
                          <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>

                          <?php
                          } 
                     ?>
         </select>
        <input type="text" placeholder="No of Seats" name="seats" required />
       <input type="text" placeholder="City" name="city" required />
       <input type="text" placeholder="Price per km" name="price" required />
       <div class="avatar"><label>Add Image: </label><input type="file" name="file"></div>
       <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
     </form>
   </div>

 </body>
 <?php
 }
 else{
   header("Location: ../../index.php");
 }
 ?>