<?php
	
	session_start() ;
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
	<?php include 'header.php'; 

		global $con ;

		$supplier_id = $_GET['id'] ;

		$get_sup = "SELECT * FROM supplier where supplier_id = '$supplier_id'" ;
		$run_sup = mysqli_query($con , $get_sup) ;
		$row_sup = mysqli_fetch_array($run_sup) ;

		$supplier_name = $row_sup['supplier_firstName'] ;

	?>


	<div class="container container_main">
		<?php

			echo "
				<div class='row text-center mt-5'>
					<div class='col list-group-item-dark'>
						<strong>Product Name</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Product Picture</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Show Details</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Action</strong>
					</div>
				</div>
			";


			$supplier_id = $_GET['id'] ;
			$get_pro = "SELECT * FROM products where supplier_id = '$supplier_id' ORDER BY product_uploadTimeAndDate DESC" ;
			$run_pro = mysqli_query($con , $get_pro) ;
			$_SESSION['supplier_id'] = $supplier_id ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				
				echo "
					<div class='row text-center mt-5'>
						<div class='col my-auto list-group-item-warning text-dark'>
							<strong> $product_name </strong>
						</div>
						<div class='col my-auto'>
							<img src='$product_img' class='img-fluid'>
						</div>
						<div class='col my-auto'>
							<a href='detailsForSupplierAndAdmin.php?id=$product_id' class='btn btn-info'>
								<strong>Details</strong>
							</a>
						</div>
						<div class='col my-auto'>
							<a href='deleteItem.php?id=$product_id' class='btn btn-danger'>
								<strong>Remove</strong>
							</a>
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