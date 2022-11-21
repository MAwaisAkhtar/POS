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
    <!-- cdns -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                           
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        
                        
                        <span class="logo-text">
                         
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                
            </nav>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_sales.php"
                                aria-expanded="false">
                                <i class="far fa-money-bill-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Sales</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="billing.php"
                                aria-expanded="false">
                                <i class="far fa-money-bill-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Billing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="products.php"
                                aria-expanded="false">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>

                        <button class="dropdown-btn">Sales
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">POS</span>
                                </a>
                                </li>

                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">NEW SALES</span>
                                </a>
                                </li>

                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">SALES LIST</span>
                                </a>
                                </li>
                            </div>


                            <button class="dropdown-btn">ITEMS
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">NEW ITEM</span>
                                </a>
                                </li>

                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">ITEMS LIST</span>
                                </a>
                                </li>

                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">NEW CATEGORY</span>
                                </a>
                                </li>
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">CATEGORY LIST</span>
                                </a>
                                </li>
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">NEW BRAND</span>
                                </a>
                                </li>
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">BRAND LIST</span>
                                </a>
                                </li>
                            </div>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_expense.php"
                                aria-expanded="false">
                                <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Expense</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="brands.php"
                                aria-expanded="false">
                                <i class="fab fa-bimobject" aria-hidden="true"></i>
                                <span class="hide-menu">Brands</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="categories.php"
                                aria-expanded="false">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_employees.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Employees</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_admins.php"
                                aria-expanded="false">
                                <i class="fas fa-unlock" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Admins</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                
            </div>
            
        </aside>
        
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