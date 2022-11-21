<?php
require("db.php");
session_start();

if (isset($_POST['btn'])) {
    $n=$_POST['name'];
    $p=$_POST['pass'];

$select="SELECT * FROM `project`";
$select_sales="SELECT * FROM `sales_person`";
$select_purchase="SELECT * FROM `purchase_person`";
$result=mysqli_query($con,$select);
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $name=$row['Admin_name'];
    $pass=$row['Admin_password'];
    
    if ($name==$n && $pass==$p) {
        $_SESSION['a']=$id;
        header('location:dashboard.php');
    }
	// else {
    //     echo "<script>alert('incorrect');</script>";
    // }
}

$result1=mysqli_query($con,$select_sales);
while ($row1=mysqli_fetch_assoc($result1)) {
    $id1=$row1['id'];
    $name1=$row1['s_name'];
    $pass1=$row1['s_pass'];
    
    if ($name1==$n && $pass1==$p) {
        $_SESSION['b']=$id1;
        header('location:dashboard.php');
    }
	// else {
    //     echo "<script>alert('incorrect');</script>";
    // }
}


$result2=mysqli_query($con,$select_purchase);
while ($row2=mysqli_fetch_assoc($result2)) {
    $id2=$row2['id'];
    $name2=$row2['p_name'];
    $pass2=$row2['p_pass'];
    
    if ($name2==$n && $pass2==$p) {
        $_SESSION['c']=$id2;
        header('location:dashboard.php');
    }
	// else {
    //     echo "<script>alert('incorrect');</script>";
    // }
}



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						ADMIN Login
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" placeholder="Username" value="Awais">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="a1999">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="btn" value="Login">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v1/endor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Login_v1/vendor/select2/select2.min.js"></script>
	<script src="Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="Login_v1/js/main.js"></script>
</body>
</html>