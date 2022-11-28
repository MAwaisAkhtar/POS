<?php
require('db.php');
$res="SELECT * FROM `billing_data`";
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
  foreach ($data['cart'] as $key => $value1){
    $a_p=$value1['PRODUCT_NAME'];
    if ($p==$a_p) { 
      $a_q=$value1['QUANTITY'];
       $b=$a_q+$b;
      }  
      }
      ?>
      <td><?php echo $p ?></td>
      <td><?php echo $b ?></td>
      <?php
      $_SESSION['pro']=$p;
      // $ins_ti="INSERT INTO `trendingitems`(`product_name`, `quantity`) VALUES ('$p','$b')";
      // mysqli_query($con,$ins_ti);


      }
      // echo $_SESSION['pro'];
      ?>
      