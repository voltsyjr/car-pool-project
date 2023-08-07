<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/car/to-all/index.php");
}
$uid=$_SESSION['user_id'];
?>
<?php
include 'config.php';
// session_start();
$uname=$_SESSION['username'];
if(isset($_POST['submit'])){
    $photo="";
  if(isset($_FILES['photo'])){
            $errors= array();
            //geting filename by using name attribute
            $file_name=$_FILES['photo']['name'];
            //geting filesize by using size attribute
            if($file_name==""){
                goto label;
            }
            $file_size=$_FILES['photo']['size'];
            //geting filetmp by using tmp_name attribute
            $file_tmp=$_FILES['photo']['tmp_name'];
            //geting file type by using type attribute
            $file_type=$_FILES['photo']['type'];
            //geting file extension by using explode function
            $jj= explode('.',$file_name);
            $mm= end($jj);
            $file_ext= strtolower($mm);
            function preventMaliciousFile($file,$tmpname) {
                $MIME_TYPE=mime_content_type($tmpname);
                $ALLOWED_MIME_TYPE= array("image/jpeg","application/pdf","image/png","text/plain","application/msword","application/vnd.openxmlformats-officedocument.wordprocessingml.document"); // jpg,pdf,png,txt,doc,docx
                $arrtocheck=array("txt"=>"text/plain","jpg"=>"image/jpeg","jpeg"=>"image/jpeg","pdf"=>"application/pdf","png"=>"image/png","doc"=>"application/msword","docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                $ALLOWED_EXENTIONS=array("jpg","jpeg","png","pdf","txt","doc","docx");
                if(in_array($MIME_TYPE,$ALLOWED_MIME_TYPE)){
                    $parts= explode('.',$file);
                    $number_of_parts=count($parts);
                    echo $file."<br>".$MIME_TYPE."<br>".$tmpname."<br>".$number_of_parts."<br>";
                    if($number_of_parts>2){
                        echo "no2";
                        return 0;
                    }else{
                        $lastpart= end($parts);
                        $file_ext= strtolower($lastpart);
                        if(in_array($file_ext,$ALLOWED_EXENTIONS)){
                            if($arrtocheck[$file_ext]==$MIME_TYPE){
                                echo 'yes';
                                return 1;
                            }else{
                                echo "no5";
                                return 0;
                            }
                        }else{
                            echo "no1";
                            return 0;
                        }
                    }
                }else{
                    echo "no3";
                    return 0;
                }
                
            }
            preventMaliciousFile($_FILES['photo']['name'],$file_tmp=$_FILES['photo']['tmp_name']);
            echo "<h1>hanji</h1>";
            die();
            // explode function "." ke bad ka nam de dega jaise in img.jpg m ye explode agr hm '.' pr lgate h to y '.' ke bad ka jpg chodega bo end fun hmain dega
            $extensions=array("jpeg","jpg","png");
            //Checking wheather extension is correct or not
            if(in_array($file_ext,$extensions)===false){
                $errors[]="This extension formate is not allowed, Please chose out of jpeg, jpg, png file.";
            }
            // restricting file size to be not more than 2mb
            // remember here size is in bytes so first convert size to bytes
            if($file_size>2097152){
                $errors[]="Files size must be 2mb or lower.";
            }

            // cheching if there comes any error in abobe condition  Use empty function to check if errors array is empty or not
            if(empty($errors)==true){
                //if no error than upload file
                // adding serevr time after name of image
                $new_name=time()."-".basename($file_name);
                $image_name=$new_name;
                $target="user-img/".$image_name;
                $photo=$target;
                move_uploaded_file($file_tmp,$target) or die("\n\nNot uploaded");
            }else{
                print_r($errors);
                die();
            }
        }else{

        }




    label:
    $fname= mysqli_real_escape_string($conn,$_POST['fname']);
    $lname= mysqli_real_escape_string($conn,$_POST['lname']);
    // $photo= mysqli_real_escape_string($conn,$_POST['photo']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn,$_POST['phone']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);
    $gend= mysqli_real_escape_string($conn,$_POST['gend']);
    $profession= mysqli_real_escape_string($conn,$_POST['profession']);
    $password= mysqli_real_escape_string($conn,md5($_POST['passw']));
    if($photo==""){
        if($password=="d41d8cd98f00b204e9800998ecf8427e"){
            $sql3 = "UPDATE user
            SET
                fname = '{$fname}', lname='{$lname}',mail='{$email}',phone='{$phone}',age='{$age}',gender='{$gend}',profession='{$profession}'
            WHERE
                uname = '{$uname}';";
        }else{
            $sql3 = "UPDATE user
            SET
                fname = '{$fname}', lname='{$lname}',mail='{$email}',phone='{$phone}',age='{$age}',gender='{$gend}',password='{$password}',profession='{$profession}'
            WHERE
                uname = '{$uname}';";

}
    }else{
        if($password=="d41d8cd98f00b204e9800998ecf8427e"){
            // $photos = "img/".$photo;
            $sql3 = "UPDATE user
        SET
            fname = '{$fname}', lname='{$lname}',photo='{$photo}',mail='{$email}',phone='{$phone}',age='{$age}',gender='{$gend}',profession='{$profession}'
        WHERE
            uname = '{$uname}';";
        }else{
            // $photos = "img/".$photo;
            $sql3 = "UPDATE user
        SET
            fname = '{$fname}', lname='{$lname}',photo='{$photo}',mail='{$email}',phone='{$phone}',age='{$age}',gender='{$gend}',password='{$password}',profession='{$profession}'
        WHERE
            uname = '{$uname}';";

}

}
$result3 = mysqli_query($conn,$sql3) or die("Querry failed");
if(mysqli_query($conn, $sql3)){
        header("Location: {$hostname}/to-login/user.php");
    }
     //echo $password;
    // echo $sql3;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride-X</title>

    <link rel="stylesheet" href="css/maicons.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="vendor/animate/animate.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/user.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php
                            $sql = "SELECT fname,lname,phone,mail,referalcode,photo,gender,profession,uname,age,password,profession from user where uname='{$uname}';";
                            $result =  mysqli_query($conn,$sql) or die("Query failed");
                            // echo $sql;
                            if(mysqli_num_rows($result)>0){
                                $row= mysqli_fetch_assoc($result);
?>
    <div class="main-content">
        <!-- Top navbar -->
        <?php  include 'header.php';  ?>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url('img/img1.jpeg'); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h2 class="display-2 text-white" style="width: 310px;">Hello <?php echo $row['fname'].' '.$row['lname'];  ?></h2>
                        <p class="text-white mt-0 mb-5" style="width: 310px;">This is your profile page. You can see your details and Edit Your Details.</p>
                        <a href="get-ride.php" class="btn btn-info">Get A Ride</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="<?php echo $row['photo'];  ?>" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="history.php" class="btn btn-sm btn-info mr-4">History</a>
                                <a class="btn btn-sm btn-default float-right edit" style="color: white;">Edit Profile</a>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">Name</span>
                                            <span class="description"><?php echo $row['fname'].' '.$row['lname'];  ?></span>
                                        </div>
                                        <div>
                                            <span class="heading">Refral Code</span>
                                            <span class="description"><?php
                                            if($row['referalcode']==""){
                                                echo 'Not Defined</span>';
                                            }else{
                                                echo $row['referalcode'].'</span>';
                                             } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                   UserName: <span style="font-weight: lighter;"> <?php echo $row['uname'];  ?></span>
                                </h3>
                                <div class="h5 font-weight-300" style="font-size: 16px;"> <span style="font-weight: bold;"> Profession:</span> <?php echo $row['profession'];  ?>
                                </div>
                                <hr class="my-4">
                                <?php
                                    $sql2 ="SELECT vehichle_id,model from vehichle where user_id='{$uid}';";
                                    // echo $sql2;
                                    $result2=mysqli_query($conn,$sql2) or die("Query failed");
                                    if(mysqli_num_rows($result2)>0){
                                        echo '<p style="font-weight: bold;">Vehicle Details </p><p>';
                                        while($row2=mysqli_fetch_assoc($result2)){
                                        // $row2=mysqli_fetch_assoc($result2);
                                ?>
                                <a style="font-weight: bold;" class="btn btn-primary btn-sm" href="vehicle.php?vid=<?php echo $row2['vehichle_id']; ?>"><?php echo $row2['model'];  ?></a>
                                <?php }
                                echo '<p><a style="font-weight: bold;background: #ab5bf4;" class="btn btn-primary btn-sm" href="vehicle.php">Add New Vehichle</a></p>';
                            }else{
                                    echo "<p>You don't Have any vehicle</p>";
                                    echo '<p><a style="font-weight: bold;" class="btn btn-primary btn-sm" href="vehicle.php">Add Vehichle</a></p>';
                                } ?>
                                <!-- <a href="#">Show more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                                <style>
                                    .successeded{
                                        box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
                                        box-shadow: unset;
                                    }
                                    .successeded:hover{
                                        background: #35bb78;
                                        box-shadow: unset;
                                        transform: translateY(0px);
                                        transform: translateX(0px);
                                        cursor: default !important;
                                    }
                                </style>
                                <?php

$sql5="SELECT aadhar_no from user where pool_id='{$uid}';";
$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
if($row5['aadhar_no']!=""){
    echo '<div class="col-1 text-right" style="cursor: default !important;"><span class="btn btn-sm btn-success successeded" style="color: white;">Verified User</span></div>';
}else{
    echo '<div class="col-1 text-right"><a href="user1.php" class="btn btn-sm btn-danger" style="color: white;">Verify User</a></div>';
}


?>

                                <div class="col-3 text-right">
                                    <a class="btn btn-sm btn-primary edit" style="color: white;">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="pform" enctype="multipart/form-data" autocomplete="off">
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4" id="cnn">
                                <div class="row" id="ph" style="display: none;"><div class="col-md-12"><div class="form-group focused"><label class="form-control-label" for="profile">Change Your Profile</label><input type="file" class="form-control form-control-alternative" id="profile" style="width: 100%;height: 100%;" name="photo"></div></div></div>
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Username</label>
                                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $row['uname']; ?>" name="uname">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email address</label>
                                                <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="info@example.com" value="<?php echo $row['mail']; ?>" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">First name</label>
                                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['fname']; ?>" name="fname">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Last name</label>
                                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['lname']; ?>" name="lname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="passw">Password</label>
                                                <input type="password" id="passw" class="form-control form-control-alternative" placeholder="Password" name="passw">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="mobile">Phone Number</label>
                                                <input type="text" id="mobile" class="form-control form-control-alternative" placeholder="Phone Number" value="<?php echo $row['phone']; ?>" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="profession">Profession</label>
                                                <input type="text" id="profession" class="form-control form-control-alternative" placeholder="Profession" value="<?php echo $row['profession']; ?>" name="profession">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Personal Details</h6>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="mobile">Age</label>
                                                <input type="text" id="mobile" class="form-control form-control-alternative" placeholder="Age" value="<?php echo $row['age']; ?>" name="age">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-control-label" for="gender">Gender</label>
                                            <select class="form-control form-control-alternative" id="gender" name="gend">
                                                <option value="1" <?php if($row['gender']=='male'){echo 'selected';} ?>>Male</option>
                                                <option value="2" <?php if($row['gender']=='female'){echo 'selected';} ?>>Female</option>
                                                <option value="3" <?php if($row['gender']=='other'){echo 'selected';} ?>>Others</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center" id="sub">

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 60px;"></div>
    <?php
                            }else{
                                echo '<h1>No Details Found Please First Logout then Login Again</h1>';
                            }
    ?>
    <style>
        footer h5{
            font-size: 18px;
        }
    </style>
    <?php include 'footer.php';    ?>
<script>
    $(document).ready(function(){
        $('input').each(function(){
            $(this).attr("disabled",true);
        });
        $('select').each(function(){
                $(this).attr('disabled',true);
        });

        $('.edit').click(function(){
            console.log("no");
            $('input').each(function(){
                $(this).attr('disabled',false);
            });
            $('#input-username').each(function(){
                $(this).attr('disabled',true);
            });
            $('select').each(function(){
                $(this).attr('disabled',false);
            });
            $("#ph").css('display','block');
            $("#sub").prepend('<a class="btn btn-sm btn-primary"><input type="submit" style="background:none;border:none;outline:none;color:white;padding:2px 4px;font-size:16px" name="submit"></a>');
        });

});
</script>
</body>

</html>
