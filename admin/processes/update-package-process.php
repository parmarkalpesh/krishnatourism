<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$con = mysqli_connect($servername, $username, $password, $dbname);


$id = $_GET['packageid'];
$packagename = $_POST['packagename'];
$packagelocation = $_POST['packagelocation'];
$packageprice = $_POST['packageprice'];
$packagedetails = $_POST['packagedetails'];

$filename = $_FILES['packageimage']['name'];
$filepath = $_FILES["packageimage"]['tmp_name'];
$packageimageold= $_POST['packageimageold'];

if($filename != '')
{
    $update_filename = $_FILES['packageimage']['name'];
    move_uploaded_file($filepath,'../upload/' . $filename);

    $sql = "UPDATE packages SET  
    packagename='$packagename',
    packagelocation='$packagelocation',
    packageprice='$packageprice',
    packagedetails='$packagedetails',
    packageimage='$update_filename'
    WHERE packageid = $id";

    mysqli_query($con,$sql);
    unlink("../upload/".$packageimageold);
}
else
{
    $sql = "UPDATE package SET  
    packagename='$packagename',
    packagelocation='$packagelocation',
    packageprice='$packageprice',
    packagedetails='$packagedetails'
    WHERE packageid = $id";

    $data=mysqli_query($con,$sql);
}

if( $_FILES['packageimage']['name'] !='')
{
   // $destfile = '../upload/' . $filename;
    move_uploaded_file($filepath, $destfile);
    unlink("../upload/".$packageimageold);
}

header("Location:../managepackage.php");


?>