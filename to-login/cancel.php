<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
$rid=$_GET['rid'];
$uid=$_SESSION['user_id'];
include 'config.php';
if(isset($_GET['tag'])){
    if($_GET['tag']==1){
        // $sql2="DELETE FROM takes where ride_id='{$rid}';";
        // $sql3="DELETE FROM rides where ride_id='{$rid}';";
        // mysqli_query($conn,$sql2);
        // mysqli_query($conn,$sql3);
        $sql3="UPDATE rides SET Status=3 where ride_id='{$rid}';";
            // mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql3);
        header("Location: {$hostname}/to-login/index.php");
    }else if($_GET['tag']==2){
        $sql2="UPDATE takes 
        SET user_id=10000
        WHERE ride_id='{$rid}'";
        $sql3="UPDATE rides 
        SET book_status=0
        WHERE ride_id='{$rid}'";
        mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql3);
        header("Location: {$hostname}/to-login/index.php");
    }
}else{
    $sql1="SELECT * from takes where ride_id='{$rid}';";
    $result1=mysqli_query($conn,$sql1) or die('query failed');
    if(mysqli_num_rows($result1)>0){
        $row1=mysqli_fetch_assoc($result1);
        if($row1['user_id']==$uid){
            echo "<script>var choice=confirm('Do You want to cancel this ride.');
            if(choice){
                window.location.href = '".$hostname."/to-login/cancel.php?rid=".$rid."&tag=2';
            }else{
                window.location.href = '".$hostname."/to-login/index.php';
            }
            </script>";
        }else if($row1['user_id']!=10000 && $row1['creater_id']==$uid){
            echo "<script>var choice=confirm('This ride is Booked by someone. Do you still want to cancel this Ride.');
            if(choice){
                window.location.href = '".$hostname."/to-login/cancel.php?rid=".$rid."&tag=1';
            }else{
                window.location.href = '".$hostname."/to-login/index.php';
            }
            </script>";
        }else{
            // $sql2="DELETE FROM takes where ride_id='{$rid}';";
            // $sql3="DELETE FROM rides where ride_id='{$rid}';";
            // mysqli_query($conn,$sql2);
            // mysqli_query($conn,$sql3);
            $sql3="UPDATE rides SET Status=3 where ride_id='{$rid}';";
            // mysqli_query($conn,$sql2);
            mysqli_query($conn,$sql3);
            header("Location: {$hostname}/to-login/index.php");
            
        }
    }
}



?>