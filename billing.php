<?php
session_start();
require('log_sess.php');

require('db.php');
$select="SELECT * FROM `products`";
$result=mysqli_query($con,$select);

// diff admins
if (isset($_SESSION['a'])) {
    require("sidebar.php");
}else {
    unset($_SESSION['a']);
}
if (isset($_SESSION['b'])) {
    require("sidebar_sales.php");
}else {
    unset($_SESSION['b']);
}
if (isset($_SESSION['c'])) {
    require("sidebar_purchase.php");
}else {
    unset($_SESSION['c']);
}
if (isset($_POST['pro_add'])) {
    $prod=$_POST["pro_name"];
$_SESSION['cart'][]=array(
   'pro_id'=>$_POST["pro_id"],
   'pro_name'=>$prod,
   'qty'=>$_POST["qty"]
);
// if(in_array(1, $_SESSION['cart']))
// {
//     header('location:manage_sales.php');
// }
}
if (isset($_POST['unhold'])) {
    $k=$_POST['name_key'];
    // $_SESSION['name_k']=$k;
    $_SESSION['cart']=$_SESSION['new_cart'][$k];
    unset($_SESSION['new_cart'][$k]);
    unset($_SESSION['onhold'][$k]);
}
?>
<style>
    #badgee{
        transform: translate(0px, -115px);
        background-color: red;
    }
    #div-1{
        display:inline-block;
    }
    div.inner{
        width:8rem;
        height:200;
        background-color:#c7ebdf;
    }
    .box {
        width: 100%;
        height: 100px;
      }
      img {
        width: 100%;
        height: 120px;
      }
</style>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   <link rel="stylesheet" href="cart.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- bootstrap5 -->
<link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<!-- modale -->

<!-- Button trigger modal -->

<!-- holdModal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- <form enctype="multipart/form-data"> -->
        <form action="holdcart.php" method="get">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
       <div class="form-group mb-4">
        

        <label class="col-md-12 p-0">NAME</label>
        <input type="text" placeholder="Enter Name" class="form-control p-0 border-0" name="site" id="site">
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="modal" name="modal" value="OK">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end holdmodal -->



<div class="float-container">


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="page-title"><i class="far fa-money-bill-alt" aria-hidden="true"></i>  Create Invoice</h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid"> -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
           <table class="table">
            
            <tr>
                <th>Customer Name</th>
                <th>Cell Number</th>
                <th>Salesman</th>
                <th>Amount Recieved</th>
            </tr>
            
            <tr>
            <form action="cus_data_ins.php" method="post">
            <td><input type="text" name="cus_name" ></td>
            <td><input type="text" name="cell_no" ></td>
            <td><input type="text" name="saleman" ></td>
            <td><input type="text" name="amo_rec" > <input type="submit" value="Enter" name="cus_btn" class="btn btn-success text-white"></td>
            </form>
            </tr>
                                      
                                    
           </table>
    <!-- </div> -->
    </div>
    </div>
    </div>

<!-- left cart -->
    <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card-sl">
                    
                    <h2 class="bg-danger text-white"><i class="fas fa-shopping-cart" aria-hidden="true"></i>  Products Catalogue</h2>
                    
                    <div class="card-heading">
                        <form action="" method="post">

                        <label >PRODUCT ID</label><br>
                        <input type="number" name="pro_id" ><br><br>

                        <label >PRODUCT NAME</label><br>
                         
                        <select name="pro_name" id="cars" class="form-control border-3">
                        <?php while ($row=mysqli_fetch_assoc($result)) {?>
                        <option value="<?php echo $row['PRODUCT_NAME']  ?>"><?php echo $row['PRODUCT_NAME']  ?></option>
                        <?php }  ?> 
                        </select>
                        
                        <label >QUANTITY</label><br>
                        <input type="text" name="qty" >

                        <input type="submit" name="pro_add" value="Add" class="btn btn-danger"><br><br>
                        </form>
                        <!-- <h2 class="bg-danger text-white"><i class="fas fa-shopping-cart" aria-hidden="true"></i>  Bill Management</h2>
                        <form action="print.php" method="post">
                        <label for="">AMOUNT RECIEVED</label><br>
                        <input type="text" name="amo_rec">
                        <input type="submit" name="amo_btn" value="Print" class="btn btn-warning">
                        </form> -->
                    </div>
                </div>
            </div>
        </div> 
    <!-- end left cart -->
            <div class="card outer"  style="width: 40rem; margin-top:-21rem; margin-left:400px;">
            <div class="card-body">
            <table class="table">
            <thead>
            </thead>
            <tbody>
            <?php
            require('productsshow.php');
            ?>
            </tbody>
            </table>
            </div>
            </div>
            </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-black">
                        <div class="child-container pl-3 pr-3" >
        <div class="row">
                <div class="card-sl ">
                <div class="card-heading1 ">
                           <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>  
                                            <th class="border-top-0">PRODUCT ID</th>
                                            <th class="border-top-0">PRODUCT NAME</th>
                                            <th class="border-top-0">PRICE</th>
                                            <th class="border-top-0">QUANTITY</th>
                                            <th class="border-top-0">TOTAL PRICE</th>
                                            <th class="border-top-0">MAX QUANTITY</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $bill="";
                                    $price=0;
                                    $tb=0;
                                    $q=0;
                                    if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key =>$value) {


                                        // $p=0;
                                        // $q=0;
                                        $p=$value['pro_name'];
                                        $q=$value['qty'];
                                        // $max_qty=1;

                                        // $res_max=mysqli_query($con,$select);
                                        // while($row=mysqli_fetch_assoc($res_max))
                                        // {   
                                        //     // $max_qty=$row['QUANTITY'];
                                        //     if($p==$row['PRODUCT_NAME']){
                                        //     $max_qty=$row['QUANTITY'];
                                        //     }
                                        // }
                                        // if ($q>$max_qty) {
                                        //     // header('Location: '.$_SERVER['REQUEST_URI']);
                                        //     // echo '<script>alert("Not Enough Quantity Available")</script>';
                                        //     // echo '<script>window.location.reload;</script>';
                                        //     // session_destroy();
                                        //     unset($_SESSION['cart']);
                                        //     // exit();
                                        //     // $max_qty=0;
                                        //     $q=0;
                                        //     // header('location:billing.php');  
                                        // }
                                        echo "<tr>";
                                        echo "<form action='editcart.php' method='POST'>";
                                        echo "<input type='hidden' name='key' value='".$key."'>";
                                           
                                                echo "<td>".$value['pro_id']."</td>";
                                                $i=$value['pro_id'];
                                                $_SESSION['i']=$i;
                                                echo "<input type='hidden' name='pro_id' value='".$value['pro_id']."'>";
                                                echo "<td>".$value['pro_name']."</td>";
                                                // $_SESSION['p']=$p;
                                                echo "<input type='hidden' name='pro_name' value='".$value['pro_name']."'>";

                                                $result2=mysqli_query($con,$select);
                                                while($row=mysqli_fetch_assoc($result2))
                                                {
                                                    
                                                    if($p==$row['PRODUCT_NAME']){
                                                    echo "<td>".$row['SALE_PRICE']."</td>";
                                                    $price=$row['SALE_PRICE'];
                                                    // $_SESSION['price']=$price;
                                                    $pur_price=$row['PURCHASE_PRICE'];
                                                    // $_SESSION['pur']=$pur_price;
                                                    }    
                                                }
                                                echo "<td><input type='text' name='qty' value='".$value['qty']."'></td>";
                                                
                                                // $_SESSION['qty']=$q;

                                        $bill=$price * $q;
                                        // $_SESSION['bill']=$bill;
                                        echo "<td>".($bill)."</td>";
                                        $tb=$bill+$tb;
                                        // $_SESSION['tb']=$tb;
                                        $result3=mysqli_query($con,$select);
                                        while($row=mysqli_fetch_assoc($result3))
                                        {
                                            if($p==$row['PRODUCT_NAME']){
                                            echo "<td>".$row['QUANTITY']."</td>";
                                            $_SESSION['QUANTITY']=$row['QUANTITY'];
                                            
                                            }
                                        }
                                        echo "<td><input type='submit' value='Delete' name='event' class='btn btn-danger text-white'><input type='submit' value='Update' name='event' class='btn btn-warning'></td>";
                                        echo "</form>";
                                        echo "</tr>";  
                                    }                                     
                                    } 
                                echo "<tr>";
                                echo "<th><label>Total Bill</label></th>";
                                echo "<td><input type='text' name='' value='$tb'></td>";
                                ?>
                                <form action="sdestroybilling.php" method="post">
                                <?php
                                echo "<td><input type='submit' name='' value='EMPTY CART' class='btn btn-danger text-white'></td>";
                                ?>
                                </form>
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Hold Cart
                                </button></td>
                                <form action="holdcart.php" method="post">
                                <td><input type="submit"  name="unhold_cart" value="Unhold Carts" class="btn btn-success text-white"></td>
                                </form>
                                <?php
                                echo "</tr>";
                            ?>
                            </tbody>
                            </table>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>

    </body>
</html>