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
		$product_detail = $row_pro['product_description'] ;

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
								<h1>$product_name</h1>
								<p>$product_detail</p>
								<p>USD $$product_price</p>
							";
						?>
					</div>
					<form method='POST' action='query.php?id=<?php echo $product_id ; ?>'>
						<div>
							<input type='submit' name='contact_supplier' class='btn btn-success' value='Contact Supplier' />
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



