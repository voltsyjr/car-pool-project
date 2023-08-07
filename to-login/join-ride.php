<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
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

</head>
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        <?php  include 'header.php'     ?>
</header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Join others</title>


    <link rel="stylesheet" href="css/maicons.css">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="new.css">
</head>
<body >
<div class="container content mt-5">
        <div class="row address">
            <div class="col-md-6">
                <div class="mb-3 ">
                    <input type="text" class="form-control" id="exampleInputtext" style="width:250px" aria-describedby="textHelp"
                        placeholder="pick-address" value="<?php if(isset($_GET['source'])){
                            echo $_GET['source'] ;
                        }else{
                            echo "";
                        } ?>" readonly>   
            <div style="position: relative;top:-35px;left:460px;font-size: 20px;font-weight:600;color:grey;">to</div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputtext" aria-describedby="textHelp " style="width:250px"
                        placeholder="Destination"  value="<?php if(isset($_GET['source'])){
                            echo $_GET['destination'] ;
                        }else{
                            echo "";
                        } ?>" readonly>
                </div>
            </div>
            <div class="col-2" style="text-align: right;" > <a href="get-ride.php"> <button class=" btn btn-primary btn-sm" style="margin-top: 5px;"> Go Back</button></a></div>
        </div>
        <?php
  
    $sql="SELECT * from rides where source='{$_GET['source']}' AND destination='{$_GET['destination']}' AND status=1 AND book_status=0;";
    // echo $sql;
    // die();
   $result= mysqli_query($conn,$sql) or die("query inse");
   $sql1="SELECT phone from user, vehichle where pool_id=user_id in (SELECT user_id from rides ,vehichle where ride_vehichle= vehichle_id);";
   $result1= mysqli_query($conn,$sql1) or die("query inse");
//    echo $result;1 ;
//    die("error")
   if(mysqli_num_rows($result)>0)
   {

    ?>
 
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1" style="flex-basis: 120px;">Source</div>
                <div class="col col-2"style="flex-basis: 120px; text-align: center">Dest</div>
                <div class="col col-3" style="flex-basis: 120px;">Seats</div>
                <div class="col col-4" style="flex-basis: 120px;">Time</div>
                <div class="col col-5" style="flex-basis: 120px;">Fare</div>
                <div class="col col-5" style="flex-basis: 120px;">Contact</div>

                <div class="col col-7" style="flex-basis: 120px;" >Action</div>
            </li>
            <?php
            while($row=mysqli_fetch_assoc($result) ){
                $vid=$row['ride_vehichle'];
                $sql1="SELECT phone from user, vehichle where vehichle.vehichle_id='{$vid}'  AND vehichle.user_id=user.pool_id;";
   $result1= mysqli_query($conn,$sql1) or die("query inse");
   $row1=mysqli_fetch_assoc($result1);

            ?>
            <li class="table-row">
                <div class="col col-1" data-label="Source"  style="flex-basis: 120px;" ><?php  echo  $row['source'] ;?></div>
                <div class="col col-2" data-label="Destination"style="flex-basis: 120px; text-align: center"><?php  echo  $row['destination'] ;?></div>
                <div class="col col-3" data-label="Seats"  style="flex-basis: 120px; text-align:center"><?php  echo  $row['available_seats'] ;?></div>
                <div class="col col-4" data-label="Time"  style="flex-basis: 120px;"><?php  echo   $row['time'] ;?></div>
                <div class="col col-6" data-label="Fare"  style="flex-basis: 120px;"><?php  echo  $row['payment'] ;?></div>
                <div class="col col-5" data-label="Contact"  style="flex-basis: 120px;"><?php  echo  $row1['phone'] ;?></div>
                <div class="col col-7" data-label="Book"  style="flex-basis: 120px;"> <a href="book.php?rid=<?php echo $row['ride_id'];  ?>"><button type="button"
                        class="btn btn-primary btn-sm">Book</button></a> </div>
            </li>
            <?php } ?>
           
        </ul>
        <?php }   else 
    {
      echo'<h2 style="color: red;text-align:center;margin-bottom:90px;"> SORRY!!!  NO RIDES AVAILABLE!!  </h2> ';
    }
    mysqli_close($conn);
    ?>
        <button class="go-back"><a href="get-ride.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-left"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </a></button>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>
    <?php include 'footer.php'?>
</body>
</html>