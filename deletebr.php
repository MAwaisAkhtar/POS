<?php

require('db.php');
session_start();
$SR=$_GET['SR'];
$dlt="DELETE FROM `BRAND` WHERE SR=$SR";
// $drun=mysqli_query($con,$dlt);
if (mysqli_query($con,$dlt)) {
    // echo 1;
    $_SESSION['toast']=1;
}
header("location:brands.php");

?>