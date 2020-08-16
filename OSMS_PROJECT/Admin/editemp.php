<?php
define("TITLE", "Update Technician");
define("PAGE", "technician");
include("includes/header.php");
include("../dbConnection.php");

//// checking for session variables
session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}

///// update button code
if(isset($_REQUEST["empupdate"])) {
    if(($_REQUEST['empId']=="") || ($_REQUEST['empName']=="") || ($_REQUEST['empCity']=="") || ($_REQUEST['empMobile']=="") || ($_REQUEST['empEmail']=="")) {
        $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>Fill All the Fields</div>";
    } else {
        $eId = $_REQUEST["empId"];
        $eName = $_REQUEST["empName"];
        $eCity = $_REQUEST["empCity"];
        $eMobile = $_REQUEST["empMobile"];
        $eEmail = $_REQUEST["empEmail"];

        $sql = "UPDATE technician_tb SET empid='$eId', empName='$eName', empCity='$eCity', empMobile='$eMobile', empEmail='$eEmail' WHERE empid='$eId'";

        if ($conn->query($sql)==TRUE) {
            $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2' role='alert'>Updated Successfully</div>";
        } else {
            $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2' role='alert'>Unable to Update</div>";
        }
    }
}



?>


<!-- start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Technician details</h3>
    <?php 
    //// edit button code from the previous page (requester.php)
    if(isset($_REQUEST['edit'])) {
        $sql = "SELECT * FROM technician_tb where empid = '{$_REQUEST['id']}'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="empId">Emp ID</label>
            <input type="text" class="form-control" name="empId" id="empId" value="<?php if(isset($row['empid'])){echo $row['empid'];} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" name="empName" id="empName" value="<?php if(isset($row['empName'])){echo $row['empName'];} ?>">
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" class="form-control" name="empCity" id="empCity" value="<?php if(isset($row['empCity'])){echo $row['empCity'];} ?>">
        </div>
        <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="text" class="form-control" name="empMobile" id="empMobile" value="<?php if(isset($row['empMobile'])){echo $row['empMobile'];} ?>" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
            <label for="empEmail">Email</label>
            <input type="email" class="form-control" name="empEmail" id="empEmail" value="<?php if(isset($row['empEmail'])){echo $row['empEmail'];} ?>">
        </div>

        <div class="text-center mt-4">
            <button type='submit' class='btn btn-danger mr-3' id='empupdate' name='empupdate'>Update</button>
            <a href="technician.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)){echo $msg;} ?>
    </form>


</div>
<!-- end 2nd column -->



<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>



<?php
include("includes/footer.php");
?>