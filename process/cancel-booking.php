<?php
include '../database/connection.php';
if (isset($_POST['cancel'])) {

    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $status = 'cancel by ' . $user_name;

    $sql = "UPDATE booking SET status='$status' WHERE id='$id'";
    $data = mysqli_query($con, $sql);
    echo "<script>
    alert('Booking cancelled !!');
    window.location.href='../bookinghistory.php';
    </script>";
    header("Location:../bookinghistory.php");
}
?>
