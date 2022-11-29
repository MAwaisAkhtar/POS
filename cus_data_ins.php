<?php
require("db.php");
session_start();
$select="SELECT * FROM `products`";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.css">
    <title>Shopping</title>
</head>
<body>
    <div class="container">
        <table  class="table">
            <thead>
                <tr>
                    

                </tr>
            </thead>
            <tbody>
                <?php
                // $bill="";
                
                    
                    
                    
                    
                    

                    if (isset($_POST["cus_btn"])) {
                        $cus=$_POST['cus_name'];
                        $_SESSION['cus']=$cus;
                        $cell=$_POST['cell_no'];
                        $_SESSION['cell']=$cell;
                        $s_man=$_POST['saleman'];
                        $_SESSION['s_man']=$s_man;
                        $s_man=$_POST['amo_rec'];
                        $_SESSION['amo_recieved']=$s_man;
                        // include("trendingitems.php");



                        foreach ($_SESSION['cart'] as $key =>$value) {
                        
                           
                                
                                $id=$value['pro_id'];
                                $name=$value['pro_name'];
                                $qty=$value['qty'];

                                $result2=mysqli_query($con,$select);
                                while($row=mysqli_fetch_assoc($result2))
                                {
                                    
                                    if($name==$row['PRODUCT_NAME']){
                                        $id11=$row['ID'];
                                    $price=$row['SALE_PRICE'];
                                    $pur_price=$row['PURCHASE_PRICE'];
                                    $QUANTITY=$row['QUANTITY'];
                                    $quan_new=$QUANTITY-$qty;
                                    $update_pro="UPDATE `products` SET `QUANTITY`='$quan_new' WHERE ID=$id11";
                                    $r_update=mysqli_query($con,$update_pro);
                                    $_SESSION['total_quantity']=$QUANTITY;
                                    }    
                                }


                        $bill=$price * $qty;
                        $bill_pur=$pur_price * $qty;
                        $date=date_create() -> format('Y-m-d');
                        $time=date_create() -> format('H:i:s');
                        $insert="INSERT INTO `billing_data`(`CUSTOMER_NAME`, `CUSTOMER_NUMBER`, `SALESMAN`, `PRODUCT_NAME`, `QUANTITY`, `AMOUNT`, `PURCHASE_AMOUNT` , `SALE_DATE`, `SALE_TIME`) VALUES ('$cus','$cell','$s_man','$name','$qty','$bill','$bill_pur','$date','$time')";
                        $irun=mysqli_query($con,$insert);

                            }
                        header('location:print.php');

                    }
              
                ?>
            </tbody>
        </table>
    </div>
    </body>



   