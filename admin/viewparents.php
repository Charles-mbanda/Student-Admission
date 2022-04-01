<?php /** @noinspection PhpUndefinedVariableInspection */
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
    <title>view parent list</title>
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
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
            overflow-y: scroll;
        }
        @media screen and (max-width: 768px) {
            .sidebar a {float: left;}
            div.content {
                float: left !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                position: absolute;
                top: 60px;
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
        }
    </style>
</head>
<body>

<div style="width: 100%;  position: absolute; z-index: 1; top: 0;">
    <?php include ('include/sidebar.php');?>
</div>

<div id="add" style="overflow-y: auto; margin-top: 20px; margin-left: 200px;">
    <div style="position: relative; margin-top: 65px; width: 100%;">
        <div class="section-title">
            <h3 class="text-center" style="color: white; font-family: Verdana, sans-serif; font-weight: bold; font-size: 4vmin">View List of Parents</h3>
        </div>

        <?php

        if(isset($_GET['did']))
        {
            delete();
            print '<h6 class= "successMessage">Parent Deleted.</h6>';
        }


        /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
        $sql = "select * from parents";

        $table = mysqli_query($con, $sql);

        print '<table class="table-responsive" style="width: 100%; display: flex; align-items: center; justify-content: center">';
        print '<tr>
        <th>ID</th>
        <th>Parent Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Student Name</th>
                <th>Admission No.</th>
                <th>Class</th>
                <th>Division</th>
             </tr>';

        while($row = mysqli_fetch_assoc($table))
        {
            print '<tr>';
            print '<td>'.htmlentities($row["id"]).'</td>';
            print '<td>'.htmlentities($row["gname"]).'</td>';
            print '<td>'.htmlentities($row["contact"]).'</td>';
            print '<td>'.htmlentities($row["email"]).'</td>';
            print '<td>'.htmlentities($row["address"]).'</td>';
            print '<td>'.htmlentities($row["gender"]).'</td>';
            print '<td>'.htmlentities($row["stdname"]).'</td>';
            print '<td>'.htmlentities($row["admno"]).'</td>';
            print '<td>'.htmlentities($row["class"]).'</td>';
            print '<td>'.htmlentities($row["division"]).'</td>';
            print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
            print '</tr>';
        }

        print '</table>';


        function delete()
        {
            global $cn;
            $sql = "delete from parents where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }

        ?>

    </div>

</div>

<div class="text-center" style="margin-top: 300px; margin-bottom: 0 !important;">
    <?php
    include ('include/footer.php');
    ?>
</div>
</body>
</html>
