
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- font awesome css -->
<link rel="stylesheet" href="../css/all.min.css">
<!-- custom css -->
<link rel="stylesheet" href="../css/custom.css">

    <title><?php echo TITLE ?></title>
</head>

<body>
    
<!-- Top navbar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a href="requesterProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a>
</nav>  <!-- end top navbar -->


<!-- start container -->
<div class="container-fluid" style="margin-top:40px;">
    <div class="row">     <!-- start row -->
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">     <!-- start side bar (1st column) -->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="requesterProfile.php" class="nav-link <?php if(PAGE=="requesterProfile") {echo 'active';} ?>"><i class="fas fa-user mr-2"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="submitRequest.php" class="nav-link <?php if(PAGE=="submitRequest") {echo 'active';} ?>"><i class="fab fa-accessible-icon mr-2"></i>Submit Request</a>
                    </li>
                    <li class="nav-item">
                        <a href="checkStatus.php" class="nav-link <?php if(PAGE=="checkStatus") {echo 'active';} ?>"><i class="fas fa-align-center mr-2"></i>Service Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="requesterChangePass.php" class="nav-link <?php if(PAGE=="requesterChangePass") {echo 'active';} ?>"><i class="fas fa-key mr-2"></i>Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link "><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>    <!-- end side bar (1st column) -->
