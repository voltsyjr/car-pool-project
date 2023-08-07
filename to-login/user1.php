<?php 
ob_start();
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
$uid=$_SESSION['user_id'];
$sql10="SELECT org_name,aadhar_no,pancard_no from user where pool_id='{$uid}';";
$result10=mysqli_query($conn,$sql10);
$row10=mysqli_fetch_assoc($result10);
if($row10['org_name']!="" && $row10['aadhar_no']!="" && $row10['pancard_no']!=""){
    header("Location: {$hostname}/to-login/user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="css/ud.css?v=<?php echo time(); ?>"">
    <!-- <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/maicons.css?v=<?php echo time(); ?>">
    
    
    <link rel="stylesheet" href="vendor/animate/animate.css?v=<?php echo time(); ?>">
    
    <link rel="stylesheet" href="css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/user.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.5.1.min.js"></script> -->
</head>

<body>
    <style>
        @media (max-width:958px){
            .row{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }
            /* .row.ag{
                flex-direction: row;
            } */
            .row.ag .small{
                /* padding: 0; */
                width: 50%;
                margin-top: 10px;
            }
            .field{
                /* width: 80%; */
                padding: 0;
            }
        }
        @media (max-width:600px){
            
            .field{
                width: 80%;
                padding: 0;
            }
            .row.ag .small{
                /* padding: 0; */
                width: 80%;
            }
        }
        @media (max-width:960px){
            
            .user__types {
                display: flex;
                flex-direction: row;
            }
            .user__type {
                width: 210px;
                /* padding: 10px 10px; */
            }
        }
        @media (max-width:400px){
            .user__type {
                width: 210px;
                padding: 10px 20px;
            }
        }
    </style>
    <header>
        <?php
// include 'header.php';
        ?>
        <div class="container">
            <div class="navigation">
                <div class="logo">
                    <a href="index.php" style="color:#246eea;text-decoration:none"> Ride-X</a>
                </div>
                <div class="secure">
                    <span>Verification-details</span>

                </div>
            </div>
            <div class="notification">
                Please verify your profile
            </div>
        </div>
    </header>
    <section class="content">
        <div class="details shadow">
            <div class="details__item">

                <div class="item__image">
                    <img class="img" src="img.jpg" alt="">
                </div>
                <div class="item__details">
                    <?php 
                    include 'config.php';
                    $sql="SELECT * from user where pool_id='{$uid}';";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                    ?>
                    <div class="item__title">
                        <?php  echo $row['fname'].' '.$row['lname'];   ?>
                    </div>
                    <div class="item__price">
                        Login_details
                    </div>
                    <div class="item__description">
                        <ul style="color: #8f8f8f;">
                            <li><?php  echo '<b>FullName: </b>'.$row['fname'].' '.$row['lname'];   ?></li>
                            <li><?php  echo '<b>UserName: </b>'.$row['uname'];   ?></li>
                            <li><?php  echo '<b>Email ID: </b>'.$row['mail'];   ?></li>
                            <li><?php  echo '<b>Phone Number: </b>'.$row['phone'];   ?></li>
                            <!-- <li>Password</li> -->
                        </ul>

                    </div>

                </div>
            </div>

        </div>
        <div class="discount"></div>

        <div class="container">
            <div class="user">

                <div class="user__info" style="display: flex;flex-direction:column;">
                    <div class="user__cc">
                        <div class="user__title">
                            <i class="icon icon-user"></i>Personal Information
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                            <div class="form__cc">
                                <div class="row">
                                    <div class="field">
                                        <div class="title">Adhar Card Number
                                        </div>
                                        <input type="text" class="input txt text-validated"
                                            placeholder="XXXX XXXX XXXX XXXX" name="ad" required />
                                    </div>
                                    <div class="field">
                                        <div class="title">Pan Card Number
                                        </div>
                                        <input type="text" class="input txt text-validated" name="pn" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field">
                                    <div class="title">Organization Name
                                        </div>
                                        <input type="text" class="input txt" name="on" required/>
                                    </div>
                                    <div class="field">
                                    <div class="title">Referal-Code
                                        </div>
                                        <input type="text" class="input txt"  name="rf" value="<?php echo $row['referalcode'];   ?>" readonly/>
                                    </div>
                                </div>

                            </div>
                            <div class="container">
            <div class="actions">

                <input type="submit" class="btn" value="Save" name="save">
                <a href="user.php" class="backBtn">Go Back to Home</a>

            </div>
            <?php 
if(isset($_POST['save'])){
    $on=$_POST['on'];
    $rf=$_POST['rf'];
    $ad=$_POST['ad'];
    $pn=$_POST['pn'];
    function valid($ad){
        $abc=0;
        if(strlen($ad)!="16"){
            $abc=0;
        }else{
            $abc=1;
        }
        $i=0;
        $b=0;
        while($i<strlen($ad)){
            if($ad[$i]>=0 && $ad[$i]<=9){
                $b=1;
            }else{
                $b=0;
            }
            $i=$i+1;
        }
        return $abc && $b;
    }
    if(!valid($ad)){
        echo "<h2 style='color:red;text-align:center;position:relative;top:-900px;'>Please Entre Correct Aadhar Number</h2>";
        die();
    }
    if(strlen($pn)!=10){
        echo "<h2 style='color:red;text-align:center;position:relative;top:-900px;'>Please Entre Correct Pancard Number</h2>";
        die();
    }
    $sql1="UPDATE user 
    SET 
        org_name = '{$on}', aadhar_no='{$ad}',pancard_no='{$pn}',referalcode='{$rf}'
    WHERE
        pool_id = '{$uid}';";
    if(mysqli_query($conn,$sql1)){
        // header('Location: '.{$hostname}.')
        header("Location: {$hostname}/to-login/user.php");
    }
}
            ?>
        </div>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
</body>

</html>

<?php
ob_flush();
?>