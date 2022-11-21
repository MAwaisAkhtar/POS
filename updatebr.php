<?php
require("db.php");


if(isset($_POST['modal'])){
    
    $SR=$_POST['user_id'];
    $n=$_POST['brand'];

$upd="UPDATE `BRAND` SET `BRAND_NAME`='$n' WHERE SR=$SR";
$urun=mysqli_query($con,$upd);
header("location:brands.php");
}

?>

