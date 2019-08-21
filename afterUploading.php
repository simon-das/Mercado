<?php

// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;



		$supplier_id  = $_POST['supplier_id'] ;
		$product_name = $_POST['product_name'] ;
		$product_price = $_POST['product_price'] ;
		$product_des = $_POST['product_description'] ;
		$product_quantity = $_POST['product_quantity'] ;
		$product_category = $_POST['product_category'] ;

		switch ($product_category) {
			case 'pc':
				$target_dir = "pictures/pcAndLaptop/";
				break;

			case 'laptop':
				$target_dir = "pictures/pcAndLaptop/";
				break;

			case 'mobile':
				$target_dir = "pictures/mobileAndTablet/";
				break;

			case 'tablet':
				$target_dir = "pictures/mobileAndTablet/";
				break;

			case 'tv':
				$target_dir = "pictures/tvAndCamera/";
				break;

			case 'dslr':
				$target_dir = "pictures/tvAndCamera/";
				break;

			case 'watch':
				$target_dir = "pictures/watchAndSunglass/";
				break;

			case 'sunglass':
				$target_dir = "pictures/watchAndSunglass/";
				break;
			
			default:
				$target_dir = "pictures/clothes/";
				break;
		}

		$allChecking = 1 ;


		


		
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
<body background="pictures/random/afterUploadingBG.jpg">

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<?php

	$target_file = '' ;
	if (isset($_POST['upload'])) {
			
		$target_file = $target_dir . basename($_FILES["product_image"]['name']);
		// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$check = getimagesize($_FILES["product_image"]['tmp_name']);
	    $image_width = $check[0];
		$image_height = $check[1];

	    if($check == false) {
	        $allChecking = 2 ;
	    }elseif ($image_height != 561 && $image_width != 1000) {
			$allChecking = 3 ;
		}

		




		if($allChecking == 1){
			if (move_uploaded_file($_FILES["product_image"]['tmp_name'], $target_file)) {



				$insert_pro = "INSERT INTO products (supplier_id, product_name, product_category, product_description, product_image, product_price, product_quantity) VALUES ('$supplier_id', '$product_name', '$product_category', '$product_des', '$target_file', '$product_price', '$product_quantity')" ;



			if (mysqli_query($con , $insert_pro)) {
				echo "<div class='container container_main text-light mt-5'>
					<div class='row'>
						<div class='col'>
							<h1 class='text-center'>Your product is inserted successfully.</h1>
						</div>
					</div>
					<div class='row'>
						<div class='col'>
							<h3 class='text-center'>Go back to your <a href='afterLoginSupplier.php?id=$supplier_id' class='text-danger'>profile</a></h3>
						</div>
					</div>
				</div>";

			}else{
				
				echo "<div class='container container_main text-light mt-5'>
					<div class='row'>
						<div class='col'>
							<h1 class='text-center'>There are some problem with insetion of your data. Please try again.</h1>
						</div>
					</div>
				</div>";

			}

			} else {
	        	echo "<div class='container container_main text-light mt-5'>
					<div class='row'>
						<div class='col'>
							<h1 class='text-center'>Sorry, there was an error uploading your file.</h1>
						</div>
					</div>
				</div>";
	    	}
		}elseif ($allChecking == 2) {
			echo "<div class='container container_main text-light mt-5'>
					<div class='row'>
						<div class='col'>
							<h1 class='text-center'>Your uploaded file is not an image.</h1>
						</div>
					</div>
				</div>";
	 	}else{
			echo "
				<div class='container container_main text-light mt-5'>
					<div class='row'>
						<div class='col'>
							<h1 class='text-center'>The picture height and width isn't matching with the required height and width. Please try again with the required height = 561px & width = 1000px.</h1>
						</div>
					</div>
				</div>
				";
		}
	}

echo "$allChecking";

	?>





	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	


</body>
</html>
