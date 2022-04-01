<?php error_reporting(0);?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
        .rotated {
            animation: rotation 5s infinite linear;
            border-radius: 50%;
        }
        @keyframes rotation {
            from {
                transform: rotate(-0deg);
            }
            to {
                transform: rotate(-360deg);
            }
        }

        .nav-link {
            color: white !important;
            font-family: Verdana, sans-serif;
            font-weight: bold;
            margin-right: 5px;
        }
        .nav-item {
        }
        #active {
            background-color: blue !important;
            color: white !important;
        }
        .nav-link:hover {
            background-color: blue;
            color: white !important;
            width: 100%;
        }
        .fa {
            color: white;
        }
        .fa:hover {
            color: white;
            background-color: blue;
            border-radius: 50%;
            padding: 5px;
        }
        #nav {
            display: flex;
            padding-left: 7.5%;
        }
        .navbar-brand {
            margin-right: 20%;
        }
        footer {
            background-color: dodgerblue;
        }

        @media only screen and (max-width: 768px) {
            .navbar-brand {
                margin-left: -10px !important;
                width: auto;
                margin-right: 0;
            }
            .navbar-toggler {
            }
            .navbar-nav {
                width: 100%;
            }
            .nav-item {
                display: flex;
                float: left;
                margin-left: 0;
                width: 50%;
            }
            .nav-link {
                display: flex;
                float: left !important;
                margin-left: 20px !important;
                width: 100%;
                padding-left: 10px !important;
            }
            .text-right {
                position: relative;
                right: 10px;
                margin-top: -20px;
                bottom: 10px;
            }
        }
    </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-dark" id="nav" style="background-color: dodgerblue;">
        <a class="navbar-brand" href="#" style="font-family: Verdana, sans-serif; color: white; font-weight: bold; ">
            <i >
                <img class="rotated" src="gluk1.jfif" alt="" width="40" height="40">
            </i>
            GREAT LAKES UNIVERSITY
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border: 1px solid white">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="active" href="#">
                        <i class="fa fa-home text-left" style="display: flex; font-weight: bold; padding: 4px">
                            HOME
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../adminaddstudent.php">ADMISSION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STUDENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="display: block;">CONTACT US</a>
                </li>
            </ul>

            <div class="text-right">
                    <span class="social-icon">
                        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fcategory%2FCommunity-College%2FGreat-Lakes-University-Of-Kisumu-Nairobi-Campus-2258133224413094%2F"><i class="fa fa-facebook"></i></a>
                        <a href="mailto: academics@gluk.ac.ke"><i class="fa fa-google-plus"></i></a>
                    </span>
            </div>
        </div>

    </nav>
</div>


</body>
</html>
