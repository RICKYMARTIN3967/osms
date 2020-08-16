<!--       = +      -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css">

    <title>OSMS</title>

</head>

<body>

<!-- start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
            <li class="nav-item"><a href="Requester/requesterLogin.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav> <!-- End Navigation -->


<!-- start header jumbotron -->
<header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg);">
    <div class="myclass mainHeading">
        <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
        <a href="Requester/requesterLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
</header> <!-- end header jumbotron -->


<!-- start Introduction section -->
<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS Services</h3>
        <p>
        OSMS Services is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
        </p>
    </div>
</div>  <!-- end Introduction section container -->


<!-- start services section -->
<div class="container text-center border-bottom" id="services">
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repairs</h4>
        </div>
    </div>
</div>   <!-- end service section container -->


<!-- start registration form -->
<?php
    include("userRegistration.php");
?>
<!-- end registration form container -->


<!-- start happy customer -->
<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">   <!-- start 1st column --->
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpeg" alt="avt1" style="border-radius:100px;">
                        <h4 class="card-title">Harsh Raj</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Eligendi aliquid voluptas, 
                            ipsam debitis quidem praesentium suscipit ipsum 
                            facere minima excepturi.
                        </p>
                    </div>
                </div>
            </div>     <!--end 1st column-->
            <div class="col-lg-3 col-sm-6">   <!-- start 2nd column --->
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar2.jpeg" alt="avt2" style="border-radius:100px;">
                        <h4 class="card-title">Ashwin Chauhan</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Eligendi aliquid voluptas, 
                            ipsam debitis quidem praesentium suscipit ipsum 
                            facere minima excepturi.
                        </p>
                    </div>
                </div>
            </div>     <!--end 2nd column-->
            <div class="col-lg-3 col-sm-6">   <!-- start 3rd column --->
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar3.jpeg" alt="avt3" style="border-radius:100px;">
                        <h4 class="card-title">Kunal Aryan</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Eligendi aliquid voluptas, 
                            ipsam debitis quidem praesentium suscipit ipsum 
                            facere minima excepturi.
                        </p>
                    </div>
                </div>
            </div>     <!--end 3rd column-->
            <div class="col-lg-3 col-sm-6">   <!-- start 4th column --->
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar4.jpeg" alt="avt4" style="border-radius:100px;">
                        <h4 class="card-title">Prince Kumar</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Eligendi aliquid voluptas, 
                            ipsam debitis quidem praesentium suscipit ipsum 
                            facere minima excepturi.
                        </p>
                    </div>
                </div>
            </div>     <!--end 4th column-->
        </div>
    </div>
</div>  <!--end happy customers-->


<!-- start contact us form -->
<div class="container" id="contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        <!-- start 1st column -->
        <?php
            include("contactForm.php");
        ?>
        <!-- end 1st column -->
        <div class="col-md-4 text-center">       <!-- start 2nd column -->
            <strong>Headquarter:</strong> <br>
            OSMS pvt Ltd, <br>
            Ashok Nagar, Ranchi <br>
            Jharkhand - 298372 <br>
            Phone : +910000000000 <br>
            <a href="#" target="_blank">www.osms.com</a> <br> <br>

            <strong>Branch:</strong> <br>
            OSMS pvt Ltd, <br>
            New Ashok Nagar, Delhi <br>
            Delhi - 302839 <br>
            Phone : +910000000000 <br>
            <a href="#" target="_blank">www.osms.com</a>
        </div> <!-- end 2nd column -->
    </div>
</div>  <!-- end contact us form -->


<!-- start footer -->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">       <!-- start 1st column -->
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div>   <!-- end 1st column -->
            <div class="col-md-6 text-right">        <!-- start 2nd column -->
                <small>Designed by Ashwin &copy; 2020</small>
                <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
            </div>   <!-- end 2nd column -->
        </div>
    </div>
</footer>




<!-- JavaScript Files -->
<!-- jquer js -->
<script src="js/jquery.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- font awesome js -->
<script src="js/all.min.js"></script>

</body>

</html>