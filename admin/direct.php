<?php
session_start();
error_reporting(0);
include('include/config.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>re-direct</title>

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
<body>
<div>
    <div>
        <h1 class="text-center" style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 4vmin; color: red">Kindly Log In First !</h1>
    </div>


    <div>
        <?php
        include('login.php');
        ?>
    </div>
</div>
</body>
</html>
