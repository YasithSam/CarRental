<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./css/profile.css"/>
     <link rel="stylesheet" href="./css/index.css"/>

</head>
<body>

<?php 
include("./header.php");
include('./db/connection.php');
include('./php/list-b.php');
session_start();
$id=$_SESSION["id"];

$sql = "SELECT * FROM users where id=$id";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();

                            

?>  

          <div id='sideflap' style="margin-top:80px;">
            <div id='userpic'></div>
            <div id='userstats'>
              <div id='username'>
                <?php  echo $_SESSION["user_name"];?>
                <div id='usertags'><?php  echo $row["city"];?></div>
              </div>
              <div id='userbio'>
                <div id='biotext'>
                  Email:
                </div>
                <div id='biolinks'>
                  <?php  echo $row["email"];?>          
                </div>
              </div>
              <div id='userbio'>
                <div id='biotext'>
                  Date of Birth:
                </div>
                <div id='biolinks'>
                  <?php  echo $row["dob"];?>          
                </div>
              </div>
              <div id='userbio'>
                <div id='biotext'>
                  Contact Number:
                </div>
                <div id='biolinks'>
                  <?php  echo $row["contact_no"];?>          
                </div>
              </div>
              <div id='userbio'>
                <div id='biotext'>
                  Address:
                </div>
                <div id='biolinks'>
                  <?php  echo $row["address"];?>          
                </div>
              </div>
              
              <div id='linkbtn'><a href="logout.php">Logout</a>
              
            </div>
          </div>

          <div id='bookshelf' style="margin-top: 80px;">
            <h2 style="color:white; margin-left:20px;">My Bookings</h2>
            <?php 
            $sql2 = "SELECT * FROM booking where user_id=$id";
            $result2 = $con->query($sql2);   
              if(mysqli_num_rows($result2)>0){
                while ($row2 = mysqli_fetch_assoc($result2)){
                    ComponentB($row2['id'],$row2['start'],$row2['end'],$row2['day']);
                
                }
              }
              else{
                echo "<h5>No Bookings</h5>";
              
              }
            ?>  
            
          </div>


          </body>

</html>

