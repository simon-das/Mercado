<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body background="pictures/random/signupBG.jpg">

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<?php
		if(isset($_POST['sendComplain'])){
			$msg = 'Name : '.$_POST['name']."/n"
				.'Email : '.$_POST['email']."/n"
				.'Phone : '.$_POST['phone']."/n"
				.'Message : '.$_POST['message'] ;
			// $subject = $_POST['subject'] ;
			// mail('mercado@gmail.com', $subject, $msg) ;

			echo "
			<div class='container container_main text-light mt-5'>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>Thank you for contacting with us. You will get a reply soon</h1>
					</div>
				</div>
			</div>";
		}else{
			echo "
			<div class='container container_main text-light mt-5'>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>Sorry !!! There are some problem !!! Please try again.</h1>
					</div>
				</div>
			</div>";
		}

	?>


	<?php include 'footer.php' ; ?>


	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>