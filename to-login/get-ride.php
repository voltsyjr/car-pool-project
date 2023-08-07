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

    <title>Book-Ride</title>

    <link rel="stylesheet" href="css/maicons.css">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="css/theme.css">
    <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/select2.min.css">
    <script src="js/select2.min.js"></script>
    <style>
        header {
            margin-bottom: 60px;
        }

        .container input {
            margin-top: 40px;
            margin-bottom: 25px;
            height: 50px;
            width: 300px;
            border-radius: 25px;
        }

        .container .ride {
            border-radius: 100px;
        }

        .container button {
            margin-left: 10px;
            border-radius: 20px;
        }

        .container img {
            height: 18rem;
            width: 20rem;
            border-radius: 20px;
            margin-right: 20px;
        }
        /* select css / */
       .select2-selection.select2-selection--single{
            height: 40px !important;
        }
        .select2-selection__rendered{
            font-size: 19px;
            padding-top: 5px;
        }
        .select2-selection__arrow{
            height: 39px !important;
        }
        .select2-search__field{
            outline: none;
            border-radius: 3px;
            box-shadow: 0 0 4px 0.5px #389bf0;

        }
        .hv{
            transition: all 0.3s;
        }
        .hv:hover{
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <header>
        <?php   include 'header.php';  ?>

        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Let's Go For a ride</h1>
                        <form action="create-ride.php" method="POST">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <select name="source" style="border-color: #d6dbd9;padding:10px; border-radius: 10px; width: 100% !important;padding-right:20px;" id="source" class="operator">
                                        <option value="" selected  style=" text-align: left; color:grey; ">Enter Source</option>
                                            <?php
                                            // include 'header.php';
                                                $uid = $_SESSION['user_id'];
                                                $sql1="SELECT * from city_name order by city asc";
                                                $result1 = mysqli_query($conn,$sql1) or die('query failed');
                                                if(mysqli_num_rows($result1)>0){
                                                    while($row=mysqli_fetch_assoc($result1)){
                                                        echo ' <option value="'.$row['city'].'">'.$row['city'].'</option>';
                                                    }
                                                }
                                                mysqli_close($conn);

                                            ?>
                                        </select>
                  </div>
            </div>
                  <div class="row">
                               <div class="col-12">
                               <select name="destination" style="border-color: #d6dbd9;padding:10px; border-radius: 10px; width: 100% !important;padding-right:20px; margin-bottom:40px;" id="destination" class="operator">
                                    <option value="" selected  style=" text-align: left; color:grey; ">Enter Destination</option>
                                        <?php
                                        include 'header.php';
                                            $uid = $_SESSION['user_id'];
                                            $sql1="SELECT * from city_name order by city asc";
                                            $result1 = mysqli_query($conn,$sql1) or die('query failed');
                                            if(mysqli_num_rows($result1)>0){
                                                while($row=mysqli_fetch_assoc($result1)){
                                                    echo ' <option value="'.$row['city'].'">'.$row['city'].'</option>';
                                                }
                                            }
                                            mysqli_close($conn);

                                        ?>
                                    </select>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-6" ><div class="col-1"></div>
                                <div class="col-11 hv" style="box-shadow: 0 0 5px 3px #c0b9ec;padding:0;margin-top:35px;padding-top:10px;border-radius:5px;padding-bottom:10px;">
                                    <div class="col-12">Don't Have a Vehichle Get Ride</div>
                                    <button type="button" class="btn btn-primary" style="width: 80%;"><a href="join-ride.php" name="get-ride"
                                        style="text-decoration: none;color:white;" id="join">Get
                                        Ride</a></button>

                                </div>
                                </div>
                                <div class="col-6" ><div class="col-1"></div>
                                <div class="col-11 hv" style="box-shadow: 0 0 5px 3px #c0b9ec;padding:0;margin-top:35px;padding-top:10px;border-radius:5px;padding-bottom:10px;">
                                    <div class="col-12">Have a Vehichle Create Ride</div>
                                        <button type="submit" class="btn btn-primary">Create
                                Ride</button>

                                </div>
                                </div>
                            </div>
    <script>
        $(document).ready(function(){
            console.log("yes111");
        //change selectboxes to selectize mode to be searchable
        $("#source").select2({
            allowClear: true,
            placeholder: "Enter Source"
        });
        $("#destination").select2({
            allowClear: true,
            placeholder: "Enter Destination"
        });
            $('#source').change(function(){
                let source=$('#source').val();
                let destination=$('#destination').val();
                let link = "join-ride.php?source="+source+"&destination="+destination;
                $('#join').attr("href",link);
                console.log(link);
            })
            $('#destination').change(function(){
                let source=$('#source').val();
                let destination=$('#destination').val();
                let link = "join-ride.php?source="+source+"&destination="+destination;
                $('#join').attr("href",link);
                console.log(link);
            })
});
    </script>

                        </form>
                    </div>
                    <div class="col-md-6 py-5 wow zoomIn">
                        <div class="img-fluid text-center">
                            <img src="img/ride-img.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
       <?php
include 'footer.php';

?>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>

</body>

</html>
