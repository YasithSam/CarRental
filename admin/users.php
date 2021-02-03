<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>

<!--- Icons--->
<link href='https://css.gg/menu-grid-o.css' rel='stylesheet'>
<link href='https://css.gg/community.css' rel='stylesheet'>
<link href='https://css.gg/pentagon-down.css' rel='stylesheet'>
<link href='https://css.gg/user.css' rel='stylesheet'>


<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="../css/users.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>

    /* Delete Button*/

  button {
    background-color:transparent;
    color: red;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
 
  /* Float cancel and delete buttons and add an equal width */
  .cancelbtn, .deletebtn {
    float: left;
    width: 50%;
  }
  
  /* Add a color to the cancel button */
  .cancelbtn {
    background-color: #ccc;
    color: black;
  }
  
  /* Add a color to the delete button */
  .deletebtn {
    background-color: #f44336;
  }
  
  /* Add padding and center-align text to the container */
  .container {
    padding: 16px;
    text-align: center;
  }
  
  /* The Modal (background) */
  .datatable-container .datatable .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }
  
  /* Modal Content/Box */
  .datatable-container .datatable .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }
  
  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
   
  /* The Modal Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }
  
  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }
  
  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
</style>

<body>
        <?php include('../db/connection.php');?> 
        <div class="app-viewport inspect_">
            
            <!-- 
            ---- App Header 
            --->
            
           <?php include ('./common.php');?>
            
            <!-- 
            ---- App Content 
            --->
            
            <div class="datatable-container">
                    <!-- ======= Header tools ======= -->
                    <h1 style="margin: 20px 0px 10px 20px; font-size:20px"> User Details</h1>
                    <hr>
                    <div class="header-tools">
                        <div class="search">
                        <input type="search" class="search-input" placeholder="Search..." />
                        </div>
                        <div class="tools">
                        <ul>
                            <li>
                             <button class="btn card_btn">Read More</button>
                           </li>
                        </ul>
                        </div>
                    </div>

                    <!-- ======= Table ======= -->
                    <table class="datatable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php
                                $count=1;
                                $sql_query="Select * from users;";
                                $result = mysqli_query($con,$sql_query);
                                while($row = mysqli_fetch_assoc($result)) 
                                { ?>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["user_name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["contact_no"]; ?></td>
                                    <td><?php echo $row["dob"]; ?></td>
                                    <td><?php echo $row["address"]; ?></td>
                                    <td><?php echo $row["city"]; ?></td>
                                    <td>
                                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                      
                                    </td>
                                    <td>
                                    <a onclick='confirmationDelete($(this));return false;' href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                                        
                                    </td>
                                    </tr>
                            <?php $count++; } ?>
                        
                     
                       </tbody>
                    </table>

                    <!-- ======= Footer tools ======= -->
                    <div class="footer-tools">
                        <div class="list-items">
                            Show
                            <select name="n-entries" id="n-entries" class="n-entries">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                            </select>
                            entries
                        </div>

                        <div class="pages">
                            <ul>
                                <li><span class="active">1</span></li>
                                <li><button>2</button></li>
                                <li><button>3</button></li>
                                <li><button>4</button></li>
                                <li><span>...</span></li>
                                <li><button>9</button></li>
                                <li><button>10</button></li>
                            </ul>
                        </div>
                    </div>
          
            </div>
            <!-- 
            ---- App Sidebar
            --->
            <?php include('./nav.php');?>
        </div>


</body>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>
</html>

