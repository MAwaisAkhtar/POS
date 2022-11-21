<?php
require('db.php');
session_start();
// session_destroy();
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



$select="SELECT * FROM `PRODUCTS`";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                        <h4 class="page-title"><i class="fa fa-lock" aria-hidden="true"></i>  Products</h4>
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
                            
                            <input  type="text" placeholder="Search here" id="search" autocomplete="off"><br><br>
    
                            <form action="insertpro.php" method="post">
                            <input type="submit" name="" value="Add Product" class="btn btn-success text-white"><br>
                            </form><br>
                            <div class="table-responsive">
                                <table id="export" class="table text-nowrap" border='2'>
                                    <thead>
                                        <tr>
                                            
                                            <th class="border-top-0">PRODUCT NAME</th>
                                            <th class="border-top-0">CATEGORY</th>
                                            <th class="border-top-0">BRAND</th>
                                            <th class="border-top-0">SELL PRICE</th>
                                            <th class="border-top-0">PURCHASE PRICE</th>
                                            <th class="border-top-0">QUANTITY</th>
                                            <th class="border-top-0">EXPIRE DATE</th>
                                            <th class="border-top-0">EDIT</th>
                                            <th class="border-top-0">DELETE</th>
                                            <th class="border-top-0">DESCRIPTION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="output">

                                    <?php 
                                     while($row=mysqli_fetch_assoc($srun)){ ?>
                                        
                                        <tr>
                                         
                                            <td><?php echo $row["PRODUCT_NAME"]  ?></td>
                                            <td><?php echo $row["CATEGORY"]  ?></td>
                                            <td><?php echo $row["BRAND"]  ?></td>
                                            <td><?php echo $row["SALE_PRICE"]  ?></td>
                                            <td><?php echo $row["PURCHASE_PRICE"]  ?></td>
                                            <td><?php echo $row["QUANTITY"]  ?></td>
                                            <td><?php echo $row["EXPIRE_DATE"]  ?></td>
					                        <td><button class="btn btn-light" data-bs-toggle="modal" type="button" data-bs-target="#updateModal<?php echo $row['ID'] ?>"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></button></td>
                                            
                                            <td> <a href="deletepro.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            <td><?php echo $row["DESCRIPTION"]  ?></td>
                                           
                                        </tr>

                                        <!-- update  modal -->

                                        <div class="modal fade" id="updateModal<?php echo $row['ID'] ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">

                                        <div class="modal-dialog">

                                        <div class="modal-content">
                                            
                                            <div class="modal-header">

                                            <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>

                                            <form action="updatepro.php" method="post">

                                            <div class="modal-body">

                                            <div class="form-group mb-4">
                                            
                                            <label class="col-md-12 p-0">PRODUCT NAME</label>

                                            <input type="hidden" name="user_id" value="<?php echo $row['ID']?>"/>

                                            <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="PRODUCT_NAME" value="<?php echo $row['PRODUCT_NAME']  ?>"><br>

                                            <label class="col-md-12 p-0">CATEGORY</label>
                                            
                                            <input type="text" placeholder="Enter text" class="form-control p-0 border-0" name="CATEGORY" value="<?php echo $row['CATEGORY']  ?>">
                                            
                                            <label class="col-md-12 p-0">BRAND</label>
                                            
                                            <input type="text" placeholder="Enter text" class="form-control p-0 border-0" name="BRAND" value="<?php echo $row['BRAND']  ?>">

                                            <label class="col-md-12 p-0">SALE PRICE</label>
                                            
                                            <input type="text" placeholder="Enter text" class="form-control p-0 border-0" name="SALE_PRICE" value="<?php echo $row['SALE_PRICE']  ?>">

                                            <label class="col-md-12 p-0">PURCHASE PRICE</label>
                                            
                                            <input type="text" placeholder="Enter text" class="form-control p-0 border-0" name="PURCHASE_PRICE" value="<?php echo $row['PURCHASE_PRICE']  ?>">

                                            <label class="col-md-12 p-0">QUANTITY</label>
                                            
                                            <input type="text" placeholder="Enter text" class="form-control p-0 border-0" name="QUANTITY" value="<?php echo $row['QUANTITY']  ?>">

                                            <label class="col-md-12 p-0">EXPIRE DATE</label>
                                            
                                            <input type="date" placeholder="Enter text" class="form-control p-0 border-0" name="EXPIRE_DATE" value="<?php echo $row['EXPIRE_DATE']  ?>">

                                            <label class="col-md-12 p-0">DESCRIPTION</label>
                                            
                                            <textarea rows="4" cols="10" class="form-control" name="DESCRIPTION" value="<?php echo $row['DESCRIPTION']  ?>"></textarea>

                                            </div>

                                            </div>
                                            
                                            <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                            <input type="submit" class="btn btn-primary" name="modal" value="OK">

                                            </div>

                                            </form>
                                        
                                        </div>

                                        </div>

                                        </div>

                                        <!-- end update modal -->




                                        <?php    }    ?>
                                        
                                    </tbody>
                                </table>



                                
                                


                                <script type="text/javascript" src="js/jquery.js"></script>
                                <script type="text/javascript">
                                $(document).ready(function(){
                                    $("#search").on("keyup",function(){
                                var search_term = $(this).val();
                                $.ajax({
                                    url: 'product_search.php',
                                    type: "POST",
                                    data : {search:search_term },
                                    success: function(data){
                                    $("#output").html(data);
                                    }
                                });
                                });
                                });
                                </script>





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