<?php
include '../database/connection.php';
// session_start();
// echo "welcome" . $_SESSION['tms'];


$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$date = $_POST['date'];
$countpeople = $_POST['countpeople'];

$quary = "INSERT INTO booking(`name`,phonenumber,`date`,`countpeople`) VALUES('$name','$phonenumber','$date','$countpeople')";
$data = mysqli_query($con, $quary);
// $row = mysqli_fetch_array($data, MYSQLI_ASSOC);
// $count = mysqli_num_rows($data);

if ($count == 1) {
    // $_SESSION['tms'] = $row['username'];
    header("Location:./booking-process.php");

} else {


    echo "<script>
    alert('Keep First Login !!');
    window.location.href='../login.php';
    </script>";
}
