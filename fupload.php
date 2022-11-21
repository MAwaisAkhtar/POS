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

$select="SELECT * FROM `EXPENSES`";
$srun=mysqli_query($con,$select);

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

<!-- insertModal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
<form id="form" action="finsert.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
       <div class="form-group mb-4">
        

        <label class="col-md-12 p-0">EXPENSE TYPE</label>
        <input type="text" placeholder="Enter Expense type" class="form-control p-0 border-0" name="exp_type" id="exp_type" value="">
        <label class="col-md-12 p-0">Amount</label>
        <input type="text" placeholder="Enter Amount" class="form-control p-0 border-0" name="amount" id="amount" value="">
        <label class="col-md-12 p-0">Date</label>
        <input type="date"  class="form-control p-0 border-0" name="exp_date" id="exp_date">
        <!-- <form action="" enctype="multipart/form-data" type="POST"> -->
        <input type="file" name="uploadImage" id="uploadImage">
        <!-- </form> -->
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="modal" name="modal" value="OK" data-bs-dismiss="modal">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end insertmodal -->


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><i class="fab fa-bimobject" aria-hidden="true"></i>  MANAGE EXPENSES</h4>
                    </div>
                </div>
  
            </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
                            Add Expense
                        </button><br><br>
                            
                            <div class="table-responsive">
                                <table id="" class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">EXPENSE TYPE</th>
                                            <th class="border-top-0">AMOUNT</th>
                                            <th class="border-top-0">EXPENSE DATE</th>
                                            <th class="border-top-0">UPDATE</th>
                                            <th class="border-top-0">DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data">
                                   


                                            <!-- update modal -->

                                            <div class="modal fade" id="updateModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">

                                            <div class="modal-dialog">

                                            <div class="modal-content">
                                                
                                                <div class="modal-header">

                                                <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                </div>

                                                <form action="updateexp.php" method="post">

                                                <div class="modal-body">

                                                <div class="form-group mb-4">
                                                
                                                <label class="col-md-12 p-0">EXPENSE TYPE</label>

                                                <input type="hidden" name="user_id" value="<?php echo $row['id']?>"/>


                                                <input type="text" placeholder="Enter type" class="form-control p-0 border-0" name="exp_type" value="<?php echo $row['EXPENSE_TYPE']  ?>"><br>

                                                <label class="col-md-12 p-0">AMOUNT</label>
                                                
                                                <input type="text" placeholder="Enter Amount" class="form-control p-0 border-0" name="amount" value="<?php echo $row['AMOUNT']  ?>">

                                                <label class="col-md-12 p-0">EXPENSE DATE</label>
                                                
                                                <input type="date" class="form-control p-0 border-0" name="exp_date" value="<?php echo $row['EXPENSE_DATE']  ?>">
                                                
                                                </div>

                                                </div>
                                                
                                                <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="sales_modal">Close</button>

                                                <input type="submit" class="btn btn-primary" name="modal" value="OK">

                                                </div>

                                                </form>
                                            
                                            </div>

                                            </div>

                                            </div>

                                            <!-- end update modal -->

                                       
                                   
                            
                            </tbody>
                            
                                </table>
                                <label for="">Total Expendetures</label>
                                <input type="text" name="" value="<?php echo $ad ?>" class=""><br>
                                
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




            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "finsert.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});

            </script>



            </body>

        </html>