<?php /** @noinspection ALL */
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
    $ret=mysqli_query($con,"SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
        $extra="index.php";//
        $_SESSION['login']=$_POST['username'];
        $_SESSION['id']=$num['id'];
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }

    $_SESSION['errmsg']="Invalid username or password";
    $extra="error.php";
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    header("location:http://$host$uri/$extra");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>GlukAdmin-Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body class="login" style="margin: auto">
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"  style="background-color: gainsboro; padding: 20px; margin-top: 50px; border-radius: 10px">
        <div class="logo margin-top-30">
            <img src="../assets/img/gluk1.jfif" alt="" width="50%" height="100" style="margin-left: 25%; border-radius: 10px">
            <h2 style="font-family: Verdana, sans-serif; font-weight: bold">Admin Login</h2>
        </div>

        <div class="box-login">
            <form class="form-login" method="post">
                <fieldset style="border: 1px solid grey; padding: 20px; border-radius: 5px">
                    <legend style="color: #0000ff; font-family: Verdana, sans-serif; padding: 0; font-size: 2.25vh; margin-right: 0">
                        Sign in to your account
                    </legend>

                    <p style="font-family: Verdana, sans-serif">
                        Please enter your name and password to log in.<br />
                        <span style="color:red;">
                                    <?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?>
                                </span>
                    </p>

                    <div class="form-group">
                            <span class="input-icon" >
                                <label style="display: flex">
                                    <i class="fa fa-user" style="color: #0000ff; position: absolute; z-index: 1; margin-top: 10px; margin-left: 5px "></i>
                                    <input type="text" class="form-control" name="username" placeholder="Username" style="width: 100% !important; padding-left: 20px; padding-top: 20px; padding-bottom: 20px" required>
                                </label>
                            </span>
                    </div>

                    <div class="form-group form-actions">
                            <span class="input-icon">
                                <label style="display: flex; margin-top: 20px">
                                    <i class="fa fa-lock" style="color: #0000ff; position: absolute; z-index: 1; margin-top: 10px; margin-left: 5px "></i>
                                    <input type="password" class="form-control password" name="password" placeholder="Password" style="width: 100% !important; padding-left: 20px; padding-top: 20px; padding-bottom: 20px" required>
                                </label>
                            </span>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right" name="submit" style="font-family: Verdana, sans-serif; font-weight: bold; background-color: #0000ff">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>

            <div class="copyright text-center" style="padding: 20px; font-weight: bold">
                &copy; <span class="current-year"></span><span class="text-bold text-uppercase" style="font-family: Verdana, sans-serif; font-weight: bold"> Great Lakes University of Kisumu</span>. <span style="font-family: Verdana, sans-serif; color: grey">All rights reserved</span>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src=""></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/login.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

</body>
<!-- end: BODY -->
</html>