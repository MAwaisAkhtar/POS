<?php
require('db.php');

$select="SELECT `PRODUCT_NAME`,`QUANTITY` FROM `billing_data`";
$srun=mysqli_query($con,$select);
while($row=mysqli_fetch_assoc($srun)){

    // $data[]=$row['product'];
    $data1[]=$row;
  
}
// print_r(array_unique($data));
?>
<br><br>
<?php
foreach($data1 as $key =>$value)
{
    $p=$value['PRODUCT_NAME'];
    $b=0;
    foreach($data1 as $key =>$value){

        $a_p=$value['PRODUCT_NAME'];
        if($p==$a_p)
        {
          $a_q=$value['QUANTITY'];
          $b=$a_q+$b;
        }
    }
    ?>
 
    <?php
    $data2[$p]=$b;
    // $data2[]=$b;


}
$result=array_unique($data2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Document</title>
</head>
<body>

<?php


foreach($result as $key=>$value)
{
    $month[]=$key;
    $qty[]=$value;
    
}


?>
<div style="width:500px;">
  <canvas   id="myChart"></canvas>
</div>

<script>
    const labels = <?php echo json_encode($month) ?>;
const data = {
  labels: labels,
  datasets: [{
    label: 'Trending Items',
    data:  <?php echo json_encode($qty) ?>,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};
const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>
</html>