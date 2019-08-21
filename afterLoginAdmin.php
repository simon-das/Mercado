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
	<?php include 'header.php'; ?>


	<div class="container container_main text-center">
		<?php

			if ($_SESSION['admin_status'] == 1) {

				echo "
				<div class='row mb-5'>
					<div class='col'>
						<a href='#logout_admin' class='btn btn-danger btn-lg float-right  mt-2' data-toggle='modal'><strong>Log out</strong></a>
					</div>
				</div>	
			";


				echo "
					<div class='row mt-2 border list-group-item-dark'>
						<div class='col-md-2 border'>
							<strong>Supplier Id</strong>
						</div>
						<div class='col-md-3 border'>
							<strong>Supplier Name</strong>
						</div>
						<div class='col-md-2 border'>
							<strong>Supplier Details</strong>
						</div>
						<div class='col-md-2 border'>
							<strong>Supplied Products</strong>
						</div>
						<div class='col-md-3 border'>
							<strong>Remove Supplier</strong>
						</div>
					</div>
				";
			
				global $con ;

				$get_sup = "SELECT * FROM supplier ORDER BY joiningTimeAndDate DESC" ;
				$run_sup = mysqli_query($con , $get_sup) ;

				while ($row_sup = mysqli_fetch_array($run_sup)) {
					$supplier_id = $row_sup['supplier_id'] ;
					$supplier_name = $row_sup['supplier_firstName'].' '.$row_sup['supplier_lastName'] ;
					
					echo "
						<div class='row mt-5'>
							<div class='col-md-2 float-right list-group-item-info'>
								$supplier_id
							</div>
							<div class='col-md-3 float-right list-group-item-warning'>
								$supplier_name
							</div>
							<div class='col-md-2 float-right list-group-item-danger'>
								<a href='supplierDetails.php?id=$supplier_id'>Details</a>
							</div>
							<div class='col-md-2 list-group-item-success'>
								<a href='showProductAdmin.php?id=$supplier_id'>Products</a>
							</div>
							<div class='col-md-3'>
								<a href='deleteSupplier.php?id=$supplier_id' class='btn btn-danger form-control' >Kick Out</a>
							</div>
						</div>
					"; 
				}
			
		

		}else{
			echo "
					<div class='row'>							
						<div class='col my-5 bg-danger'>
							<h2>In order to see the content of this page, you have to be an admin and you have to be logged in.</h2>
						</div>
					</div>
			";
		}
	?>
		 
	</div>

	<!-- Modals for logout-->
	<!-- for admin -->
	<div class="modal" id="logout_admin">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Are you sure !!! You want to log out !!!</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	   			<a href='logoutAdmin.php' class='btn btn-success btn-lg mb-5 ml-5'><strong>YES</strong>
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