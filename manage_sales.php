<?php
require('db.php');
session_start();
require("log_sess.php");


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

$pur_select="SELECT * FROM `billing_data`";
$pur_run=mysqli_query($con,$pur_select);


$exp_select="SELECT * FROM `EXPENSES`";
$exp_run=mysqli_query($con,$exp_select);

$select="SELECT * FROM `billing_data`";
$srun=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- datatable cdns -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    
<!-- bootstrap5 -->
<link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><i class="fas fa-shopping-bag" aria-hidden="true"></i>  Manage Sales</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                        </div>
                    </div>
                </div>
                
            </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form action="billing.php" method="post">
                            <input type="submit" name="" value="Add New Sales" class="btn btn-success text-white"><br>
                            </form><br>
                            <div class="table-responsive">
                                <table id="export" class="table text-nowrap" border='2'>
                                    <thead>
                                        <tr>
                                            
                                            <th class="border-top-0">CUSTOMER NAME</th>
                                            <th class="border-top-0">CUSTOMER NUMBER</th>
                                            <th class="border-top-0">SALEMAN</th>
                                            <th class="border-top-0">PRODUCT NAME</th>
                                            <th class="border-top-0">QUANTITY</th>
                                            <th class="border-top-0">AMOUNT</th>
                                            <th class="border-top-0">SALE DATE</th>
                                            <th class="border-top-0">SALE TIME</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $amo_ad=0;
                                        while($row=mysqli_fetch_assoc($srun)){ ?>
                                        
                                            <tr>
                                            <td><?php echo $row["CUSTOMER_NAME"]  ?></td>
                                            <td><?php echo $row["CUSTOMER_NUMBER"]  ?></td>
                                            <td><?php echo $row["SALESMAN"]  ?></td>
                                            <td><?php echo $p=$row["PRODUCT_NAME"] ?></td>
                                            <td><?php echo $q=$row["QUANTITY"];
                                           
                                            ?></td>
                                            <td><?php echo $row["AMOUNT"];
                                            $amount=$row["AMOUNT"];
                                            $amo_ad=$amount+$amo_ad;
                                            ?></td>
                                            <td><?php echo $row["SALE_DATE"]  ?></td>
                                            <td><?php echo $row["SALE_TIME"]  ?></td>
                                            </tr>
                                        <?php    }    ?>   
                                    </tbody>
                                </table><br><br>

                                <?php
                                // Expenses
                                $ad=0;
                                while($row=mysqli_fetch_assoc($exp_run)){
                                $row["AMOUNT"];
                                $b=$row["AMOUNT"];
                                $ad=$b+$ad;
                                }
                                // PURCHASE
                                $pur_ad=0;
                                while($row=mysqli_fetch_assoc($pur_run))
                                {
                                
                                    $row['PURCHASE_AMOUNT'];
                                    $pur_amo=$row['PURCHASE_AMOUNT'];
                                    $pur_ad=$pur_amo+$pur_ad;    
                                }

                                $profit=$amo_ad-($ad+$pur_ad);



                                ?>

                                <label><b>Expenses</b></label>  
                                <input type="text" name="" class="text-danger" value="<?php echo $ad.'/-Rs';   ?>"><br><br>
                                <label><b>Total Sales</b></label>
                                <input type="text" name="" value="<?php echo $amo_ad.'/-Rs';  ?>"><br><br>
                                <label><b>Purchase</b></label>
                                <input type="text" name="" value="<?php echo $pur_ad.'/-Rs';  ?>"><br><br>
                                <label><b>Profit</b></label>
                                <input type="text" name="" class="text-success" value="<?php echo $profit.'/-Rs';  ?>">
                                
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


 <!-- export cdn -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script type="text/javascript">


$(document).ready(function() {
    $('#export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


</script>


            </body>

</html>