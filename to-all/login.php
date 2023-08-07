<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<style>
    body {
        /* align-items: center; */
        /* background-color: #000; */
        background: url(img/img1.jpeg);
        /* display: flex;
        justify-content: center; */
        /* height: 100vh; */
        padding-top: 70px;
        padding-bottom: 60px;
    }
    
    .form {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        /* height: 500px; */
        padding: 20px;
        width: 320px;
    }
    
    .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 36px;
        font-weight: 600;
        margin-top: 30px;
    }
    
    .subtitle {
        color: #eee;
        font-family: sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
    }
    
    .input-container {
        height: 50px;
        position: relative;
        width: 100%;
    }
    
    .ic1 {
        margin-top: 40px;
    }
    
    .ic2 {
        margin-top: 30px;
    }
    
    .input {
        background-color: #303245;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        font-size: 18px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
    }
    
    .cut {
        background-color: #15172b;
        border-radius: 10px;
        height: 20px;
        left: 20px;
        position: absolute;
        top: -20px;
        transform: translateY(0);
        transition: transform 200ms;
        width: 76px;
    }
    
    .cut-short {
        width: 50px;
    }
    
    .input:focus~.cut,
    .input:not(:placeholder-shown)~.cut {
        transform: translateY(8px);
    }
    
    .placeholder {
        color: #65657b;
        font-family: sans-serif;
        left: 20px;
        line-height: 14px;
        pointer-events: none;
        position: absolute;
        transform-origin: 0 50%;
        transition: transform 200ms, color 200ms;
        top: 20px;
    }
    
    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
    }
    
    .input:not(:placeholder-shown)~.placeholder {
        color: #808097;
    }
    
    .input:focus~.placeholder {
        color: #dc2f55;
    }
    
    .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
        /* // outline: 0; */
        text-align: center;
        width: 100%;
    }
    
    .submit:active {
        background-color: #06b;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.php" style="color: rgb(255, 255, 255);text-decoration: none;padding: 10px 20px;background-color: #15172b;border-radius: 10px;font-weight: 600;border: 3px solid #15172b;"> Ride-X</a>
            </div>
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-12" style="display: flex;justify-content: center;">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="pform">
                <div class="form">
                    <div class="title">Welcome</div>
                    <div class="subtitle">Let's goto Ride-X!</div>
                    <div class="input-container ic1">
                        <input id="username" class="input" type="text" placeholder=" " name="username"  />
                        <div class="cut"></div>
                        <label for="username" class="placeholder">Username</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="password" class="input" type="password" placeholder=" " name="password"  />
                        <div class="cut"></div>
                        <label for="password" class="placeholder">Password</label>
                    </div>
                    <button type="submit" class="submit" name="login">Login</button>
                    <div class="input-container ic2">
                        <div class="subtitle">Don't Have Account <a href="registration.php" style="color: #06b; padding: 4px 10px;background-color: #303245;border-radius: 5px;text-decoration: none;margin-left: 5px;"> Create One </a></div>
                    </div>
                <?php

                if(isset($_POST['login'])){
                    include 'config.php'; 
                    if(empty($_POST['username']) || empty($_POST['password'])){
                        echo'<div class="input-container ic2" style="margin-bottom:50px;" ><div class="subtitle alert alert-danger " style="color:red;">Please Enter password Or Username</div></div>';
                    }else
                    {
                
                        $username=mysqli_real_escape_string($conn,$_POST['username']);
                        $password=md5($_POST['password']);
                        $sql="SELECT pool_id, uname,fname,lname from user where uname='{$username}' AND password='{$password}'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            // starting session
                            session_start();
                            $_SESSION['username']=$row['uname'];
                            $_SESSION['user_id']=$row['pool_id'];
                            // $_SESSION['user_role']=$row['role'];
                            header("Location: {$hostname}/to-login/index.php");
                        }
                    }else{
                        echo'<div class="input-container ic2" style="margin-bottom:50px;" ><div class="subtitle alert alert-danger " style="color:red;">Username and Password Not matched</div></div>';
                    }
                    } 
                }
                
                
                ?>
                </div>
            </form>



            </div>
        </div>
    </div>
</body>

</html>

<?php
ob_end_flush();
?>