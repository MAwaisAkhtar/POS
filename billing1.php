<?php
session_start();
require('db.php');
$select="SELECT * FROM `products`";
$result=mysqli_query($con,$select);
$y=0;
require('navbar.php');

$product=0;
if (isset($_POST['pro_add'])) {
    
    $x=$_POST["pro_id"];
    $y=$_POST["pro_name"];
    $z=$_POST["qty"];
    $product=array($x,$y,$z);

$_SESSION[$y]=$product;
}
// session_destroy();

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
   <link rel="stylesheet" href="cart.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
            </tr>
            
            <tr>
            <form action="cus_data_ins.php" method="post">
            <td><input type="text" name="cus_name" ></td>
            <td><input type="text" name="cell_no" ></td>
            <td><input type="text" name="saleman" > <input type="submit" value="Enter" name="cus_btn" class="btn btn-success text-white"></td>
            </form>
            </tr>
                                      
                                    
           </table>
    <!-- </div> -->
    </div>
    </div>
    </div>


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

                        <input type="submit" name="pro_add" value="Add" class="btn btn-warning"><br><br>
                        </form>

                        <h2 class="bg-danger text-white"><i class="fas fa-shopping-cart" aria-hidden="true"></i>  Bill Management</h2>
                        <form action="" method="post">
                        <label for="">AMOUNT RECIEVED</label><br>
                        <input type="text" name="amo_rec" >
                        <input type="submit" name="" value="Print" class="btn btn-warning">
                        </form>
                    </div>
                </div>
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

                              
                                    
                                    foreach ($_SESSION as $product) {
                                        $p=0;
                                        $q=0;
                                        echo "<tr>";
                                        echo "<form action='editcart.php' method='POST'>";
                                        foreach ($product as $key => $value) {
                                            if ($key == 0) {
                                                echo "<td>".$value."</td>";
                                                $i=$value;
                                                echo "<input type='hidden' name='name$key' value='$value'>";
                                                
                                            }elseif ($key==1) {
                                                echo "<td>".$value."</td>";
                                                $p=$value;
                                                echo "<input type='hidden' name='name$key' value='$value'>";

                                                $result2=mysqli_query($con,$select);
                                                while($row=mysqli_fetch_assoc($result2))
                                                {
                                                    
                                                    if($p==$row['PRODUCT_NAME']){
                                                    echo "<td>".$row['SALE_PRICE']."</td>";
                                                    $price=$row['SALE_PRICE'];
                                                    }    
                                                } 
                                            
                                            }elseif ($key==2) {
                                                echo "<td><input type='text' name='name$key' value='$value'></td>";
                                                $q=$value;

                                            }
                                        }

                                        $bill=$price * $q;
                                        echo "<td>".($bill)."</td>";
                                        $tb=$bill+$tb;

                                        $result3=mysqli_query($con,$select);
                                        while($row=mysqli_fetch_assoc($result3))
                                        {
                                            
                                            if($p==$row['PRODUCT_NAME']){
                                            echo "<td>".$row['QUANTITY']."</td>";
                                            }    
                                        }

                                        echo "<td><input type='submit' value='Delete' name='event' class='btn btn-danger text-white'><input type='submit' value='Update' name='event' class='btn btn-warning'></td>";
                                        echo "</form>";
                                        echo "</tr>";

                                        
                                       
                                    } 
                                echo "<tr>";
                                echo "<th><label>Total Bill</label></th>";
                                echo "<td><input type='text' name='' value='$tb'></td>";
                            
                                ?>


                                <form action="sdestroy.php" method="post">
                                <?php
                                echo "<td><input type='submit' name='' value='EMPTY CART' class='btn btn-success text-white'></td>";
                                ?>
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


            </body>
</html>