<?php
require('db.php');

    $id=$_POST['u_user_id'];
    
       echo $exptype=$_POST['u_exp_type'];
    
        $amo=$_POST['u_amount'];
        
        $date=$_POST['u_exp_date'];
    
    // $upd="UPDATE `expenses` SET `EXPENSE_TYPE`='$exptype',`AMOUNT`='$amo',`EXPENSE_DATE`='$date' WHERE id=$id";
    $update="UPDATE `expenses` SET `EXPENSE_TYPE`='$exptype',`AMOUNT`=' $amo',`EXPENSE_DATE`='$date' WHERE id='$id'";
    
    if (mysqli_query($con,$update)) {
        echo 1;
    }else {
        echo 0;
    }

?>