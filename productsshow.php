<?php 
require('db.php');

$select="SELECT * FROM `products`";
$exe=mysqli_query($con,$select);
while($array=mysqli_fetch_assoc($exe))
{?>
   
    
    <td id="div-1">
      <div  class="card inner"  >
      <div class="box">
      <img class="card-img-top" src="<?php echo $array['LOCATION'] ?>"   alt="Card image cap">
      <span class='badge badge-warning' id="badgee"  style="width: 5rem; font-size:12px"> Quantity 6 </span>
</div>
      <div class="card-body"  >
         <h5 class="card-title" style=" margin-bottom:-0.20rem; font-size:18px;"><?php echo "a" ?></h5>
         <p class="card-text" > PKR 900/-</p>
        
      </div>
      </div>
    
    </td>
  

<?php
}

?>


   
