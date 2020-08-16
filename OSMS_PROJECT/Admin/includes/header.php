<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

<!-- bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- font awesome css -->
<link rel="stylesheet" href="../css/all.min.css">
<!-- custom css -->
<link rel="stylesheet" href="../css/custom.css">

</head>

<body>
    
<!-- Top navbar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a href="dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a>
</nav>  <!-- end top navbar -->


<!-- start container -->
<div class="container-fluid" style="margin-top:40px;">
    <div class="row">     <!-- start row -->
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">     <!-- start side bar (1st column) -->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link <?php if(PAGE=="dashboard") {echo 'active';} ?>"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="work.php" class="nav-link <?php if(PAGE=="work") {echo 'active';} ?>"><i class="fab fa-accessible-icon mr-2"></i>Work Order</a>
                    </li>
                    <li class="nav-item">
                        <a href="request.php" class="nav-link <?php if(PAGE=="request") {echo 'active';} ?>"><i class="fas fa-align-center mr-2"></i>Requests</a>
                    </li>
                    <li class="nav-item">
                        <a href="assets.php" class="nav-link <?php if(PAGE=="assets") {echo 'active';} ?>"><i class="fas fa-database mr-2"></i>Assets</a>
                    </li>
                    <li class="nav-item">
                        <a href="technician.php" class="nav-link <?php if(PAGE=="technician") {echo 'active';} ?>"><i class="fab fa-teamspeak mr-2"></i>Technician</a>
                    </li>
                    <li class="nav-item">
                        <a href="requester.php" class="nav-link <?php if(PAGE=="requesters") {echo 'active';} ?>"><i class="fas fa-users mr-2"></i>Requester</a>
                    </li>
                    <li class="nav-item">
                        <a href="soldproductreport.php" class="nav-link <?php if(PAGE=="sellreport") {echo 'active';} ?>"><i class="fas fa-table mr-2"></i>Sells Report</a>
                    </li>
                    <li class="nav-item">
                        <a href="workreport.php" class="nav-link <?php if(PAGE=="workreport") {echo 'active';} ?>"><i class="fas fa-table mr-2"></i>Work Report</a>
                    </li>
                    <li class="nav-item">
                        <a href="changepass.php" class="nav-link <?php if(PAGE=="changepass") {echo 'active';} ?>"><i class="fas fa-key mr-2"></i>Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link "><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>    <!-- end side bar (1st column) -->