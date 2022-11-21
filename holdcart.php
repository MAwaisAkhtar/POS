<?php
session_start();
// session_destroy();   

if (isset($_GET['modal'])) {
    $_SESSION['new_cart'][]=$_SESSION['cart'];
    unset($_SESSION['cart']);

    // $_GET['site'];
    // $_SESSION['name']=$x;
    // $_SESSION['onhold'][]=array('name'=> $_GET['site'])
    $_SESSION['onhold'][]=array('name' => $_GET['site']);
    header('location:billing.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST['unhold_cart'])) { ?>
    <table class="table">
        <thead>
            <th>Customer Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
                <?php 
    
                if ($_SESSION['new_cart'] !=0) {
                // if (isset($_SESSION['new_cart'])) {
                    

                foreach ($_SESSION['onhold'] as $key =>$value) {
                    $name10=$value['name'];

                    ?>

                <form action="billing.php" method="post"> 
                <tr>     
                <td><?php echo $name10 ?></td>
                <input type="hidden" name="name_key" value="<?php echo $key ?>">
                <td><input type="submit" name="unhold" value="Unhold" class="btn btn-primary"><input type="submit" value="Enter New Bill" class="btn btn-success"></td>
                </tr>
                </form> 
                <?php
                } 
                
                }else{
                    echo "<td>no record</td>";
                 } 
                

                ?>
            
        </tbody>
    </table>
<?php }
else {
    echo "no record";
 } ?>

</body>
</html>


   





