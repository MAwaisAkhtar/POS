<?php
require('db.php');
session_start();
$select="SELECT * FROM `products`";

if (isset($_POST['amo_btn'])) {
  $amo_recieved=$_POST['amo_rec'];
  $_SESSION['amo_recieved']=$amo_recieved;

}

 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <form action="sdestroybilling.php" method="post">
    <input type="submit" value="Go back" name="s_des" class="btn btn-success float-center">
    </form>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">SUNDROPS</h2>
        <!-- <div>455 Foggy Heights, AZ 85004, US</div> -->
        <div>0321-1617715</div>
        <div><a href="mailto:awaismufti90@gmail.com">awaismufti90@gmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php echo $_SESSION['cus'] ?></h2> 
          <div class="address"><?php  echo $_SESSION['cell']  ?> </div>
          <div class="address">Dealing Saleman:<?php  echo $_SESSION['s_man']  ?> </div>
          <!-- <div class="email"><a href="mailto:john@example.com">john@example.com</a></div> -->
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">PRODUCT NAME</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
        
         <?php if (isset($_SESSION['cart'])) {
     $tb=0;
 foreach ($_SESSION['cart'] as $key =>$value) {
     $p=0;
     $q=0;
 
             $i=$value['pro_id']; ?>
          <tr> <td class="no"><?php echo $i  ?></td>
             
            <?php $p=$value['pro_name']; ?>
           <td class="desc"><h3><?php echo $p  ?></h3></td>

             <?php $result2=mysqli_query($con,$select);
             while($row=mysqli_fetch_assoc($result2))
             { 
                 if($p==$row['PRODUCT_NAME']){
                
                 $price=$row['SALE_PRICE']; ?>
           <td class="unit"><?php echo $price  ?></td>
             
               <?php  }    
             } 
        
             $q=$value['qty']; ?>
           <td class="qty"><?php echo $q  ?></td>


    <?php $bill=$price * $q; ?>
           <td class="total"><?php echo $bill  ?></td> </tr>

    <?php
    
    $tb=$bill+$tb; 
 } 
} ?>
          
          
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>Rs <?php echo $tb  ?></td>
          </tr>

          <tr>
            <td colspan="2"></td>
            <td colspan="2">Amount Recieved</td>
            <td>Rs <?php echo $_SESSION['amo_recieved']  ?></td>
          </tr>

          <tr>
            <td colspan="2"></td>
            <td colspan="2">Remaining Balance</td>
            <td><?php  $rem=$_SESSION['amo_recieved'] -$tb;
            echo $rem;
            ?> </td>
          </tr>


        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div><br><br>
      </div>
    </main>
    
    <footer>
      
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>