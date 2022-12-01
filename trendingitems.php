<?php
require('db.php');
$res="SELECT PRODUCT_NAME,QUANTITY FROM `billing_data`";
$sel=mysqli_query($con,$res);
$sel1=mysqli_query($con,$res);
while ($row=mysqli_fetch_assoc($sel)) {
  $data[]=$row;
  // print_r(array_unique($row));
}
// print_r(array_unique($data));
  foreach ($data as $key => $value) {
  $p=$value['PRODUCT_NAME'];
  // print_r(array_unique($data['cart']));
  $b=0;
  foreach ($data as $key => $value1){
    $a_p=$value1['PRODUCT_NAME'];
    if ($p==$a_p) {
      $a_q=$value1['QUANTITY'];
       $b=$a_q+$b;
      } }
      ?>
      <td><?php echo $p ?></td>
      <td><?php echo $b ?></td>
      <?php
$dataa['awa'][]=array(
  'p'=>$p,
  'b'=>$b,
);
      // $ins_ti="INSERT INTO `trendingitems`(`product_name`, `quantity`) VALUES ('$p','$b')";
      // mysqli_query($con,$ins_ti);
      }
      // print_r($dataa['awa']);
print_r(array_unique($dataa['awa']));

      ?>   