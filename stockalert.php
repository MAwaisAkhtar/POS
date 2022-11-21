<?php
require('db.php');
$select="SELECT * FROM `products`";
$pro_run=mysqli_query($con,$select);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <table class="table">
            <th><b> SR NO. </b></th>
            <th><b>PRODUCT NAME</b></th>
            <th><b>QUANTITY</b></th>
            <tbody>
                <?php
                $s=1;
                while($row=mysqli_fetch_assoc($pro_run)){ 
                    
                    $pro_qty=$row['QUANTITY'];
                    if ($pro_qty <= 5) { ?>
                <tr>
                    <td><?php echo $s;  ?></td>
                    <td><?php echo $row['PRODUCT_NAME']  ?></td>
                    <td><?php echo $row['QUANTITY']  ?></td>
                </tr>
                <?php $s++;
             } } ?>
            </tbody>
            </table>
</body>
</html>