<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location: login.php");
}
// Empty cart

// Empty cart end

$link=mysqli_connect('localhost','root','','poss');
$connect = mysqli_connect("localhost", "root", "", "pos");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM product 
	WHERE `name` LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM product";
   
}
$res1=mysqli_query($link,$query);



if(isset($_POST['btn'])){
   

    $_SESSION['cart'][] = array(
        'datee' => $_POST['date'],
        'name' => $_POST['name'],
        'pidd' => $_POST['ppid'],
        
       'price1'=> $_POST['price'],
       'quan'=> $_POST['quan'],
        
        
    );
//     $users_str='';
//     $users_str = serialize($_SESSION['cart']);
//    $query1= "INSERT INTO `manage_sale`(`name`) 
//     VALUES ('.$users_str.')";
//     mysqli_query($link,$query1);



// }
// $sql = mysqli_query($link,"SELECT * FROM manage_sale");
// while($row3 = mysqli_fetch_assoc($sql)){
   
//    // Unserialize
  
   
   
//    // Display
//    echo "<pre>";
//    print_r($row3['name']);
 
//    echo "</pre>";
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">

  </script>
    <title>Tables | Tailwind Admin</title>
   
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">MD-POS</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    

                <?php
$imge=$_SESSION['img'];
?>

                <img  class="inline-block h-8 w-8 rounded-full" src="<?php echo $imge; ?>" alt="">
                    
                    <a href="logout.php"  class="text-white p-2 no-underline hidden md:block lg:block">Log-out</a>
                    
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <div class="flex">

                </div>
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="dash.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white ">
                        <a href="billing.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Billing
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="manage_sale.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Manage Sale
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                   
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="manage-em.php"
                            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Manage Employee
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="manageadmin.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                            <i class="fas fa-table float-left mx-2"></i>
                            Manage Admin
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li> 
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="categories.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Categories
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="brands.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Brands
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="manage-prod.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Add Product
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="expense.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Manage Expenses
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>

                    
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

<div class="flex flex-col">
    <!-- Card Sextion Starts Here -->
    
    <!-- /Cards Section Ends Here -->

    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-400 rounded border shadow-sm w-full">
            <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                Create Invoice
            </div>
            <div class="p-3">
                
                <form action="" method="post">
                
                    <div class="flex flex-wrap -mx-3 mb-6">
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label style="font-weight:600;" class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-city">
                                Customer Name
                            </label>
                            <input  name="cname" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 
                            rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-city" type="text" placeholder="Enter Customer Name">
                        </div>
                        
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label style="font-weight:600;" class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Cell Number
                            </label>
                            <input name="cnumber" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" placeholder="Customer Cell Phone">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label style="font-weight:600;" class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-state">
                                Salesman
                            </label>
                            <div class="relative">
                                <select name="sperson" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-state">
                                    <option>Select Salesman</option>
                                    <?php
                                            $query1="SELECT * FROM `emp`";
                                            $res=mysqli_query($link,$query1);
                                            
                                        while($row=mysqli_fetch_assoc($res)){
                                      
                                                      ?>
                                                 
                                            
                                                <option><?php echo $row['name']; ?></option>
                                               
                                                <?php
                                                      }
                                                           ?>
                                </select><br>

                               

                                 <input  style="
    float: right;
    font-size: 15px;
    font-weight: 500;
" type="submit" name="btn2" value="Checkout" class="bg-red-600 hover:bg-red-700 text-white py-3 px-3 rounded"><br>


                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                                                    </form>
                                                    
                                                    
            </div>
           
        </div>
        
    </div>
    <!--/Grid Form-->
    <!-- billing section -->
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <!--Horizontal form-->
        <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
            <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                Products Catalogue
            </div>
            <div class="p-3">
           
                          <form class="w-full" action="" method="post">
                          
                   
                    <div class="md:flex md:items-center mb-6">
                       
                      
 <div style="
    margin-left: 11px;" class="md:w-3/4">
                            <input placeholder="Search by Name and ID" class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                                   id="search" name="pid" type="text"  >
                                  
                                                    </div>   
                                                    <input style="margin-left:10px;" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded" 
                           type="submit" name="btn4" value="search">
                    </div>
                    
                   
                    </form>
                    <!-- Auto -->
                    <div id="searchlist"></div>
                    <!-- /auto -->
                    <div class="p-3" style="
    max-height: 300px;
    overflow-y: scroll;
">
                    <table class="w-full">
                    <thead style="text-align: center;">
	
                                      
    <th class="border w-1/6 px-4 py-2">Name</th>
    
    <th class="border w-1/6 px-4 py-2">Price</th>
    <th class="border w-1/6 px-0 py-2">Available Qty</th>
    <th class="border w-1/6 px-4 py-2">Qty</th>
    <th class="border w-1/5 px-8 py-2">Actions</th>

</thead>
                        <!-- codeeee -->
                        
                        


                         <!-- Search code -->
                        <?php
                        $query3 = "SELECT * FROM product";
                        $res3=mysqli_query($link,$query3);
                        while($row3=mysqli_fetch_assoc($res3)){
                if(isset($_POST['btn4'])){
        if($_POST['pid']==$row3['name']){
            ?>
           
            <tr style="text-align: center;background-color: yellow;font-weight: bold;">
           <td class="border px-4 py-2"><?php echo $row3['name']; ?></td>
                         
                         <td class="border px-4 py-2"><?php echo $row3['sale']; ?></td>
                         <td class="border px-4 py-2"><?php echo $row3['quantity']; ?></td>
                         <form action="" method="post">
                       
                      
                     
                        <input type="hidden" name="ppid" value="<?php echo $row3['id'];?>">
                        <input type="hidden" name="date" value="<?php echo date('d-m-y');?>">
                           <input type="hidden" name="name" value="<?php echo $row3['name'];?>">
                           <input type="hidden" name="price" value="<?php echo $row3['sale'];?>" placeholder="price" required>
                         
                           <td><input  class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 
                        rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="number" 
                        name="quan" min="" max="<?php echo $row3['quantity']; ?>" value="0" placeholder="Quantity" required></td>
                                                    
                           <td><input style="margin-left:10px;" <?php if($row3['quantity']==0){
?>
 disabled
 <?php
}

?> class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded" 
                              type="submit" name="btn" value="Add to Cart"></td> 
                              
                          
                       </tr>
       
                       </form>
            <?php
        }
        
        
    }}
              ?>
<!-- /end search code -->











                    <?php
                        




                   
                    while($row = mysqli_fetch_assoc($res1)){
                       


                   ?>
                        
                
                <div class="product-box">
                 
                <tr style="text-align: center;">
                   
                <td class="border px-4 py-2"><?php echo $row['name']; ?></td>
                         
                         <td class="border px-4 py-2"><?php echo $row['sale']; ?></td>
                         <td class="border px-4 py-2"><?php echo $row['quantity']; ?></td>
                    
                   <form action="" method="post">
                       
                    <td><input  class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 
                     rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="number" 
                     name="quan" min="0" max="<?php echo $row['quantity']; ?>" value="0" <?php if($row['quantity']==0){
?>
 disabled
 <?php
}

?> placeholder="Quantity" required></td>
                     <input type="hidden" name="ppid" value="<?php echo $row['id'];?>">
                     <input type="hidden" name="date" value="<?php echo date('d-m-y');?>">
                        <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                        <input type="hidden" name="price" value="<?php echo $row['sale'];?>">
                            
                        <td><input style="margin-left:10px;" <?php if($row['quantity']==0){
?>
 disabled
 <?php
}

?> class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded" 
                           type="submit" name="btn" value="Add to Cart"></td> 
                           
                       
                    </tr>
                   
                    </form>
                    
                    
           
                    
                </div>
                
            <?php 
             
                }  
           
            ?>
            
</table></div>
                        <!-- /code -->
                  
                     
                       
                
                
                
            </div>
           
        </div>
        
            
     
        <!--/Horizontal form-->

        <!--Underline form-->
        <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-400 rounded border shadow-sm w-full">
            <div class="bg-gray-300 px-2 py-3 border-solid border-gray-200 border-b">
                Shopping Bag
            </div>
            <div class="p-3">
             <table class="w-full">
                                    <thead>
                                      <tr style="text-align: center;">
                                      
                                      <th class="border w-1/6 px-4 py-2">Name</th>
                                      
                                      <th class="border w-1/6 px-4 py-2">Price</th>
                                     
                                      <th class="border w-1/6 px-4 py-2">Quantity</th>
                                     
                                      <th class="border w-1/6 px-4 py-2">Total</th>
                                      <th class="border w-1/5 px-8 py-2">Actions</th>
                                      </tr>

                                    </thead>
                                    
                                    <tbody>
                                   
             <?php 
                                    $total = 0;
                                   
                                    if(isset($_SESSION['cart'])) { 
                 foreach($_SESSION['cart'] as $k => $item) {
                    
                               
                    


                    ?>
                    <tr style="text-align: center;">
                    
                        <td class="border px-4 py-2"><?php echo $item['name']; ?></td>
                        <td class="border px-4 py-2"><?php echo $item['price1']; ?></td>
                        <td class="border px-4 py-2"><?php echo $item['quan']; ?></td>
                        
                        <td class="border px-4 py-2"><?php echo $item['price1'] * $item['quan']; 
                                        $pro = $item['price1'] * $item['quan'];
                                        $total = $total + $pro;?></td>
                        
                        
                        <td class="border px-4 py-2">
                                               
                                               
    <a href="del-addpro.php?id=<?php echo $item['pidd']; ?> " class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                        
                        
                    </tr>
                <?php   
                }
               
                if(isset($_POST['btn2'])){
                    $cname=$_POST['cname'];
                    $cphone=$_POST['cnumber'];
                    $saleperson=$_POST['sperson'];
                    foreach($_SESSION['cart'] as $k => $item) {
                        $d=$item['datee'];
                    $n=$item['name'];
                    $q=$item['quan'];
                    $t=$item['price1'] * $item['quan'];
                              
                               $p=$item['price1'];
                               
      
                $query1= "INSERT INTO `manage_sale`(`cname`,`cphone`,`person`,`name`, `price`, `quantity`, `total`, `date`) 
     VALUES ('$cname','$cphone','$saleperson','$n','$p','$q','$t','$d')";
     mysqli_query($link,$query1);
     $query2="UPDATE `product` SET `quantity`=quantity-'$q' WHERE `name`='$n'";
     mysqli_query($link,$query2);
     
                    }
                  
            } 
            
           
           
           

           
            
        }  
       
                
                ?>


           
                                </tbody>
                             
                                </table><br>
                                <div class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded" style="
    padding: 10px;
    font-weight: 500;
    font-size: larger;
">
            <h2>Total Rs: <span><?php echo $total; ?></span></h2>

        </div><br>

        <a style="
   
   font-size: 15px;
    font-weight: 500;
" class="bg-red-600 hover:bg-red-700 text-white py-3 px-3 rounded" href="emptycart.php">Empty Cart</a>
<a style="
   
   font-size: 15px;
    font-weight: 500;
" class="bg-red-600 hover:bg-red-700 text-white py-3 px-3 rounded" href="recipt.php" target="_blank">Print Bill</a><br><br>
           

           
        </div>
        <!--/Underline form-->
        </div>

    </div>
    
    <!-- /billing section -->
</div>

</main>

            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        
        <!--/footer-->

    </div>

</div>

<script src="./main.js"></script>

</body>

<script>
    $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    var query = $(this).val();
    if (query != "") {
      $.ajax({
        url: "fetch1.php",
        method: "post",
        data: {
          query:query
        },
        success: function (data) {
            $("#searchlist").fadeIn();
          $("#searchlist").html(data);
        }
      });
    } 
    else {
        $("#searchlist").fadeOut();
          $("#searchlist").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "li", function () {
    $("#search").val($(this).text());
    $("#searchlist").fadeOut();
  });
});
    </script>
</html>