<?php 

	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "mercado");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}


	$firstName = $_POST['signup_firstName'] ;
	$lastName = $_POST['signup_lastName'] ;
	$email = $_POST['signup_email'] ;
	$phone = $_POST['signup_phone'] ;
	$address = $_POST['signup_address'] ;
	$user = $_POST['signup_user'] ;
	$pass = $_POST['signup_pass'] ;

	$sql = "INSERT INTO supplier (supplier_firstName , supplier_lastName , supplier_email , supplier_phone , supplier_address , supplier_username , supplier_pass) 
	VALUES ('$firstName' , '$lastName' , '$email' , '$phone' , 
			'$address' , '$user' , MD5('$pass'))" ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body babackground="pictures/random/addNewItemBG.jpg">


	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<div class="container">
		<div class="row">
			<div class="col">
				<?php 
					if (mysqli_query($con , $sql)) {
						echo "
							<h6>Congratulations !!! You are a supplier now !!! In order start uploading products and maintain them please log in to your account.</h6>
						";
					}else{
						echo "
							<h6>Sorry !!! There are some problem while inserting your data. It causes an error. In order to create the account please try again.</h6>
						";
					}
				?>
			</div>			
		</div>
		<div class="row">
			<div class="col">
				<?php 
					if (mysqli_query($con , $sql)) {
						echo "
							<h6>Welcome to our family. Start your business.</h6>
						";
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