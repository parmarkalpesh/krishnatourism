<?php
include '../database/connection.php';
if (isset($_POST['cancel'])) {

    $id = $_POST['id'];

    $sql = "UPDATE booking SET status='cancel by user' WHERE id='$id'";
    $data = mysqli_query($con, $sql);
    header("Location:../bookinghistory.php");
}
