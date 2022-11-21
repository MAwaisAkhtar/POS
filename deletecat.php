<?php

require('db.php');
$SR=$_GET['SR'];
$dlt="DELETE FROM `CATEGORY` WHERE SR=$SR";
$drun=mysqli_query($con,$dlt);
header("location:categories.php");

?>