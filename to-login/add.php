<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
if(isset($_POST['add'])){
    $model=$_POST['model'];
    $num=$_POST['num'];
    $seat=$_POST['seat'];
    $color=$_POST['color'];
    $type=$_POST['vehicle'];
    if($model=="" || $num=="" || $seat==""  ||$color=="" ||$type==""){
        header("Location: {$hostname}/to-login/vehicle.php");
        die();
    }
    $sql="INSERT INTO vehichle (model,seats,color,type,vehichle_no,user_id) VALUES ('{$model}','{$seat}','{$color}','{$type}','{$num}','{$_SESSION['user_id']}')";
    if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/to-login/vehicle.php");
    }else{
        echo "<h1>Addition of vehicle failed</h1>";
    }
}else if(isset($_POST['edit'])){
    $model=$_POST['model'];
    $num=$_POST['num'];
    $seat=$_POST['seat'];
    $color=$_POST['color'];
    $type=$_POST['vehicle'];
    $vid=$_POST['vid'];
    $sql="UPDATE vehichle 
    SET model='{$model}',seats='{$seat}',color='{$color}',type='{$type}',vehichle_no='{$num}',user_id='{$_SESSION['user_id']}'
    WHERE vehichle_id='{$vid}'";
    if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/to-login/vehicle.php");
    }
}



















?>