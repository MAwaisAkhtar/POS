<?php
require('db.php');
$id=$_POST['s_id'];

$dlt="DELETE FROM `expenses` WHERE id=$id";
if(mysqli_query($con,$dlt))
{
    echo 1;
}else{
    echo 0;
}
?>