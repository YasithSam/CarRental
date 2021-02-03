<?php
require('../db/connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from vehicles where id='".$id."'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>
    <body>
        
            <?php
            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
                $id=$_REQUEST['id'];
                $uname =$_REQUEST['name'];
                $email =$_REQUEST['email'];
                $dob =$_REQUEST['dob'];
                $contact =$_REQUEST['phone'];
                $city =$_REQUEST['city'];
                $update="update users set  
                user_name='".$uname."',email='".$email."',dob='".$dob."',contact_no='".$contact."',city='".$city."'
                 where id='".$id."'";
                mysqli_query($con, $update);
                $status = "Record Updated Successfully. </br></br>";
                header("Location: vehicles.php");
                
            }else {
            ?>
           
           <div class="body-content">
                    <div class="module">
                        <h1>Update Vehicle</h1>
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
                        <input type="text" placeholder="No of Seats" name="seats" required />
                        <input type="text" placeholder="City" name="city" required />
                        <input type="text" placeholder="Price per km" name="price" required />
                        <div class="avatar"><label>Add Image: </label><input type="file" name="file"></div>
                        <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
                        </form>
                    </div>
 </div> 

               
            <?php } ?>
            
     
  
    </body>
</html>