<?php
$email = $_POST['email'];
$password = $_POST['password']; 
session_start();
echo "welcome" . $_SESSION['tms'];


if($email == "admin@gmail.com" && $password == "admin")
{   
    $_SESSION['tms'] = $row['username'];
    header("Location: ../dashboard.php");
}
else
{
    echo "<script>
        alert('Wrong Email or Password');
        window.location.href='../index.php';
        </script>";
}
?>