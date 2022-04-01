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
    <title>view students</title>

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

<div id="padding">
    <div class="section-title">
        <h3>Students list</h3>
    </div>

    <?php

    if(isset($_GET['did']))
    {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
    }


    /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
    /** @noinspection SqlDialectInspection */
    $sql = "select * from student";

    $table = mysqli_query($con, $sql);


    print '<table>';
    print '<tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Gurdian Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Adm No.</th>
                <th>Class</th>
                <th>Shift</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Division</th>
                <th>D.O.B</th>
                <th>Action</th>
             </tr>';

    while($row = mysqli_fetch_assoc($table))
    {
        print '<tr>';
        print '<td>'.htmlentities($row["id"]).'</td>';
        print '<td>'.htmlentities($row["sname"]).'</td>';
        print '<td>'.htmlentities($row["gname"]).'</td>';
        print '<td>'.htmlentities($row["contact"]).'</td>';
        print '<td>'.htmlentities($row["email"]).'</td>';
        print '<td>'.htmlentities($row["address"]).'</td>';
        print '<td>'.htmlentities($row["admno"]).'</td>';
        print '<td>'.htmlentities($row["class"]).'</td>';
        print '<td>'.htmlentities($row["shift"]).'</td>';
        print '<td>'.htmlentities($row["gender"]).'</td>';
        print '<td>'.htmlentities($row["blgroup"]).'</td>';
        print '<td>'.htmlentities($row["division"]).'</td>';
        print '<td>'.htmlentities($row["dbirth"]).'</td>';
        print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
        print '</tr>';
    }

    print '</table>';


    function delete()
    {
        global $cn;
        $sql = "-- noinspection SqlDialectInspection

delete from student where id = " .$_GET['did'];
        mysqli_query($cn, $sql);
    }

    ?>

</div>
</body>
</html>



