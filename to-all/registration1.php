<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>registration page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Slabo+27px&display=swap');

        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #d1dbeb;
            /* height: 100vh; */
            /* width: 100vw; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-fluid {
            background-color: #d1dbeb;
            border-radius: 25px;
            /* height: 540px; */
            width: 320px;
            box-shadow: -3px -3px 5px #ffffff70, 3px 3px 15px #00000070;
            margin-top:60px;
            margin-bottom: 30px;
            padding: 10px;
        }

        .btn {
            margin-top: 10vh;
            height: 50px;
            width: 70px;
            border-radius: 16px 16px 25px 25px;
            width: 100%;
            margin-top: 0.4vh;
        }

        .b {
            margin-top: 4vh;

        }

        h3 {
            margin: 0 6vh;
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            font-family: 'Slabo 27px', serif;
        }

        input {
            border-radius: 12px !important;
            background-color: #d1dbeb !important;
            box-shadow: inset 2px 2px 5px #ffffff70, inset -2px -2px 5px #00000070;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <h3>Sign up</h3>
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

$sql = "SELECT uname from user where uname='{$user}'";
$result = mysqli_query($conn,$sql) or die("Querry failed");
if(mysqli_num_rows($result)>0){
    echo "<p style='color: red; text-align: center; margin: 10px 0;'>User Name Already Exist</p>";
}else{
    if($password!=$cpassword){
        echo "<p style='color: red; text-align: center; margin: 10px 0;'>Password Not Matched</p>";
    }else{
        $sql1 = "INSERT INTO user (fname, lname, uname, password, mail,phone,pool_id) VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$email}','{$phone}',67652);";
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
mysqli_close($conn);
}
?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="pform">
            <div class="mb-3">
                <label for="firstname" class="form-label"></i></label>
                <input placeholder="Enter your First Name" type="text" class="form-control" id="firstname" name="fname" required>
            </div>
            <div class="mb-3">
                <label for="secondname" class="form-label"></i></label>
                <input placeholder="Enter your Second Name" type="text" class="form-control" id="secondname" name="lname" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputusername" class="form-label"></i></label>
                <input placeholder="Enter your Username" type="text" class="form-control" id="exampleInputusername" name="uname" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputemail" class="form-label"></i></label>
                <input placeholder="Enter your Email-id" type="email" class="form-control" id="exampleInputemail" name="email" required>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputphonenumber" class="form-label"></i></label>
                <input placeholder="Enter your phonenumber" type="text" class="form-control" id="exampleInputusername" name="phone" required>
            </div>
            <div class="mb-3 password">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" placeholder="Enter your Password" class="form-control"
                    id="exampleInputPassword1" name="password" required>
            </div>
          
            <?php 



?>
            <div class="mb-3 password">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" placeholder="confirm your Password" class="form-control"
                    id="exampleInputPassword1" name="cpassword" required>
            </div>
            <div class="b" style="text-align: center;">
                <button type="submit" class="btn btn-info" name="save">Sign-up</button>
            </div>
        </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>