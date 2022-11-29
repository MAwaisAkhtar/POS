<?php 
require('db.php');

$select="SELECT * FROM `products`";
$exe=mysqli_query($con,$select);
while($array=mysqli_fetch_assoc($exe))
{?>
   
    
    <td id="div-1">
      <div  class="card inner">
      <div class="box">
      <img class="card-img-top" src="<?php echo $array['LOCATION'] ?>" alt="Card image cap">
      <span class='badge badge-warning' id="badgee" style="width: 5rem; font-size:12px">QTY:<?php echo $array['QUANTITY'] ?> </span>
</div>
      <div class="card-body"  >
         <h5 class="card-title d-flex justify-content-center align-items-center" style="margin-top:1rem; margin-bottom:0.50rem; font-size:15px;"><b><?php echo $array['PRODUCT_NAME'] ?></b></h5>
         <p class="card-text"> <?php echo $array['SALE_PRICE']; ?></p>
        
      </div>
      </div>
    
    </td>
  

<?php
}

?>


   
