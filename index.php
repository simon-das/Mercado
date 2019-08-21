<?php
	
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

	session_start() ;

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


	<!--intro portion-->
	<div class="container my-4">
		<div class="row border boder-primary">
			<!--offers-->
			<div class="col-lg-3 px-0 border bg-dark">
				<div class="">
					<ul class="list-group">
					  <li class="list-group-item list-group-item-dark text-light text-center">
					  	<h1>Products we have</h1>
					  </li>
					  <li class="list-group-item list-group-item-info">A wide variety of pc, laptops and parts</li>
					  <li class="list-group-item list-group-item-warning">A wide range of phones which you want to buy</li>
					  <li class="list-group-item list-group-item-danger">Your desired television and dream camera</li>
					  <li class="list-group-item list-group-item-success">Cool watches and sunglasses of different shapes</li>
					  <li class="list-group-item list-group-item-info">Fashionable clothes for you that suits you</li>

					</ul>
				</div>
			</div>
			<!--slide-->
			<div class="col-lg-6 carousel slide" data-ride="carousel" id="intro">
				<!--indicator-->
				<ul class="carousel-indicators">
					<li data-target="#intro" data-slide-to="0" class="active"></li>
					<li data-target="#intro" data-slide-to="1"></li>
					<li data-target="#intro" data-slide-to="2"></li>
					<li data-target="#intro" data-slide-to="3"></li>
					<li data-target="#intro" data-slide-to="4"></li>
					<li data-target="#intro" data-slide-to="5"></li>
					<li data-target="#intro" data-slide-to="6"></li>
				</ul>
				<!--wrapper-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="pictures/slide/pc.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/laptop.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/phone.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/tv.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/camera.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/clothes.jpg" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="pictures/slide/watch.jpg" class="img-fluid">
					</div>
				</div>
				<!--left and right control-->
				<a href="#intro" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#intro" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			<!--special offers-->
			<div class="col-lg-3 px-0 border bg-dark">
				<div class="">
					<ul class="list-group">
					  <li class="list-group-item list-group-item-dark text-light text-center">
					  	<h1>You should know</h1>
					  </li>
					  <li class="list-group-item list-group-item-info">This is world's largest online shopping site</li>
					  <li class="list-group-item list-group-item-warning">Everyday millions of people buy and sell their product here</li>
					  <li class="list-group-item list-group-item-danger">We have a large number of suppliers</li>
					  <li class="list-group-item list-group-item-success">Suppliers from different countries, different cities</li>
					  <li class="list-group-item list-group-item-info">A great place for your desired products with various prices  </li>

					</ul>
				</div>
			</div>
		</div>
	</div>	


	<!--pc and computer-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h5> <mark> PC & LAPTOP with ACCESSORIES </mark> </h5>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/pcAndLaptop/pcAndLaptop.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllPC.php">SEE ALL</a> </div>
			</div>

			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>

								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>	
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "pc" 
									ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>


	<!--mobile and tablet-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h5> <mark> MOBILE & TABLET with ACCESSORIES </mark> </h5>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/mobileAndTablet/mobileAndTablet.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllMobile.php">SEE ALL</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") 
									ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>



	<!--tv and camera-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h5> <mark> TV & DSLR with ACCESSORIES </mark> </h5>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/tvAndCamera/tvAndCamera.jfif" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllTV.php">SEE ALL</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") 
									ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr")
									ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>



	<!--watch and sunglass-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h5> <mark> WATCHES & SUNGLASSES </mark> </h5>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/watchAndSunglass/watchAndSunglass.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllSunglass.php">SEE ALL</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
		</div>
	</div>




	<!--clothes-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h5> <mark> CLOTHES </mark> </h5>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->	
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="pictures/clothes/clothes.jpg" class="img-fluid mt-5">
				<div class="text-center mt-5"> <a href="seeAllClothes.php">SEE ALL</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth" 
									ORDER BY product_uploadTimeAndDate DESC' ;
 
						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth"
									ORDER BY product_uploadTimeAndDate DESC LIMIT 3,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth"
									ORDER BY product_uploadTimeAndDate DESC LIMIT 1,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth"
									ORDER BY product_uploadTimeAndDate DESC LIMIT 4,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth"
									ORDER BY product_uploadTimeAndDate DESC LIMIT 2,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
				</div>
				<div>
					<?php
						$get_pro = 'SELECT * FROM products where product_category = "cloth"
									ORDER BY product_uploadTimeAndDate DESC LIMIT 5,1' ;

						$run_pro = mysqli_query($con , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						";
					 ?>		
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