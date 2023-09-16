<?php
session_start();

?>

<?php
include '../database/connection.php';

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$date = $_POST['date'];
$countpeople = $_POST['countpeople'];


if (!isset($_SESSION['tms'])) {
    echo "<script>
    alert('Keep First Login !!');
    window.location.href='../login.php';
    </script>";
} else {

    $quary = "INSERT INTO booking(`name`,phonenumber,`date`,`countpeople`) VALUES('$name','$phonenumber','$date','$countpeople')";
    $data = mysqli_query($con, $quary);
    header("Location:../index.php");
}
