<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./css/profile.css"/>
     <link rel="stylesheet" href="./css/home.css"/>

</head>
<body>

<?php 
include("./includes/header.php");
include('./db/connection.php');
include('./components/list-b.php');
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['type'] ==='user') {
  
?>
          <?php  
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
              
              <div id='linkbtn'><a href="logout.php" style="color:white">Logout</a>
              
            </div>
          </div>

          <div id='bookshelf' style="margin-top: 80px;">
            <h2 style="color:white; margin-left:20px;">My Bookings</h2>
            <?php 
            $sql2 = "SELECT * FROM booking where user_id=$id";
            $result2 = $con->query($sql2);   
              if(mysqli_num_rows($result2)>0){
                while ($row2 = mysqli_fetch_assoc($result2)){
                    
                    ComponentB($row2['id'],$row2['car_id'],$row2['start'],$row2['end'],$row2['day']);
                
                }
              }
              else{
                echo "<h5>No Bookings</h5>";
              
              }
            ?>  
            
          </div>


          </body>

</html>

<?php
}
else if(isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['type'] ==='owner')
{ 
?>  
     <?php  
          $id=$_SESSION["id"];
          
          $sql = "SELECT * FROM driver where id=$id";
          $result = $con->query($sql);
                           $row = $result->fetch_assoc();

          $sql3="SELECT vehicle_title,rating FROM vehicles where owner_id=$id";
          $result3 = $con->query($sql3);
          $row3 = $result3->fetch_assoc();        


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
                  My Vehicle:
               </div>
               <div id='biolinks'>
                 <?php  echo $row3["vehicle_title"];?>          
               </div>
             </div>
             <div id='userbio'>
               <div id='biotext'>
                 Ratings:
               </div>
               <div id='biolinks'>
                 <?php  echo $row3["rating"] . "   Stars";?>          
               </div>
             </div>
             
             <div id='userbio' style="margin-bottom:10px;">
               <div id='biotext'>
                 Contact Number:
               </div>
               <div id='biolinks'>
                 <?php  echo $row["contact_no"];?>          
               </div>
             </div>
             <div><a href="./driver/edit-vehicle-owner.php?id=<?php echo $id?>" style="color:white">Edit Vehicle</a>
             <br>
             <div id='linkbtn'><a href="logout.php" style="color:white">Logout</a>
             
           </div>
         </div>

         <div id='bookshelf' style="margin-top: 80px;">
           <h2 style="color:black; margin-left:20px;">My Bookings</h2>
           <?php 
           
           $sql2 = "SELECT * FROM booking where owner_id=$id";
           $result2 = $con->query($sql2);   
             if(mysqli_num_rows($result2)>0){
               while ($row2 = mysqli_fetch_assoc($result2)){
                   ComponentB($row2['id'],$row2['car_id'],$row2['start'],$row2['end'],$row2['day']);
               
               }
             }
             else{
               echo "<h5>No Bookings</h5>";
             
             }
           ?>  
           
         </div>


         </body>


<?php
}

else{

}
?>