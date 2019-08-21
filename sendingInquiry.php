<?php
	
	session_start();

// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;
 
		$product_id = $_GET['id'] ;
		$get_pro = "SELECT * FROM products where product_id = '$product_id'" ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$row_pro = mysqli_fetch_array($run_pro) ;
		$supplier_id = $row_pro['supplier_id'] ;

		$get_proA = "SELECT * FROM supplier where supplier_id = '$supplier_id'" ;
		$run_proA = mysqli_query($con , $get_proA) ;
		$row_proA = mysqli_fetch_array($run_proA) ;
		$supplier_email = $row_proA['supplier_email'] ;				

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body background="pictures/random/sendingInquiryBG.png">

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<?php
		if(isset($_POST['sendQuery'])){
			$msg = 'Name : '.$_POST['firstName'].' '.$_POST['lastName']."/n"
				.'Email : '.$_POST['email']."/n"
				.'Phone : '.$_POST['phone']."/n"
				.'Message : '.$_POST['inquiry'] ;
			// $subject = 'Inquiry for product' ;
			// mail($supplier_email, $subject, $msg) ;

			echo "
			<div class='container container_main mt-5'>
				<div class='row'>
					<div class='col text-light'>
						<h1 class='text-center'>Your inquiry has been send to the supplier. Hopefully you will get reply from him/her soon.</h1>
					</div>
				</div>
			</div>";
		}else{
			echo "
			<div class='container container_main mt-5'>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center text-light'>Sorry !!! There are some problem to send your inquiry !!! Please try again.</h1>
					</div>
				</div>
			</div>";
		}

	?>


	<?php include 'footer.php' ; ?>


	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>