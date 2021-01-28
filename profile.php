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
            <div class='book'>
              <div class='title'>Aggie's Diner</div>
              <div class='synop'>a greasy spoon mystery</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                3
                <div class='fa fa-eye'></div>
                23
              </div>
            </div>
            <div class='book'>
              <div class='title'>Sherlock in the Kitchen</div>
              <div class='synop'>a greasy spoon mystery</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                5
                <div class='fa fa-eye'></div>
                19
              </div>
            </div>
            <div class='book'>
              <div class='title'>Murder with Fries</div>
              <div class='synop'>a greasy spoon mystery</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                40
                <div class='fa fa-eye'></div>
                65
              </div>
            </div>
            <div class='book'>
              <div class='title'>Vinnie's Widow</div>
              <div class='synop'>a story of love & horror</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                5
                <div class='fa fa-eye'></div>
                24
              </div>
            </div>
            <div class='book'>
              <div class='title'>Home on Friday</div>
              <div class='synop'>a love story</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                5
                <div class='fa fa-eye'></div>
                23
              </div>
            </div>
            <div class='book'>
              <div class='title'>Lizzy from the Saloon</div>
              <div class='synop'>a tale of love in the wild west</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                2
                <div class='fa fa-eye'></div>
                18
              </div>
            </div>
            <div class='book'>
              <div class='title'>Anne Bonny's Crew</div>
              <div class='synop'>intrigue on the high seas</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                1
                <div class='fa fa-eye'></div>
                4
              </div>
            </div>
          </div>


          </body>



