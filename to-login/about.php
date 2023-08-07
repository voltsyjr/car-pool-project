<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/car/to-all/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>About Us</title>

    <link rel="stylesheet" href="css/maicons.css">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/about.css">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
    <?php  include 'header.php'     ?>

        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Let's choose a perfect ride for u</h1>
                        <p class="text-lg text-grey mb-5">CarPool is an eco-smart option for handling all your travel needs by connecting you with fellow professional riders.</p>
                        <a href="get-ride.php" class="btn btn-primary btn-split">GET A RIDE <div class="fab"><img src="img/i3.png" alt="" style="width: 30px;height: 30px;border-radius: 50%;"></div></a>
                    </div>
                    <div class="col-md-6 py-5 wow zoomIn">
                        <div class="img-fluid text-center">
                            <img src="img/img1.webp" class="image1">
                        </div>
                    </div>
                </div>
                <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
            </div>
        </div>
    </header>

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;">
                    <h1 style="text-align: center;border-bottom:2px solid grey;display:inline-block">: About Us :</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp cards">
                        <div class="header">
                            <img src="img/img2.svg" alt="">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Low prices</h5>
                            <p>find the perfect ride from our wide range of destinations and routes at low prices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp cards">
                        <div class="header">
                            <img src="img/img3.svg" alt="">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Trustable</h5>
                            <p>We check profiles, so you know who you’re travelling with and can book your ride at ease on our secure platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp cards">
                        <div class="header">
                            <img src="img/img4.svg" alt="">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Tap and go</h5>
                            <p>Booking a ride has never been easier but you can book a ride in just minutes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="page-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h2 class="title-section"> So What is Carpool?</h2>
                    <div class="divider"></div>

                    <p>CarPool is an eco-smart option for handling all your travel needs by connecting you with fellow professional riders.</p>
                    <p>As our cities are growing, increased traffic adds to the chaos and pollution. Hence, we have committed to providing a convenient, economical and sustainable solution to this problem through carpooling and bike pooling.
                    </p>
                    <a href="about.php" class="btn btn-primary mt-3">Read More</a>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid py-3 text-center">
                        <img src="img/img5.jpg" height="375" width="450" class="img5">
                    </div>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .page-section -->



    <!-- Banner info -->
    <div class="page-section banner-info">
        <div class="wrap bg-image" style="background-image: url(img/bg_pattern.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                        <h2 class="title-section">Car-Pool for <br> Environment</h2>
                        <div class="divider"></div>
                        <p>As our cities are growing, increased traffic adds to the chaos and pollution. Hence, we have committed to providing a convenient, economical and sustainable solution to this problem through carpooling and bike pooling.
                        </p>

                        <ul class="theme-list theme-list-light text-white">
                            <li>
                                <div class="h5">CarPool within your city:</div>
                                <p>Ridesharing is the best option for socially responsible citizens to commute within the city. Optimizing every ride, CarPool makes it easy to find fellow riders on your route and split your commute costs.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInRight">
                        <div class="img-fluid text-center">
                            <img src="img/img6.svg" class="img6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wrap -->
    </div>
    <!-- .page-section -->


    <?php include 'footer.php';    ?>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>

</body>

</html>
