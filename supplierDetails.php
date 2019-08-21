<?php
	
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

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
<body>

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<div class="container container_main text-center">
		<div class="row mt-3">
			<div class="col-md-2 list-group-item-dark">
				<strong>Name</strong>
			</div>
			<div class="col-md-2 list-group-item-dark">
				<strong>Phone</strong>
			</div>
			<div class="col-md-2 list-group-item-dark">
				<strong>Address</strong>
			</div>
			<div class="col-md-2 list-group-item-dark">
				<strong>Email</strong>
			</div>
			<div class="col-md-2 list-group-item-dark">
				<strong>Username</strong>
			</div>
			<div class="col-md-2 list-group-item-dark">
				<strong>Joinig Date & Time</strong>
			</div>
		</div>
		<?php
			global $con ;

			$supplier_id = $_GET['id'] ;
			$get_sup = "SELECT * FROM supplier where supplier_id = '$supplier_id' ORDER BY joiningTimeAndDate DESC" ;
			$run_sup = mysqli_query($con , $get_sup) ;

			while ($row_sup = mysqli_fetch_array($run_sup)) {
				$supplier_name = $row_sup['supplier_firstName'].' '.$row_sup['supplier_lastName'] ;
				$supplier_phone = $row_sup['supplier_phone'] ;
				$supplier_address = $row_sup['supplier_address'] ;
				$supplier_email = $row_sup['supplier_email'] ;
				$supplier_username = $row_sup['supplier_username'] ;
				$supplier_joiningTimeAndDate = $row_sup['joiningTimeAndDate'] ;

				
				echo "
					<div class='row mt-3'>
						<div class='col-md-2 list-group-item-success'>
							$supplier_name
						</div>
						<div class='col-md-2 list-group-item-danger'>
							$supplier_phone
						</div>
						<div class='col-md-2 list-group-item-success'>
							$supplier_address
						</div>
						<div class='col-md-2 list-group-item-danger'>
							$supplier_email
						</div>
						<div class='col-md-2 list-group-item-success'>
							$supplier_username
						</div>
						<div class='col-md-2 list-group-item-danger'>
							$supplier_joiningTimeAndDate
						</div>
					</div>
				"; 
			}
		 ?>
	</div>

	
	

	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	


</body>
</html>