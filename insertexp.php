<?php
require("db.php");


    $t=$_POST['uexp_type'];
    $a=$_POST['uamount'];
    $d=$_POST['uexp_date'];
    $insert="INSERT INTO `expenses`(`EXPENSE_TYPE`, `AMOUNT`, `EXPENSE_DATE`) VALUES ('$t','$a','$d')";
    mysqli_query($con,$insert);
?>
