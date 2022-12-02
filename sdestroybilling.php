<?php
session_start();
// session_destroy();
unset($_SESSION['cart']);
unset($_SESSION['cart_ins']);
unset($_SESSION['toast_cart']);
unset($_SESSION['amo_recieved']);
header('location:billing.php');
?>