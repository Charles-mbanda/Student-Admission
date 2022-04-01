<?php
/** @noinspection DuplicatedCode */
session_start();
error_reporting(0);
include('include/config.php');

$gname = "";
$contact = "";
$email = "";
$address = "";
$gender = "";
$stdname = "";
$admno = "";
$class = "";
$division = "";

$esname = "";
$egname = "";
$econtact = "";
$eemail = "";
$eaddress = "";
$eclass = "";
$eshift = "";
$egender = "";
$eblgroup = "";
$edivision = "";
$admno = "";
$dbirth = "";


if(isset($_POST['submit']))
{
    $gname = $_POST['gname'] ;
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    if(isset($_POST['gender']))
        $gender = $_POST['gender'];

    $stdname = $_POST['stdname'];
    $admno = $_POST['admno'];
    $class = $_POST['class'];
    $division = $_POST['division'];

    $er = 0;

    if (empty($gender)) {
        $er++;
        $egender = "*Gender is required";
    } else {
        $gender = test_input($gender);
    }

    if($er == 0)
    {
        /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/

        /** @noinspection PhpUndefinedVariableInspection */
        /** @noinspection SqlDialectInspection */
        $sql = "INSERT INTO parents(gname, contact, email, address, gender, stdname, admno, class, division) VALUES (
							'".mysqli_real_escape_string($con, strip_tags($gname))."', 
							'".mysqli_real_escape_string($con, strip_tags($contact))."', 
							'".mysqli_real_escape_string($con, strip_tags($email))."', 
							'".mysqli_real_escape_string($con, strip_tags($address))."', 
							'".mysqli_real_escape_string($con, strip_tags($gender))."', 
							'".mysqli_real_escape_string($con, strip_tags($stdname))."', 
							'".mysqli_real_escape_string($con, strip_tags($admno))."',
							'".mysqli_real_escape_string($con, strip_tags($class))."', 
							".mysqli_real_escape_string($con, strip_tags($division))."
							)";

        if(mysqli_query($con , $sql))
        {
            print '<span class = "successMessage">Data saved into system.</span>';
            $stdname = "";
            $admno = "";
            $gname = "";
            $contact = "";
            $email = "";
            $address = "";
            $class = "";
            $gender = "";
            $division = "";
            $admno = "";
        }
        else
        {
            print '<span class= "errorMessage">'.mysqli_error($con).'</span>';
        }
    }
    else
    {
        print '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
    }
}

/** @noinspection PhpMissingReturnTypeInspection */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    /** @noinspection PhpUnnecessaryLocalVariableInspection */
    $data = htmlspecialchars($data);
    return $data;
}

//================================ PHP End =============================
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin / add parents</title>
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

    <style>
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

        @media only screen and (max-width: 768px) {
            .img-responsive {
                height: 100px;
                width: 120px;
            }

            .container {
            }
        }
    </style>
</head>
<body>
<div class="container" id="add" style="margin-top: 50px;">
    <div class="download">
        <div style="display: flex; align-items: center; justify-content: center; background-color: gainsboro; padding: 10px">
            <div class="text-center" >
                <h1 style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 4vmin;">Welcome To GLUK</h1>
                <img class="img-responsive" src="../assets/img/gluk1.jfif" alt="" width="150" height="50" style="border-radius: 5px">

                    <p style="font-family: Verdana, sans-serif; font-weight: bold; font-size: 2.25vh">A Centre of Academic Excellence</p>
            </div>
        </div>

        <div class="form-area"  style="border: 3px solid dodgerblue">
            <div class="container">
                <div class="section-title" >
                    <h3  style="color: white; font-family: Verdana, sans-serif; font-size: 4vmin">Online Parents Form</h3>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">

                            <div style="display: flex">
                                <div id="div" style="float: left">
                                    <label for="gname">guardian name:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" name="gname" value="<?php print $gname; ?>" required>
                                </div>

                                <div id="div" style="float: right">
                                    <label for="contact">contact:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="tel" name="contact" value="<?php print $contact; ?>" required>
                                </div>
                            </div>

                            <div style="display: flex">
                                <div id="div" style="float: left">
                                    <label for="email">Email:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="email" name="email" value="<?php print $email; ?>" required>
                                </div>

                                <div id="div" style="float: right">
                                    <label for="address"> Address:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" name="address" value="<?php print $address; ?>" required>
                                </div>
                            </div>

                            <div style="display: flex; margin-left: 0 !important;">
                                <div id="div" style="float: left; margin-left: 0">
                                    <label for="gender" style="margin-bottom: 10px">Gender:</label> <br>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="radio" name="gender" value="male"><span>Male</span>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="radio" name="gender" value="female"><span>Female</span>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="radio" name="gender" value="others"><span>Others</span>
                                    <span class="error"><?php print $egender; ?></span>
                                </div>
                            </div>

                            <div style="display: flex">
                                <div id="div" style="float: left;">
                                    <label for="stdname">Student name:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" name="stdname" value="<?php print $stdname; ?>" required>
                                </div>

                                <div id="div" style="float: right;">
                                    <label for="sname">Admission Number:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" name="admno" value="<?php print $admno; ?>" required>
                                </div>
                            </div>

                            <div style="display: flex">
                                <div id="div" style="float: left">
                                    <label for="class">class:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <input type="text" name="class" value="<?php print $class; ?>" required>
                                </div>

                                <div id="div" style="float: right">
                                    <label for="division">Stream:</label>
                                    <!--suppress HtmlFormInputWithoutLabel -->
                                    <select name="division" id="" style="border-radius: 5px" required>
                                        <option value="0">N/A</option>
                                        <option value="1">1<!--suppress HtmlUnknownTag -->
                                            <sup>st</sup> Year</option>
                                        <option value="1">2<sup>nd</sup> Year</option>
                                        <option value="1">3<sup>rd</sup> Year</option>
                                        <option value="1">4<sup>th</sup> Year</option>
                                    </select>
                                    <span class="error"><?php print $edivision; ?></span>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; justify-content: center">
                                <input type="submit" name="submit" value="Submit" style="width: 100% !important;">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: gainsboro; padding: 10px">
            <p class="text-center" style="font-family: Verdana, sans-serif">
                Education is what remains after one has forgotten what one has learned in school.
                <br><i style="font-family: Verdana, sans-serif; color: black; font-weight: bold">Albert Einstein</i>
            </p>
        </div>
    </div>
    <hr>

</div>

<div style="margin: auto">
    <div class="container div" style="display: flex; background-color: gainsboro; padding: 20px; margin-bottom: 50px;">
        <div class="fleft" style="float: left; margin-left: 0">
            <button type="button" class="button" style="padding: 6px 32px; background-color: dodgerblue; border: none">
                <a href="../index.html" style="color: white; font-family: Verdana, sans-serif; font-weight: bold">
                    <i class="fa fa-arrow-left" style="color: white"></i><i class="ti-arrow-left" style="color: white"></i> Back
                </a>
            </button>
        </div>

        <div class="right" style="float: right; margin-right: 0">
            <button type="button" class="button" style="padding: 6px 32px; background-color: dodgerblue; border: none">
                <a href="login.php" style="color: white; font-family: Verdana, sans-serif; font-weight: bold">
                    <i class="fa fa-arrow-circle-o-right"></i>
                    <i class="ti-arrow-right" style="color: white"></i>   Next
                </a>
            </button>
        </div>
    </div>
</div>

</body>
<style>
    .div {
    }
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