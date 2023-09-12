<?php
include '../database/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


    $quary = "INSERT INTO contectmessage (`name`,email,`subject`,`message`) VALUES('$name','$email','$subject','$message')";
    $data = mysqli_query($con, $quary);

    echo "<script>
    alert('We are connect with you very soon!!');
    window.location.href='../index.php';
    </script>";
    // header("Location:../index.php");

?>