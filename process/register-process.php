<?php
include '../database/connection.php';

$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$phoneno_format = '/^[0-9]{10}$/';
if (!preg_match($phoneno_format, $phonenumber)) {
    echo "<script>
    alert('Phonenumber is only 10 digit');
    window.location.href='../register.php';
    </script>";
    return;
}
if ($password == $confirmpassword) {
    $quary = "INSERT INTO user(`username`,phonenumber,email,`password`) VALUES('$username','$phonenumber','$email','$password')";
    $data = mysqli_query($con, $quary);
    header("Location:../login.php");
}

else {

    echo "<script>
    alert('Password Not Match');
    window.location.href='../register.php';
    </script>";
}

?>