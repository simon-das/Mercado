<?php

	session_start() ;
	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	$product_id = $_GET['id'] ;

	$get_pro = 'SELECT * FROM products where product_id = '.$product_id ;
	$run_pro = mysqli_query($con , $get_pro) ;
	$row_pro = mysqli_fetch_array($run_pro) ;

	$supplier_id = $row_pro['supplier_id'] ;


	$dlt_pro = "DELETE FROM products where product_id = '$product_id'" ;
	if ($con->query($dlt_pro) == TRUE) {
    	header("Location: afterLoginSupplier.php?id=$supplier_id") ;
	} else {
    echo "Error deleting record: " . $con->error;
	}
	
?>