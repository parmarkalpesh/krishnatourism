<?php

include '../database/connection.php';
session_start();
echo "welcome" . $_SESSION['tms'];
echo "welcome" . $_SESSION['user_id'];


    $username =$_POST['username'];
    $password =$_POST['password'];
   
    $query ="SELECT id,username,`password` FROM user WHERE username='$username' AND password='$password' ";
    $data=mysqli_query($con,$query);
    $row = mysqli_fetch_array($data, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($data);  
      
    if($count == 1){  
        $_SESSION['tms'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];

        header("Location:../index.php");
    }  
    else{  
        echo "<script>
        alert('Cheak Username or Password');
        window.location.href='../login.php';
        </script>";
    }    
    mysqli_close($con);
?>