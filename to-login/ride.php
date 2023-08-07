<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
?>
<?php 
include 'config.php';
$gtx=$_GET['gtx'];
$uid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride-X(Ride Details)</title>
    <link rel="stylesheet" href="css/ride.css">
</head>

<body>
    <div class="fond">
        <?php
            $sql="SELECT * from rides where ride_id=$gtx";
            $sql1="SELECT fname,lname from user where pool_id=$uid";
            $result= mysqli_query($conn,$sql) or die("query failed");
            $result1= mysqli_query($conn,$sql1) or die("query failed");
            $row= mysqli_fetch_assoc($result);
            $row1= mysqli_fetch_assoc($result1);
?>
        <span class="s1">Ride</span>
        <div class="card">
            <div class="thumbnail">
                <img class="left" src="img/car.jpg" />
            </div>
            <div class="right">
                <h1>These are your ride details...</h1>
                <div class="author">
                    <h2><?php echo $row1['fname'].' '.$row1['lname']; ?></h2>
                </div>
                <div class="separator"></div>
                <p>
                    <dl>
                        <dt>Pick-Address.</dt>
                        <dd><?php echo $row['source']; ?></dd>
                        <dt>Destination.</dt>
                        <dd><?php echo $row['destination']; ?></dd>
                        <dt>Ride Id.</dt>
                        <dd><?php echo $row['ride_id']; ?></dd>
                        <dt>Date.</dt>
                        <dd><?php echo $row['date']; ?></dd>
                        <dt>Status.</dt>
                        <dd><?php if($row['Status']==1){
                                    echo 'Open';
                        }else if($row['Status']==2){
                            echo 'Completed';
                        }else if($row['Status']==3){
                            echo 'Canceled';
                        } ?></dd>
                        <dt>Distance.</dt>
                        <dd><?php echo $row['distance']; ?></dd>
                    </dl>
                </p>
            </div>
            <h5></h5>
            <h6></h6>
            <div class="fab">
                <a href="history.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                    </svg>
                </a>
            </div>
        </div>
        <script>
            let month = [
                "January",
                "Fabuary",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ];
            let a = new Date();
            Array.from(document.getElementsByTagName("h5")).forEach((e) => {
                e.innerHTML = a.getDate();
            });
            Array.from(document.getElementsByTagName("h6")).forEach((e) => {
                e.innerHTML = month[a.getMonth()];
            });
        </script>
    </div>
</body>

</html>