<?php
include '../database/connection.php';

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber']; 
$date = $_POST['date']; 
$countpeople = $_POST['countpeople']; 

// if(session)
$quary = "INSERT INTO booking(`name`,phonenumber,`date`,`countpeople`) VALUES('$name','$phonenumber','$date','$countpeople')";
$data = mysqli_query($con, $quary);
// header("Location:../login.php");

    echo "<script>
    alert('Conformation very soon!!');
    window.location.href='../packages.php';
    </script>";
    

?>