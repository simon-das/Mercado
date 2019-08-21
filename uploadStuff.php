<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body background="pictures/random/addNewItemBG.jpg">

	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<div class="container text-light">
		<div class="row mt-2">
			<div class="col">
				<div>
					<h1>Add New Stuff</h1>
					<h4>Fill up the fields to upload the stuff.</h4>
				</div>
				<div>
					<form method="POST" action="afterUploading.php" enctype="multipart/form-data">
						<div class="form-group pt-3">
							<label for="supplier_id">Supplier Id:</label>
							<input type="text" name="supplier_id" id="supplier_id" class="form-control" placeholder="Enter your Id" required>
						</div>
						<div class="form-group">
							<label for="product_name">Product Name:</label>
							<input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter the product name" required>
						</div>
						<div class="form-group">
							<label for="product_category">Product Category:</label>
							<select class="form-control" name="product_category" id="product_category" required>
						        <option value="" disabled selected>Select the category</option>
						        <option>pc</option>
						        <option>laptop</option>
						        <option>mobile</option>
						        <option>tablet</option>
						        <option>tv</option>
						        <option>dslr</option>
						        <option>watch</option>
						        <option>sunglass</option>
						        <option>cloth</option>
						    </select>
						</div>
						<div class="form-group">
							<label for="product_image">Select the image: (height=561px & width=1000px)</label>
							<input type="file" name="product_image" id="product_image" class="form-control" placeholder="Enter the image path" required></input>
						</div>
						<div class="form-group">
							<label for="product_price">Product Price:</label>
							<input type="Number" name="product_price" id="product_price" class="form-control" placeholder="Enter the price" required>
						</div>
						<div class="form-group">
							<label for="product_quantity">Product Quantity:</label>
							<input name="product_quantity" id="product_quantity" class="form-control" placeholder="Quantity" required></input>
						</div>
						<div class="form-group">
							<label for="product_description">Product Description:</label>
							<textarea name="product_description" id="product_description" class="form-control" placeholder="Write the description here" required></textarea>
						</div>
						<div class="form-group pt-2">
							<input type="submit" class="form-control btn btn-success" name="upload" id="upload" value="Upload">
						</div>
					</form>
				</div>
			</div>
			<div class="col my-auto">
				<img src="pictures/random/addNewItem.jpg" class="img-fluid">
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