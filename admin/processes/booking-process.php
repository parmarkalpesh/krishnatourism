<?php
include '../../database/connection.php';
if (isset($_POST['aprove'])) {

    $id = $_POST['id'];

    $sql = "UPDATE booking SET status='Approve by admin' WHERE id='$id'";
    $data = mysqli_query($con, $sql);
    header("Location:../booking.php");
} else if (isset($_POST['cancel'])) {

    $id = $_POST['id'];


    $sql = "UPDATE booking SET status='Cancel by admin' WHERE id=$id";
    $data = mysqli_query($con, $sql);
    header("Location:../booking.php");
}
