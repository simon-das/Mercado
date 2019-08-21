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

	<div class="container container_main">
		<div class="main">
			<div class="row">
				<?php

					global $con ;
					$srch = $_POST['search'] ;
					// echo "$srch";
					$get_pro = "SELECT * FROM products WHERE product_name LIKE '%$srch%'" ;
					$run_pro = mysqli_query($con , $get_pro) ;
					$row_pro = mysqli_fetch_array($run_pro) ;

					
				 	while ($row_pro = mysqli_fetch_array($run_pro)) {
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

			
						echo "
							<div class='col-md-3'>
								<div class='mt-2'>
									<a href='details.php?id=$product_id'>
										<img src='$product_img' class='img-fluid'>
										<div class='text-center'>$product_name</div>
									</a>
									<p class='text-center'>$product_price</p>	
								</div> 	
							</div>
							
						";
					
					}



				 ?>

				 
			</div>
		</div>
	</div>




	<footer id="footer">
		<?php include 'footer.php' ; ?>
	</footer>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>