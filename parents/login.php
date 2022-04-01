<?php /** @noinspection */
session_start();
include('include/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
    /** @noinspection PhpUndefinedVariableInspection */
    /** @noinspection SqlDialectInspection */
    $ret=mysqli_query($con,"SELECT * FROM parent WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
    $num=mysqli_fetch_array($ret);
    if($num>1)
    {
        $extra="index.php";
        $_SESSION['dlogin']=$_POST['username'];
        $_SESSION['id']=$num['id'];
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }

    $_SESSION['errmsg']="Invalid username or password";
    echo 'Wrong Credentials';
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
    <title>parent Login</title>

    <!--suppress HttpUrlsUsage -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />

</head>
<body class="login">
<div class="row" style="margin-top: 75px; ">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="background-color: gainsboro; border: 1px solid black; border-radius: 15px">
        <div class="logo margin-top-30">
            <a href="../index.html">
                <h2 class="text-center" id="h2" style="font-family: Verdana, sans-serif; padding: 20px; color: black; width: 100%; font-weight: bold;font-size: 4vmin"> <u>GLUK| Parent Login</u></h2>
            </a>
        </div>

        <div class="box-login" style="padding: 20px">
            <form class="form-login" method="post">
                <fieldset style="padding: 40px 20px; border: 1px solid grey; border-radius: 5px">
                    <legend style="font-family: Verdana, sans-serif; color: blue; font-weight: bold; font-size: 2vmin">
                        Sign in to your account
                    </legend>
                    <p style="font-family: Verdana, sans-serif;">
                        Please enter your name and password to log in.<br />
                        <span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                    </p>
                    <div class="form-group" style="padding-bottom: 20px">
								<span class="input-icon">
									<!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" class="form-control" name="username" placeholder="Username" style="padding: 15px 0 15px 25px" required>
									<i class="fa fa-user"  style="color: blue; position: absolute; margin-top: -25px; margin-left: 10px; margin-right: 10px"></i> </span>
                    </div>
                    <div class="form-group form-actions">
								<span class="input-icon">
									<!--suppress HtmlFormInputWithoutLabel -->
                                    <input  type="password" class="form-control password" name="password" placeholder="Password" style="padding: 15px 0 15px 25px" required>
									<i class="fa fa-lock" style="color: blue; position: absolute; margin-top: -25px; margin-left: 10px; margin-right: 10px"></i>
									 </span>
                        <a href="forgot-password.php" style="color: blue; font-family: Verdana, sans-serif">
                            Forgot Password ?
                        </a>
                    </div>
                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary pull-right" name="submit" style="background-color: blue; font-family: Verdana, sans-serif">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>


                </fieldset>
            </form>

            <!--suppress HtmlUnknownTag -->
            <marquee behavior="left" direction="left" class="text-center" style="margin-top: 10px">
                <div class="copyright" style="color: #0a1115; font-family: Verdana, sans-serif;font-weight: bold">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase" style="color: black"> Great Lakes University of Kisumu</span>. <span style="color: black">All rights reserved</span>
                </div>
            </marquee>

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

<script src="../assets/js/main.js"></script>

<script src="../assets/js/login.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
</script>

</body>
<!-- end: BODY -->
</html>