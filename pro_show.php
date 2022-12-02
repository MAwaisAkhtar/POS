<?php
require('db.php');
$select="SELECT * FROM `products`";
$exe=mysqli_query($con,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while($array=mysqli_fetch_assoc($exe)){?>
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
      <?php
}
?>
</body>
</html>