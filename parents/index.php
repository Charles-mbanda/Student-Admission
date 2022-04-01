<?php
session_start();
include('include/checklogin.php');
error_reporting(0);
include('include/config.php');
check_login();

?>

<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Management</title>

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <script src="../bootstrap/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../style.css">

    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>

    <link rel="shourtcut icon" type="image/png" href="../assets/img/favicon.png">
</head>

<body>
<div>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include ('include/sidebar.php'); ?>
</div>

<div class="container" id="add" style="margin-top: 75px; margin-bottom: 20px; margin-left: 200px">
    <?php
    include ('include/student_add.php');
    ?>
</div>

<div class="text-center" style="margin-top: 120px;">
    <?php
    include ('include/footer.php');
    ?>
</div>

</body>
<style>
    @media only screen and (max-width: 768px) {
        .div {
            display: flex;
        }
        .fleft {
            margin-left: 0;
        }
        .right {
            float: right !important;
            margin-right: 0 !important;
        }
    }
</style>
</html>
