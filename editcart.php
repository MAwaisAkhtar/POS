<?php
session_start();
$key=$_POST["key"];
// $y=$_POST["name1"];
// $z=$_POST["name2"];
$event=$_POST['event'];

$product=array($x,$y,$z);
if ($event=="Update") {
    $_SESSION['cart'][$key]=array(
        'pro_id'=>$_POST["pro_id"],
        'pro_name'=>$_POST["pro_name"],
        'qty'=>$_POST["qty"]
     );
    
}elseif ($event=="Delete") {
    unset($_SESSION['cart'][$key]);
}
header("location:billing.php");

?>