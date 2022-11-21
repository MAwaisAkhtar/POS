<?php
require('db.php');
session_start();

$select="SELECT * FROM `EXPENSES`";
$srun=mysqli_query($con,$select);
$ad=0;
while($row=mysqli_fetch_assoc($srun)){
    ?>
     <tr>
        <td><?php echo $row["EXPENSE_TYPE"]  ?></td>
        <td><?php echo $row["AMOUNT"];
         $b=$row["AMOUNT"]; 
         $ad=$b+$ad;
         ?></td>
        <td><?php echo $row["EXPENSE_DATE"]  ?></td>
        <td><button class="btn btn-light" data-bs-toggle="modal" id="upd" type="button" data-bs-target="#updateModal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></button></td>
        <!-- <td><a href="form_upd_exp.php" class="btn btn-light" data-bs-toggle="modal" id="" type="button"><span class="glyphicon glyphicon-edit"></span> <i class="fa fa-edit" aria-hidden="true"></i></a></td> -->
        <td><a style="cursor: pointer;" id="del" data-id=<?php echo $row['id']; ?>><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>


<?php 
}
?>