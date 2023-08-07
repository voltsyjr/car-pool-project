<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/car/to-all/index.php");
}
?>
<?php
include 'config.php';
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Ride-X</title>

    <link rel="stylesheet" href="css/maicons.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="vendor/animate/animate.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/about.css">
    <script src="js/all.min.js"></script>

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
                                <a href="get-ride.php" class="btn btn-primary btn-split">BOOK RIDE <div class=""><img src="img/i3.png" alt="" style="width: 30px;height: 30px;border-radius: 50%;margin-left:3px;"></div></a>
                                <!-- <a href="create-ride.php" class="btn btn-primary btn-split">GENERATE RIDE <div class="fab"><img src="img/i3.png" alt="" style="width: 30px;height: 30px;border-radius: 50%;"></div></a> -->
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
                <div class="col-12"><h3 style="text-align: center;">Recent Rides <a href="history.php" style="float: right;"> <button class="btn btn-sm btn-primary">More rides</button> </a> </h3></div>
            </div>
            <div class="row">
            <?php
                $ids=$_SESSION['user_id'];
                $sql = "SELECT destination,source,Status,date,rides.ride_id,takes.user_id as ur_id,takes.creater_id as cd from rides,takes where rides.ride_id=takes.ride_id and (user_id=$ids or creater_id=$ids) order by date desc limit 3;";
                $result =  mysqli_query($conn,$sql) or die("Query failed");
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){


?>
<style>
    .body span {
                            font-weight: bold;
                        }

                        .body span.open {
                            color: rgb(139, 223, 13);
                        }

                        .body span.canceled {
                            color: red;
                        }

                        .body span.closed {
                            color: rgb(158, 6, 107);
                        }

                                                /* tooltip css  */
                                                .link {
	 position: relative;
	 /* padding: 12px 24px; */
	 color: #fff;
	 border: 2px solid #fff;
	 transition: all 0.3s ease;
	 text-transform: uppercase;
	 text-decoration: none;
}
 .link:before {
	 content: "";
	 position: absolute;
	 opacity: 0;
	 pointer-events: none;
	 left: 50%;
	 transform: translate3d(-50%, 0%, 0);
	 transition: all 0.3s ease;
	 transition-delay: 0.2s;
	 width: 0;
	 height: 0;
	 border-style: solid;
	 border-width: 10px 10px 0 10px;
	 border-color: #282828 transparent transparent transparent;
}
 .link:after {
	 text-transform: none;
	 content: attr(data-tooltip);
	 font-size: 14px;
	 position: absolute;
	 color: #fff;
	 background: #282828;
	 padding: 8px 12px;
	 width: -webkit-max-content;
	 width: -moz-max-content;
	 width: max-content;
	 max-width: 200px;
	 opacity: 0;
	 pointer-events: none;
	 left: 50%;
	 top: 0;
	 border-radius: 4px;
	 transform: translate3d(-50%, 0%, 0);
	 transition: all 0.3s ease;
	 transition-delay: 0.2s;
}
 .link:hover {
	 background-color: #8d85c1;
}
 .link:hover:before, .link:hover:after {
	 opacity: 1;
}
 .link:hover:before {
	 transform: translate3d(-50%, calc(-100% - 18px), 0);
}
 .link:hover:after {
	 transform: translate3d(-50%, calc(-100% - 16px), 0);
}
 abbr[data-title] {
	 position: relative;
	 text-decoration: underline dotted;
}
 abbr[data-title]:hover::after, abbr[data-title]:focus::after {
	 content: attr(data-title);
	 position: absolute;
	 left: 50%;
	 top: -30px;
	 transform: translateX(-50%);
	 width: auto;
	 white-space: nowrap;
	 background: #ff0060;
	 color: #fff;
	 border-radius: 2px;
	 box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, 0.4);
	 font-size: 14px;
	 padding: 3px 5px;
}
</style>
            <div class="col-lg-4">
                                <div class="card-service wow fadeInUp" style="overflow: hidden;">
                                <?php
                                    if($row['Status']==1){
                                        // echo $ids;
                                        // echo ' '.$row['cd'];
                                        if($row['ur_id']!=10000 && $ids==$row['cd']){
                                            $sql3="SELECT fname from user where pool_id='{$row['ur_id']}'";
                                            $result3=mysqli_query($conn,$sql3);
                                            $row3=mysqli_fetch_assoc($result3);
                                            echo '<div class="booked" style="width:150px;text-align:center;background:#6bd39f;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Booked by '.$row3['fname'].'</div>';
                                        }else if($row['ur_id']!=10000 && $ids!=$row['cd']){
                                            echo '<div class="booked" style="width:150px;text-align:center;background:#6bd39f;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Booked by <span style="color:red;font-weight:bolder;"> You</span></div>';
                                        }else if($row['ur_id']==10000 && $ids==$row['cd']){
                                            echo '<div class="booked" style="width:150px;text-align:center;background:#f48282;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Not Booked Yet</div>';
                                        }
                                    }else{
                                        echo '<div class="booked" style="width:150px;text-align:center;background:#aba0a0;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Past Ride</div>';
                                    }




                                    ?>
                                    <div class="header" style="text-align: center;margin-top:-35px;">
                                        <img src="img/i2.png" alt="" width="50%">
                                    </div>
                                    <div class="body" style="padding-left: 50px; text-align:left;" >
                                        <!-- <h5 class="text-secondary">To: </h5> -->
                                        <p><span>FROM:</span> <?php echo $row['source'] ;?></p>
                                        <p><span>TO:</span> <?php echo $row['destination'] ;?></p>
                                        <p><span>STATUS:</span> <span class="<?php  if($row['Status']==1){echo 'open';}else if($row['Status']==2){
                                                echo 'closed';
                                            }else if($row['Status']==3){
                                                echo 'cancled';
                                            }  ?>">
                                            <?php  if($row['Status']==1){echo 'Open';}else if($row['Status']==2){
                                                echo 'Completed';
                                            }else if($row['Status']==3){
                                                echo 'Cancled';
                                            }  ?>
                                             </span></p>
                                        <p><span>DATE:</span> <?php echo $row['date'] ;?></p>
                                        <a href="ride.php?gtx=<?php echo $row['ride_id'] ;?>" class="btn btn-primary">Read More</a>
                                        <?php
if($row['Status']==1){
    echo '<a href="cancel.php?rid='.$row['ride_id'].'" class="btn btn-sm btn-primary link"
    data-tooltip="Cancel Ride"><i class="fas fa-trash-alt"></i></a>';
}

?>
                                    </div>
                                </div>
            </div>
            <?php }}else{
                echo '<div class="col-lg-12" style="text-align:center;color:red;">No Data Available</div>';
            } ?>
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
