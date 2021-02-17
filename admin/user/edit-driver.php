<?php
require('../../db/connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from driver where id='".$id."'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Update Record</title>
    <link rel="stylesheet" href="../../css/edit.css" />
</head>
    <body>
        
            <?php
            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
                $id=$_REQUEST['id'];
                $uname =$_REQUEST['name'];
                $contact =$_REQUEST['phone'];
                $city =$_REQUEST['city'];
                $update="update driver set  
                user_name='".$uname."',contact_no='".$contact."',city='".$city."'
                 where id='".$id."'";
                mysqli_query($con, $update);
                $status = "Record Updated Successfully. </br></br>";
                header("Location: ../drivers.php");
                
            }else {
            ?>
           
              <form class="form" method="post" action="">
                    <h1 class="login-title">Update Records</h1>
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                    <input type="text" class="login-input" name="name" placeholder="User Name" required value="<?php echo $row['user_name'];?>"/>
                    <input type="number" class="login-input" name="phone" placeholder="Contact Number" value="<?php echo $row['contact_no'];?>"/>
                    <input type="text" class="login-input" name="city" placeholder="City" value="<?php echo $row['city'];?>"/>
                
                    <input type="submit" id="button" value="Update" class="login-button">
                    <button style="width: 100%; height:50px; margin-top:10px; background-color:red; color:white; font-size:15px;">Cancel<a href="../users.php"></a></buuton>
            
               </form>

               
            <?php } ?>
            
     
  
    </body>
</html>