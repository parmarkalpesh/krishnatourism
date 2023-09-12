<?php
$email = $_POST['email'];
$password = $_POST['password']; 

if($email == "admin@gmail.com" || $password == "admin")
{
    header("Location: ../dashboard.php");
}
else
{
    echo "<script>
        alert('Cheak Email or Password');
        window.location.href='../index.php';
        </script>";
}
?>