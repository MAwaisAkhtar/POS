<?php
require("db.php");

$id=$_GET['id'];
$select="SELECT * FROM `data` WHERE id=$id";
$srun=mysqli_query($con,$select);
if(isset($_POST['up'])){
    
    $n=$_POST['name'];
    $u=$_POST['username'];
    $p=$_POST['pass'];
    $c=$_POST['cell_number'];
    $com=$_POST['commission'];

$upd="UPDATE `data` SET `EMPLOYEE NAME`='$n',`USERNAME`='$u',`PASSWORD`='$p',`CELL NUMBER`='$c',`COMMISSION`='$com' WHERE id=$id";
$urun=mysqli_query($con,$upd);
header("location:manage_employees.php");
}

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
    
</head>

<body>
    <?php 
    require('navbar.php');
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
                        <h4 class="page-title">Update Profile</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php while($row=mysqli_fetch_assoc($srun)){ ?>

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">EMPLOYEE NAME</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter name"
                                                class="form-control p-0 border-0" name="name" value="<?php echo $row["EMPLOYEE NAME"]   ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">USERNAME</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter username"
                                                class="form-control p-0 border-0" name="username"
                                                id="example-email" value="<?php echo $row["USERNAME"]   ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">PASSWORD</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter password"
                                                class="form-control p-0 border-0" name="pass"
                                                id="example-email" value="<?php echo $row["PASSWORD"]   ?>">
                                        </div>
                                    </div><div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">CELL NUMBER</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Cell number"
                                                class="form-control p-0 border-0" name="cell_number"
                                                id="example-email" value="<?php echo $row["CELL NUMBER"]   ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">COMMISSION</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter commission"
                                                class="form-control p-0 border-0" name="commission"
                                                id="example-email" value="<?php echo $row["COMMISSION"]   ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            
                                            <input class="btn btn-success" type="submit" name="up" value="Update Profile">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <?php } ?>         
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
</body>

</html>