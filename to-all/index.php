<?php ob_start();

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RIDE-X</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/style_made.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Oswald:200,300,400,500,600,700", "Droid Sans:400,700",
                    "Roboto:300,regular,500"
                ]
            }
        });
    </script>

    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="img/webclip.png" rel="apple-touch-icon">
    <style media="screen">
    .images{
      display: grid;
      grid-template-columns: auto auto;
      grid-template-columns: auto auto;
    }
   .images a div img{
     height: 15rem;
     width: 25rem;
     margin:1rem 1rem;
     border-radius: 30px;
   }
   .images a div{
     display: flex;
     justify-content: center;
     align-items: center;
   }
   .section-title-group{
     margin-bottom: 2vh;
   }
   .gallery{
     background-color: white;
   }
   @media only screen and (max-width: 800px) {
     .images a div img{
       height: 15vh;
       width: 39vw;
       margin:1rem 1rem;
       border-radius: 1rem;
     }

}
    </style>
</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-no-scroll="1" class="left-navigation w-nav">
        <a href="index.php" class="logo-link w-nav-brand">
            <h1 class="brand-text">RIDE-X</h1>
        </a>
        <nav role="navigation" class="nav-menu w-nav-menu"><a href="#home" class="nav-link w-nav-link">Home</a><a href="#about" class="nav-link w-nav-link">About</a><a href="#img" class="nav-link w-nav-link">Gallery</a><a href="#contact" class="nav-link w-nav-link">Contact</a></nav>
        <div class="hamburger-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
        <div class="social-footer w-hidden-medium w-hidden-small w-hidden-tiny">
            <a href="#" class="social-icon-link w-inline-block"><img src="predata/54d24db50d5fbeb671afdfd5_social-03-white.svg" width="17" alt=""></a>
            <a href="#" class="social-icon-link w-inline-block"><img src="predata/54d24de00d5fbeb671afdfe7_social-18-white.svg" width="17" alt=""></a>

            <a href="#" class="social-icon-link w-inline-block"><img src="predata/54e77bf6942b09583a0ebbca_social-30-white.svg" width="17" alt=""></a>
        </div>
    </div>
    <div class="content">
    <div id="home" class="banner">
            <div class="hero-title-wrapper">
                <h1 class="hero-heading">Welcome to Ride-X</h1>
                <div class="hero-subheading">WAY TO FAST AND ECONOMICAL RIDE!!</div>
                <!-- HERE COMES THE LOGIN SIGNUP PAGE SETUP********** -->
                <div><a href="login.php" class="hollow-button white">LOGIN</a><a href="registration.php" class="hollow-button red">SIGN-UP
                    </a></div>
            </div>
        </div>
        <section id="about" class="section">
            <div class="w-container">
                <div class="section-title-group">
                    <h2 class="section-heading centered">ABOUT US</h2>

                </div>
                <div class="w-row">
                    <div class="column-0-padding w-col w-col-3"><img src="img/price.svg" width="100" alt="" class="grid-image">
                        <h3>Low Price</h3>
                        <p>No matter where you’re going, by bus or carpool, find the perfect ride from our wide range of destinations and routes at low prices.
                        </p>
                    </div>
                    <div class="column-0-padding w-col w-col-3"><img src="img/trust.svg" width="100" alt="" class="grid-image">
                        <h3>Trust</h3>
                        <p>We take the time to get to know each of our members and bus partners. We check reviews, profiles and IDs, so you know who you’re travelling with.
                        </p>
                    </div>
                    <div class="column-0-padding w-col w-col-3"><img src="predata/setting.svg" width="100" alt="" class="grid-image">
                        <h3>Click and go</h3>
                        <p>Booking a ride has never been easier! Thanks to Car-Pool powered by great technology, you can book a ride in just minutes.
                        </p>
                    </div>
                    <div class="column-0-padding w-col w-col-3"><img src="img/option.svg" width="100" alt="" class="grid-image">
                        <h3>OPTIONS</h3>
                        <p>In our plateform,You will get different vehicle options so that you can choose best vehicle that fits to your comfort in a easy manner.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="gallery" id="img">
          <div class="section-title-group">
              <h2 class="section-heading centered"> GALLERY</h2>
              <div class="section-subheading center">Glimpse of our Ride-X</div>
          </div>
          <div class="container images">
            <a href="img/ss1.png"><div><img src="img/ss1.png" alt=""></div></a>
           <a href="img/ss2.png"><div><img src="img/ss2.png" alt=""></div></a>
           <a href="img/ss3.png"><div><img src="img/ss3.png" alt=""></div></a>
           <a href="img/ss4.png"><div><img src="img/ss4.png" alt=""></div></a>
          </div>
        </div>
        <section id="contact" class="section section-gray">
            <div class="w-container">
                <div class="section-title-group">
                    <h2 class="section-heading centered">Contact Form</h2>
                    <div class="section-subheading center">Please Feel free to contact us any time we will try to reply you as soon as possible.</div>
                </div>
                <div class="form-wrapper squeezed w-form">
                    <form id="email-form" name="email-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                        <div class="w-row">
                            <div class="column-remove-padding w-col w-col-6">
                                <input type="text" id="name" name="name" placeholder="Your Name" maxlength="256" class="form-field w-input" required=""></div>
                            <div class="column-remove-padding w-col w-col-6">
                                <input type="email" id="email" name="email"  placeholder="Your Email Id" maxlength="256" required="" class="form-field w-input"></div>
                        </div>
                                <textarea id="field-4" name="message" placeholder="Type Message Here" maxlength="5000" class="form-field text-area w-input"></textarea>
                                <input type="submit" value="Send Message" class="button full-width w-button" name="submit" id="submit">
                        <?php
                        if(isset($_POST['submit'])){

                            // setting up connection
                            // $conn = mysqli_connect("localhost","root","","mynews")or die("Coneection failed: ". mysqli_connect_error());
                            include "config.php";
                            $name= mysqli_real_escape_string($conn,$_POST['name']);
                            $email= mysqli_real_escape_string($conn,$_POST['email']);
                            $message= mysqli_real_escape_string($conn,$_POST['message']);

                            $sql = "INSERT INTO email (sender, Name, Message) VALUES ('$email','$name','$message');";
                                if(mysqli_query($conn, $sql)){
                                    header("Location: {$hostname}/to-all/successfull.php?stat=1");
                                }else{
                                    header("Location: {$hostname}/to-all/successfull.php?stat=0");
                                }

                            mysqli_close($conn);
                            }
                        ?>
                    </form>
                </div>
            </div>
        </section>
        <footer class="footer center">
            <div class="w-container">
                <div class="footer-text">Copyright Ride-X</div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/index.js" type="text/javascript"></script>
</body>

</html>
<?php ob_flush(); ?>
