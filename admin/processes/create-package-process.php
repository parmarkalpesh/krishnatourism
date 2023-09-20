<?php
include './database/connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST["upload"])) {

    $packagename = $_POST['packagename'];
    $packagetitle = $_POST['packagetitle'];
    $packagelocation = $_POST['packagelocation'];
    $packageprice = $_POST['packageprice'];
    $packagedetails = $_POST['packagedetails'];
    $file = $_FILES['packageimage'];
    $day = $_POST['day'];
    $night = $_POST['night'];
    $filename = $_FILES["packageimage"]["name"];
    $filepath = $_FILES["packageimage"]["tmp_name"];

    move_uploaded_file($filepath, '../upload/' . $filename);

    if (!$con) {
        die("Connection failed: "  . mysqli_connect_error());
    }
    $sql = "INSERT INTO packages(packagename,packagetitle,packagelocation,packageprice,packagedetails,packageimage,day,night)VALUES('$packagename','$packagetitle','$packagelocation','$packageprice','$packagedetails','$filename','$day','$night')";
    if (mysqli_query($con, $sql)) {
        header("Location:../dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
