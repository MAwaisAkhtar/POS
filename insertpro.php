<?php
require("db.php");
session_start();
require("log_sess.php");

  




$select="SELECT * FROM `category`";
$result=mysqli_query($con,$select);
$sel_brand="SELECT * FROM `brand`";
$res_brand=mysqli_query($con,$sel_brand);
if (isset($_POST["new_btn"])) {
    $p=$_POST['PRODUCT_NAME'];
    $c=$_POST['CATEGORY'];
    $b=$_POST['BRAND'];
    $s=$_POST['SALE_PRICE'];
    $pur=$_POST['PURCHASE_PRICE'];
    $qua=$_POST['QUANTITY'];
    $date=$_POST['DATE'];
    $des=$_POST['DESCRIPTION'];
    $insert="INSERT INTO `products`(`PRODUCT_NAME`, `CATEGORY`, `BRAND`, `SALE_PRICE`, `PURCHASE_PRICE`, `QUANTITY`, `EXPIRE_DATE`, `DESCRIPTION`) VALUES ('$p','$c','$b','$s','$pur','$qua','$date','$des')";
    $irun=mysqli_query($con,$insert);
    header('location:products.php');
}




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
                        <h4 class="page-title">Add New Product</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                    </div>
                </div>
              
            </div>
           
            

            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">PRODUCT NAME</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Product name"
                                                class="form-control p-0 border-0" name="PRODUCT_NAME"> </div>
                                    </div>

                                    

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">CHOOSE Category</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <!-- <input type="text" placeholder="Choose Category"
                                                class="form-control p-0 border-0" name="CATEGORY">  -->
                                                
                                                    
                                                
                                                <select name="CATEGORY" id="cars" class="form-control p-0 border-0">
                                                <?php while ($row=mysqli_fetch_assoc($result)) {?>
                                                <option value="<?php echo $row['CATEGORY_NAME']  ?>"><?php echo $row['CATEGORY_NAME']  ?></option>
                                                <?php }  ?>    
                                                </select>

                                                
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">CHOOSE Brand</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       
                                                <select name="BRAND" id="cars" class="form-control p-0 border-0">
                                                <?php while ($row=mysqli_fetch_assoc($res_brand)) {?>
                                                <option value="<?php echo $row['BRAND_NAME']  ?>"><?php echo $row['BRAND_NAME']  ?></option>
                                                <?php }  ?>    
                                                </select>

                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">SALE PRICE</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter SALE PRICE"
                                                class="form-control p-0 border-0" name="SALE_PRICE"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">PURCHASE_PRICE</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Purchase Price"
                                                class="form-control p-0 border-0" name="PURCHASE_PRICE"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">QUANTITY</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="QUANTITY"
                                                class="form-control p-0 border-0" name="QUANTITY"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">EXPIRE DATE</label>
                                        <div class="col-md-12 border p-0">
                                        <input type="date" 
                                                class="form-control p-0 border-0" name="DATE">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">DESCRIPTION</label>
                                        <div class="col-md-12 border p-0">
                                            <textarea rows="4" cols="10" class="form-control" name="DESCRIPTION" value="Enter Description">
                                            </textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            
                                            <input class="btn btn-primary" type="submit" name="new_btn" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>      
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            
        </div>
       
    </div>
   
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>


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