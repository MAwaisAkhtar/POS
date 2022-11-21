<?php
require('db.php');
$id=$_GET["id"];
$dlt="DELETE FROM `products` WHERE id=$id";
$drun=mysqli_query($con,$dlt);
header("location:products.php");

?>