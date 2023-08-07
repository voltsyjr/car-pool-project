<?php 
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
    header("Location: {$hostname}/to-all/index.php");
}
// $model="";
// $type="";
// $color="";
// $seats="";
// $number="";
if(isset($_GET['vid'])){
    $sql1="SELECT * from vehichle where vehichle_id='{$_GET['vid']}';";
    // echo $sql1;
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $model=$row1['model'];
    $type=$row1['type'];
    $color=$row1['color'];
    $seats=$row1['seats'];
    $number=$row1['vehichle_no'];
    $set=1;
    // echo 'jjjjjjjjjjjjjjjjjjj'.$model;
}else{
    $set=0;
}
// die("just");
$uid=$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
    <!-- <link rel="stylesheet" href="css/vehicle.css"> -->
    <link rel="stylesheet" href="css/maicons.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="vendor/animate/animate.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="css/theme.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="css/user.css?v=<?php echo time(); ?>"> -->
    <script src="js/jquery-3.5.1.min.js"></script>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <?php include 'header.php'; ?>
    </header>
<style>
    .kk{
        display: flex;flex-direction: row;justify-content: space-between;margin-top:10px;
    }
    .jj{
        transition: all 0.3s ease-in-out;
    }
    .jj:hover{
        transform: scale(1.1);
    }
    @media (max-width:772px){
        .kk{
            flex-direction: column;
            justify-content: center;
            align-items:center
        }
    }
</style>
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col" style="display: flex;justify-content:center;margin-bottom:20px;">
                
                    <h4>Your Vehicles</h4>
                </div>
            </div>
            <div class="row kk">
                    <div class="col-11 col-md-7 jj " style="box-shadow: 0 0 10px 10px #d2d5dc;padding-top:10px;margin-bottom:50px;">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover" >
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Model</th>
                                    <!-- <th scope="col">Vehicle Number</th> -->
                                    <th scope="col">Type</th>
                                    <th scope="col">Max-Seats</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
$sql="SELECT * from vehichle where user_id='{$uid}';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i=1;
    while($row=mysqli_fetch_assoc($result)){
echo '<tr><th scope="row">'.$i.'</th><td>'.$row['model'].'</td><td>'.$row['type'].'</td><td>'.$row['seats'].'</td><td><a href="vehicle.php?vid='.$row['vehichle_id'].'" class=" btn-sm btn-primary" style="text-decoration:none;">Edit</a></td><td><a href="delete-vehichle.php?vid='.$row['vehichle_id'].'" class=" btn-sm btn-danger" style="text-decoration:none;">Delete</a></td></tr>';
$i=$i+1;
    }
}else{
    echo '<tr><th colspan="6" style="text-align:center"><span style="color:red;">No Vehichle Added</span></th></tr>';
}

?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 jj" style="box-shadow: 0 0 10px 10px #d2d5dc;margin-bottom:50px;">
                        <h5 style="text-align: center;margin-top: 8px;padding-top:10px">Vehicle Details</h5>
                        <form action="add.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- <label for="inputPassword4">Last Name</label> -->
                                    <?php 
if($set){
    echo '<input type="text" class="form-control" id="Model" name="model" placeholder="Model" value="'.$model.'">';
}else{
                                    ?>
                                    <input type="text" class="form-control" id="Model" value="" placeholder="Model" name="model">
                                    <?php } ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label for="inputEmail4">First Name</label> -->
                                    <?php 
if($set){
    echo '<input type="text" class="form-control" id="VehicleNumber"  placeholder="Vehicle Number" value="'.$number.'" name="num">';
}else{
                                    ?>
                                    <input type="text" class="form-control" id="VehicleNumber" value="" placeholder="Vehicle Number" name="num">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- <label for="inputEmail4">First Name</label> -->
                                    <?php 
if($set){
    echo '<input type="text" class="form-control" id="Max-Sheet"  placeholder="Max-Sheet" value="'.$seats.'" name="seat">';
}else{
                                    ?>
                                    <input type="text" class="form-control" id="Max-Sheet" value="" placeholder="Max-Sheet" name="seat">
                                    <?php } ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label for="inputPassword4">Last Name</label> -->
                                    <?php 
if($set){
    echo '<input type="text" class="form-control" id="Color"  placeholder="Color" value="'.$color.'" name="color">';
    echo '<input type="text" class="form-control" id="id"  value="'.$_GET['vid'].'" name="vid" style="display:none">';
}else{
                                    ?>
                                    <input type="text" class="form-control" id="Color" value="" placeholder="Color" name="color">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="Model">Model</label> -->
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vehicle" id="car" value="car" <?php if($set){
    if($type=="car"){echo 'checked';}
}?>>
                                    <label class="form-check-label" for="car">Car</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vehicle" id="bike" value="bike" <?php if(($set)){
    if($type=="bike"){echo 'checked';}
}?>>
                                    <label class="form-check-label" for="bike">Bike</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vehicle" id="bus" value="bus" <?php if(($set)){
    if($type=="bus"){echo 'checked';}
}?>>
                                    <label class="form-check-label" for="bus">Bus</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- <label for="inputEmail4">First Name</label> -->
                                    <?php 
if(($set)){
    echo '<input type="submit" class="btn btn-primary" id="submit" placeholder="Edit" value="Edit" name="edit">';
}else{
                                    ?>
                                    <input type="submit" class="btn btn-primary" id="submit" placeholder="Add New" value="Add New" name="add">
                                    <?php  }?>
                                </div>
                            </div>
                        </form>
                    </div>
                    
            </div>
        </div>
    </div>

    <?php include 'footer.php';    ?>

    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="js/theme.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>