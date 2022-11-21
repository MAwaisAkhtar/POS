<?php
require('db.php');
session_start();
require("log_sess.php");
require('sidebar.php');

$select="SELECT * FROM `project`";
$select_sales="SELECT * FROM `sales_person`";
$select_purchase="SELECT * FROM `purchase_person`";
$srun=mysqli_query($con,$select);
$srun_sales=mysqli_query($con,$select_sales);
$srun_purchase=mysqli_query($con,$select_purchase);

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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="insert_admins.php" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
       <div class="form-group mb-4">
       <div class="form-group mb-4">
            <label for="example-email" class="col-md-12 p-0">CHOOSE TYPE</label>
            <div class="col-md-12 border-bottom p-0">
                    <select name="select" class="form-control p-0 border-0">
                    <option value="s">Sales Person</option>
                    <option value="p">Purchase Person</option>
                    </select>  
            </div>
        
        </div>

        <label class="col-md-12 p-0">Username</label>
        <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="user_name"><br>
        <label class="col-md-12 p-0">Password</label>
        <input type="password" placeholder="Enter Password" class="form-control p-0 border-0" name="password">

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
<!-- end modal -->


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><i class="fa fa-lock" aria-hidden="true"></i>  Manage Admins</h4>
                    </div>
                    
                </div>
                
            </div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Person
                        </button><br><br>

                            <div class="table-responsive">
                                <table id="export" class="table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th><h4><b>Admin</b></h4></th>
                                      </tr>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">USER NAME</th>
                                            <th class="border-top-0">PASSWORD</th>
                                            <th class="border-top-0">IMAGE</th>
                                            <th class="border-top-0">EDIT</th>
                                            <th class="border-top-0">DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row=mysqli_fetch_assoc($srun)){ ?>
                                            <tr>
                                            <td><?php 
                                            // $s="";
                                            // $a=1;
                                            // while ($a <= mysqli_num_rows($srun)) {
                                            //   $a=$s+$a;
                                            //   echo $a;
                                            //   $a++;
                                            // } 
                                            echo $row["id"];
                                            ?></td>
                                            <td><?php echo $row["Admin_name"]  ?></td>
                                            <td><?php echo $row["Admin_password"]  ?></td>
                                            <td><i class="fa fa-file-image" aria-hidden="true"></i> </td>
                                            <td><button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#updateModal">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            </button></td>
                                            <td><button class="btn btn-primary text-white">Restricted</button></td>
                                        </tr>

                                        <!-- update modal -->

                                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">

                                          <div class="modal-dialog">

                                            <div class="modal-content">
                                                
                                              <div class="modal-header">

                                                <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                              </div>

                                              <form action="updateadm.php" method="post">

                                              <div class="modal-body">

                                              <div class="form-group mb-4">
                                              
                                                <label class="col-md-12 p-0">Username</label>

							                                  <input type="hidden" name="user_id" value="<?php echo $row['id']?>"/>


                                                <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="user_name" value="<?php echo $row['Admin_name']  ?>"><br>

                                                <label class="col-md-12 p-0">Password</label>
                                                
                                                <input type="password" placeholder="Enter Password" class="form-control p-0 border-0" name="password" value="<?php echo $row['Admin_password']  ?>">
                                               
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

                                        <?php    }    ?>
                                            </tbody>
                                            </table><br><br>

                                            <table id="export_sales" class="table text-nowrap">
                                    <thead>
                                      
                                      <tr>
                                        <th><h4><b>Sales Persons</b></h4></th>
                                      </tr>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">USER NAME</th>
                                            <th class="border-top-0">PASSWORD</th>
                                            <th class="border-top-0">IMAGE</th>
                                            <th class="border-top-0">EDIT</th>
                                            <th class="border-top-0">DELETE</th>
                                        </tr>
                                    </thead>
                                    

                                        <tbody>
                                        
                                        <?php while($row1=mysqli_fetch_assoc($srun_sales)){ ?>  
                                        <tr>
                                            <td><?php echo $row1["id"]  ?></td>

                                            <td><?php echo $row1["s_name"]  ?></td>

                                            <td><?php echo $row1["s_pass"]  ?></td>

                                            <td><i class="fa fa-file-image" aria-hidden="true"></i> </td>

					                                  <td><button class="btn btn-light" data-bs-toggle="modal" type="button" data-bs-target="#updatesalesModal<?php echo $row1['id'] ?>"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></button></td>

                                            <td><a href="delete.php?id=<?php echo $row1['id'] ?>" class="btn btn-light"><i class="fa fa-trash text-primary" aria-hidden="true"></i></a>
                                           
                                            </td>

                                        </tr>

                                        <!-- update sales modal -->

                                        <div class="modal fade" id="updatesalesModal<?php echo $row1['id'] ?>" tabindex="-1" aria-labelledby="updatesalesModalLabel" aria-hidden="true">

                                          <div class="modal-dialog">

                                            <div class="modal-content">
                                                
                                              <div class="modal-header">

                                                <h1 class="modal-title fs-5" id="updatesalesModalLabel">Modal title</h1>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                              </div>

                                              <form action="updateadm.php" method="post">

                                              <div class="modal-body">

                                              <div class="form-group mb-4">
                                              
                                                <label class="col-md-12 p-0">Username</label>

							                                  <input type="hidden" name="user_id" value="<?php echo $row1['id']?>"/>

                                                <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="user_name" value="<?php echo $row1['s_name']  ?>"><br>

                                                <label class="col-md-12 p-0">Password</label>
                                                
                                                <input type="password" placeholder="Enter Password" class="form-control p-0 border-0" name="password" value="<?php echo $row1['s_pass']  ?>">
                                               
                                              </div>

                                              </div>
                                              
                                              <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="sales_modal">Close</button>

                                                <input type="submit" class="btn btn-primary" name="sales_modal" value="OK">

                                              </div>

                                              </form>
                                            
                                            </div>

                                          </div>

                                        </div>

                                        <!-- end update sales modal -->

                                        <?php }  ?>
                                        </tbody>
                                        </table><br><br>

                                        <table id="export_purchase" class="table text-nowrap">
                                    <thead>
                                      <tr>
                                        <th><h4><b>Purchase Persons</b></h4></th>
                                      </tr>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">USER NAME</th>
                                            <th class="border-top-0">PASSWORD</th>
                                            <th class="border-top-0">IMAGE</th>
                                            <th class="border-top-0">EDIT</th>
                                            <th class="border-top-0">DELETE</th>
                                        </tr>
                                    </thead>
                                   
                                        <tbody>
                                        <?php while($row2=mysqli_fetch_assoc($srun_purchase)){ ?>

                                        <tr>

                                            <td><?php echo $row2["id"]  ?></td>

                                            <td><?php echo $row2["p_name"]  ?></td>

                                            <td><?php echo $row2["p_pass"]  ?></td>

                                            <td><i class="fa fa-file-image" aria-hidden="true"></i> </td>

					                                  <td><button class="btn btn-light" data-bs-toggle="modal" type="button" data-bs-target="#updatepurchaseModal<?php echo $row2['id'] ?>"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></button></td>

                                            <td><a href="delete_pur.php?id=<?php echo $row2['id'] ?>" class="btn btn-light"><i class="fa fa-trash text-primary" aria-hidden="true"></i></a>

                                            </td>

                                        </tr>

                                        <!-- updatepurchase modal -->

                                        <div class="modal fade" id="updatepurchaseModal<?php echo $row2['id'] ?>" tabindex="-1" aria-labelledby="updatepurchaseModalLabel" aria-hidden="true">

                                          <div class="modal-dialog">

                                            <div class="modal-content">
                                                
                                              <div class="modal-header">

                                                <h1 class="modal-title fs-5" id="updatepurchaseModalLabel">Modal title</h1>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                              </div>

                                              <form action="updateadm.php" method="post">

                                              <div class="modal-body">

                                              <div class="form-group mb-4">
                                              
                                                <label class="col-md-12 p-0">Username</label>

							                                  <input type="hidden" name="user_id" value="<?php echo $row2['id']?>"/>


                                                <input type="text" placeholder="Enter name" class="form-control p-0 border-0" name="user_name" value="<?php echo $row2['p_name']  ?>"><br>

                                                <label class="col-md-12 p-0">Password</label>
                                                
                                                <input type="password" placeholder="Enter Password" class="form-control p-0 border-0" name="password" value="<?php echo $row2['p_pass']  ?>">
                                               
                                              </div>

                                              </div>
                                              
                                              <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                                                <input type="submit" class="btn btn-primary" name="pur_modal" value="OK">

                                              </div>

                                              </form>
                                            
                                            </div>

                                          </div>

                                        </div>

                                        <!-- end updatepurchasemodal -->

                                        <?php   }  ?>




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

<script type="text/javascript">

$(document).ready(function() {
    $('#export_sales').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script type="text/javascript">

$(document).ready(function() {
    $('#export_purchase').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>


    </body>

</html>