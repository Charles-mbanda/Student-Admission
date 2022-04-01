<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Add-Student</title>

    <link rel="icon" href="../assets/img/gluk1.jfif">

    <script src="../bootstrap/js/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">

    <link rel="stylesheet" href="../style.css">

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>


</head>
<body style="overflow-y: auto">
<div style="width: 100%;  position: absolute; z-index: 1; top: 0">
    <?php include ('include/sidebar.php');?>
</div>

<div id="add" style="overflow-y: auto; margin-top: 20px; margin-left: 200px;">
    <div style="position: relative; margin-top: 65px; width: 100%;">
        <?php include ('include/student_add.php');?>
    </div>
</div>

<div class="text-center" style="margin-top: 120px">
    <?php
    include ('include/footer.php');
    ?>
</div>
</body>
<style>
    @media only screen and (max-width: 768px) {
        #add {
            width: 100%;
            margin-left: 0 !important;
            margin-top: 65px !important;
        }
        #add div {
            width: 100%;
            margin-left: 0;
        }
    }
</style>
</html>
