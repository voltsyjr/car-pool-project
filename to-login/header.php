<?php include 'config.php';
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>

        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="index.php" class="navbar-brand">Ride <span class="text-primary"> X</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<style>
    .nav-link{
        transition: all 0.5s ease-in-out;
    }
    .nav-link:hover{
        background: #6C55F9;
        color: white;
        border-radius: 3px;
        color: white !important;
    }
</style>
                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if($curPageName=='index.php'){echo 'active';}  ?>">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php if($curPageName=='user.php'){echo 'active';}  ?>">
                            <a class="nav-link" href="user.php">User Details</a>
                        </li>
                        <li class="nav-item <?php if($curPageName=='history.php'){echo 'active';}  ?>">
                            <a class="nav-link" href="history.php">History</a>
                        </li>
                        <li class="nav-item <?php if($curPageName=='about.php'){echo 'active';}  ?>">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item <?php if($curPageName=='contact.php'){echo 'active';}  ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-2" href="get-ride.php">Book Ride</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

