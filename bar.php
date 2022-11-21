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
require('db.php');
$res="SELECT `PRODUCT_NAME`, `QUANTITY` FROM `billing_data` ";
$sel=mysqli_query($con,$res);

foreach($sel as $data)
{
    $month[]=$data['PRODUCT_NAME'];
    $price[]=$data['QUANTITY'];
}




?>
<div style="width:500px;">
  <canvas id="myChart"></canvas>
</div>
 




<script>
    const labels = <?php echo json_encode($month)?>;
const data = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data:  <?php echo json_encode($price)?>,
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