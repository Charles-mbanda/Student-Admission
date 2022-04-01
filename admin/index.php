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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Add-Student</title>
    <link rel="icon" href="../assets/img/gluk1.jfif">

    <!--suppress HttpUrlsUsage -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

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

    <!--suppress CssUnusedSymbol -->
    <style>
        .fa .fa-graduation-cap {
            background-color: unset;
            padding: 0;
        }

        @media only screen and (max-width: 768px) {
            #add {
                display: flex;
                align-items: center;
                justify-content: center;
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
</head>
<body style="overflow-x: hidden;">
<div style="margin: auto">
    <div>
        <!-- Load an icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include ('include/sidebar.php'); ?>
    </div>

    <div id="add" style="overflow-y: auto; margin-top: 20px; margin-left: 200px;">
        <div class="text-center" style="position: relative; margin-top: 65px; width: 100%;">
            <hr style="padding-top: 20px !important;">
            <h1 class="text-center" style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 4vmin; padding-bottom: 20px">Welcome to Great Lakes University of Kisumu</h1>

            <p style="font-family: Verdana, sans-serif; margin: auto; font-size: 2vh">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, distinctio dolorem maiores nulla officiis, quae quod recusandae rerum sint tenetur unde voluptate. Aliquid nemo nostrum odit, possimus provident reiciendis sunt.</span><span>Adipisci amet consequatur corporis culpa dolorem eligendi esse eum exercitationem fuga harum illo iusto magni maiores maxime nihil nostrum pariatur perspiciatis placeat quaerat quasi quia sequi, tempora ullam ut veniam.</span><span>Deserunt dolores dolorum eius fugiat necessitatibus nisi perspiciatis ullam. Architecto expedita molestias officiis, praesentium quaerat qui tempore. Animi deserunt eaque earum et, in, incidunt ipsum iste molestiae necessitatibus temporibus vitae!</span><span>Amet aperiam assumenda commodi consequatur cumque cupiditate delectus doloremque eligendi laborum molestias necessitatibus nihil possimus, quod reiciendis repudiandae sapiente sed sit soluta vel voluptas. A dolore doloremque maiores officiis quasi?</span><span>Aliquid harum officia temporibus. Aperiam, at consequuntur corporis culpa deleniti facere fugiat fugit illum, itaque iure libero natus numquam odit possimus quasi, quos rem sit voluptatum! Amet illum iste porro.</span><span>Ab aliquid assumenda atque aut blanditiis consequatur consequuntur, cumque deserunt dolor eos esse, expedita fuga fugit hic, laborum mollitia nam nobis omnis perferendis placeat quia quisquam reiciendis ut veniam voluptatum.</span>
            </p>
        </div>
    </div>

    <div style="display: flex !important; align-items: center !important; justify-content: center !important;  padding-top: 90px; transform: translate(7.5%,0); width: 100%">
        <div  style="box-sizing: border-box; border: 1px solid blue; padding: 20px; border-radius: 5px; background-color: gainsboro">
            <h1 class="text-center " style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 2.5vh; color: blue; padding: 40px">
                <i class="fa fa-graduation-cap" id="icon" style="color: black; font-size: 25px"></i> <br>
                <a href="adminaddstudent.php" style="color: blue">
                    Add New Student
                </a>
            </h1>
        </div>

        <div  style="margin-left: 0 !important; box-sizing: border-box; border: 1px solid blue; padding: 20px; border-radius: 5px; background-color: gainsboro">
            <h1 class="text-center " style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 2.5vh; color: blue; padding: 40px">
                <i class="fa fa-users" id="icon" style="color: black; font-size: 25px"></i> <br>
                <a href="addparents.php" style="color: blue">
                    Add New Parent
                </a>
            </h1>
        </div>
    </div>
</div>

<div class="text-center" style="margin-top: 120px">
    <?php
    include ('include/footer.php');
    ?>
</div>
</body>
</html>
