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
		$supplier_sex = $row_sup['supplier_sex'] ;
		$before_name = 'Mr.' ;

		if ($supplier_sex == 'male') {
			$before_name = 'Mr.' ;
		}elseif ($supplier_sex == 'female') {
			$before_name = 'Miss.' ;
		}else{
			$before_name = '' ;
		}

	?>


	<div class="container container_main">
		<?php if($_SESSION["supplier_status"] == 1){  

			echo "
				<div class='row'>
					<div class='col my-5 bg-primary'>
						<mark>
							<h2>Welcome $before_name $supplier_name</h2>
							<h3>Here you can find all your uploaded stuffs and also add new one.</h3>
						</mark> 
					</div>
				</div>
				<div class='row'>
					<div class='col'>
						<a href='uploadStuff.php' class='btn btn-warning btn-lg mb-5'><strong>Add new stuff</strong></a>
						<a href='#logout_supplier' class='btn btn-danger btn-lg mb-5 float-right' data-toggle='modal'><strong>Log out</strong>
						</a>
					</div>
				</div>
				<div class='row text-center mt-5'>
					<div class='col  list-group-item-dark'>
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
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_des = $row_pro['product_description'] ;
				$product_quantity = $row_pro['product_quantity'] ;
				$product_category = $row_pro['product_category'] ;
				$product_id = $row_pro['product_id'] ;

				
				echo "
					<div class='row text-center mt-5'>
						<div class='col my-auto  list-group-item-warning'>
							<strong>$product_name</strong>
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
			}else{
				echo "
					<div class='row'>
					<div class='col my-5 bg-danger'>
							<h2>In order to see the content of this page, you have to be a supplier and you have to be logged in.
							</h2>
					</div>
				</div>
				";
			}
		 ?>
							
	</div>

	<!-- Modals for logout-->
	<!-- for supplier -->
	<div class="modal" id="logout_supplier">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Are you sure !!! You want to log out !!!</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	   			<a href='logoutSupplier.php' class='btn btn-success btn-lg mb-5 ml-5'><strong>YES</strong>
	   			</a>
				<a href='afterLoginSupplier.php' class='btn btn-danger btn-lg mb-5 float-right mr-5'><strong>NO</strong>
				</a>    		
	       	</div> 

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