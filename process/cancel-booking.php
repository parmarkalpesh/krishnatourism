<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);

    $id = $_GET['id'];


    $sql = "UPDATE booking SET status='cancel by user' WHERE id=$id";
    $data=mysqli_query($con, $sql);
    echo "<script>
    alert('Booking Canclled !!');
    window.location.href='../bookinghistory.php';
    </script>";
    // header("Location:../bookinghistory.php");
    ?> 
