<!-- ===============================================
	**** A COMPLETE VALIDATE FORM WITH PHP ****
================================================ -->

<!-- ==============  PHP begin  =================-->
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

					$sname = "";
					$gname = "";
					$contact = "";
					$email = "";
					$address = "";
					$class = "";
					$shift = "";
					$gender = "";
					$blgroup = "";
					$division = "";
					$admno = "";
					$dbirth = "";

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
					$sname = $_POST['sname'];
					$gname = $_POST['gname'] ;
					$contact = $_POST['contact'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$class = $_POST['class'];
					$shift = $_POST['shift'];

					if(isset($_POST['gender']))
					$gender = $_POST['gender'];

					$blgroup = $_POST['blgroup'];
					$division = $_POST['division'];
					$admno = $_POST['admno'];
					$dbirth = $_POST['dbirth'];

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
                            $sql = "INSERT INTO student(sname, gname, contact, email, address, class, shift, gender, blgroup, division, admno, dbirth) VALUES (
							'".mysqli_real_escape_string($con, strip_tags($sname))."',
							'".mysqli_real_escape_string($con, strip_tags($gname))."', 
							'".mysqli_real_escape_string($con, strip_tags($contact))."', 
							'".mysqli_real_escape_string($con, strip_tags($email))."', 
							'".mysqli_real_escape_string($con, strip_tags($address))."', 
							'".mysqli_real_escape_string($con, strip_tags($class))."', 
							'".mysqli_real_escape_string($con, strip_tags($shift))."', 
							'".mysqli_real_escape_string($con, strip_tags($gender))."', 
							'".mysqli_real_escape_string($con, strip_tags($blgroup))."', 
							'".mysqli_real_escape_string($con, strip_tags($division))."', 
							'".mysqli_real_escape_string($con, strip_tags($admno))."', 
							".mysqli_real_escape_string($con, strip_tags($dbirth))."
							)";

							if(mysqli_query($con , $sql))
							{
								print '<span class = "successMessage">Data saved into system.</span>';
								$sname = "";
								$admno = "";
								$gname = "";
								$contact = "";
								$email = "";
								$address = "";
								$class = "";
								$shift = "";
								$gender = "";
								$blgroup = "";
								$division = "";
								$admno = "";
								$dbirth = "";

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

					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
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
    <title>Admin / add student</title>

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
<div class="form-area">
    <div class="container">
        <div class="section-title">
            <h3>Admission form</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div style="display: flex">
                        <div id="div" style="float: left;">
                            <label for="sname">Student name:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input type="text" name="sname" value="<?php print $sname; ?>" required>
                        </div>

                        <div id="div" style="float: right;">
                            <label for="sname">Admission Number:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input type="text" name="admno" value="<?php print $admno; ?>" required>
                        </div>
                    </div>

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

                    <div style="display: flex">
                        <div id="div" style="float: left">
                            <label for="class">class:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input type="text" name="class" value="<?php print $class; ?>" required>
                        </div>

                        <div id="div" style="float: right">
                            <label for="division">division:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <select name="division" id="" style="border-radius: 5px" required>
                                <option value="0">N/A</option>
                                <option value="1">Science</option>
                                <option value="2">Commarce</option>
                                <option value="3">Arts</option>
                            </select>
                            <span class="error"><?php print $edivision; ?></span>
                        </div>
                    </div>

                    <div style="display: flex;">
                        <div id="div" style="float: left">
                            <label for="shift">Shift:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <select name="shift" id="" style="border-radius: 5px" required>
                                <option value="0">select</option>
                                <option value="1">morning</option>
                                <option value="2">evening</option>
                            </select>
                            <span class="error"><?php print $eshift; ?></span>
                        </div>

                        <div id="div" style="float: right">
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
                        <div id="div" style="float: left">
                            <label for="dbirth">Date of Birth:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input type="date" name="dbirth" value="<?php print $dbirth; ?>"  min="1995-01-01" required>
                        </div>

                        <div id="div" style="float: right">
                            <label for="blgroup">blood group:</label>
                            <!--suppress HtmlFormInputWithoutLabel -->
                            <input type="text" name="blgroup" value="<?php print $blgroup; ?>" required>
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


</body>
</html>
