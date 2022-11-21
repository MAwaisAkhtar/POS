<?php
require('db.php');
$search_value = $_POST["search"];

// $con=mysqli_connect("localhost","root","","practise1") or die("fail");

$sql = "SELECT * FROM products WHERE PRODUCT_NAME LIKE '%{$search_value}%' OR CATEGORY LIKE '%{$search_value}%' OR BRAND LIKE '%{$search_value}%' OR SALE_PRICE LIKE '%{$search_value}%' OR PURCHASE_PRICE LIKE '%{$search_value}%' OR QUANTITY LIKE '%{$search_value}%' OR DESCRIPTION LIKE '%{$search_value}%'";
$result = mysqli_query($con, $sql);
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">';
              while($row = mysqli_fetch_assoc($result)){
                $output .="<tr>
                <td>{$row["PRODUCT_NAME"]}</td>
                <td>{$row["CATEGORY"]} </td>
                <td>{$row["BRAND"]} </td>
                <td>{$row["SALE_PRICE"]} </td>
                <td>{$row["PURCHASE_PRICE"]} </td>
                <td>{$row["QUANTITY"]} </td>  
                <td><a href='updatepro.php?id={$row['ID']}'>
                <i class='fa fa-edit' aria-hidden='true'></i>
                </a></td>
                <td> <a href='deletepro.php?id={$row['ID']}'><i class='fa fa-trash' aria-hidden='true'></i></a></td>             
                <td>{$row["DESCRIPTION"]} </td>

                </tr>";
              }
    $output .= "</table>";

    mysqli_close($con);

    echo $output;
}
else{
    echo "<h2>No Record Found.</h2>";
}

?>