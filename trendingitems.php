<?php
require('db.php');
session_start();
$res="SELECT `PRODUCT_NAME`, `QUANTITY` FROM `billing_data` ";
$sel=mysqli_query($con,$res);
while ($row=mysqli_fetch_assoc($sel)) {
  $p=$row['PRODUCT_NAME'];
  echo $p;
}
?>