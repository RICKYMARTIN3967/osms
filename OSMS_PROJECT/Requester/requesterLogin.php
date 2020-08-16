<?php
include("../dbConnection.php");
session_start();

if(!isset($_SESSION['is_login'])) {
    if (isset($_REQUEST['rEmail'])) {
        $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST["rEmail"]));
        $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST["rPassword"]));

        $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '{$rEmail}' AND r_password = '{$rPassword}' limit 1;";

        $result = $conn->query($sql);

        if($result->num_rows == 1) {
            $_SESSION['is_login'] = TRUE;
            $_SESSION["rEmail"] = $rEmail;
            echo "<script> location.href = 'requesterProfile.php';</script>";
            // exit;
        } else {
            $msg = "<div class='alert alert-warning mt-4'>Enter Valid Email & Password</div>";
        }
    }
} else {
    echo "<script> location.href = 'requesterProfile.php';</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    
<style>
    .custom-margin {
        margin-top: 8vh;
    }
</style>

    <title>Login</title>

</head>

<body>

<div class="mt-5 text-center mb-3" style="font-size:30px;">
    <i class="fas fa-stethoscope"></i>
    <span>Online Service Management System</span>
</div>
<p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-danger"></i> Requester Area (Demo)</p>


<div class="container-fluid">
    <div class="row justify-content-center custom-margin">
        <div class="col-sm-6 col-md-4">
            <form action="" method="POST" class="shadow-lg p-4">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="rEmail">
                    <small>We will never share your email with anyone.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="pass" class="font-weight-bold pl-2">password</label>
                    <input type="password" class="form-control" placeholder="Password" name="rPassword">
                </div>
                <button type="submit" class="btn btn-outline-danger mt-4 font-weight-bold btn-block shadow-sm">Login</button>
                <?php if(isset($msg)) {echo $msg;} ?>
            </form>
            <div class="text-center">
                <a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a>
            </div>
        </div>
    </div>
</div>





<!-- javaScript files -->
<script src="../js/jquery.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>

</body>

</html>