<?php
require('db.php');
$res="SELECT `PRODUCT_NAME`, `QUANTITY` FROM `billing_data` ";
$sel=mysqli_query($con,$res);

$sel1=mysqli_query($con,$res);

// $a_p='';

// $a_q='';

while ($row=mysqli_fetch_assoc($sel)) {
  $data['cart'][]=$row;
}
  foreach ($data['cart'] as $key => $value) {
   

  $p=$value['PRODUCT_NAME'];
  
  $b=0;

  foreach ($data['cart'] as $key => $value){

    $a_p=$value['PRODUCT_NAME'];

    if ($p==$a_p) { 

      $a_q=$value['QUANTITY'];

       $b=$a_q+$b;

       }
       
      }
  }
      ?>

      <td><?php echo $p ?></td>

      <td><?php echo $b ?></td>
      