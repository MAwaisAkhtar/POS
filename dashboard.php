<?php
require("db.php");
session_start();
require("log_sess.php");

$sel_sales="SELECT * FROM `billing_data`";
$sales_run = mysqli_query($con,$sel_sales);
$sales_row=mysqli_num_rows($sales_run);

$sel_pro="SELECT * FROM `PRODUCTS`";
$pro_run = mysqli_query($con,$sel_pro);
$pro_row=mysqli_num_rows($pro_run);

$sel_exp="SELECT * FROM `expenses`";
$exp_run = mysqli_query($con,$sel_exp);
$exp_row=mysqli_num_rows($exp_run);

$sel_brand="SELECT * FROM `brand`";
$brand_run = mysqli_query($con,$sel_brand);
$brand_row=mysqli_num_rows($brand_run);

$sel_data="SELECT * FROM `data`";
$data_run = mysqli_query($con,$sel_data);
$data_row=mysqli_num_rows($data_run);

$sel_project="SELECT * FROM `project`";
$project_run = mysqli_query($con,$sel_project);
$project_row=mysqli_num_rows($project_run);


?>

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
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

<!-- bootstrap5 -->
<link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php
// diff admins
if (isset($_SESSION['a'])) {
    require("sidebar.php");
}
// else {
//     unset($_SESSION['a']);
// }
if (isset($_SESSION['b'])) {
    require("sidebar_sales.php");
}
// else {
//     unset($_SESSION['b']);
// }
if (isset($_SESSION['c'])) {
    require("sidebar_purchase.php");
}
// else {
//     unset($_SESSION['c']);
// }


?>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        
        
        <div class="page-wrapper">

            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><b>Dashboard</b></h4>
                    </div>

                    

                </div>
                
            </div>
           
            <div class="container-fluid">
            <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Sales</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div ><i class="far fa-money-bill-alt fa-3x"></i>
                                        <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $sales_row;  ?></span></li>
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="manage_sales.php">See Sales</a></ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Products</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fas fa-shopping-bag fa-3x"></i>
                                        <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple"><?php echo $pro_row ?></span></li>
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="products.php">See Products</a></ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Expenses</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fas fa-dollar-sign fa-3x"></i>
                                        <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info"><?php echo $exp_row  ?></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="manage_expense.php">See Expenses</a></ul>

                        </div>
                    </div>
                </div>

            

                <!-- 2nd row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Brands</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fab fa-bimobject fa-3x"></i>
                                        <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $brand_row ?></span></li>
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="brands.php">See Brands</a></ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Employees</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fas fa-user fa-3x"></i>
                                    <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                
                                <li class="ms-auto"><span class="counter text-purple"><?php echo $data_row  ?></span></li>
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="manage_employees.php">See Employees</a></ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Admins</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fas fa-unlock fa-3x"></i>
                                    <canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                <!-- <i class="fas fa-unlock height:30px" aria-hidden="true"></i> -->

                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info"><?php echo $project_row  ?></span>
                                </li> 
                            </ul>
                            <ul class="d-flex justify-content-end"><a href="manage_admins.php">See Admins</a></ul>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid">
            <div class="row justify-content-center">

<!-- low quantity table -->
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">STOCK ALERT!</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                              
                                    <div >

                                   <?php require('stockalert.php'); ?>
                                    </div>
                                
                                
                            </ul>
                            <ul class="d-flex justify-content-end "><a href="products.php">See Products</a></ul>
                        </div>
                    </div>
 <!-- end lowquantity table -->

<!-- EXPIRED -->
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">EXPIRED ITEMS!</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                              
                                    <div >

                                   <?php 
                                   require('expire_items.php'); 
                                   ?>
                                    </div>
                                
                            </ul>
                            <ul class="d-flex justify-content-end "><a href="products.php">See Items</a></ul>
                        </div>
                    </div>
<!-- END EXPIRE TABLE -->

<!-- BAR -->
<div class="col-lg-7 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">TRENDING ITEMS!</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                              
                                    <div >

                                   <?php 
                                   include('bar.php'); 
                                   ?>
                                    </div>
                                
                            </ul>
                            <ul class="d-flex justify-content-end "><a href="products.php">See Items</a></ul>
                        </div>
                    </div>
<!-- END BAR -->




<!-- PIE -->
<div class="col-lg-5 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">EXPIRED ITEMS!</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <div >
                                   <?php 
                                //    include('pie.php'); 
                                   ?>
                                    </div>
                            </ul>
                            <ul class="d-flex justify-content-end "><a href="products.php">See Items</a></ul>
                        </div>
                    </div>
<!-- END PIE -->




                </div>
            </div>




            <div class="container-fluid">
            <div class="row justify-content-center">
            <!-- PIE -->
<div class="col-lg-6.5 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">TRENDING ITEMS!</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                              
                                    <div >

                                   <?php 
                                //    include('pie.php'); 
                                   ?>
                                    </div>
                                
                            </ul>
                            <ul class="d-flex justify-content-end "><a href="products.php">See Items</a></ul>
                        </div>
                    </div>
<!-- END PIE -->
                   
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