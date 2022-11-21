<?php
require('db.php');

if (isset($_POST['modal'])) {
    $username=$_POST['user_name'];
    $password=$_POST['password'];
    $select=$_POST['select'];
    // $sales=$_POST['sales'];
    if ($select == 's') {
    $s_insert="INSERT INTO `sales_person`(`s_name`, `s_pass`) VALUES ('$username','$password')";
    $run_sinsert=mysqli_query($con,$s_insert);
    header('location:manage_admins.php');
    }elseif ($select == 'p') {
    $p_insert="INSERT INTO `purchase_person`(`p_name`, `p_pass`) VALUES ('$username','$password')";
    $run_pinsert=mysqli_query($con,$p_insert);
    header('location:manage_admins.php');
    }
    

}

?>