<?php
include "config.php";

session_start();

session_unset();

session_destroy();

header("Location: {$hostname}/to-all/index.php");
?>
<!-- //deleting data from session to logout user  -->
