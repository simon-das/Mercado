<?php
	
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}




// fetching pc and laptops
	// col-1
	function getPro1stColPC(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndColPC(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdColPC(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}





// fetching mobile and tablet
	// col-1
	function getPro1stColMobile(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndColMobile(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdColMobile(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}






// fetching tv and dslr
	// col-1
	function getPro1stColTV(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndColTV(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdColTV(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}









// fetching watch and sunglasses
	// col-1
	function getPro1stColWatch(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndColWatch(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdColWatch(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}








// fetching watch and sunglasses
	// col-1
	function getPro1stColCloth(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category = "cloth" ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndColCloth(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category = "cloth" ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdColCloth(){
		global $con ;

		$get_pro = 'SELECT * FROM products where product_category = "cloth" ORDER BY product_uploadTimeAndDate DESC' ;
		$run_pro = mysqli_query($con , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='details.php?id=$product_id'>
							<img src='$product_img' class='img-fluid'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>tk.$product_price</p>	
					</div>

				
			";
			}

			$cnt++ ;
		}
	}






// for filter search
	function getFilteredPro1stCol(){
			global $con ;

			switch ($_GET['filter']) {
				
				case '':
					# code...
					break;
				
				case '1':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}

					break;

				case '2':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '3':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '4':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '5':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '6':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				default:
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
			}


			$run_pro = mysqli_query($con , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 1){
					echo "

						<div class='mt-2'>
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						</div>

					
				";
				}

				$cnt++ ;
			}
		}


		// col-2
		function getFilteredPro2ndCol(){
			global $con ;

			switch ($_GET['filter']) {
				
				case '':
					# code...
					break;
				
				case '1':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}

					break;

				case '2':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '3':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '4':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '5':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '6':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				default:
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
			}

			$run_pro = mysqli_query($con , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 2){
					echo "

						<div class='mt-2'>
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						</div>

					
				";
				}

				$cnt++ ;
			}
		}


		// col-3
		function getFilteredPro3rdCol(){
			global $con ;

			switch ($_GET['filter']) {
				
				case '':
					# code...
					break;
				
				case '1':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price < 10000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}

					break;

				case '2':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 10000 AND 15000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '3':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 15000 AND 20000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '4':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 20000 AND 30000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
				
				case '5':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 30000 AND 40000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				case '6':
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price BETWEEN 40000 AND 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;

				default:
					switch ($_GET['category']) {
						
						case 'pc':
							$get_pro = 'SELECT * FROM products where product_category IN("pc" , "laptop") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'mobile':
							$get_pro = 'SELECT * FROM products where product_category IN("mobile" , "tablet") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'tv':
							$get_pro = 'SELECT * FROM products where product_category IN("tv" , "dslr") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;

						case 'watch':
							$get_pro = 'SELECT * FROM products where product_category IN("watch" , "sunglass") AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
						
						default:
							$get_pro = 'SELECT * FROM products where product_category = "cloth" AND product_price > 50000 ORDER BY product_uploadTimeAndDate DESC' ;
							break;
					}
					
					break;
			}

			$run_pro = mysqli_query($con , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 0){
					echo "

						<div class='mt-2'>
							<a href='details.php?id=$product_id'>
								<img src='$product_img' class='img-fluid'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>tk.$product_price</p>	
						</div>

					
				";
				}

				$cnt++ ;
			}
		}



?>

