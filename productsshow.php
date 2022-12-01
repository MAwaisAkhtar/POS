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
  
    <td id="div-1">
      
    </td>

<script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                    // show
                    function loadTable(){      
                    $.ajax({
                    url:'pro_show.php',
                    type:'post',
                    success:function(data)
                    {
                        $('#div-1').html(data);
                    }
               });
              }
              loadTable();
            });
            </script>

</body>
</html>
   
