<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="password_hide.css">
</head>
<style>
    body {
        /* align-items: center; */
        /* background-color: #000; */
        background: url(img/img1.jpeg);
        /* display: flex;
        justify-content: center;
        height: 100vh; */
    }

    .form {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        /* height: 500px; */
        padding: 20px;
        /* width: 320px; */
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
        <div class="row" style="margin-top: 50px;">
            <div class="col">
                <a href="index.php" style="color: rgb(255, 255, 255);text-decoration: none;padding: 10px 20px;background-color: #15172b;border-radius: 10px;font-weight: 600;border: 3px solid #15172b;"> Ride-X</a>
            </div>
        </div>
        <div class="row" style="display: flex;justify-content: center;align-items: center;">
            <div class="col-12 col-md-7">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="pform">
                    <div class="form" style="margin-top: 60px;margin-bottom: 60px;">
                        <div class="title">Welcome</div>
                        <div class="subtitle">Let's create your account!</div>


                        <?php
    include 'config.php';
    if(isset($_POST['save'])){
    // include "config.php";
    $fname= mysqli_real_escape_string($conn,$_POST['fname']);
    $lname= mysqli_real_escape_string($conn,$_POST['lname']);
    $user= mysqli_real_escape_string($conn,$_POST['uname']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn,$_POST['phone']);
    $password= mysqli_real_escape_string($conn,md5($_POST['password']));
    $cpassword= mysqli_real_escape_string($conn,md5($_POST['cpassword']));
    // $role= mysqli_real_escape_string($conn,$_POST['role']);

    $sql = "SELECT uname from user where uname='{$user}';";

    //echo "<h1 style='color:white;'>".$sql."</h1>";
    // echo "<h1 style='color:white;'>".print_r($conn)."</h1>";
    $result = mysqli_query($conn,$sql) or die("<h1 style='color:white;'>Querry failed</h1>");
    //echo "<h1>".$sql."</h1>";
    if(mysqli_num_rows($result)>0){
        echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>User Name Already Exist</p>";
    }else{
        if($password!=$cpassword){
            echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Password Not Matched</p>";
        }else{
            if($user==""){
                echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Please Enter Username</p>";
            }else if($fname==""){
                echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Please Enter First Name</p>";
            }else if($lname==""){
                echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Please Enter Last Name</p>";
            }else if($email==""){
                echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Please Enter Email Id</p>";

            }else if($phone==""){
                echo "<p style='color: red; text-align: center; margin: 10px 0;' class='alert alert-danger'>Please Enter Phone Number</p>";

            }else{
                $refrer=$user."abc";
                $sql1 = "INSERT INTO user (fname, lname, uname, password, mail,phone,referalcode) VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$email}','{$phone}','{$refrer}');";
                // echo $sql1;
                // die();
                if(mysqli_query($conn, $sql1)){
                    session_start();
                    $sql2="SELECT uname,pool_id from user where uname = '{$user}';";
                    $result2 = mysqli_query($conn,$sql2) or die("Querry failed");
                    $row2=mysqli_fetch_assoc($result2);
                    $_SESSION['username']=$row2['uname'];
                    $_SESSION['user_id']=$row2['pool_id'];
                    header("Location: {$hostname}/to-login/index.php");
                }
            }
        }
    }
    mysqli_close($conn);
    }
    ?>





                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic1">
                                    <input id="fname" class="input" type="text" placeholder=" " name="fname" value="<?php if(isset($_POST['save'])){
                                        echo $fname;
                                    }   ?>" />
                                    <div class="cut"></div>
                                    <label for="fname" class="placeholder">First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic1">
                                    <input id="lname" class="input" type="text" placeholder=" " name="lname" value="<?php if(isset($_POST['save'])){
                                        echo $lname;
                                    }   ?>" />
                                    <div class="cut"></div>
                                    <label for="lname" class="placeholder">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic1">
                                    <input id="uname" class="input" type="text" placeholder=" " name="uname" value="<?php if(isset($_POST['save'])){
                                        echo $user;
                                    }   ?>" />
                                    <div class="cut"></div>
                                    <label for="uname" class="placeholder">Username</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic1">
                                    <input id="email" class="input" type="text" placeholder=" " name="email" value="<?php if(isset($_POST['save'])){
                                        echo $email;
                                    }   ?>" />
                                    <div class="cut"></div>
                                    <label for="email" class="placeholder">Email Id</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic1">
                                    <input id="phone" class="input" type="text" placeholder=" " name="phone" value="<?php if(isset($_POST['save'])){
                                        echo $phone;
                                    }   ?>" />
                                    <div class="cut"></div>
                                    <label for="phone" class="placeholder">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic2">
                                <input type="password" id="password" name="password" placeholder=" " class="input" />
                                <div class="cut"></div>
                                <label for="password" class="placeholder">Password </label>
        <input type="checkbox" id="toggle-password" />
        <label for="toggle-password">Show Password</label>
                                </div>
                                <script>
                         const password = document.getElementById("password");
const togglePassword = document.getElementById("toggle-password");

togglePassword.addEventListener("click", toggleClicked);

function toggleClicked() {
  password.classList.toggle("visible");
  if (this.checked) {
    password.type = "text";
  } else {
    password.type = "password";
  }
}


            </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="input-container ic2">
                                    <input id="cpassword" class="input" type="password" placeholder=" " name="cpassword" />
                                    <div class="cut"></div>
                                    <label for="cpassword" class="placeholder">Confirm Password</label>
                                    <!-- my password hide work -->

                                </div>
                            </div>
                        </div>
                        <button type="text" class="submit" name="save">submit</button>
                        <div class="input-container ic2">
                            <div class="subtitle">Already Have Account <a href="login.php" style="color: #06b; padding: 4px 10px;background-color: #303245;border-radius: 5px;text-decoration: none;margin-left: 5px;"> Login </a></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
