<?php
require('../db/connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="../css/edit.css" />
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
                header("Location: users.php");
                
            }else {
            ?>
           
              <form class="form" method="post" action="">
                    <h1 class="login-title">Update Records</h1>
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                    <input type="text" class="login-input" name="name" placeholder="User Name" required value="<?php echo $row['user_name'];?>"/>
                    <input type="text" class="login-input" name="email" placeholder="Email Adress" required value="<?php echo $row['email'];?>"/>
                    <input type="date" class="login-input" name="dob" placeholder="Date of Birth" value="<?php echo $row['dob'];?>" />
                    <input type="number" class="login-input" name="phone" placeholder="Contact Number" value="<?php echo $row['contact_no'];?>"/>
                    <input type="text" class="login-input" name="city" placeholder="City" value="<?php echo $row['city'];?>"/>
                
                    <input type="submit" id="button" value="Update" class="login-button">
                    <button style="width: 100%; height:50px; margin-top:10px; background-color:red; color:white; font-size:15px;">Cancel<a href="./users.php"></a></buuton>
            
               </form>

               
            <?php } ?>
            
     
  
    </body>
</html>