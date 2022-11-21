<?php
require("db.php");

$t=$_POST['exp_type'];
    $a=$_POST['amount'];
    $d=$_POST['exp_date'];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploadimage/'; // upload directory

$img = $_FILES['uploadImage']['name'];
$tmp = $_FILES['uploadImage']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";

//include database configuration file
// include_once 'db.php';
//insert form data in the database
$insert="INSERT INTO `expenses`(`EXPENSE_TYPE`, `AMOUNT`, `EXPENSE_DATE`,`pic`, `type`) VALUES ('".$t."','".$a."','".$d."','".$path."')";
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}

?>
