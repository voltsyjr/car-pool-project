<?php
session_start();
include 'config.php';
$rid=$_GET['rid'];
$uid=$_SESSION['user_id'];
$sql="UPDATE takes 
SET 
    user_id = {$uid}
WHERE
    ride_id = {$rid};";
    
$sql1="UPDATE rides 
SET 
    book_status = 1
WHERE
    ride_id = {$rid};";
if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1)){
    // header('Location: '.{$hostname}.')
    header("Location: {$hostname}/to-login/index.php");
}

?>