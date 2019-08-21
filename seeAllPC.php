<?php
	
	session_start() ;
 include 'connection/con_start.php' ; 

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

	<!--left filters-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group mt-5">
					<ul class="list-group-item list-group-item-info">
						<li class="list-unstyled">Price range</li>
					</ul>
  					<a href="seeAllPC.php?filter=1&category=pc" class="list-group-item list-group-item-success">less than 10000</a>
  					<a href="seeAllPC.php?filter=2&category=pc" class="list-group-item list-group-item-success">10000-15000</a>
  					<a href="seeAllPC.php?filter=3&category=pc" class="list-group-item list-group-item-success">15000-20000</a>
  					<a href="seeAllPC.php?filter=4&category=pc" class="list-group-item list-group-item-success">20000-30000</a>
  					<a href="seeAllPC.php?filter=5&category=pc" class="list-group-item list-group-item-success">30000-40000</a>
  					<a href="seeAllPC.php?filter=6&category=pc" class="list-group-item list-group-item-success">40000-50000</a>
  					<a href="seeAllPC.php?filter=7&category=pc" class="list-group-item list-group-item-success">more than 50000</a>
				</div>
			</div>


			<!-- content -->
			<?php include 'functions/functions.php' ; ?>
			<!-- 1st column -->
			<div class="col-md-3 content-bg-see-all">

				<?php

				 if (isset($_GET['filter'])) {
				 	$_SESSION['filter'] = $_GET['filter'] ;
				 	$_SESSION['category'] = $_GET['category'] ;
				 	getFilteredPro1stCol() ;
				 }else{
				 	getPro1stColPC() ; 
				 }

				 ?>

			</div>


			<!-- <2nd column -->
			<div class="col-md-3 content-bg-see-all">

				<?php

				 if (isset($_GET['filter'])) {
				 	$_SESSION['filter'] = $_GET['filter'] ;
				 	$_SESSION['category'] = $_GET['category'] ;
				 	getFilteredPro2ndCol() ;
				 }else{
				 	getPro2ndColPC() ; 
				 }

				 ?>

			</div>


			<!-- 3rd column -->
			<div class="col-md-3 content-bg-see-all">

			<?php

				 if (isset($_GET['filter'])) {
				 	$_SESSION['filter'] = $_GET['filter'] ;
				 	$_SESSION['category'] = $_GET['category'] ;
				 	getFilteredPro3rdCol() ;
				 }else{
				 	getPro3rdColPC() ; 
				 }

				 ?>

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
