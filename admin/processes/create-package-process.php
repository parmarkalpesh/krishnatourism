<?php
include './database/connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST["upload"])) {

    $packagename = $_POST['packagename'];
    $packagelocation = $_POST['packagelocation'];
    $packageprice = $_POST['packageprice'];
    $packagedetails = $_POST['packagedetails'];
    $file = $_FILES['packageimage'];
    $filename = $_FILES["packageimage"]["name"];
    $filepath = $_FILES["packageimage"]["tmp_name"];

    move_uploaded_file($filepath, '../upload/' . $filename);

    if (!$con) {
        die("Connection failed: "  . mysqli_connect_error());
    }
    $sql = "INSERT INTO packages(packagename,packagelocation,packageprice,packagedetails,packageimage)VALUES('$packagename','$packagelocation','$packageprice','$packagedetails','$filename')";
    if (mysqli_query($con, $sql)) {
        header("Location:../dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
