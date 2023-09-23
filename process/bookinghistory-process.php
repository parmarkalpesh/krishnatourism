<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['cancle'])) {
    $id = $_POST['id'];

    $sql = "UPDATE booking SET status= WHERE id= $id";
    mysqli_query($con, $sql);
}
