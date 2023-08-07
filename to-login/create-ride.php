<?php
ob_start();
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
$uid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Create-Ride</title>

    <link rel="stylesheet" href="css/maicons.css">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/create-ride.css">
    <style>
        header {
            margin-top: 0px;
        }

        .container input {
            margin-top:10px;
            height: 50px;
            width: 300px;
            border-radius: 25px;

        }

        .container .ride {
            border-radius: 100px;
        }

        .container img {
            height: 18rem;
            width: 20rem;
            border-radius: 20px;
            margin-right: 20px;
        }

        .container button {
            border-radius: 20px;
            margin-bottom: 5px;
        }

        .create {
            width: 229px;
        }
        .container select{
            margin-top: 10px;
            /* margin-bottom: 10px; */
            height: 50px;
            width: 300px;
            border-radius: 25px;

        }
    </style>
</head>

<body>
    <header>
        <?php include 'header.php';   ?>
        <div class="container">
            <div class="page-banner home-banner" style="height: 640px;">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h3 class="mb-4">Share your ride with others</h3>
                        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Pic Address"name="source" value="<?php echo $_POST['source']  ?>"  >
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Destination" name="destination" value="<?php echo $_POST['destination']  ?>">
                        </div>
                        <div class="form-floating">
                            <!-- <label>Class</label> -->
                            <select name="sclass" style="border-color: #d6dbd9;padding:10px;" onchange="javascript:handleSelect(this)">
                            <option value="" style="color:rgb(51, 49, 49); text-align: center; ">Add Vehichle</option>
                            <option value="1" style="color:rgb(51, 49, 49); text-align: center; ">  Click here to add Vehichle</option>
                                <?php
                                    $uid = $_SESSION['user_id'];
                                    $sql1="SELECT * from vehichle where user_id='{$uid}';";

                                    $result1 = mysqli_query($conn,$sql1) or die('query failed');
                                    if(mysqli_num_rows($result1)>0){
                                        while($row=mysqli_fetch_assoc($result1)){
                                           echo ' <option value="'.$row['vehichle_id'].'">'.$row['model'].'</option>';
                                        }
                                    }

                                ?>
                            </select>
                            <script type="text/javascript">
                                function handleSelect(elm){
                                    if(elm.value==1){
                                        window.location = "vehicle.php";
                                    }
                                }
                            </script>
                            </div>
                        <div class="form-floating">
                            <input type="date" class="form-control" placeholder="Destination" name="date">
                        </div>
                        <div class="form-floating">
                            <input type="time" class="form-control" placeholder="Destination" value="13:30" name="time">
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" placeholder="Available seats" min="1" name="seat">
                        </div>
                        <input type="submit" class="btn btn-primary create" name="generate" style="text-decoration: none;color:white;" value="Generate Ride">




                                <?php
                                 if(isset($_POST['generate'])){
                                    include 'config.php';
                                    $uid=$_SESSION['user_id'];
                                    $sql10="SELECT org_name,aadhar_no,pancard_no from user where pool_id='{$uid}';";
                                    $result10=mysqli_query($conn,$sql10);
                                    $row10=mysqli_fetch_assoc($result10);

                                        $src=$_POST['source'];
                                        $dest=$_POST['destination'];
                                        $veh=$_POST['sclass'];
                                        // $veh='123456';
                                        $date=$_POST['date'];
                                        $time=$_POST['time'];
                                        $seat=$_POST['seat'];
                                        $distance=500;
                                        $payment=20;
                                        $status=1;
                                        $avail_seat = 2;
                                    if(empty($_POST['source']) || empty($_POST['destination']) || $veh==1 || empty($date) ||empty($time) || empty($seat)){
                                        echo'<div class="input-container ic2" style="width: 300px;margin-top: 10px;
                                        position:absolute;" ><div class="subtitle alert alert-danger " style="color:red;">Please Enter All Details</div></div>';
                                        // die();
                                    }else if($row10['org_name']=="" || $row10['aadhar_no']=="" || $row10['pancard_no']==""){
                                        echo'<div class="input-container ic2" style="width: 300px;margin-top: 10px;
                                        position:absolute;" ><div class="subtitle alert alert-danger " style="color:red;">Verify User Before Create a Ride <a class="btn btn-sm btn-danger" href="user1.php" target="_blank">Verify</a></div></div>';
                                        // die();
                                    }
                                    else
                                    {



                                        $sql="INSERT INTO rides(ride_id,ride_vehichle,source,destination,payment,distance,total_seats,available_seats,Status,date,time)values(NULL,'{$veh}','{$src}','{$dest}','{$payment}','{$distance}','{$seat}','{$avail_seat}','{$status}','{$date}','{$time}');";
                                        $sql1="INSERT INTO takes(creater_id,user_id,ride_id)values({$uid},10000,LAST_INSERT_ID());";
                                       // echo $sql;
                                       // echo $sql1;
                                       // die();
                    //  die("error");
                    //  $result= mysqli_query($conn,$sql) or die("query inse");


                                        $result= mysqli_query($conn,$sql) or die("query failed");
                                        $result1= mysqli_query($conn,$sql1) or die("query failed");



                                        mysqli_close($conn);
                                        if($result && $result1){
                                            header("Location: {$hostname}/to-login/index.php");
                                        }
                                    }
                                }




                                ?>
    </form>
                        <!-- <button type="button" class="btn btn-primary back"><a href="get-ride.php"
                                style="text-decoration: none;color:white;text-align:center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                </svg></a></button> -->
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
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>
</body>

</html>
<?php
ob_flush();
?>
