<?php
include '../database/connection.php';

$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if ($password == $confirmpassword) {
    $quary = "INSERT INTO user(`username`,phonenumber,email,`password`) VALUES('$username','$phonenumber','$email','$password')";
    $data = mysqli_query($con, $quary);
    header("Location:../login.php");
} else {

    echo "<script>
    alert('Password Not Match');
    window.location.href='../register.php';
    </script>";
}

?>