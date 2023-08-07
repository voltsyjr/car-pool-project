<?php
session_start();
$vid=$_GET['vid'];
include 'config.php';
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
if(isset($_GET['tag'])){
    $sql="DELETE FROM vehichle WHERE vehichle_id='{$vid}';";
    $sql2="SELECT ride_id FROM rides WHERE ride_vehichle='{$vid}';";
    $result2=mysqli_query($conn,$sql2) or die('query failed');
    if(mysqli_num_rows($result2)>0){
        while($row2=mysqli_fetch_assoc($result2)){
            $sql3="DELETE FROM takes where ride_id='{$row2['ride_id']}';";
            mysqli_query($conn,$sql3);
        }
    }
    $sql4="DELETE FROM rides where ride_vehichle='{$vid}';";
    mysqli_query($conn,$sql4);
    if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/to-login/vehicle.php");
    }else{
        echo "<h1>Can't Delete vehicle ( query failed )</h1>";
    }
}else{
    $sql1="SELECT * from rides where ride_vehichle='{$vid}' and Status=1;";
    $result1=mysqli_query($conn,$sql1) or die('query failed');
    if(mysqli_num_rows($result1)>0){
        echo "<script>var choice=confirm('The Following Vehichle have Open Rides. Do You Still want to Delete this Vehichle. (Remember this will Delete all the rides with this vehichle)');
        if(choice){
            window.location.href = '".$hostname."/to-login/delete-vehichle.php?vid=".$vid."&tag=1';
        }else{
            window.location.href = '".$hostname."/to-login/vehicle.php';
        }
        </script>";
    }else{
        $sql="DELETE FROM vehichle WHERE vehichle_id='{$vid}';";
        $sql2="SELECT ride_id FROM rides WHERE ride_vehichle='{$vid}';";
        $result2=mysqli_query($conn,$sql2) or die('query failed');
        if(mysqli_num_rows($result2)>0){
            while($row2=mysqli_fetch_assoc($result)){
                $sql3="DELETE FROM takes where ride_id='{$row2['ride_id']}';";
                mysqli_query($conn,$sql3);
            }
        }
        $sql4="DELETE FROM rides where ride_vehichle='{$vid}';";
        mysqli_query($conn,$sql4);
        if(mysqli_query($conn,$sql)){
        header("Location: {$hostname}/to-login/vehicle.php");
        }else{
            echo "<h1>Can't Delet of vehicle failed</h1>";
        }
    }
}
?>