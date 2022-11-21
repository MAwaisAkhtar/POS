<?php
if (!isset($_SESSION['a']) && !isset($_SESSION['b']) && !isset($_SESSION['c'])) {
    header('location:login.php');
}



// if (!isset($_SESSION['b'])) {
//     header('location:login.php');
// }


// if (!isset($_SESSION['c'])) {
//     header('location:login.php');
// }
?>