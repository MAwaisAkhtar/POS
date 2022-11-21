<?php


if (isset($_GET["from_date"]) && isset($_GET["to_date"])) {
    $from_date=$_GET["from_date"];
    $to_date=$_GET["to_date"];
    $sel_filter="SELECT * FROM expenses WHERE EXPENSE_DATE between '$from_date' AND '$to_date'";
    $frun=mysqli_query($con,$sel_filter);
    if(mysqli_num_rows($frun)>0){
        while($row=mysqli_fetch_assoc($frun)){ 
        ?>

<tr>
                                            <td><?php echo $row["EXPENSE_TYPE"]  ?></td>
                                            <td><?php echo $row["AMOUNT"];
                                             $b=$row["AMOUNT"]; 
                                             $ad=$b+$ad;
                                             ?></td>
                                            <td><?php echo $row["EXPENSE_DATE"]  ?></td>
                                            <td><a href="updateexp.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>  <a href="deleteexp.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>  </td>
                                            
                                        </tr>


<?php
    }
}else {
    echo "no record";
}

}

?>