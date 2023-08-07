<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Ride-X:Contact Us</title>

    <link rel="stylesheet" href="css/maicons.css">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="css/theme.css">
    <style>
        .map {
            height: 450px;
            width: 550px;
            margin-top: 100px;
            margin-left: 90px;
            border-radius: 30px;
        }

        @media only screen and (max-width: 800px) {
            .map {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <?php
include 'header.php';
        ?>

        <div class="container">
            <div class="page-banner">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-6">
                        <nav aria-label="Breadcrumb">
                            <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ul>
                        </nav>
                        <h1 class="text-center">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-section">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Address</p>
                    <p class="mb-0 text-secondary"><a href="https://goo.gl/maps/dMCpEUNYrXsp715p8"
                            style="color:#59547c;">A-7, Institutional
                            Area, near Satyawadi Raja Harish
                            Chandra Hospital,
                            New Delhi, Delhi 110040</a></p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Phone</p>
                    <p class="mb-0"><a href="#" class="text-secondary">+91 63948 42628</a></p>
                    <p class="mb-0"><a href="#" class="text-secondary">+91 78955 45093</a></p>
                    <p class="mb-0"><a href="#" class="text-secondary">+91 85272 15380</a></p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Email Address</p>
                    <p class="mb-0"><a href="#" class="text-secondary">201210035@nitdelhi.ac.in</a></p>
                    <p class="mb-0"><a href="#" class="text-secondary">201210041@nitdelhi.ac.in</a></p>
                    <p class="mb-0"><a href="#" class="text-secondary">201210055@nitdelhi.ac.in</a></p>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 style="text-align: center;margin-bottom:20px;">Our Team</h4>
                    </div>
                </div>
                <style>
                    .card-service{
                        transition: all 0.3s ease-in-out;
                    }
                    .card-service:hover{
                        transform: scale(1.09);
                    }
                </style>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-service wow fadeInUp" style="box-shadow: 0 3px 12px rgba(95, 92, 120, 0.3);">
                            <div class="header">
                                <a href="img/pf.jpeg" target="_blank">
                                <img src="img/pf.jpeg" alt="" width="110px" style="border-radius: 50%;"></a>
                            </div>
                            <div class="body">
                                <h5 class="text-secondary">Vishal Singh</h5>
                                <p>+91 7895545093</p>
                                <p>201210055@nitdelhi.ac.in</p>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-service wow fadeInUp" style="box-shadow: 0 3px 12px rgba(95, 92, 120, 0.3);">
                            <div class="header">
                              <a href="img/rachit.jpeg" target="_blank">
                              <img src="img/rachit.jpeg" alt="" width="110px" style="border-radius: 50%;"></a>
                            </div>
                            <div class="body">
                                <h5 class="text-secondary">Rachit Agrawal</h5>
                                <p>+91 6394842628</p>
                                <p>201210035@nitdelhi.ac.in</p>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-service wow fadeInUp" style="box-shadow: 0 3px 12px rgba(95, 92, 120, 0.3);">
                            <div class="header">
                              <a href="img/shrey.jpeg" target="_blank">
                              <img src="img/shrey.jpeg" alt="" width="110px" style="border-radius: 50%;"></a>
                            </div>
                            <div class="body">
                                <h5 class="text-secondary">Shrey Kumar</h5>
                                <p>+91 85272 15380</p>
                                <p>201210041@nitdelhi.ac.in</p>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .page-section -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form action="<?php $_SERVER['PHP_SELF']?>" class="contact-form py-5 px-lg-5" method="post">
                        <h2 class="mb-4 font-weight-medium text-secondary">Get in touch</h2>
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" name="fname">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" name="lname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" name="subject">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" name="message"
                                    placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group mt-4">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary" name="submit">
                            </div>
                        </div>
                        <?php

                if(isset($_POST['submit'])){
                    include 'config.php';
                    if(empty($_POST['lname']) || empty($_POST['fname'])){
                        echo'<div class="input-container ic2" style="margin-bottom:50px;" ><div class="subtitle alert alert-danger " style="color:red;">Please Enter Firstname And Lastname</div></div>';
                    }
                    else  if(empty($_POST['email']) ){
                        echo'<div class="input-container ic2" style="margin-bottom:50px;" ><div class="subtitle alert alert-danger " style="color:red;">Please Enter Valid Email-id</div></div>';
                    }
                    else  if(empty($_POST['subject'])){
                        echo'<div class="input-container ic2" style="margin-bottom:50px;" ><div class="subtitle alert alert-danger " style="color:red;">Subject cannot be left Empty!!!</div></div>';
                    }

                    else
                    {
                        $stu_fname=$_POST['fname'];
                        $stu_lname=$_POST['lname'];
                        $stu_email=$_POST['email'];
                        $stu_subject=$_POST['subject'];
                        $stu_message=$_POST['message'];
                      $stu_name=$stu_fname." ".$stu_lname;



                    //   $conn=mysqli_connect("localhost","root","","carpool") or die("error");

                      $sql="INSERT INTO email(sender,name,subject,message)values('{$stu_email}','{$stu_name}','{$stu_subject}','{$stu_message}') ";
                     // echo $sql;
                     // die("error");
                     $result= mysqli_query($conn,$sql) or die("query inse");

                    //  header("Location: http://localhost/car/to-login/contact_new.php");
                     mysqli_close($conn);
                    }
                }
                ?>
                    </form>
                </div>
                <div class="col-lg-6 px-0 mb-5 mb-lg-0">
                    <div class="maps-container map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13979.446453087201!2d77.1045429!3d28.8429798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1635929051943!5m2!1sen!2sin"
                            width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include 'footer.php';

?>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>
