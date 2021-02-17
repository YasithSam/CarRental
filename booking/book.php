<?php
session_start();
include('../db/connection.php');
$title = $_REQUEST['title'];
$id = $_REQUEST['id']; 
$ow_id = $_REQUEST['owid'];
$query="Select user_name from driver where id='$ow_id'";
$result = $con->query($query);
$row = $result->fetch_assoc();


if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['type'] ==='user') {
    $u_id=$_SESSION['id'];
    ?>

   
    <link rel="stylesheet" href="../css/addVehicle.css" type="text/css">
        
    <div class="body-content">
    <div class="module">
        <h1>Add a Booking</h1>
        <form class="form" action="./book-form.php" method="post">
        <div class="alert alert-error"></div>
        <input type="hidden" id="u_id" name="u_id" value="<?php echo $u_id?>" required />
        <input type="hidden" id="ow_id" name="ow_id" value="<?php echo $ow_id?>" required />
        <label>
            Vehicle :
        </label>
        <br>
        <input type="text"  name="title" value="<?php echo $title;?>" readonly="readonly" required />
        <label>
            Driver :
        </label>
        <br>
        <br />
        <input type="text"  name="name" value="<?php echo $row['user_name'];?>" readonly="readonly" required />
        <label>
            From :
        </label>
        <br>
        <input type="date" class="date_field" name="dateFrom" value="<?php echo date('H:i'); ?>" />
        <br/>
        <br />
        <label>
            To :
        </label>
        <br>
        <input type="date" class="date_field" name="dateTo" value="<?php echo date('H:i'); ?>" />
        <br />
        <br />
        <label>
            Date :
        </label>
        <br>
        <input type="date" class="date_field" name="date" value="<?php echo date("y-m-d"); ?>" />
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
    header("Location: ../index.php");
    echo"<h1> Only Users can make bookings</h1>";
}    
?>