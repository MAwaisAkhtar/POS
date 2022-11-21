<?php

require("db.php");

// $id=$_GET['id'];

// $select="SELECT * FROM `project` WHERE id=$id";

// $srun=mysqli_query($con,$select);


if(isset($_POST['modal'])){
    
    $id=$_POST['user_id'];
    
        $name=$_POST['user_name'];
    
        $pass=$_POST['password'];
    
    $upd="UPDATE `project` SET `Admin_name`='$name',`Admin_password`='$pass' WHERE id=$id";
    
    $urun=mysqli_query($con,$upd);
    
    header("location:manage_admins.php");
    
    }


if(isset($_POST['sales_modal'])){
    
$id=$_POST['user_id'];

    $name=$_POST['user_name'];

    $pass=$_POST['password'];

$upd="UPDATE `sales_person` SET `s_name`='$name',`s_pass`='$pass' WHERE id=$id";

$urun=mysqli_query($con,$upd);

header("location:manage_admins.php");

}

if(isset($_POST['pur_modal'])){
    
        $id=$_POST['user_id'];
    
        $name=$_POST['user_name'];
    
        $pass=$_POST['password'];
    
        $upd="UPDATE `purchase_person` SET `p_name`='$name',`p_pass`='$pass' WHERE id=$id";
        
        $urun=mysqli_query($con,$upd);
        
        header("location:manage_admins.php");
        
        }

?>