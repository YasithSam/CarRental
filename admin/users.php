<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="../css/dashboard.css"/>
<link href='https://css.gg/menu-grid-o.css' rel='stylesheet'>
<link href='https://css.gg/community.css' rel='stylesheet'>
<link href='https://css.gg/pentagon-down.css' rel='stylesheet'>
<link href='https://css.gg/user.css' rel='stylesheet'>
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="../css/users.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
                    <h1 style="margin: 20px 0px 10px 20px;"> User Details</h1>
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
                                        <button onclick="document.getElementById('id01').style.display='block'" id="btn-delete">Delete</button>
                                        <div id="id01" class="modal">
                                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                            <form class="modal-content" action="delete.php" method="POST">
                                            <div class="container">
                                                <h1>Delete Account</h1>
                                                <p>Are you sure you want to delete your account?</p>
                                            
                                                <div class="clearfix">
                                                <input type="hidden" name="id_director" value="<?= $id ?>" />
                                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                <input type="submit" id="button" name="del" value="<?php echo $row['id']; ?>" class="login-button">
                                                </div>
                                            </div>
                                            </form>
                                        </div>
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
</html>

