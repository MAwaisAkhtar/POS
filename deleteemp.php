<?php
require('db.php');
$id=$_GET["id"];
$dlt="DELETE FROM `data` WHERE id=$id";
$drun=mysqli_query($con,$dlt);
header("location:manage_employees.php");

?>