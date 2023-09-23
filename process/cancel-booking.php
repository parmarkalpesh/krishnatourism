<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);

    $id = $_GET['id'];


    $sql = "UPDATE booking SET status='cancel' WHERE id=$id";
    $x=mysqli_query($con, $sql);
    header("Location:../bookinghistory.php");
    ?> 