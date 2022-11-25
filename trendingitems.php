<?php
require('db.php');
session_start();
$res="SELECT `PRODUCT_NAME`, `QUANTITY` FROM `billing_data` ";
$sel=mysqli_query($con,$res);
$a_p='';
$a_q='';
while ($row=mysqli_fetch_assoc($sel)) {
  $p=$row['PRODUCT_NAME'];
  $q=$row['QUANTITY'];
  if ($p==$a_p) { 
    // $a_p=$p;
?>
<td> <?php echo $q+$a_q; ?> </td>
<?php
   $a_p=$p;
   $a_q=$q;
  }elseif($p !== $a_p) {
    $a_p=$p;
    $a_q=$q;
  }
  // echo $p;
  // echo $q;
}
?>