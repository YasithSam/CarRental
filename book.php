<?php
session_start();
include('./db/connection.php');
$title = $_REQUEST['title'];
$id = $_REQUEST['id']; 
$ow_id = $_REQUEST['owid'];
$query="Select user_name from driver where id='$ow_id'";
$result = $con->query($query);
$row = $result->fetch_assoc();


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $u_id=$_SESSION['id'];
    ?>

    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="./css/addVehicle.css" type="text/css">
        
    <div class="body-content">
    <div class="module">
        <h1>Add a Booking</h1>
        <form class="form" action="./book-form.php" method="post" enctype="multipart/form-data">
        <div class="alert alert-error"></div>
        <input type="hidden" id="u_id" name="u_id" value="<?php echo $u_id?>" required />
        <input type="hidden" id="ow_id" name="ow_id" value="<?php echo $ow_id?>" required />
        <label>
            Vehicle :
        </label>
        <br>
        <input type="text"  name="title" value="<?php echo $title;?>" required />
        <label>
            Driver :
        </label>
        <br>
        <br />
        <input type="text"  name="name" value="<?php echo $row['user_name'];?>" required />
        <label>
            From :
        </label>
        <br>
        <input type="date" name="dateFrom" value="<?php echo date('H:i'); ?>" />
        <br/>
        <br />
        <label>
            To :
        </label>
        <br>
        <input type="date" name="dateTo" value="<?php echo date('H:i'); ?>" />
        <br />
        <br />
        <label>
            Date :
        </label>
        <br>
        <input type="date" name="date" value="<?php echo date("y-m-d"); ?>" />
        <br />
        <br />
        <br />
        
        <input type="submit" value="Book" name="register" class="btn btn-block btn-primary" />
        </form>
    </div>
    </div>
<?php
}
else{
    header("Location: login.php");
}    
?>