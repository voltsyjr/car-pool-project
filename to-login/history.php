<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
?>
<?php 
include 'config.php';
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
    <script src="js/all.min.js"></script>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <?php   include 'header.php'; ?>

        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Let's See Your Past Rides and Open Rides</h1>
                        <p class="text-lg text-grey mb-5">WAY TO FAST AND ECONOMICAL RIDE!!<br> Your Privacy is our First Priority. No-one else can see your information.</p>
                        <a href="get-ride.php" class="btn btn-primary btn-split">GET A RIDE <div class=""><img src="img/i3.png" alt="" style="width: 30px;height: 30px;border-radius: 50%;margin-left:3px;"></div></a>
                    </div>
                    <div class="col-md-6 py-5 wow zoomIn">
                        <div class="img-fluid text-center">
                            <img src="img/i2.png" alt="" width="100%">
                        </div>
                    </div>
                </div>
                <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
            </div>
        </div>
    </header>
    <div class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <style>
                        /* body {font-family: Arial;} */
                        /* Style the tab */
                        
                        .tab {
                            overflow: hidden;
                            border: 1px solid #ccc;
                            background-color: #f1f1f1;
                        }
                        /* Style the buttons inside the tab */
                        
                        .tab button {
                            background-color: inherit;
                            float: left;
                            border: none;
                            outline: none;
                            cursor: pointer;
                            padding: 14px 16px;
                            transition: 0.3s;
                            font-size: 17px;
                        }
                        /* Change background color of buttons on hover */
                        
                        .tab button:hover {
                            background-color: #ddd;
                        }
                        /* Create an active/current tablink class */
                        
                        .tab button.active {
                            background-color: #ccc;
                        }
                        /* Style the tab content */
                        
                        .tabcontent {
                            display: none;
                            padding: 6px 12px;
                            border: 1px solid #ccc;
                            border-top: none;
                        }
                        
                        .tabcontent img {
                            width: 40%;
                        }
                        
                        .card-service {
                            text-align: left;
                        }
                        
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
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'open')" id="defaultOpen">Open</button>
                        <button class="tablinks" onclick="openCity(event, 'closed')">Completed</button>
                        <button class="tablinks" onclick="openCity(event, 'canceled')">Canceled</button>
                    </div>

                    <div id="open" class="tabcontent">
                        <h3>Your Open Rides</h3>
                        <div class="row">
                            <?php 
                            $ids=$_SESSION['user_id'];
                            $sql = "SELECT destination,source,status,date,rides.ride_id,takes.user_id as ur_id,takes.creater_id as cd from rides,takes where rides.ride_id=takes.ride_id and (user_id=$ids or creater_id=$ids) and status=1;";
                            $result =  mysqli_query($conn,$sql) or die("Query failed");
                            // echo $sql;
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
?>
                            <div class="col-lg-4">
                                <div class="card-service wow fadeInUp" style="overflow: hidden;">
                                    <?php  
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
                                    ?>
                                    <div class="header" style="text-align: center;margin-top:-35px;">
                                        <img src="img/i2.png" alt="">
                                    </div>
                                    <div class="body" style="padding-left: 50px;">
                                        <!-- <h5 class="text-secondary">To: </h5> -->
                                        <p><span>FROM:</span> <?php echo $row['source'] ;?></p>
                                        <p><span>TO:</span> <?php echo $row['destination'] ;?></p>
                                        <p><span>STATUS:</span> <span class="open"> Open</span></p>
                                        <p><span>DATE:</span> <?php echo $row['date'] ;?></p>
                                        <a href="ride.php?gtx=<?php echo $row['ride_id'] ;?>" class="btn btn-primary">Read More</a>
                                        <a href="cancel.php?rid=<?php echo $row['ride_id'];   ?>" class="btn btn-sm btn-primary link"
                                        data-tooltip="Cancel Ride"
                                        ><i class="fas fa-trash-alt"></i></a>

                                    </div>
                                </div>
                            </div>

                            <?php 

                                }}else{
                                    echo '<h5 style="margin:auto;">No Open rides</h5>';
                                }
?>


                        </div>
                    </div>

                    <div id="closed" class="tabcontent">
                        <h3>Your Completed Rides</h3>
                        <div class="row">
                        <?php 
                            $sql1 = "SELECT destination,source,status,date,rides.ride_id from rides,takes where rides.ride_id=takes.ride_id and (user_id=$ids or creater_id=$ids) and status=2;";
                            $result1 =  mysqli_query($conn,$sql1) or die("Query failed");
                            // echo $sql;
                            if(mysqli_num_rows($result1)>0){
                                while($row1=mysqli_fetch_assoc($result1)){
?>
                            <div class="col-lg-4">
                                <div class="card-service fadeInUp" style="overflow: hidden;">
                                <div class="booked" style="width:150px;text-align:center;background:#aba0a0;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Past Ride</div>
                                    <div class="header" style="text-align: center;margin-top:-35px;">
                                        <img src="img/i2.png" alt="">
                                    </div>
                                    <div class="body" style="padding-left: 50px;">
                                        <!-- <h5 class="text-secondary">To: </h5> -->
                                        <p><span>FROM:</span> <?php echo $row1['source'] ;?> </p>
                                        <p><span>TO:</span> <?php echo $row1['destination'] ;?></p>
                                        <p><span>STATUS:</span> <span class="closed"> Closed</span></p>
                                        <p><span>DATE:</span> <?php echo $row1['date'] ;?></p>
                                        <a href="ride.php?gtx=<?php echo $row1['ride_id'] ;?>" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php }}else{
                                echo '<h5 style="margin:auto;">No Completed rides</h5>';
                            } ?>
                        </div>
                    </div>

                    <div id="canceled" class="tabcontent">
                        <h3>Your Canceled Rides</h3>
                        <div class="row">
                        <?php 
                            $sql2 = "SELECT destination,source,status,date,rides.ride_id from rides,takes where rides.ride_id=takes.ride_id and (user_id=$ids or creater_id=$ids) and Status=3;";
                            $result2 =  mysqli_query($conn,$sql2) or die("Query failed");
                            // echo $sql;
                            if(mysqli_num_rows($result2)>0){
                                while($row2=mysqli_fetch_assoc($result2)){
?>
                            <div class="col-lg-4">

                                <div class="card-service  fadeInUp" style="overflow: hidden;">
                                <div class="booked" style="width:150px;text-align:center;background:#aba0a0;color:white;position:relative;top:0;transform:rotate(-45deg) translate(-36px,-27px);">Past Ride</div>
                                    <div class="header" style="text-align: center;margin-top:-35px;">
                                        <img src="img/i2.png" alt="">
                                    </div>
                                    <div class="body" style="padding-left: 50px;">
                                        <!-- <h5 class="text-secondary">To: </h5> -->
                                        <p><span>FROM:</span> <?php echo $row2['source'] ;?></p>
                                        <p><span>TO:</span> <?php echo $row2['destination'] ;?></p>
                                        <p><span>STATUS:</span> <span class="canceled"> Canceled</span></p>
                                        <p><span>DATE:</span> <?php echo $row2['date'] ;?></p>
                                        <a href="ride.php?gtx=<?php echo $row2['ride_id'] ;?>" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }}else{
                                    echo '<h5 style="margin:auto;">No Canceled rides</h5>';
                                } ?>
                        </div>
                    </div>

                    <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }

                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                    </script>
                </div>
            </div>
        </div>
        <!-- .container -->
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