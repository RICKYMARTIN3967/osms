<?php
define("TITLE", "Change Password");
define("PAGE", "requesterChangePass");
include("includes/header.php");

/// connection with database and checking the session variables
include("../dbConnection.php");
session_start();
if($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}

//// updating password (update button code)
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])) {
    if($_REQUEST['rPassword']=="") {
        $passmsg = "<div class='alert alert-warning mt-3 font-weight-bold'>Fill All Fields</div>";
    } else {
        $rPass = $_REQUEST['rPassword'];
        $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '{$rEmail}'";
        if ($conn->query($sql)==TRUE) {
            $passmsg = "<div class='alert alert-success mt-3 font-weight-bold'>Updated Successfully</div>";
        } else {
            $passmsg = "<div class='alert alert-danger mt-3 font-weight-bold'>Unable to Update</div>";
        }
    }
}



?>

<div class="col-sm-9 col-md-5">   <!-- start user change password form (2nd column) -->
    <form action="" method="POST" class="mt-5 mx-5">    
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value="<?php if(isset($rEmail)) {echo $rEmail;} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
    </form>
</div>   <!-- end user change password form (2nd column) -->


<?php
include("includes/footer.php");
?>