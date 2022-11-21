<?php
require("db.php");

// $id=$_GET['id'];
// $select="SELECT * FROM `expenses` WHERE id=$id";
// $srun=mysqli_query($con,$select);
if(isset($_POST['modal'])){
    $id=$_POST['user_id'];
    $t=$_POST['exp_type'];
    $a=$_POST['amount'];
    $d=$_POST['exp_date'];

$upd="UPDATE `expenses` SET `EXPENSE_TYPE`='$t',`AMOUNT`='$a',`EXPENSE_DATE`='$d' WHERE id=$id";
$urun=mysqli_query($con,$upd);
header("location:manage_expense.php");
}

?>
