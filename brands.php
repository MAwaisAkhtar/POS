<?php
require('db.php');
session_start();
require("log_sess.php");

$select="SELECT * FROM `BRAND`";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <link href="css/style.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha256-56zsTlMwzGRtLC4t51alLh5cKYvi0hnbhEXQTVU/zZQ=" crossorigin="anonymous"></script>
   

<!-- bootstrap5 -->
<link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
 <!-- datatable cdns -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        #toast-container > .customer-info {            
            background-color: black;
            
           }
    </style>

    <!-- Toaster library cdn -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
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

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><i class="fab fa-bimobject" aria-hidden="true"></i>  BRANDS</h4>
                    </div>
                    
                </div>
                
            </div>
            
<div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form action="insertbr.php" method="post">
                            <input type="submit" name="" value="Add Brand" class="btn btn-success text-white"><br>
                            </form><br>
                            <div class="table-responsive">
                                <table id="export" class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">SR NO.</th>
                                            <th class="border-top-0">BRAND NAME</th>
                                            <th class="border-top-0">EDIT</th>
                                            <th class="border-top-0">DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row=mysqli_fetch_assoc($srun)){ ?>
                                        
                                        <tr>
                                            <td><?php echo $row["SR"]  ?></td>
                                            <td><?php echo $row["BRAND_NAME"]  ?></td>
					                        <td><button class="btn btn-light" data-bs-toggle="modal" type="button" data-bs-target="#updateModal<?php echo $row['SR'] ?>"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></button></td>
                                        
                                            <td> <a href="deletebr.php?SR=<?php echo $row['SR'] ?>" onclick="return checkDelete()"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                <!-- update modal -->

                                                <div class="modal fade" id="updateModal<?php echo $row['SR'] ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">

                                                <div class="modal-dialog">

                                                <div class="modal-content">
                                                    
                                                    <div class="modal-header">

                                                    <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                    </div>

                                                    <form action="updatebr.php" method="post">

                                                    <div class="modal-body">

                                                    <div class="form-group mb-4">
                                                    
                                                    <label class="col-md-12 p-0">BRAND</label>

                                                    <input type="hidden" name="user_id" value="<?php echo $row['SR']?>"/>

                                                    <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="brand" value="<?php echo $row['BRAND_NAME']  ?>"><br>
                                                    
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

                                                <!-- end updatemodal -->
                                            

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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

            <script type="text/javascript">
               
                
            function checkDelete(){
                return confirm('Are you sure?');

            }

            
            </script>
             <?php if (isset($_SESSION['toast'])) {
                                echo '<script>
                                toastr.success("data successfully deleted","DELETE",{"iconClass": "customer-info"});
                                </script>';
                            } 
                            unset($_SESSION['toast']); 
                            ?>


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