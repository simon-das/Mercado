<?php
	
	session_start() ;
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

	$passp = $_POST["password_seller"] ;
	$pass = MD5($passp) ;
	$get_pro = "SELECT * FROM supplier where supplier_pass = '$pass'" ;
	$run_pro = mysqli_query($con , $get_pro) ;
	$row_pro = mysqli_fetch_array($run_pro) ;

	$username = $row_pro["supplier_username"] ;
	$supplier_id = $row_pro["supplier_id"] ;
	$er = 0 ;

	if ($_POST["username_seller"] == $username) {
		$_SESSION["supplier_status"] = 1 ;
		header("Location: afterLoginSupplier.php?id=$supplier_id") ;
	}else{
		$er = 1 ;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
</head>
<body background="pictures/random/afterLoginSupplierCheckingBG.jpg">

	<!--navigation bar-->
	<?php include 'header.php'; 

	if ($er == 1){
		echo "
			<div class='container container_main text-light mt-5'>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>User-name and password didn't match.</h1>
					</div>
				</div>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>Please try again with a valid user-name and password.</h1>
					</div>
				</div>
			</div>";
	}


	include 'footer.php' ; ?>


	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>