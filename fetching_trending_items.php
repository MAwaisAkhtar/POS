<?php
require('db.php');
session_start();
$sel="SELECT DISTINCT product_name,quantity FROM `trendingitems`";
$sel_q=mysqli_query($con,$sel);
while ($row=mysqli_fetch_assoc($sel_q)) {
echo $row['product_name'];
echo $row['quantity'];

}

?>