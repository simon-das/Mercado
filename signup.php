<?php 

	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body background="pictures/random/signupBG.jpg">


	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<?php
 		
		$firstName = $_POST['signup_firstName'] ;
		$lastName = $_POST['signup_lastName'] ;
		$email = $_POST['signup_email'] ;
		$phone = $_POST['signup_phone'] ;
		$address = $_POST['signup_address'] ;
		$user = $_POST['signup_user'] ;
		$pass = $_POST['signup_pass'] ;
		$sex = $_POST['signup_sex'] ;

		$sql = "INSERT INTO supplier (supplier_firstName , supplier_lastName , supplier_sex , supplier_email , supplier_phone , supplier_address , supplier_username , supplier_pass) 
		VALUES ('$firstName' , '$lastName' , '$sex' , '$email' , '$phone' , 
				'$address' , '$user' , MD5('$pass'))" ;
	?>

	$w = 0 ;
	<div class="container container_main text-light">
		<div class="row">
			<div class="col">
				<?php 
					if (mysqli_query($con , $sql)) {
						$w = 1 ;

						$get_sup = "SELECT * FROM supplier ORDER BY supplier_id DESC LIMIT 1";
						$run_sup = mysqli_query($con , $get_sup) ;
						$row_sup = mysqli_fetch_array($run_sup) ;

						$supplier_id = $row_sup['supplier_id'] ;
						

						echo "
							<h1>Congratulations !!! You are a supplier now !!! In order to start uploading products and maintain them please log in to your account.</h1>
							<h1>Your supplier id is $supplier_id. Remember this id for further use.</h1>
						";
					}else{
						echo "
							<h1>Sorry !!! There are some problem while inserting your data. It causes an error. In order to create the account please try again.</h1>
						";
					}
				?>
			</div>			
		</div>
		<div class="row">
			<div class="col">
				<?php 

					

					if ($w == 1) {
						echo "
							<h1>Welcome to our family. Start your business.</h1>
						";
					}
				?>
			</div>			
		</div>
	</div>



	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	


</body>
</html>