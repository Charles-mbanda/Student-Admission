<?php
/** @noinspection DuplicatedCode */
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

$vid= "";
$admno = "";
$sname = "";
$class = "";
$year = "";
$feespaid = "";
$balance = "";
$StudentID = "";


if(isset($_POST['submit']))
{
    $vid=$_GET['vid'];

    $id = $_POST['id'];
    $admno = $_POST['admno'];
    $sname = $_POST['sname'] ;
    $class = $_POST['class'];
    $year = $_POST['year'];
    $feespaid = $_POST['feespaid'];
    $balance = $_POST['balance'];
    $StudentID = $_POST['StudentID'];

    $er = 0;

    if($er == 0)
    {
        /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/

        /** @noinspection PhpUndefinedVariableInspection */
        /** @noinspection SqlDialectInspection */
        $sql = "INSERT INTO schoolhistory(admno,sname,class,year,feespaid,balance,StudentID,) VALUES (
							'".mysqli_real_escape_string($con, strip_tags($admno))."',
							'".mysqli_real_escape_string($con, strip_tags($sname))."', 
							'".mysqli_real_escape_string($con, strip_tags($class))."', 
							'".mysqli_real_escape_string($con, strip_tags($year))."', 
							'".mysqli_real_escape_string($con, strip_tags($feespaid))."', 
							'".mysqli_real_escape_string($con, strip_tags($balance))."', 
							".mysqli_real_escape_string($con, strip_tags($StudentID))."
							)";

        if(mysqli_query($con , $sql))
        {
            print '<span class = "successMessage">Data saved into system.</span>';
            $admno = "";
            $sname = "";
            $class = "";
            $year = "";
            $feespaid = "";
            $balance = "";
            $StudentID = "";
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

/** @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpUnnecessaryLocalVariableInspection
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage students</title>
    <link rel="icon" href="../assets/img/gluk1.jfif">
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

    <style>
        @media only screen and (max-width: 768px) {
            #add1 {
                position: inherit;
                z-index: 1;
                top: 0 !important;
                margin-top: 0 !important;
                padding: 0;
            }
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
<body>
<div id="add1">
    <div style="width: 100%;">
        <?php include ('include/sidebar.php');?>
    </div>
</div>

<div id="add" style="overflow-y: auto; margin-top: 20px; margin-left: 200px;">
    <div style="position: relative; margin-top: 65px; width: 100%;">
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15 text-center" style="font-family: Verdana, sans-serif; font-weight: bold; color: blue">Manage <span class="text-bold">Students</span></h5>
                    <?php
                    $vid=$_GET['vid'];
                    /** @noinspection SqlDialectInspection */
                    /** @noinspection PhpUndefinedVariableInspection */
                    $ret=mysqli_query($con,"select * from student where id='$vid'");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <!--suppress HtmlDeprecatedAttribute -->
                    <table border="1" class="table table-bordered">
                        <!--suppress HtmlDeprecatedAttribute -->
                        <tr align="center">
                            <td colspan="4" >Student Details</td>
                        </tr>

                        <tr>
                            <!--suppress HtmlUnknownBooleanAttribute -->
                            <th scope>Student Name</th>
                            <td><?php  echo $row['sname'];?></td>
                            <!--suppress HtmlUnknownBooleanAttribute -->
                            <th scope>Admission Number</th>
                            <td><?php  echo $row['admno'];?></td>
                        </tr>

                        <tr>
                            <!--suppress HtmlUnknownBooleanAttribute -->
                            <th scope>Parent's Name</th>
                            <td><?php  echo $row['gname'];?></td>
                            <th>Parent's Contact</th>
                            <td><?php  echo $row['contact'];?></td>
                        </tr>

                        <tr>
                            <th>Parents's Email</th>
                            <td><?php  echo $row['email'];?></td>
                            <th>Parent's Address</th>
                            <td><?php  echo $row['address'];?></td>
                        </tr>

                        <tr>
                            <th>Student Class</th>
                            <td><?php  echo $row['class'];?></td>
                            <th>Student Division</th>
                            <td><?php  echo $row['division'];?></td>
                        </tr>

                        <tr>
                            <th>Student Shift(if any)</th>
                            <td><?php  echo $row['shift'];?></td>
                            <th>Student Gender</th>
                            <td><?php  echo $row['gender'];?></td>
                        </tr>

                        <tr>
                            <th>Date of Birth</th>
                            <td><?php  echo $row['dbirth'];?></td>
                            <th>Blood Group</th>
                            <td><?php  echo $row['blgroup'];?></td>
                        </tr>

                        <?php }?>
                    </table>






                    <?php
                    /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
                    /** @noinspection SqlDialectInspection */
                    $sql = "select * from schoolhistory";

                    $table = mysqli_query($con, $sql);

                    ?>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <!--suppress HtmlDeprecatedAttribute -->
                        <tr align="center">
                            <th colspan="8"  style="font-family: Verdana, sans-serif; font-weight: bold">School History</th>
                        </tr>

                        <tr style="font-weight: bold; font-family: Verdana, sans-serif">
                            <th>#</th>
                            <th>Admission No</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Year</th>
                            <th>Fee Paid</th>
                            <th>Balance</th>
                            <th>Student Id</th>
                        </tr>
                        <?php
                        while ($row=mysqli_fetch_array($ret)) {
                            ?>

                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php  echo $row['admno'];?></td>
                                <td><?php  echo $row['sname'];?></td>
                                <td><?php  echo $row['class'];?></td>
                                <td><?php  echo $row['year'];?></td>
                                <td><?php  echo $row['feespaid'];?></td>
                                <td><?php  echo $row['balance'];?></td>
                                <td><?php  echo $row['StudentID'];?></td>
                            </tr>
                            <?php $cnt=$cnt+1;} ?>
                    </table>

                    <!--suppress HtmlDeprecatedAttribute -->
                    <p align="center">
                        <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal" style="font-family: Verdana, sans-serif; font-weight: bold; background-color: blue">Add Student History</button>
                    </p>

                    <?php  ?>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel" style="font-family: Verdana, sans-serif; font-weight: bold; color: blue">
                                        Add Student History
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px;">
                                        <span aria-hidden="true" style="color: red; font-weight: bold; font-size: 50px;">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table class="table table-bordered table-hover data-tables">

                                        <!--suppress HtmlUnknownTag -->
                                        <form method="post" name="submit">

                                            <!--suppress HtmlUnknownTag -->
                                            <tr>
                                                <th style="font-family: Verdana, sans-serif; font-weight: bold">Admission Number :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="admno" placeholder="admission number required" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <!--suppress HtmlUnknownTag -->
                                            <tr>
                                                <th style="font-family: Verdana, sans-serif; font-weight: bold">Student Name :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="sname" placeholder="name of student" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <!--suppress HtmlUnknownTag -->
                                            <tr>
                                                <th style="font-family: Verdana, sans-serif; font-weight: bold">Class :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="class" placeholder="class required" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <!--suppress HtmlUnknownTag -->
                                            <tr>
                                                <th style="font-family: Verdana, sans-serif; font-weight: bold">Year :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="year" placeholder="year is required" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <!--suppress HtmlUnknownTag -->
                                            <tr>
                                                <th style="font-family: Verdana, sans-serif; font-weight: bold">Fees Paid :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="feespaid" placeholder="fees paid" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <!--suppress HtmlUnknownTag -->
                                            <tr style="font-family: Verdana, sans-serif">
                                                <th style="font-weight: bold">Balance :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="pres" placeholder="Fees Balance" class="form-control wd-450" required>
                                                </td>
                                            </tr>

                                            <tr style="font-family: Verdana, sans-serif">
                                                <th style="font-weight: bold">Student ID :</th>
                                                <td>
                                                    <!--suppress HtmlFormInputWithoutLabel -->
                                                    <input name="StudentID" placeholder="Student ID" class="form-control wd-450" required>
                                                </td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>

                                <div class="modal-footer" style="display: flex; align-items: center; justify-content: center">
                                    <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal" style="font-family: Verdana, sans-serif; font-weight: bold; color: white; background-color: green;">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary" style="font-family: Verdana, sans-serif; font-weight: bold; color: white; background-color: blue;">Submit</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</div>


        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="vendor/autosize/autosize.min.js"></script>
        <script src="vendor/selectFx/classie.js"></script>
        <script src="vendor/selectFx/selectFx.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="../assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="../assets/js/form-elements.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                FormElements.init();
            });
        </script>
</body>
</html>
