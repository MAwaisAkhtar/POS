<?php
require("db.php");


if(isset($_POST['modal'])){
    
    $SR=$_POST['user_id'];
    $n=$_POST['cat'];

$upd="UPDATE `CATEGORY` SET `CATEGORY_NAME`='$n' WHERE SR=$SR";
$urun=mysqli_query($con,$upd);
header("location:categories.php");
}

?>

