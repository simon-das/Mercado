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
		$product_id = $row_pro['product_id'] ;

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
<body background="pictures/random/queryPage.jpg">
	<!--navigation bar-->
	<?php include 'header.php'; ?>

	

	<div class="container mt-5 pb-5">
		<div class="row text-success">
			<h1>Send your inquiry to the supplier</h1>
		</div>
		<form method="POST" action="sendingInquiry.php?id=<?php echo $product_id ; ?>">
			<div class="row mt-5">
				<div class="col-md-6">
					<div class="form-group">
						<label for="firstName"><strong>First Name:</strong></label>
						<input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="lastName"><strong>Last Name:</strong></label>
						<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="email"><strong>Email:</strong></label>
						<input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone"><strong>Mobile No:</strong></label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="address"><strong>Address:</strong></label>
						<input type="text" id="address" name="address" class="form-control" placeholder="Enter your address" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="inquiry"><strong>Inquiry:</strong></label>
						<textarea class="form-control" id="inquiry" name="inquiry" placeholder="Enter your query here" required></textarea>
					</div>
				</div>
			</div>
			<div class="row float-right">
				<input type="submit" class="btn btn-success btn-send" name="sendQuery" value="Send query">
			</div>
		</form>
	</div>




	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	


</body>
</html>