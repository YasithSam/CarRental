<?php
include('../db/connection.php');
session_start();
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../css/addVehicle.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Add New Vehicle</h1>
    <form class="form" action="./vehicle-form.php" method="post" enctype="multipart/form-data">
      <div class="alert alert-error"></div>
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
      <textarea name="overview" rows="10" cols="30" placeholder="overview"></textarea>
      <input type="text" placeholder="City" name="city" required />
      <input type="text" placeholder="Price per km" name="price" required />
      <div class="avatar"><label>Add Image: </label><input type="file" name="file"></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>