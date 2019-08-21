<?php 

session_start();

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


	<?php 
		$product_id = $_GET['id'] ;
		global $con ;
		$get_pro = 'SELECT * FROM products where product_id = '.$product_id ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$row_pro = mysqli_fetch_array($run_pro) ;

		$product_name = $row_pro['product_name'] ;
		$product_price = $row_pro['product_price'] ;
		$product_img = $row_pro['product_image'] ;
		$product_category = $row_pro['product_category'] ;
		$product_uploadTimeAndDate = $row_pro['product_uploadTimeAndDate'] ;
		$product_detail = $row_pro['product_description'] ;
		$product_quantity = $row_pro['product_quantity'] ;
		$supplier_id = $row_pro['supplier_id'] ;

	?>

	<div class="container my-5 pb-5" >
		<div class="row py-2">
			<div class="col-md-6 border py-5 border-dark ">
				<?php 
					echo "
						<img src='$product_img' class='img-fluid'>
					";
				?>
			</div>
			<div class="col-md-6 py-5 bg-secondary text-light ">
				
					<div>
						<?php
							echo "
								<h3><strong>Name :</strong> $product_name</h3>
								<h4><strong>Category :</strong> $product_category</h4>
								<h4><strong>Quantity :</strong> $product_quantity</h4>
								<h4><strong>Price :</strong> $product_price</h4>
								<h4><strong>Uploaded Time & Date :</strong> $product_uploadTimeAndDate</h4>
								<h4><strong>Details :</strong> $product_detail</h4>
							";
						?>
					</div>
					<form method='POST' action='deleteItem.php?id=<?php echo $product_id ; ?>'>
						<div>
							<input type='submit' name='contact_supplier' class='btn btn-danger float-right' value='Remove' />
						</div>
					</form>
					
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



