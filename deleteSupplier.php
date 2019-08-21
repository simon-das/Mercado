<?php

	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	$supplier_id = $_GET['id'] ;
	$dlt_sup = "DELETE FROM supplier where supplier_id = '$supplier_id'" ;
	$dlt_pro = "DELETE FROM products where supplier_id = '$supplier_id'" ;
	if ($con->query($dlt_sup) == TRUE && $con->query($dlt_pro) == TRUE) {
    	header('Location: afterLoginAdmin.php') ;
	} else {
    echo "Error deleting record: " . $con->error;
	}
	// 
?>