<?php
require('db.php');
$id=$_GET['id'];
$s_select="SELECT * FROM `sales_person` WHERE id=$id";
$s_run=mysqli_query($con,$s_select);


?>