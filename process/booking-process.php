<?php
session_start();
?>

<?php
include '../database/connection.php';
$user_id = $_POST['user_id'];
$package_id = $_POST['package_id'];
$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$date = $_POST['date'];
$countpeople = $_POST['countpeople'];
$totalamount = $_POST['totalamount'];



if (!isset($_SESSION['tms'])) {
    echo "<script>
    alert('Please login for book the tour !!');
    window.location.href='../login.php';
    </script>";
} 

$phoneno_format = '/^[0-9]{10}$/';
if (!preg_match($phoneno_format, $phonenumber)) {
    echo "<script>
    alert('Phonenumber is only 10 digit');
    window.location.href='../packages.php';
    </script>";
    return;
}
else {

    $quary = "INSERT INTO booking(`user_id`,`package_id`,`name`,phonenumber,`date`,`countpeople`,`totalamount`,`status`) VALUES('$user_id','$package_id','$name','$phonenumber','$date','$countpeople','$totalamount','pending')";
    $data = mysqli_query($con, $quary);
    echo "<script>
    alert('Booking Successful !!');
    window.location.href='../bookinghistory.php';
    </script>";
}
