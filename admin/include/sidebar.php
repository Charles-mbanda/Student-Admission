<?php error_reporting(0);?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <script src="../../bootstrap/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap-grid.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../style.css">

    <script src="../../bootstrap/js/bootstrap.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>


    <style>
        @media only screen and (max-width: 768px) {
            .contaidiv {
            }
        }
    </style>
</head>
<body>
        <!-- Load an icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- The sidebar -->
        <div class="contaidiv">
            <div style="background-color: dodgerblue; position: fixed; z-index: 1; top: 0; width: 100% ">
                <?php include ('header.php'); ?>
            </div>

            <div class="sidebar">
                <!--suppress HtmlUnknownTarget -->
                <a href="index.php" id="active"><i class="fa fa-fw fa-home" style="color: black"></i> Home</a>
                <!--suppress HtmlUnknownTarget -->
                <a href="adminaddstudent.php"><i class="fa fa-fw fa-plus" style="color: black"></i>Add Students</a>
                <!--suppress HtmlUnknownTarget -->
                <a href="view.php"><i class="fa fa-fw fa-eye" style="color: black"></i> View Student</a>
                <!--suppress HtmlUnknownTarget -->
                <a href="manage-students.php"><i class="fa fa-fw fa-folder" style="color: black"></i> Manage Student</a>
                <!--suppress HtmlUnknownTarget -->
                <a href="addparents.php"><i class="fa fa-fw fa-plus" style="color: black"></i>Add Parents</a>
                <!--suppress HtmlUnknownTarget -->
                <a href="viewparents.php"><i class="fa fa-fw fa-eye" style="color: black"></i> View Parents</a>
            </div>
        </div>
</body>
<!--suppress CssUnusedSymbol -->
<style>
   #active {
        background-color: blue;
    }
   #active .fa-home {
       color: white;
   }
    .sidebar {
        width: 200px;
        background-color: yellow !important;
        position: absolute;
        height: 100%;
        top: 67px;
        z-index: 1;
    }

    .sidebar a {
        display: block;
        color: black;
        background-color: yellow;
        padding: 16px;
        text-decoration: none;
        font-family: Verdana, sans-serif;
        font-weight: bold;
    }

    .sidebar a.active {
        background-color: #4CAF50;
        color: white;
    }

    .sidebar a:hover:not(.active) {
        background-color: blue;
        color: white;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: absolute;
            top: 67px;
            z-index: 1;
        }
        .sidebar a {
            float: left;
            width: 25% !important;
            text-align: center;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
</style>
</html>