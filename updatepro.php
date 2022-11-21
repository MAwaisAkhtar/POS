<?php
require("db.php");

if(isset($_POST['modal'])){
    $id=$_POST['user_id'];
    $n=$_POST['PRODUCT_NAME'];
    $cat=$_POST['CATEGORY'];
    $br=$_POST['BRAND'];
    $u=$_POST['SALE_PRICE'];
    $p=$_POST['PURCHASE_PRICE'];
    $c=$_POST['QUANTITY'];
    $exp_date=$_POST['EXPIRE_DATE'];
    $com=$_POST['DESCRIPTION'];

$upd="UPDATE `products` SET `PRODUCT_NAME`='$n',`CATEGORY`='$cat',`BRAND`='$br',`SALE_PRICE`='$u',`PURCHASE_PRICE`='$p',`QUANTITY`='$c',`EXPIRE_DATE`='$exp_date',`DESCRIPTION`='$com' WHERE id=$id";
$urun=mysqli_query($con,$upd);
header("location:products.php");
    
    }


?>

